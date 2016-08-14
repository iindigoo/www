$(document).ready(function() {
        
    $.ajax({
        type: 'POST',
        url: url + 'tickets/getCredits',
    })
    .done(function(data) {
        tickets = $.parseJSON(data);
       $('#ticketsValue').html(tickets.toString()); 
    });

    $('#button').click(function() {
        $.ajax({
            type: 'POST',
            url: url + 'tickets/addcredits',
        })
        .done(function(data) {
            tickets = $.parseJSON(data);
            if (!(Number.isInteger(tickets))) {
               $( "#warning" ).prepend("<div class=\"alert alert-danger\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.</div>"); 
            } else {
                $('#ticketsValue').html(tickets.toString());
            } 
           
        });
    });
});
    function move() {
        document.getElementById("move_me").style.right = '<?php echo $random;?>%;'
    }