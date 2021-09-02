const addAndCalcBtn = document.getElementById("loadAndCalc");

if (addAndCalcBtn !== undefined) {
    addAndCalcBtn.addEventListener("click", (e) => { 
        e.preventDefault();
        let countInPage = calcAjax.dataset.countinpage;
        let appCountTo = 20;
        const calcParam = new FormData(document.getElementById('calcParamForm'))
        console.log(serialize(document.getElementById('calcParamForm')));
        
    });
}