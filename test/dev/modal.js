// Get the modals
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <class> element that opens the modal
var btn2 = document.getElementsByClassName("myBtn")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");
// Get the button element that closes the modal
// Get the button that opens the modal
var clsBtn = document.getElementById("closeModal");
// When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

btn2.onclick = function() {
    modal.style.display = "block";
}

 


var myDetailsModal = document.getElementById('myDetailsModal');
// Get the <class> element that opens the modal
var myDetailsBtn = document.getElementsByClassName("myDetailsBtn");
// When the user clicks the button, open the modal 
// myDetailsBtn.onclick = function() {
//     myDetailsModal.style.display = "block";
   
// }


// function openDetails(){
//     myDetailsModal.style.display = "block";
//     //$("#myDetailsModal").modal("show");
//     $("#txtfname").val($(this).closest('tr').children()[0].textContent);
//     // $("#txtlname").val($(this).closest('tr').children()[7].textContent);
//     $("#txtemail").val($(this).closest('tr').children()[2].textContent); 
//     $("#imgDetail").html($(this).closest('tr').children()[7].innerHTML); 

//     var imgdata = 
//     $("#txtlname").val(imgdata);
//     $("#imgDetail2").attr('src',imgdata);
//     alert($(this).closest('tr').children()[7].find('td img').attr('src'));
   
// }

function openDetails(){
    
    $("#myDetailsModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[0].textContent);
    // $("#txtlname").val($(this).closest('tr').children()[7].textContent);
    $("#txtemail").val($(this).closest('tr').children()[2].textContent); 
    $("#imgDetail").html($(this).closest('tr').children()[7].innerHTML); 

    var imgdata = 
    $("#txtlname").val(imgdata);
    $("#imgDetail2").attr('src',imgdata);
    alert($(this).closest('tr').children()[7].find('td img').attr('src'));
   
}

for (var i = 0; i < myDetailsBtn.length; ++i){
    myDetailsBtn[i].onclick = openDetails;
}

// When the user clicks on <span> (x), close the modal
span[0].onclick = function() {
    modal.style.display = "none";
    
}
span[1].onclick = function() {
    myDetailsModal.style.display = "none";   
}
clsBtn.onclick = function() {
    myDetailsModal.style.display = "none";   
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    } else if (event.target == myDetailsModal) {
        myDetailsModal.style.display = "none";
    }
}

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

