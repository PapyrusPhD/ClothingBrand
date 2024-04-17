const toggleBtn = document.querySelector('.toggle-btn');
const sideNavbar = document.querySelector('.side-navbar');
const content = document.querySelector('.content');

let isSideNavbarOpen = false;

toggleBtn.addEventListener('click', function() {
  if (isSideNavbarOpen) {
    sideNavbar.style.transform = 'translateX(-200px)';
    content.style.marginLeft = '20px';
    isSideNavbarOpen = false;
  } else {
    sideNavbar.style.transform = 'translateX(0)';
    content.style.marginLeft = '220px';
    isSideNavbarOpen = true;
  }
});