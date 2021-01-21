var ratedIndex = -1;
$(document).ready(function() {
    resetStarColors();

    $('.fa-star').on('click', function() { // set star color from begin to which hover on it
        ratedIndex = parseInt($(this).data('index'));
        saveToTheDB();
    });

    $('.fa-star').mouseover(function() { // when mouse hover
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });
    $('.fa-star').mouseleave(function() { // when mouse leave (not hover)
        resetStarColors();
        if (ratedIndex != -1) { // change star color from begin to which hover on it
            setStars(ratedIndex);
        }
    });

    function setStars(max) {
        for (var i = 0; i <= max; i++) {
            $('.fa-star:eq(' + i + ')').css('color', 'rgb(255, 223, 0)');
        }
    }

    function resetStarColors() { // reset colot o white
        $('.fa-star').css('color', 'black');
    }

    function saveToTheDB() {
        $.ajax({
            url: "index.php",
            method: "POST",
            dataType: "json",
            data: {
                ratedIndex: ratedIndex + 1,
            },
            success: function(response) {
                console.log('Done');
            }
        });
    }
});