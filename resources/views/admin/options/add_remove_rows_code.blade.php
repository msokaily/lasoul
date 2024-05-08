<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function() {
    var add_push_class = 'add-remove-rows';
    $add_push_container = $('.' + add_push_class);
    $add_push_rm_btn = $('<div style="display: flex; align-items: flex-end;"" class="col-md-1 add-push-rm-btn">\
        <button type="button" class="btn btn-danger">X</button>\
    </div>');
    var sort_icon = '<span class="ui-icon ui-icon-arrowthick-2-n-s" style="position: absolute; top: 10px; margin-inline-start: -15px; cursor: n-resize;"></span>';

    // Function to handle the click event of the add button
    function handleAddButtonClick($container) {
        $add_push_add_btn = $('<div style="display: flex; justify-content: center;" class="col-md-3 col-md-offset-2 mt-10">\
            <button type="button" class="btn btn-success mh-10 add-push-add-btn" style="margin-inline-start: 150px;">+</button>\
        </div>');
        var $push_item = $container.find(' > div:first-child').clone();
        $push_item.find('input:not([type="button"]):not([type="submit"])').val('');
        $push_item.find('select').val('');
        $push_item.find('checkbox').val('');
        $push_item.append($add_push_rm_btn.clone(true));
        // $push_item.prepend(sort_icon);
        $push_item.hide();
        $add_push_add_btn.find('button').click(function() {
            var $temp_item = $push_item.clone(true);
            $temp_item.find('select.select2_').select2();
            $temp_item.find('.add-push-rm-btn').click(function() {
                $(this).closest('.add-push-row').slideUp('fast', function() {
                    $(this).remove();
                });
            });

            // Check if the row is a new record (does not have emp_id)
            if (!$temp_item.find('input[name="employees[emp_id][]"]').val()) {
                // If it's a new record, hide the e-signature link and the emp_id hidden input
                $temp_item.find('a').hide();
                $temp_item.find('input[name="employees[emp_id][]"]').remove();
            }

            $container.append($temp_item);
            $temp_item.slideDown('fast');
            $('.remove_all_ing_d').remove();

            // Initialize select2 for the newly added row
            $temp_item.find('select').select2();

            // Remove unwanted span element
            // $temp_item.find('span[data-select2-id^="select2-data-11"]').remove();
            try {
                $temp_item.find('span.select2-container')[1].remove();
            }catch(e){}
        });
        $container.after($add_push_add_btn.clone(true));
        // $container.children().append($add_push_rm_btn.clone(true)).prepend(sort_icon);
        $container.children().append($add_push_rm_btn.clone(true));
        $container.children().find('select.select2_').select2();
        if ($container.children().length > 1) {
            $container.children().find(' > .add-push-rm-btn').show();
        } else {
            $container.children().find(' > .add-push-rm-btn').hide();
        }
        if ($container.hasClass('sortable')) {
            $container.sortable();
        }
    }

    // Handle the add button click event for the focal points section
    handleAddButtonClick($('.add-remove-rows:eq(0)'));

    // Handle the add button click event for the bank accounts section
    handleAddButtonClick($('.add-remove-rows:eq(1)'));

    // Handle the add button click event for the employees section
    handleAddButtonClick($('.add-remove-rows:eq(2)'));
});

$(document).on('click', '.add-push-rm-btn button', function() {
    $(this).closest('.add-push-row').slideUp('fast', function() {
        $(this).remove();
    });
});


</script>