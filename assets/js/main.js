window.onscroll = function() {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;

  if(window.pageYOffset > fixedNav) {
      header.classList.add('navbar-fixed');
  } else {
      header.classList.remove('navbar-fixed');
  }
};

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});

// Fungsi untuk mengganti halaman
function switchPage(pageId) {
  // Sembunyikan semua halaman
  document.querySelectorAll('.page').forEach((page) => {
    page.classList.remove('active');
  });

  // Hilangkan kelas aktif dari semua tombol
  document.querySelectorAll('.nav-button').forEach((button) => {
    button.classList.remove('active');
  });

  // Tampilkan halaman yang dipilih
  const selectedPage = document.getElementById(pageId);
  if (selectedPage) {
    selectedPage.classList.add('active');
  };

  // Tambahkan kelas aktif pada tombol yang dipilih
  const selectedButton = document.getElementById(`btn-${pageId}`);
  if (selectedButton) {
    selectedButton.classList.add('active');
  }
};

// Atur halaman default
document.addEventListener('DOMContentLoaded', () => {
  switchPage('makanan'); // Halaman default adalah 'makanan'
});