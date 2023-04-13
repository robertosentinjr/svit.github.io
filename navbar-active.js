
  // get the current URL
  var url = window.location.href;

  // get the links in the navbar
  var links = document.querySelectorAll('.nav-links li a');

  // loop through the links
  for (var i = 0; i < links.length; i++) {
    var link = links[i];
    
    // check if the link's href matches the URL
    if (link.href === url) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  }

