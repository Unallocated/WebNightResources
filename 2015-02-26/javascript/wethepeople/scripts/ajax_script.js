
$(document).ready(function() {

    $('#trigger').click(function(e) {

        $.ajax({
            dataType: 'json',
            url: 'petitions.json',
            success: function(data) {
                console.log(data['results']);
                $.each(data['results'], function(index, value) {

                    $('#data_display').append(value['title'] + '<br /><br /><hr />');
                });
            },
            crossDomain: true
        });

        e.preventDefault();
        return false;
    });

});