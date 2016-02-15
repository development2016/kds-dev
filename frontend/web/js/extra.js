$(function(){

      $(".people_listview").hide();
      $( window ).resize(function() {
        if($( window ).width() < 500) {
          $(".people_gridview").hide();
          $(".people_listview").show();

        } else {
         $(".people_gridview").show();
          $(".people_listview").hide();
        }
      });


      $("#barchart").hide();
      $( window ).resize(function() {
        if($( window ).width() < 500) {
            $("#mapschart").hide();
            $("#barchart").show();

        } else {
          $("#mapschart").show();
          $("#barchart").hide();
        }
      });

      var windowWidth = $(window).width();
          $(window).resize(function() {
            if(windowWidth != $(window).width()){
          location.reload();
          return;
          }
      });


});