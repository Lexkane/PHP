
var searchUrl = document.getElementById("data").value;
var taskList = document.getElementById("searchresults");

jQuery(function($) {

    $('.searchBtn').click(() => {
        $("div.content").empty();
        let searchTerm = $('.searchTxt').val();
        let url = "https://en.wikipedia.org/w/api.php?action=opensearch&search="+ searchTerm +"&format=json&callback=?";
        
        $.ajax({
            type: "GET",
            url: url,
            async: false,
            data: "data",
            dataType: "json",
        	success: (data, status, jqXHR) => {
        		console.log(data);
        		$('.content').html();
        		for(let i = 0;i < data[1].length; i++) {
                    $('.content').prepend("<div><div class='content-items'><a href="+data[3][i]+"><h2>" + data[1][i]+ "</h2>" + "<p>" + data[2][i] + "</p></a></div></div>");
                }
                if ($('.content').html() == '') {
                    $('.errorBox').css({'display': 'block'});
                }
               });
               error : (errorMsg) => {
                alert('Error, wiki API doesnt work');
            }
     });  

});


function dowkiki() {
var wikiURL = "https://en.wikipedia.org/w/api.php";
wikiURL += '?' + $.param({
    'action' : 'opensearch',
    'search' : 'search=',
    'prop'  : 'revisions',
    'rvprop' : 'content',
    'format' : 'json',
    'limit' : 10
});

function wikiAjax(searchUrl){
return $.ajax( {
    url: searchUrl,
    jsonp:"callback",
    dataType:'jsonp',
    success: function(data) {
        var html =  '<div class="row" id="data'+counter+'" style="margin-bottom:15px;">'+
    '<div class="col-md-6 col-sm-12 col-xs-12">'+
      '<input type="text" class="form-control" value="'+ inputdata+ '" disabled>'+
    '</div>' +    
  '</div>'; 
  document.getElementById('searchresults').insertAdjacentHTML('beforeend', html);
    }
} );
}
