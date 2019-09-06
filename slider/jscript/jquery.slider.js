$(document).ready(function () {
    $('.img').click(function () {
        var currentImage = $('.img.curry');
        var currentImageIndex = $('.img.curry').index();
        var nextImageIndex = currentImageIndex + 1;
        var nextImage = $('.img').eq(nextImageIndex);
        currentImage.fadeOut(100);
        currentImage.removeClass('curry');

        if (nextImageIndex == ($('.img:last').index() + 1)) {
            $('.img').eq(0).fadeIn(100);
            $('.img').eq(0).addClass('curry');
        } else {
            nextImage.fadeIn(100)
            nextImage.addClass('curry')
        }
    });
});