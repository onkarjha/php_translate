  $(document).ready(function() {
    $("a").click(function(e) {
     e.preventDefault();
     var lang=$("body").attr('title');
     var link=$(this).attr('href');
   
        window.location.href=link+'?language='+lang;
    });

  });
      function set_language(){
        var language=jQuery('#language').val();

        var host=window.location.origin+window.location.pathname;
        window.location.href=host+'?language='+language;
      }