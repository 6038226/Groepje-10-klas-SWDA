let slideshow = document.getElementByClassName("slide").innerHTML;
let timer = 5000;
let show = [
  "<img src='fotos/Akami.webp' alt=slideshow>",
  "<img src='fotos/Saba.webp' alt=slideshow>",
  "<img src='fotos/Kampachi.webp' alt=slideshow>",
  "re",
];
let shows = 0;
setInterval(slider, timer);
let slideshow = show[shows];
function slider() {
  shows += timer / 5000;
  if (shows > 2) {
    shows -= 3;
  }
  for (let shows = 0; shows < show.length; shows++) {
    const element = show[shows];
  }
}
