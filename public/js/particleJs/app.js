/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

// particlesJS('particles-js',

//     {
//         "particles": {
//             "number": {
//                 "value": 80,
//                 "density": {
//                     "enable": true,
//                     "value_area": 800
//                 }
//             },
//             "color": {
//                 "value": "#ffffff"
//             },
//             "shape": {
//                 "type": "image",
//                 "stroke": {
//                     "width": 0,
//                     "color": "#000000"
//                 },
//                 "polygon": {
//                     "nb_sides": 5
//                 },
//                 "image":

//                 {
//                     "src": "../images/particles/d6.png",
//                     "border-radius": "0.10px",
//                     "width": 100,
//                     "height": 100
//                 },

//             },
//             "opacity": {
//                 "value": 1,
//                 "random": false,
//                 "anim": {
//                     "enable": false,
//                     "speed": 1,
//                     "opacity_min": 0.1,
//                     "sync": false
//                 }
//             },
//             "size": {
//                 "value": 10,
//                 "random": true,
//                 "anim": {
//                     "enable": false,
//                     "speed": 40,
//                     "size_min": 0.1,
//                     "sync": false
//                 }
//             },
//             "line_linked": {
//                 "enable": true,
//                 "distance": 150,
//                 "color": "#ebb52f",
//                 "opacity": 0.5,
//                 "width": 1
//             },
//             "move": {
//                 "enable": true,
//                 "speed": 6,
//                 "direction": "none",
//                 "random": false,
//                 "straight": false,
//                 "out_mode": "out",
//                 "attract": {
//                     "enable": false,
//                     "rotateX": 600,
//                     "rotateY": 1200
//                 }
//             }
//         },
//         "interactivity": {
//             "detect_on": "canvas",
//             "events": {
//                 "onhover": {
//                     "enable": true,
//                     "mode": "repulse"
//                 },
//                 "onclick": {
//                     "enable": true,
//                     "mode": "push"
//                 },
//                 "resize": true
//             },
//             "modes": {
//                 "grab": {
//                     "distance": 400,
//                     "line_linked": {
//                         "opacity": 1
//                     }
//                 },
//                 "bubble": {
//                     "distance": 400,
//                     "size": 40,
//                     "duration": 2,
//                     "opacity": 8,
//                     "speed": 3
//                 },
//                 "repulse": {
//                     "distance": 200
//                 },
//                 "push": {
//                     "particles_nb": 4
//                 },
//                 "remove": {
//                     "particles_nb": 2
//                 }
//             }
//         },
//         "retina_detect": true,
//         "config_demo": {
//             "hide_card": false,
//             "background_color": "#b61924",
//             "background_image": "",
//             "background_position": "50% 50%",
//             "background_repeat": "no-repeat",
//             "background_size": "cover"
//         }
//     }

// );



tsParticles.load("tsparticles", {
    fps_limit: 60,
    interactivity: {
        detect_on: "canvas",
        events: {
            onclick: { enable: true, mode: "push" },
            onhover: {
                enable: true,
                mode: "attract",
                parallax: { enable: false, force: 60, smooth: 10 }
            },
            resize: true
        },
        modes: {
            push: { quantity: 4 },
            attract: { distance: 200, duration: 0.4, factor: 5 }
        }
    },
    particles: {
        color: { value: "#EBB52F" },
        line_linked: {
            color: "#EBB52F",
            distance: 150,
            enable: true,
            opacity: 1,
            width: 1
        },
        move: {
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
            bounce: false,
            direction: "none",
            enable: true,
            out_mode: "out",
            random: false,
            speed: 2,
            straight: false
        },
        number: { density: { enable: true, value_area: 800 }, value: 80 },
        opacity: {
            anim: { enable: false, opacity_min: 2, speed: 1, sync: false },
            random: false,
            value: 1
        },
        shape: {
            character: {
                fill: false,
                font: "Verdana",
                style: "",
                value: "*",
                weight: "400"
            },
            image: [{
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d1.png",
                    width: 100,

                    opacity: 10,
                },
                {
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d2.png",

                    width: 100,
                    opacity: 10,
                },
                {
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d3.png",

                    width: 100
                },
                {
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d4.png",

                    width: 100
                },
                {
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d5.png",
                    color: "#FFF",

                    width: 100
                },
                {
                    height: 100,
                    replace_color: true,
                    src: "../../images/particles/d6.png",

                    width: 100
                },


            ],
            polygon: { nb_sides: 5 },
            stroke: { color: "#000000", width: 0 },
            type: "images"
        },

        size: {
            anim: { enable: false, size_min: 0.1, speed: 40, sync: false },
            random: true,
            value: 12
        }
    },
    polygon: {
        draw: { enable: false, lineColor: "#ffffff", lineWidth: 1.5 },
        move: { radius: 10 },
        scale: 1,
        type: "none",
        url: ""
    },
    retina_detect: true
});
