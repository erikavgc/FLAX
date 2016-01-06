var currentIndex = 0;
var items = $('.container div');
var itemAmt = items.length;

function cycleItemsRI() {
    var item = $('.container div').eq(currentIndex);
    items.hide();
    item.show("slide", { direction: "right" }, 'fast');
}

function cycleItemsLE() {
    var item = $('.container div').eq(currentIndex);
    items.hide();
    item.show("slide", { direction: "left" }, 'fast');
}

var autoSlide = setInterval(function () {
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
        currentIndex = 0;
    }
}, 3000);

$('.next').click(function () {
    clearInterval(autoSlide);
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
        currentIndex = 0;
    }
    cycleItemsRI();
});

$('.prev').click(function () {
    clearInterval(autoSlide);
    currentIndex -= 1;
    if (currentIndex < 0) {
        currentIndex = itemAmt - 1;
    }
    cycleItemsLE();
});