let idleTime = 0;
const screensaver = document.querySelector('.screensaver');
const screensaverImg = document.getElementById('screensaver-img');

let posX = 0;
let posY = 0;
let directionX = 1;
let directionY = 1;
const speed = 2;

function resetTimer() {
    idleTime = 0;
    screensaver.style.display = 'none';
    document.getElementsByTagName("body")[0].style.overflow = "auto";
}

function timerIncrement(){
    idleTime++;
    if(idleTime > 30) {
        screensaver.style.display = 'flex';
        document.getElementsByTagName("body")[0].style.overflow = "hidden";
        moveImage();
    }
}

function moveImage(){
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    const imgWidth = screensaverImg.clientWidth;
    const imgHeight = screensaverImg.clientHeight;

    posX += directionX * speed;
    posY += directionY * speed;

    if(posX + imgWidth >= screenWidth || posX <= 0){
        directionX *= -1;
    }

    if(posY + imgHeight >= screenHeight || posY <= 0){
        directionY *= -1;
    }

    screensaverImg.style.left = posX + 'px';
    screensaverImg.style.top = posY + 'px';

    if(idleTime > 1){
        requestAnimationFrame(moveImage);
    }
}

document.addEventListener('mousemove', resetTimer);
document.addEventListener('keypress', resetTimer);
document.addEventListener('click', resetTimer);
document.addEventListener('scroll', resetTimer);

setInterval(timerIncrement, 1000);
