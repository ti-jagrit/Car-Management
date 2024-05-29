  // this is for responsive ness
  const btn = document.querySelector('.iconbtn');
  const bars = document.querySelector('.iconbtn img');
  const dropMenu = document.querySelector('.dropdownmenu');

  btn.addEventListener("click", () => {
      dropMenu.classList.toggle('open');


  })
  var myIndex = 0;
  carousel();
  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000); // Change image every 2 seconds
  }

  // for profile drop down

  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function (event) {
      if (!event.target.matches('.userlogo')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
              }
          }
      }
  }
