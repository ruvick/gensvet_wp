const rangeSlider = document.getElementById('range-slider');

noUiSlider.create(rangeSlider, {
    start: [2100, 5000],
    connect: true,
    step: 1000,
    range: {
        'min': 1000,
        'max': 6900
    }
});

const input0 = document.getElementById('input-0');
const input1 = document.getElementById('input-1');
const inputs = [input0, input1];

rangeSlider.noUiSlider.on('update', function(values, handle) {
   inputs[handle].value = Math.round(values[handle]);
});