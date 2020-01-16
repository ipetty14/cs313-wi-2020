let squareThreeVisibile = true;

$('#ta02-button-1').on('click', () => {
    let newColor = $('#ta02-input-color').val();

    $('#div-1').css('background-color', newColor);
})

$('#ta02-button-2').on('click', function () {

    if (squareThreeVisibile) {
        $('#div-3').css('opacity', '0');
        squareThreeVisibile = false;
        $(this).html('Show Square 3');
    } else {
        $('#div-3').css('opacity', '1');
        squareThreeVisibile = true;
        $(this).html('Hide Square 3');
    }

})
