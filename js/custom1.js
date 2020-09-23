  "use strict";
$('#bs_datepicker_component_container').datepicker({
  
     format:"yyyy-m-d"

});

  $(".getbars1").on("click",function(){


     
   var wid= $("body").width(); 
 
      if(wid >=1170){

          $(".sidebar").toggleClass("getwidth");
      }else{
       $("body").toggleClass("ls-closed");    
          
      } 
   });


    $(".popup1").on("click",function(){
       
       $(this).fadeOut(400);
       
   });
    $(".popup2").on("click",function(){
       
       $(this).fadeOut(400);
       
   });

   $(".popup1 .inner").click(function(e){
       
    e.stopPropagation();
       
   });
   $(".popup2 .inner2").click(function(e){
       
    e.stopPropagation();
       
   });


  $("#searshcustomer").on("keyup",function(){
        $(".popup1").fadeIn(500);
        
        if(inp !== ""){
  var inp = $("#searshcustomer").val();  
     $.post("searshvalue.php",{inp:inp},function(data){

      $("#serresalet").html(data); 
 
    });
      
        }  
  });
  $(".del33").on("click",function(){
      
      return confirm("هل انت متأكد");
  });
  $(".deluser").on("click",function(){
      
      return confirm("هل انت متأكد");
  });

  $(".price").on("keyup",function(){
      
 $(".total").val($(this).val() * $(".count").val());  

      
  });
  $(".count").on("keyup",function(){
      
   $(".total").val($(this).val() * $(".price").val());  
      
      
  });
  
  
  
$(".session").delay(5000).fadeOut();
var precent =  $(".precent");

  precent.on("keyup",function(){
       
var sub = parseFloat($(".proprice").val()) - parseFloat($(".pay").val()) ;


 var total = sub+ parseFloat(precent.val() * sub / 100);

   $(".prem").val(total);  
   
   });

  $(".limat").on("keyup",function(){
       
var  reslt = Math.round(parseFloat($(".prem").val()) / $(".limat").val()) ;

  $(".manthpay").val(reslt);  
   
   });
$(".addcustoer").on('submit',(function(ex) {
ex.preventDefault();
$("#msg3").empty();
$.ajax({
url: "ajax/addmember.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,      
cache: false,           
processData:false,       
success: function(data)   
{
$("#msg3").html(data);

}
});
}));
////////////////////////////////////////////////////////////////////////////////////////////
  $("#addprem").on('submit',(function(ex) {
ex.preventDefault();
$("#msg3").empty();
$.ajax({
url: "ajax/addprem.php", 
type: "POST",             
data: new FormData(this), 
contentType: false,    
cache: false,          
processData:false,      
success: function(data)  
{
 
$("#msg3").html(data);
//$(".addcustoer").trigger("reset");
}
});
}));


setInterval(function(){
    
  $.post("ajax/loadcustor.php",function(data){
$(".loadeuserdata").html(data);

  });  
    
},700);
///////////////////////////////////////////////////////////////


$("#editmem").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/updatecustomer2.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){
    
   $("#msgcon").html(feedback);   

  

       }
      
  });
  });
  ////////////////////////////////////////////////////////////////////////////  
///////////////////////////////////////////////////////////////


$("#serc").on("submit",function(){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/showlate.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){
    
  $(".msgser").html(feedback);   
//alert(feedback);
  

       }
      
  });
  });
  ////////////////////////////////////////////////////////////////////////////  
   $(".storseal").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/addstorseal.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){
 
  $("#msg99").html(feedback);   

  

       }
      
  });
 
});
 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".storby").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/addstorby.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){
 
  $("#msg9").html(feedback);   

  

       }
      
  });
 
});

  ////////////////////////////////////////////////////////////////////////////  
   $("#login5").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/sendinfo.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

 $("#masge22").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".addmember").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/addmemberpre.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

 $(".msg110").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $("#editprem").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/editprem.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){
$("#msg30").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////

  ////////////////////////////////////////////////////////////////////////////  
   $(".editstorseal").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/updatestorseal.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){


$("#msg100").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".editstorby").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/upstorby.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#msg1001").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $("#uppass").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/uppass.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$(".msg88").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".upemailp").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/upemail.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$(".msg89").html(feedback);   

  

       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".upimg").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/upimg.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$(".msg11").html(feedback);   



       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".adddept").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/adddept.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#msg080").html(feedback);   



       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".editdept").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/updatedept.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#msg080").html(feedback);   



       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $(".sendemail").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/sendemail.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#msg3").html(feedback);   



       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////  
   $("#forgetp").on("submit",function(event){
    
  event.preventDefault();
  $.ajax({
      
      url:"ajax/upforgetpass.php",
       type:"post",
       data: new FormData(this),
       contentType:false,
       cache:false,
       processData:false,
       success:function(feedback){

$("#masgef").html(feedback);   



       }
      
  });
 
});

  

 //////////////////////////////////////////////////////////////
//  ////////////////////////////////////////////////////////////////////////////  
//   $(".updatepremmanthnew").on("submit",function(event){
//    
//  event.preventDefault();
//  $.ajax({
//      
//      url:"ajax/updatepremmanth.php",
//       type:"post",
//       data: new FormData(this),
//       contentType:false,
//       cache:false,
//       processData:false,
//       success:function(feedback){
//
//$("#msg333").html(feedback); 
//
//
//
//       }
//      
//  });
// 
//});
//
//  
//
// //////////////////////////////////////////////////////////////
 
 setInterval(function(){
     
       $(".load11").load("ajax/loadprofile.php");   
     
 },200);
    
              

     
     

  
/////////////////////////////////////////////////////////////
 //////////////////////////////////////////////////////////////
 
 setInterval(function(){
     
       $(".not").load("getnotv.php");   
     
 },2000);
    
              

     
     

  
/////////////////////////////////////////////////////////////
 //////////////////////////////////////////////////////////////
 
 setInterval(function(){
    
               $(".loadnot").load("getmsgnot.php");   
    
 },2000);
    
              

   
     

  
/////////////////////////////////////////////////////////////
 //////////////////////////////////////////////////////////////

 setInterval(function(){
     
       $(".getnot").on("click",function(){
     
         $(".not").load("upnov.php");   
     
     
 });
           
   
     
 },2000);
    
              

     
     

  
/////////////////////////////////////////////////////////////

