function serRangeSlider() {
    const rangeSlider = document.getElementById('range-slider');

    const input0 = document.getElementById('colortFrom');
    const input1 = document.getElementById('colortTo');

    const startInputVal = [input0.value, input1.value]

    noUiSlider.create(rangeSlider, {
        // start: [2100, 5000],
        start: startInputVal,
        connect: true,
        step: 1000,
        range: {
            'min': 1000,
            'max': 10000
        }
    });


    const inputs = [input0, input1];

    rangeSlider.noUiSlider.on('update', function(values, handle) {
    inputs[handle].value = Math.round(values[handle]);
    });
}


