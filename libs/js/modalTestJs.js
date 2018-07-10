// $(document).ready(function(){
//     $(".img-product").click(function(){
//         var imgsrc = $(this).closest('tr').children()[6].getElementsByTagName("img")[0].getAttributeNode("src").value;
    
//         alert(imgsrc+" "+ $(this).closest('tr').children()[2].textContent);
       
//     });
// });

$('.myBtn').on('click',function(){
     $("#myTestModal").modal("show");
    });

//OPEN DETAILS MODAL
$('.myDetailsBtn').on('click',function(){

    var imgsrc = $(this).closest('tr').children()[6].getElementsByTagName("img")[0].getAttributeNode("src").value; 
    var index  = $(this).closest('tr').children()[0].textContent;
   

    $("#type").html($(this).closest('tr').children()[2].textContent);
    $("#pieces").val($(this).closest('tr').children()[3].textContent);
    $("#detailsWidthAndHeight").val($(this).closest('tr').children()[4].textContent); 
      
    var imgsrc = $(this).closest('tr').children()[6].getElementsByTagName("img")[0].getAttributeNode("src").value;        
    $('#imgDetail').attr('src', imgsrc);

    $("#windowIndex").val($(this).closest('tr').children()[0].textContent);
    $("#profiles").val($(this).closest('tr').children()[8].textContent);
    $("#shutters").val($(this).closest('tr').children()[9].textContent);
    $("#screens").val($(this).closest('tr').children()[10].textContent);
    $("textarea#detailsNotes").val($(this).closest('tr').children()[12].textContent);

     $.ajax({
        type: 'POST',
        url: 'inc/getDetails.php',
        data: { windowIndex: index},
        success: function(response) {
            var result = $.parseJSON(response);
            
            $("#detailsWidth").val(result['width']);
            $("#detailsHeight").val(result['height']);
            $("#detailsClearWidth").val(result['clearwidth']);
            $("#detailsClearHeight").val(result['clearheight']);
            $("#series").val(result['clearheight']);
            $('#dimensionsSet').html(result['setHtml']);
        }
    });
   
      $("#itemDetailsModal").modal("show");
});


//ΕΝΗΜΕΡΩΣΗ ΠΑΡΑΓΓΕΛΙΑΣ
$('#updateOrder').click(function() {   
    var valIndex = $('#windowIndex').val();
    var valShutters = $('#shutters').val();
    var valScreens = $('#screens').val();
    var valProfiles = $('#profiles').val();
    var valNotes = $('#detailsNotes').val();
    var valPieces = $('#pieces').val();

    var valWidth = $('#detailsWidth').val();
    var valHeight = $('#detailsHeight').val();
    var valClearWidth = $('#detailsClearWidth').val();
    var valClearHeight = $('#detailsClearHeight').val();

    var valdimCase1 = $('#dimCase1').val();
    var valdimCase2 = $('#dimCase2').val();   
    var valdimCase3 = $('#dimCase3').val();
    var valdimCase4 = $('#dimCase4').val();
    var valdimCase5 = $('#dimCase5').val();   
    var valdimUp = $('#dimUp').val();
    var valdimMiddle = $('#dimMiddle').val();
    
    var valdimWidth = (parseInt(valdimCase1)||0)+(parseInt(valdimCase2)||0)+(parseInt(valdimCase3)||0)+(parseInt(valdimCase4)||0)+(parseInt(valdimCase5)||0);
    var valdimHeight = (parseInt(valdimUp)||0)+(parseInt(valdimMiddle)||0);

   if (valdimWidth > valClearWidth) {
        alert("ΛΑΝΘΑΣΜΕΝΑ ΦΑΡΔΗ");     
   } else if(valdimHeight > valClearHeight) {
        alert("ΛΑΝΘΑΣΜΕΝΑ ΥΨΗ"); 
   } else {
    $.ajax({
        type: 'POST',
        url: 'inc/updateDetails.php',
        data: { windowIndex: valIndex, 
                shutters: valShutters, 
                screens: valScreens, 
                profiles: valProfiles, 
                detailsNotes: valNotes, 
                pieces: valPieces, 
                width: valWidth,
                height: valHeight,
                clearWidth: valClearWidth,
                clearHeight: valClearHeight,               
                dimCase1: valdimCase1, 
                dimCase2: valdimCase2,
                dimCase3: valdimCase3,
                dimCase4: valdimCase4,
                dimCase5: valdimCase5,
                dimUp: valdimUp, 
                dimMiddle: valdimMiddle 
                
               },
        success: function(response) {
            alert("ΣΩΣΤΗ ΕΝΗΜΕΡΩΣΗ");
            $("#t01 tr:eq(valIndex) td:eq(10)").val("testing...");
            $('#result1').val(valdimWidth);
            $('#result2').val(valdimHeight);
            //location.reload();
            
        }
    });
   }
    
 
 

});   


