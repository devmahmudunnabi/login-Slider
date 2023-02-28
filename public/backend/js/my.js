jQuery(document).ready(function(){
    jQuery("#formData").on("submit",function(e){
        e.preventDefault();
        var data =new FormData(this);       
        $.ajax({
            url:"/slider/imageStore",
            type:"POST",
            dataType:"JSON",
            data:data,
            contentType:false,
            processData:false,
            success:function(data){
               data(save);
            }
        });
    });
});