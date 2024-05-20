<?php

use Carbon\Carbon;
use App\Models\Content;
use App\Models\Settings;

function can($permission)
{
    $user = '';

    if (!auth()->check()) {
        return redirect('admin/login');
    } else {
        $user = auth()->user();
    }
}

function route_($name, $params = [])
{
    return str_replace(env('SITE_TWO'), env('SITE_ONE'), route($name, $params));
}

function isAdmin()
{
    if (auth()->check() && auth()->user()->role == 'Admin') {
        return true;
    }
    return false;
}

function isCompany()
{
    if (auth()->check() && auth()->user()->role == 'Beneficiary') {
        return true;
    }
    return false;
}

function admin_assets($dir)
{
    return asset('/admin_assets/assets/' . $dir);
}


function home_assets($dir)
{
    return asset('/' . $dir);
}


function getLocale()
{
    return app()->getLocale();
}


function random_number($digits)
{
    return str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
}

function get_percentage($total, $number)
{
    if ($total > 0) {
        return round($number / ($total / 100), 2);
    } else {
        return 0;
    }
}

function storage_dir($path = null)
{
    return rtrim(app()->basePath('storage/' . $path), '/');
}

if (!function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool    $secure
     * @return string
     */
    function asset($path, $secure = null)
    {
        return app('url')->asset("public/" . $path, $secure);
    }
}


function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|ios|mobi|palm|pad|iPad|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function dropdown_direction($value)
{
    if (getlocale() == 'ar') {
        if (str_contains($value, "bottom")) {
            if ($value == "bottom-end") {
                return "bottom-start";
            } else {
                return "bottom-end";
            }
        }
        if (str_contains($value, "top")) {
            if ($value == "top-start") {
                return "top-end";
            } else {
                return "top-start";
            }
        }
    } else {
        return $value;
    }
}

function settings($key)
{
    try {
        return Settings::first()->{$key};
    } catch (\Throwable $th) {
        return '';
    }
}

function addZeros($num)
{
    return sprintf("%06d", $num);
}

function truncateString($text, $maxLength = 300, $append = '...')
{
    $text = html_entity_decode(strip_tags($text));

    if (strlen($text) <= $maxLength) {
        return $text;
    } else {
        return substr($text, 0, $maxLength) . $append;
    }
}

function calcProductSum($item)
{
    $days = (Carbon::parse($item->end_date)->diffInDays(Carbon::parse($item->start_date)) + 1);
    $sum = 0;
    $sum = $item->price * $days;
    foreach ($item->options as $id => $one) {
        $sum += $one->option_duration_id ? (float)$one['price'] : (float)$one['price'] * $days;
    }
    return $sum;
}

function price($item, $price_field)
{
    if ($item->{$price_field}) {
        return $item->{$price_field};
    } else {
        return $item->price;
    }
}

function orderDays($item)
{
    return (Carbon::parse($item->end_date)->diffInDays(Carbon::parse($item->start_date)) + 1);
}

function content_get($content_name, $field_name = null, $default = null)
{
    $item = Content::where('name', $content_name)->first();
    if ($item) {
        if ($field_name) {
            try {
                $value = json_decode($item->value);
                if (isset($value->{$field_name})) {
                    if ($value->{$field_name}) {
                        return $value->{$field_name};
                    }
                }
                return $default;
            } catch (\Throwable $th) {
                return $default;
            }
        }
        if ($item->type == 'images') {
            return $item->value_url;
        }
        if ($content_name == 'main_top_menu_link_story') {
            dd($item->value ?? $default);
        }
        return $item->value ?? $default;
    } else {
        return $default;
    }
}
