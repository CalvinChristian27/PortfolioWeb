const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

function loadMenu(menuName) {

  let contentHTML = '';

  switch(menuName) {
      case 'about':
          loadContent('menu.blade.php');
      break;
      case 'resume':
          loadContent('resume.blade.php');
          break;
      case 'portfolio':
          loadContent('portfolio.blade.php');
          break;
      case 'contact':
          loadContent('contact.blade.php');
          break;
      default:
          document.getElementById('content').innerHTML = '<h2>404 Not Found</h2><p>Halaman tidak ditemukan.</p>';
  }
}

function loadContent(url) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', url, true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById('content').innerHTML = xhr.responseText;
      }
  };
  xhr.send();
}

function toggleActive(clickedElement, menuName) {
  const sidebarLinks = document.querySelectorAll('.sidebar-link');
  sidebarLinks.forEach(link => {
      link.classList.remove('active');
  });

  clickedElement.classList.add('active');

  loadMenu(menuName);
}