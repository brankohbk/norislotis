// Fixes unnecessary scrolling in mobile
let vh, vw;

function updateSize() {
  vh = window.innerHeight * 0.01;
  vw = window.innerWidth * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

}
window.addEventListener("resize", updateSize)
updateSize();


// SCROLL PROGRESS

window.addEventListener("scroll", scrollProgress);

function scrollProgress() {
  const progressBar=document.getElementsByClassName("progress-bar")[0];
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  let scrolled = Math.ceil((winScroll / height) * 100);
  scrolled = scrolled <= 100 ? scrolled : 100 ;
  progressBar.style.width = scrolled + "%";
  progressBar.setAttribute("aria-valuenow", ""+parseInt(scrolled)) ;
}

// CHANGE MENU ICON

