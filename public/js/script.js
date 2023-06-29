//Get the button:
mybutton = document.getElementById("toTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


//Curtain Menu SCript

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  //Subscribe modal script

  function showSubscribe(){
    const myModalEl = document.getElementById('subscribe');
    const modal = new mdb.Modal(myModalEl);
    modal.show();
    
  }

if(document.querySelector('#subscribe')){

  window.addEventListener('load', (event) => {
    setTimeout(() => {
      showSubscribe()
    }, 7000);
  });

}

async function subscribe(){
  let email = document.forms["subscribe-form"]["email"].value;
  let response = await fetch('/api/subscribe?email='+email);
  let data = await response.json();
  swal("Great!", "Subscription successful.", "success");
}