function WhatToDo() {
   var rButtons = document.getElementsByName('productType');
   var rType = document.getElementsByName('productRadioName');
   var rProductClass = document.getElementsByName('productRadioClass');
   var rImageName = '';
   var rName = '';
   var rClass = '';
    for (var i = 0; i < rButtons.length; i++) {
    if (rButtons[i].checked) { 
        // alert(rButtons[i].value);

        rImageName = rImageName.concat(rButtons[i].value);
        rName = rName.concat(rType[i].textContent);
        rClass = rClass.concat(rProductClass[i].textContent);
    }
    //document.getElementById('productImage').src='images/'+ rImageName +'.jpg';
    document.getElementById('productLabel').innerHTML= rName;
    document.getElementById('productImage').setAttribute("src", 'images/'+ rImageName +'.jpg');
    document.getElementById('productName').setAttribute("value", rName);
    document.getElementById('productClass').setAttribute("value", rClass);
    }
    
}

// DELETE WINDOW
$('.deleteBtn').on('click',function(){
    var index  = $(this).closest('tr').children()[0].textContent;
    var name  = $(this).closest('tr').children()[2].textContent;
    if(confirm('ΘΕΛΕΤΕ ΣΙΓΟΥΡΑ ΝΑ ΔΙΑΓΡΑΨΕΤΕ ΤΗΝ ΚΑΤΑΣΚΕΥΗ ?'+name)){
        $.ajax({
            type: 'POST',
            url: 'inc/deleteWindow.php',
            data: { windowIndex: index  },
            error: function() {
                alert('Something is wrong');
             },
            success: function(response) {
                
                $("#tableEntry"+index).remove();
                //alert("Record removed successfully");
                //location.reload();  
                
            }
        
        });
    }
});

// EMPTY THE ORDER TABLE
$("#clearTable").click(function(){
        $.post("inc/emptySession.php",function(data){
        // if you want you can show some message to user here
        location.reload();
     });
        
});

//OPEN SILLS MODAL
$('.openSillsModal').on('click',function(){

    var sillIdx = $(this).parents('tr:eq(1)').children()[0].textContent;  
    $("#sillIndex").val(sillIdx);

    $("#inputLeft").val($(this).closest('tr').children()[0].textContent);
    $("#inputRight").val($(this).closest('tr').children()[2].textContent);
    $("#inputUp").val($(this).closest('tr').prev().children()[1].textContent);
    $("#inputDown").val($(this).closest('tr').next().children()[1].textContent);
    
    $('#windowsill').modal("show");
    
    var imgsrcStr = $(this).attr('src');
    var imgsrc = imgsrcStr.replace("images/shifts/Small/", "images/shifts/");
    $("#sillsImageSrc").val(imgsrc);
    $('#sillsImage').attr('src', imgsrc);

    mySills(imgsrc);
});

