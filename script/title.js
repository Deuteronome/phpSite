let scrollTitle = document.querySelector('#scroll-title');

let offset = 0;

setInterval(() => {
    offset -= 0.5;
    scrollTitle.style.left = `${offset}%`;
    if(offset == -150) {
        offset =0;
    }
},25);