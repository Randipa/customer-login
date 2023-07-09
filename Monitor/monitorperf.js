/*function loadData(name) {
    if(name=="btn1"){
        
    }else if(name=="btn2"){

    }else if(name=="btn3"){

    }else if(name=="btn4"){

    }else{
        alert("Inv");
    }
}*/
var button = document.getElementById("mwet");

// Add a click event listener to the button
button.addEventListener("click", function() {
  // Change the location to the desired page
  window.location.href = "http://localhost:8080/monitor%20iwt/monitorwork%20engaged%20time.php";
});

var button = document.getElementById("uat");

// Add a click event listener to the button
button.addEventListener("click", function() {
  // Change the location to the desired page
  window.location.href = "http://localhost:8080/monitor%20iwt/extraform.php";
});

var button = document.getElementById("ccf");

// Add a click event listener to the button
button.addEventListener("click", function() {
  // Change the location to the desired page
  window.location.href = "http://localhost:8080/monitor%20iwt/view.php";
});




