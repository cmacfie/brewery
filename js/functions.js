function changeImageOnHover(src, event) {
    let childImages = src.querySelectorAll("img");
    let lastImage = childImages[childImages.length - 1];
    if (lastImage.id === 'play-icon') {
        if (event.type === 'mouseenter') {
            lastImage.src = 'assets/buttons/play-icon-hover.svg';
        } else if (event.type === 'mouseleave') {
            lastImage.src = 'assets/buttons/play-icon.svg';
        }
    } else {
        if (event.type === 'mouseenter') {
            lastImage.src = 'assets/buttons/button-hover.svg';
        } else if (event.type === 'mouseleave') {
            lastImage.src = 'assets/buttons/button-regular.svg';
        }
    }

}