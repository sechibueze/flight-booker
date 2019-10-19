
const adjustStyle = (e) => {
  if (window.innerWidth > 992) {
    // console.log(window.innerWidth);
    const widget = Array.from(document.getElementsByClassName('widget'));
    widget.forEach(el => {
      el.setAttribute('style', 'width:33%;display: inline-block;');
      // el.style.width = '33%';
      // el.style.display = 'inline-block';
    });
  } else {
    const widget = Array.from(document.getElementsByClassName('widget'));
    widget.forEach(el => {
      el.setAttribute('style', '');
    });
  }

}
window.addEventListener('resize', adjustStyle);
window.addEventListener('load', adjustStyle);
//
// if (window.innerWidth > 992) {
//   document.querySelector('body').style.backgroundColor = 'red';
// }