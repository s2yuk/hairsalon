document.addEventListener('DOMContentLoaded',function(){
  //scroll  text animation
  const cb = function(el, isIntersecting){
    if(isIntersecting){
        const ta = new TweenTextAnimation(el);
        ta.animate();
    }
  }
  const so = new ScrollObserver('.tween-animate-title', cb); 

});