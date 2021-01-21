var ratedIndex = -1;
$(document).ready(function() {
    resetStarColors();

    $('.fa-star').on('click', function() {
        ratedIndex = parseInt($(this).data('index'));
        saveToTheDB();
    });

    $('.fa-star').mouseover(function() {
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });

    $('.fa-star').mouseleave(function() {
        resetStarColors();
        if (ratedIndex != -1) {
            setStars(ratedIndex);
        }

    });

    function setStars(max) {
        for (var i = 0; i <= max; i++) {
            $('.fa-star:eq(' + i + ')').css('color', 'rgb(255,223,0)');
        }
    }

    function resetStarColors() {
        $('.fa-star').css('color', 'black');
    }

    function saveToTheDB() {
        $.ajax({
            url: "rating.php",
            method: "post",
            dataType: "json",
            data: {
                ratedIndex: ratedIndex + 1,


            },

        });
    }
});