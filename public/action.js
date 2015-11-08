$(document).ready(function(){
  $('#btn_login').click(function(){   
    
	$('#pesan_login').html("<img src='assets/img/loading.gif'>");
	
    $.ajax({
      url: 'login',
      type: "post",
      data: {'u':$('#u').val(),'p':$('#p').val(),'_token': $('input[name=_token]').val()},
      success: function(data){
	  	
		data=data.trim();
			//alert(data);
			arr=data.split("|");
			
			//alert(arr[0].trim());
			if(arr[0]==1) 
			{
			
				window.location.replace(arr[1]);
			}
			
			else if(arr[0]==0) 
			{
				
				
				$("#pesan_login").html("username atau password salah, atau login tidak aktif.<br>" );	
				
				
			}
		      }
    });      
  }); 
});
