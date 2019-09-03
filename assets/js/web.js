$(function(){

    load_data();  
    function load_data(){  
         $.ajax({   
              url:"json.php",  
              method:"POST",  
              data:{action:'get_data'},  
              success:function(data){
                   $('#product').html(data);
              }
         });  
 }  
 $("#product").change(function(){
var category = $('#product').val();
  
 
  $.ajax({   
       url:"json.php",  
       method:"POST",  
       data:{action:'get_product', category:category},  
       success:function(data){
          $('#content').html(data);
      
       }
  });  

});
  
  });
