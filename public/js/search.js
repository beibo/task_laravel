
var timer;
function up(){
  timer=setTimeout(function(){},500);
  var keywords=$("search").val();
  if(keywords.length>0){
    $.post("http://localhost/executeSearch",[keywords:keywords],function(markup){

      $('search_results').html(markup);

    });

  }


}
function down(){
clearTimeout(timer);
}