//UPDATING SILLS
$('#changeSillsbutton').click(function() {   
    var index = $('#sillIndex').val();
    var imgSourceStr = $('#sillsImageSrc').val();
    var imgSource = imgSourceStr.replace("images/shifts/", "images/shifts/Small/");
    var inputLeft = $('#inputLeft').val();
    var inputRight = $('#inputRight').val();
    var inputUp = $('#inputUp').val();
    var inputDown = $('#inputDown').val();

    $.ajax({
        type: 'POST',
        url: 'inc/setSills.php',
        data: { sillIndex: index, 
                sillsImageSrc: imgSourceStr, 
                sillLeft: inputLeft,
                sillRight: inputRight,
                sillUp: inputUp,
                sillDown: inputDown },
        success: function(response) {
            //$('#result1').html(response);
        }
    });
 $('t01 tr:eq(index) td:eq(5)').html($('#sillsImage').val());

});

//FUNCTION RESPNSIBLE FOR CHANGING THE SILLS PICTURE
function changePic() {
        var chkUp = document.getElementById("checkUp");
        var chkDown = document.getElementById("checkDown");
        var chkLeft = document.getElementById("checkLeft");
        var chkRight = document.getElementById("checkRight");
        var text = document.getElementById("sillsImageSrc");
        var img = document.getElementById("sillsImage");
        var imgsrc;

        if (chkUp.checked == true && chkDown.checked == false && chkRight.checked == false && chkLeft.checked == false){
            imgsrc = "images/shifts/U.gif";
        } else if (chkUp.checked == false && chkDown.checked == true && chkRight.checked == false && chkLeft.checked == false) {           
            imgsrc = "images/shifts/D.gif";
        } else if (chkUp.checked == false && chkDown.checked == false && chkRight.checked == true && chkLeft.checked == false) {
            imgsrc = "images/shifts/R.gif";
        } else if (chkUp.checked == false && chkDown.checked == false && chkRight.checked == false && chkLeft.checked == true) {
            imgsrc = "images/shifts/L.gif";
        } else if (chkUp.checked == true && chkDown.checked == true && chkRight.checked == false && chkLeft.checked == false) {
            imgsrc = "images/shifts/UD.gif";
        } else if (chkUp.checked == false && chkDown.checked == false && chkRight.checked == true && chkLeft.checked == true) {
            imgsrc = "images/shifts/LR.gif";
        } else if (chkUp.checked == true && chkDown.checked == false && chkRight.checked == false && chkLeft.checked == true) {
            imgsrc = "images/shifts/UL.gif";
        } else if (chkUp.checked == true && chkDown.checked == false && chkRight.checked == true && chkLeft.checked == false) {
            imgsrc = "images/shifts/UR.gif";
        } else if (chkUp.checked == false && chkDown.checked == true && chkRight.checked == true && chkLeft.checked == false) {
            imgsrc = "images/shifts/DR.gif";
        } else if (chkUp.checked == false && chkDown.checked == true && chkRight.checked == false && chkLeft.checked == true) {
            imgsrc = "images/shifts/DL.gif";
        } else if (chkUp.checked == true && chkDown.checked == false && chkRight.checked == true && chkLeft.checked == true) {
            imgsrc = "images/shifts/ULR.gif";
        } else if (chkUp.checked == false && chkDown.checked == true && chkRight.checked == true && chkLeft.checked == true) {
            imgsrc = "images/shifts/DLR.gif";
        } else if (chkUp.checked == true && chkDown.checked == true && chkRight.checked == true && chkLeft.checked == false) {
            imgsrc = "images/shifts/UDR.gif";
        } else if (chkUp.checked == true && chkDown.checked == true && chkRight.checked == false && chkLeft.checked == true) {
            imgsrc = "images/shifts/UDL.gif";
        } else if (chkUp.checked == true && chkDown.checked == true && chkRight.checked == true && chkLeft.checked == true) {
            imgsrc = "images/shifts/UDLR.gif";
        } else {
           imgsrc = "images/shifts/without.gif";
        }
        img.src = imgsrc;
        text.value = imgsrc;

        if (chkUp.checked == false) {
            $("#inputUp").val(0);
        } else { 
            $("#inputUp").val(2.5);}

        if (chkDown.checked == false) {
            $("#inputDown").val(0);
        } else { 
            $("#inputDown").val(2.5);}

        if (chkRight.checked == false) {
            $("#inputRight").val(0);
        } else { 
            $("#inputRight").val(2.5);
        }
        if (chkLeft.checked == false) {
            $("#inputLeft").val(0);
        } else { 
            $("#inputLeft").val(2.5);}

}


