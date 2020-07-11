/*!
 * Masrianto v1.0.0 (https://www.masrianto.com)
 * Copyright 2020 Masrianto
 * MIT License (https://www.masrianto/master/LICENSE)
 */

const sidenav = document.querySelectorAll(".sidenav");
M.Sidenav.init(sidenav);

const slider = document.querySelectorAll(".slider");
M.Slider.init(slider, {
  indicators: false,
  height: 300, // default 400, Number
  transition: 600, // duration/ default 500, Number
  interval: 3000, // default 6000, Number
});

const parallax = document.querySelectorAll(".parallax");
M.Parallax.init(parallax);

const materialbox = document.querySelectorAll(".materialboxed");
M.Materialbox.init(materialbox);

const scroll = document.querySelectorAll(".scrollspy");
M.ScrollSpy.init(scroll, {
  scrollOffset: 50,
});
