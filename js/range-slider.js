const rangeSlider = document.getElementById('range-slider');

const input0 = document.getElementById('input-0');
const input1 = document.getElementById('input-1');

const startInputVal = [input0.value, input1.value]

noUiSlider.create(rangeSlider, {
    // start: [2100, 5000],
    start: startInputVal,
    connect: true,
    step: 1000,
    range: {
        'min': 1000,
        'max': 6900
    }
});


const inputs = [input0, input1];

rangeSlider.noUiSlider.on('update', function(values, handle) {
   inputs[handle].value = Math.round(values[handle]);
});