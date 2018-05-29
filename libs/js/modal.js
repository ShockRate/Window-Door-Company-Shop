

$('.myDetailsBtn').on('click',function(){
    $("#myDetailsModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[2].textContent);
    $("#txtlname").val($(this).closest('tr').children()[2].textContent);
    $("#txtemail").val($(this).closest('tr').children()[4].textContent); 
    $("#imgDetail").html($(this).closest('tr').children()[7].innerHTML);  
    var imgdata = 
    $("#txtlname").val(imgdata);
    $("#imgDetail2").attr('src',imgdata);
    alert($(this).closest('tr').children()[7].find('td img').attr('src'));
});



function WhatToDo() {
   var rButtons = document.getElementsByName('productType');
   var rImageName = '';
for (var i = 0; i < rButtons.length; i++) {
    if (rButtons[i].checked) { 
        // alert(rButtons[i].value);

        rImageName = rImageName.concat(rButtons[i].value);
    }
    document.getElementById('productImage').src='images/'+ rImageName +'.jpg';
    document.getElementById('productName').textContent= rImageName;
    }
}

$("#clearTable").click(function(){
        $.post("emptySession.php",function(data){
        // if you want you can show some message to user here
     });
        location.reload();
});

// $("#downloadXlsx").click(function(){
//         $.post("download.php.php",function(data){
//         // if you want you can show some message to user here
//      });
//         location.reload();
// });
