<?php
namespace App\Imports;

use App\Models\IdentityTypes;
use App\Models\Location;
use App\Models\User;
use App\Models\UserDetails;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class UsersImport implements ToModel, WithHeadingRow
{

    protected $company_id;

    public function __construct($company_id)
    {
        $this->company_id = $company_id;
    }

    public function model(array $row)
    {
        if(isset($row['first_name_en']) AND $row['first_name_en'] != Null){
            // $user = User::where('email', $row['email'])->where('company_id',$this->company_id)->first();
            $id_number = $row['id_number'];


            $user = User::where('id_number', $id_number)->where('company_id', $this->company_id)->first();
            
            // Import data into the 'users' table
    
            if($user == Null){
                $user = new User();
            }
    
            $user->id_number = $row['id_number'];

            $id_type = IdentityTypes::where('title->en', $row['id_type'])->first();
            $user->id_type = $id_type->id;
            
            $user->setTranslations('first_name', [
                'en' => $row['first_name_en'],
                'ar' => $row['first_name_ar'],
            ]);
        
            $user->setTranslations('father_name', [
                'en' => $row['father_name_en'],
                'ar' => $row['father_name_ar'],
            ]);
        
            $user->setTranslations('last_name', [
                'en' => $row['last_name_en'],
                'ar' => $row['last_name_ar'],
            ]);   

            $user->status = 1;
            $user->phone = $row['phone'];
            $user->whatsapp = $row['whatsapp'];
            $user->email = $row['email'];
            $user->username = $row['username'];
            $user->password = bcrypt($row['password']);
            $user->company_id = $this->company_id;
            $user->user_permission = 'User';
            $user->user_type = 'Employee';
            $user->category = $row['category'];
            $user->save();
    
            try{
                $dateOfBirth = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_of_birth']));
                $dob = $dateOfBirth->format('Y-m-d');
            }catch(\Exception $e){
                $dob = Carbon::now()->format('Y-m-d');
            }  

            $userDetails = UserDetails::where('user_id',$user->id)->first();
            if($userDetails == Null){
                $userDetails = new UserDetails();
            }
            $userDetails->date_of_birth = $dob;
            $userDetails->user_id = $user->id;
            $userDetails->id_number = $row['id_number'];
            $userDetails->gender = $row['gender'];
            $userDetails->marital_status = $row['marital_status'];
            $userDetails->breadwinner = $row['breadwinner'];
            $userDetails->residence_status = $row['residence_status'];
            $userDetails->pwd = $row['pwd'];
            $userDetails->first_wife_name = $row['first_wife_name'];
            $userDetails->father_wife_name = $row['father_wife_name'];
            $userDetails->last_wife_name = $row['last_wife_name'];
            $userDetails->wife_id_number = $row['wife_id_number'];
            $userDetails->male_0_5 = $row['male_0_5'];
            $userDetails->female_0_5 = $row['female_0_5'];
            $userDetails->male_6_12 = $row['male_6_12'];
            $userDetails->female_6_12 = $row['female_6_12'];
            $userDetails->male_13_17 = $row['male_13_17'];
            $userDetails->female_13_17 = $row['female_13_17'];
            $userDetails->male_18_50 = $row['male_18_50'];
            $userDetails->female_18_50 = $row['female_18_50'];
            $userDetails->male_above_50 = $row['male_above_50'];
            $userDetails->female_above_50 = $row['female_above_50'];
            $userDetails->total_family_members = $row['total_family_members'];
            $governorate = Location::where('name->en', $row['governorate'])->where('type', 'governorate')->first();
            $district = Location::where('name->en', $row['district'])->where('type', 'district')->first();
            $subdistrict = Location::where('name->en', $row['subdistrict'])->where('type', 'subdistrict')->first();
            $community = Location::where('name->en', $row['community'])->where('type', 'community')->first();
            if(isset( $governorate->id)){
                $userDetails->governorate = $governorate->id;
                $userDetails->district = $district->id;
                $userDetails->subdistrict = $subdistrict->id;
                $userDetails->community = $community->id;
            }
            
            $userDetails->camp = $row['camp'];
            $userDetails->details_address = $row['details_address'];
            $userDetails->note = $row['note'];
            $userDetails->save();
            
    
            // Return the user model
            return $user;
        }
    }
}