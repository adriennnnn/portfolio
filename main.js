let btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 200) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

// btn.on('click', function(e) {
//   e.preventDefault();
//   $('html, body').animate({scrollTop:0}, '500');
// });

function copyFunction() {
  navigator.clipboard.writeText('adrienthomas54@icloud.com')
  // alert("texte copier")
  divCacher.style.display = "block";
  setTimeout(() => { console.log("cacher!");
  divCacher.style.display = "none";

}, 5000);
}


// let btnE = document.getElementById("btnE");
// let divCacher = document.getElementById("divCacher");

// function afficher(){
//   console.log('ttt');
//   if(getComputedStyle(divCacher).display != "none"){
//     divCacher.style.display = "none";
//   } else {
//     divCacher.style.display = "block";
//   }
// };
