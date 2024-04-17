// JavaScript for zooming
const zoomImage = document.getElementById('zoom-image');
let isZoomed = false;

zoomImage.addEventListener('click', () => {
    if (isZoomed) {
        // If already zoomed, reset to the original size and position
        
        zoomImage.style.transform = 'scale(1)';
        zoomImage.style.transition = 'transform 0.3s';
        isZoomed = false;
    } else {
        // Zoom in and center the image
        zoomImage.style.transform = 'scale(2)';
        zoomImage.style.transition = 'transform 0.3s';
        zoomImage.style.transformOrigin = 'center center';
        isZoomed = true;
    }

   
});
