function changeImageOnHover(src, event){
    let img = src.querySelector("img");
    if(event.type === 'mouseenter') {
        img.src = '../brewery/assets/buttons/button-hover.svg';
    } else if(event.type === 'mouseleave'){
        img.src = '../brewery/assets/buttons/button-regular.svg';
    }
}