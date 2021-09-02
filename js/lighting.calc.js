const addAndCalcBtn = document.getElementById("loadAndCalc");

if (addAndCalcBtn !== null) {
    addAndCalcBtn.addEventListener("click", (e) => { 
        e.preventDefault();
        let countInPage = calcAjax.dataset.countinpage;
        let appCountTo = 2;
        
        let calcParam = {
            "koofzap": document.getElementsByName("pom_type")[0].value,
            "dlinna": document.getElementsByName("pom_a")[0].value,
            "shirina": document.getElementsByName("pom_b")[0].value,
            "visota": document.getElementsByName("pom_h")[0].value,
            "visotaRp": document.getElementsByName("pom_h2")[0].value,
            "koofisp": document.getElementsByName("koof_isp")[0].value,
            "tebosv": document.getElementsByName("treb_osv")[0].value
        };
        
        const xhr = new XMLHttpRequest()

        xhr.open('GET', "http://ruvick.site/wp-json/gensvet/v2/get_lamp_count?count="+countInPage+"&app="+appCountTo+
        "&koofzap="+calcParam.koofzap+
        "&dlinna="+calcParam.dlinna+
        "&shirina="+calcParam.shirina+
        "&visota="+calcParam.visota+
        "&visotarp="+calcParam.visotaRp+
        "&koofisp="+calcParam.koofisp+
        "&tebosv="+calcParam.tebosv

        )
        xhr.responseType='json'
        xhr.setRequestHeader('Content-Type', 'application/json')

        xhr.onload = () => { 
            console.log(xhr.response);
            
            let calcStr = ""
            xhr.response.forEach((element, index) => {
                calcStr += '<div class="calculator-bottom-wrap-right-table-row">'+
                    '<div class="calculator-bottom-wrap-right-table-row-cell">'+
                        '<a href="'+element.lnk+'" class="calculator-bottom-wrap-right-table-row-cell__desc">'+element.name+'</a>'+
                    '</div>'+
                    '<div class="calculator-bottom-wrap-right-table-row-cell">'+
                        '<p class="calculator-bottom-wrap-right-table-row-cell__desc"> ~ '+element.count+' шт. </p>'+
                    '</div>'+
                '</div>';
            });

            calcAjax.innerHTML = calcAjax.innerHTML + calcStr;
            calcAjax.dataset.countinpage = parseInt(calcAjax.dataset.countinpage) + parseInt(appCountTo)
        }

        xhr.send();
        
    });
}

const oneSerchBtn = document.getElementById("oneCalcSearchBtn");

if (oneSerchBtn !== null) {
    oneSerchBtn.addEventListener("click", (e) => { 
        e.preventDefault();
        let searchStr = document.getElementById("oneCalcSearchFeild").value

        if (searchStr !== "") {
            let calcParam = {
                "koofzap": document.getElementsByName("pom_type")[0].value,
                "dlinna": document.getElementsByName("pom_a")[0].value,
                "shirina": document.getElementsByName("pom_b")[0].value,
                "visota": document.getElementsByName("pom_h")[0].value,
                "visotaRp": document.getElementsByName("pom_h2")[0].value,
                "koofisp": document.getElementsByName("koof_isp")[0].value,
                "tebosv": document.getElementsByName("treb_osv")[0].value
            };

            const xhr = new XMLHttpRequest()

            xhr.open('GET', "http://ruvick.site/wp-json/gensvet/v2/get_lamp_count_one?str="+searchStr+
                "&koofzap="+calcParam.koofzap+
                "&dlinna="+calcParam.dlinna+
                "&shirina="+calcParam.shirina+
                "&visota="+calcParam.visota+
                "&visotarp="+calcParam.visotaRp+
                "&koofisp="+calcParam.koofisp+
                "&tebosv="+calcParam.tebosv

            )
            xhr.responseType='json'
            xhr.setRequestHeader('Content-Type', 'application/json')

            xhr.onload = () => { 
                console.log(xhr.response);
                
                let calcStr = ""
                xhr.response.forEach((element, index) => {
                    calcStr += 

                    '<div class="calculator-bottom-wrap-right-solo-wrap">'+
                        '<img src="'+element.img+'" alt="" class="calculator-bottom-wrap-right-solo-wrap__img">'+
                        '<div class="calculator-bottom-wrap-right-solo-wrap-right">'+
                            '<a href="" class="calculator-bottom-wrap-right-solo-wrap-right__name">'+element.name+'</a>'+
                            '<p class="calculator-bottom-wrap-right-solo-wrap-right__desc">Необходимо <br>'+
                                '<span class="calculator-bottom-wrap-right-solo-wrap-right__desc--bold">~ '+element.count+' шт.</span>'+
                            '</p>'+
                            '<p class="calculator-bottom-wrap-right-solo-wrap-right__desc">Рекомендуемая сетка <br>'+
                                '<span class="calculator-bottom-wrap-right-solo-wrap-right__desc--bold">2×4</span>'+
                            '</p>'+
                        '</div>'+
                    '</div>'

                });

                ajaxOneLoad.innerHTML = ajaxOneLoad.innerHTML + calcStr;
            }

            xhr.send();

        }

        console.log(searchStr)
    })
}