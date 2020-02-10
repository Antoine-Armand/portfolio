console.log("hello");

const animation = bodymovin.loadAnimation({
    container: document.getElementsByClassName('main-container'),
    renderer: 'svg',
    type: 'canvas',
    loop: true,
    autoplay: true,
    prerender: true,
    path: './img/animation-1.json'
})