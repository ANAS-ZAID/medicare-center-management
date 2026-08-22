$(document).ready(function() {

    $(".show-password").click(function(){

     $(this).toggleClass("fa-eye fa-eye-slash");
     if($(this).hasClass("fa-eye")){

        $(this).parent().find("input").attr("type","password");
     } else{
      

        $(this).parent().find("input").attr("type","text");
     }

    })
   $('card .card-footer a').each(function(){
      if ($(this).data("status")==1) {
         $(this).addClass("active");
         
      }

   })
   $('.mainBody .sideBar ul li a').each(function(){
      let href= $(this).attr("href").split("?")[0]
      let url=window.location.pathname.split("/")[6]
      if (url==href) {
         $(this).addClass("active");
         $(this).find("p").addClass("activeLine");
         
      }else{
         $(this).removeClass("active");
         $(this).find("p").removeClass("activeLine");
      }

   })
   $('.panel .panel-head i').click(function () {
      $(this).toggleClass('fa-minus fa-plus')
      $(this).parent().next().slideToggle(300)
  }) 
    
})
