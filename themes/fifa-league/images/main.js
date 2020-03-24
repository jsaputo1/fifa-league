$(function() {
  console.log("working");

  $(function() {
    $("#groups").tablesorter({
      sortList: [[3, 1]]
    });
  });

  $(function() {
    $("#groups-b").tablesorter({
      sortList: [[3, 1]]
    });
  });

  // $(window).scroll(function() {
  //   // this will work when your window scrolled.
  //   var height = $(window).scrollTop(); //getting the scrolling height of window
  //   if (height > 100) {
  //     $("header").css({ position: "fixed" });
  //   } else {
  //     $("header").css({ position: "relative" })
  //     ;
  //   }
  // });

  // let ga = $(".ga");
  // let gf = $("gf");
  // console.log(typeof ga);
  // $(".gd").append(ga + gd);
});
