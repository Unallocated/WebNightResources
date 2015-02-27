
$(document).ready(function() {

    $('#calculator_submit').click(function(){
        var int_one = parseInt($('#field_1').val());
        var int_two = parseInt($('#field_2').val());

        $('#answer').append(int_one + int_two)
            .append('<br />');

    });

    $('form').submit(function(e) {
        e.preventDefault();
        return false;
    });

    $('#color_changer').click(function(e) {

        $('#answer').css('color', '#FF0000');

        e.preventDefault();
        return false;
    });

    var answer_container = $('div')
        .attr('id', 'answer')

    $(document).write(answer_container);
});