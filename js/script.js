function shorten(url,tag){
  $(document).ready(function(){
    $.ajax({
    type: "GET",
    url: "./_/shorten.php?url="+url+"&tag="+tag,
    dataType: "xml",
    success: getTag
    });
  });
}

function getTag(xml){
    theTag = $(xml).find("Tag").text();
    flag = $(xml).find("Used").text();
    if (flag == 0)
        $("#result").html("Your shortened link is: <b><a href=\""+document.URL+theTag+"\">"+document.URL+theTag+"</a></b>");
    else
        $("#result").html("Sorry, that tag has been used already. Try another one.");
}
