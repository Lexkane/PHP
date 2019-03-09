$(function($) {
    $('#searchbutton').click(() => {
        $("#content").empty();
        var searchTerm =($('#searchrequest').val());
        var url = "https://en.wikipedia.org/w/api.php?action=opensearch&search="+ searchTerm +"&format=json&callback=?";
          $.ajax({
            type: "GET",
            url: url,
            async: false,
            data: "data",
            dataType: 'jsonp',
            success: (data, status, jqXHR) => {
            $('#content').html();
            for(let i = 0;i < data[1].length; i++) {
                    $('#content').prepend("<div><div class='content-items'><a href="+data[3][i]+"><h2>" + data[1][i]+ "</h2>" + "<p>" + data[2][i] + "</p></a></div></div>"+"<br>");
                }
                if ($('#content').html() == '') {
                    $('.errorBox').css({'display': 'block'});
                }
                else {
                    $('.errorBox').css({'display': 'none'});
                }
            },
            error : (errorMsg) => {
                alert('Wiki API isnt  currently working');
            }        
        });
    });
    $('#searchrequest').keypress((e) => { 
        if(e.which == 13) {
            $('#searchbutton').click();
        }
    });
});  
