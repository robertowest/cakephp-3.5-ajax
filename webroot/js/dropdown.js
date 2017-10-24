$(function() 
{
    $('#countryField').change(function() 
    {
        var targeturl = $(this).attr('rel');
        var country_id = $(this).val();

        $.ajax({
            type: 'get',
            url: targeturl + '&id=' + country_id,
            beforeSend: function(xhr) 
            {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function(response) 
            {
                if (response.data) 
                {
                    $('#stateField').html(response.data.states);
                }
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
});