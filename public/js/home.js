let thoughtTimeout;
let clickCount = 0;
let laserActive = false;
let laserAnimationFrame;

function toggleThought() {
    clickCount++;

    const bubble = document.getElementById('thoughtBubble');
    bubble.classList.add('show');

    clearTimeout(thoughtTimeout);
    thoughtTimeout = setTimeout(() => {
        bubble.classList.remove('show');
    }, 3000);

    if (clickCount >= 5 && !laserActive) {
        activateLaser();
    }
}

function updateLaserPosition() {
    if (!laserActive) return;

    const eyeLeft = document.getElementById('eyeLeft');
    const eyeRight = document.getElementById('eyeRight');
    const laserLeft = document.getElementById('laserLeft');
    const laserRight = document.getElementById('laserRight');
    const container = document.querySelector('.container');

    const eyeLeftRect = eyeLeft.getBoundingClientRect();
    const eyeRightRect = eyeRight.getBoundingClientRect();
    const containerRect = container.getBoundingClientRect();

    const laserLeftHeight = containerRect.top - eyeLeftRect.bottom;
    const laserRightHeight = containerRect.top - eyeRightRect.bottom;

    laserLeft.style.left = (eyeLeftRect.left + eyeLeftRect.width / 2) + 'px';
    laserLeft.style.top = eyeLeftRect.bottom + 'px';
    laserLeft.style.height = Math.max(0, laserLeftHeight) + 'px';

    laserRight.style.left = (eyeRightRect.left + eyeRightRect.width / 2) + 'px';
    laserRight.style.top = eyeRightRect.bottom + 'px';
    laserRight.style.height = Math.max(0, laserRightHeight) + 'px';

    laserAnimationFrame = requestAnimationFrame(updateLaserPosition);
}

function activateLaser() {
    laserActive = true;
    const eyeLeft = document.getElementById('eyeLeft');
    const eyeRight = document.getElementById('eyeRight');
    const laserLeft = document.getElementById('laserLeft');
    const laserRight = document.getElementById('laserRight');

    eyeLeft.classList.add('laser-active');
    eyeRight.classList.add('laser-active');

    laserLeft.classList.add('active');
    laserRight.classList.add('active');

    updateLaserPosition();

    setTimeout(() => {
        burnTexts();
    }, 500);

    setTimeout(() => {
        laserLeft.classList.remove('active');
        laserRight.classList.remove('active');
        eyeLeft.classList.remove('laser-active');
        eyeRight.classList.remove('laser-active');
        laserActive = false;
        clickCount = 0;

        if (laserAnimationFrame) {
            cancelAnimationFrame(laserAnimationFrame);
        }

        laserLeft.style.height = '0';
        laserRight.style.height = '0';
    }, 3000);
}

function burnTexts() {
    const paragraphs = document.querySelectorAll('.about p, h1');
    paragraphs.forEach((p, index) => {
        setTimeout(() => {
            p.classList.add('burning');
        }, index * 300);
    });

    setTimeout(() => {
        paragraphs.forEach(p => {
            p.classList.remove('burning');
            p.style.opacity = '1';
        });
    }, 5000);
}
