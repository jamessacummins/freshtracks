const glideConfig = {
    type: 'carousel',
  startAt: 0,
  perView: 3,
  autoplay: 2000,
  animationDuration:1000,
  gap:20,  
  breakpoints:{
    500:{
      perView: 1,
    },
    700:{
      perView: 2,
    },
  },
};

var test = new Glide('.glide', glideConfig).mount();