function mySills(imgurl){

    var chkUp = document.getElementById("checkUp");
    var chkDown = document.getElementById("checkDown");
    var chkLeft = document.getElementById("checkLeft");
    var chkRight = document.getElementById("checkRight");
    var imgsrc = imgurl;

    if (imgsrc == "images/shifts/U.gif"){
       chkUp.checked = true;
       chkDown.checked = false;
       chkLeft.checked = false;
       chkRight.checked = false;         
    } else if (imgsrc == "images/shifts/D.gif"){
        chkUp.checked = false;
        chkDown.checked = true;
        chkLeft.checked = false;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/L.gif"){
        chkUp.checked = false;
        chkDown.checked = false;
        chkLeft.checked = true;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/R.gif"){
        chkUp.checked = false;
        chkDown.checked = false;
        chkLeft.checked = false;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/UD.gif"){
        chkUp.checked = true;
        chkDown.checked = true;
        chkLeft.checked = false;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/LR.gif"){
        chkUp.checked = false;
        chkDown.checked = false;
        chkLeft.checked = true;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/UL.gif"){
        chkUp.checked = true;
        chkDown.checked = false;
        chkLeft.checked = true;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/UR.gif"){
        chkUp.checked = true;
        chkDown.checked = false;
        chkLeft.checked = false;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/DL.gif"){
        chkUp.checked = false;
        chkDown.checked = true;
        chkLeft.checked = true;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/DR.gif"){
        chkUp.checked = false;
        chkDown.checked = true;
        chkLeft.checked = false;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/UDL.gif"){
        chkUp.checked = true;
        chkDown.checked = true;
        chkLeft.checked = true;
        chkRight.checked = false;   
    }else if (imgsrc == "images/shifts/UDR.gif"){
        chkUp.checked = true;
        chkDown.checked = true;
        chkLeft.checked = false;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/ULR.gif"){
        chkUp.checked = true;
        chkDown.checked = false;
        chkLeft.checked = true;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/DLR.gif"){
        chkUp.checked = false;
        chkDown.checked = true;
        chkLeft.checked = true;
        chkRight.checked = true;   
    }else if (imgsrc == "images/shifts/UDLR.gif"){
        chkUp.checked = true;
        chkDown.checked = true;
        chkLeft.checked = true;
        chkRight.checked = true;
    }else if (imgsrc == "images/shifts/without.gif"){
        chkUp.checked = false;
        chkDown.checked = false;
        chkLeft.checked = false;
        chkRight.checked = false;
        }


}

function openTab(evt, metricsType) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(metricsType).style.display = "block";
    evt.currentTarget.className += " active";


}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function LengthConverter() {
   
    var feet=document.getElementById("feet-width").value; 
    var inches=document.getElementById("inches-width").value; 
    var result=(feet/0.032808)+(inches/0.39370);
    document.getElementById("outputWidth").innerHTML=result.toFixed(2);
    document.getElementById("width").value=result.toFixed(2);;
}

function HeightConverter() {
   
    var feet=document.getElementById("feet-height").value; 
    var inches=document.getElementById("inches-height").value; 
    var result=(feet/0.032808)+(inches/0.39370);
    document.getElementById("outputHeight").innerHTML=result.toFixed(2);
    document.getElementById("height").value=result.toFixed(2);;
}


