const filterParamLoad = 'http://ruvick.site/wp-json/gensvet/v2/get_filter'


function getRequests() {
    var s1 = location.search.substring(1, location.search.length).split('&'),
        r = {}, s2, i;
    for (i = 0; i < s1.length; i += 1) {
        s2 = s1[i].split('=');
        let arrayIndex = decodeURIComponent(s2[0]).toLowerCase();
        if (arrayIndex.indexOf('[') == -1)
            {
                r[arrayIndex] = decodeURIComponent(s2[1]);
            } else {
                arrayIndex = arrayIndex.substring(0, arrayIndex.indexOf('['));
                if (typeof r[arrayIndex] === 'object')
                    r[arrayIndex].push(decodeURIComponent(s2[1]))
                else 
                    r[arrayIndex] = [decodeURIComponent(s2[1])]
            }
    }
    return r;
};

document.addEventListener("DOMContentLoaded", () => {

   
    let qParam = getRequests();
    console.log(qParam);

    if (document.getElementById('tovarCategoryId') == null) return;
    
    let category = tovarCategoryId.dataset.id;
     
    const xhr = new XMLHttpRequest()

    xhr.open('GET', filterParamLoad+"?catid="+category)
    xhr.responseType='json'
    xhr.setRequestHeader('Content-Type', 'application/json')

    xhr.onload = () => {
        console.log(xhr.response);
        
        // Размер
        let sizeStr = ""
        xhr.response.offer_size.forEach((element, index) => {
            
            let checed = (qParam.sizecheck != undefined && qParam.sizecheck.includes(element) )?"checked":"";

            sizeStr += '<li class="lines-wrap-filter-card-features-list-item li_checbox">'+
							'<input id="size_'+index+'" name="sizecheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden="" '+checed+' value = "'+element+'" data-value="'+element+'">'+
							'<label for="size_'+index+'" class=" lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
						'</li>'
        });
        sizeFilterList.innerHTML = sizeStr;

        // Тип диодов
        let dtypeStr = ""
        xhr.response.offer_diod_type.forEach((element, index) => {
            dtypeStr += '<li id = "dtype_'+index+'" class="dropdown-list__item" data-value="'+element+'">'+element+'</li>'
        });

        diodTypeInput.value = (qParam.diodtype != undefined )?qParam.diodtype:"";
        
        dtypeFilterList.innerHTML = dtypeStr

        // Комплектация
        let onlyStarter = ""
        xhr.response.offer_driver.forEach((element, index) => {
            let checed = (qParam.drivercheck != undefined && qParam.drivercheck.includes(element) )?"checked":"";

            onlyStarter += '<li class="lines-wrap-filter-card-features-list-item">'+
                '<input id = "str_only_'+index+'" name="drivercheck[]" value="yes" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" '+checed+' hidden data-value="yes">'+
                '<label  for = "str_only_'+index+'" class="lines-wrap-filter-card-features-list-item__desc" >Только с драйвером</label>'+
            '</li>';
        });

        komplFilterList.innerHTML = onlyStarter;

        // Мощьность

        let powerStr = ""
        xhr.response.offer_power.forEach((element, index) => {
            
            let checed = (qParam.power != undefined && qParam.power.includes(element) )?"checked":"";

            powerStr += '<input id="vt'+index+'" type="checkbox" value="'+element+'" name="power[]" '+checed+' >'+
                        '<label for="vt'+index+'" class="lines-wrap-filter-card-features__btn option">'+element+' Вт</label>'
        });

        powerFilterList.innerHTML = powerStr;

        // Световой поток

        let lightFlowStr = ""
        xhr.response.offer_light_flow.forEach((element, index) => {
           lightFlowStr += '<li id = "lightflow_'+index+'" class="dropdown-list__item" data-value="'+element+'">'+element+' Лм</li>'
        });
 
        lightflowTypeInput.value = (qParam.lightflow != undefined )?qParam.lightflow:"";
        
        lightflowFilterList.innerHTML = lightFlowStr

        // Рассеиватель

        let diffuserStr = ""
        xhr.response.offer_diffuser.forEach((element, index) => {
            
            let checed = (qParam.rscheck != undefined && qParam.rscheck.includes(element) )?"checked":"";

            diffuserStr += '<li class="lines-wrap-filter-card-features-list-item">'+
                                '<input id = "ras_'+index+'" name="rscheck[]" value = "'+element+'" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" '+checed+' hidden data-value="'+element+'" >'+
                                '<label for = "ras_'+index+'" class="lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
                            '</li>'
        });
        diffuserFilterList.innerHTML = diffuserStr;

         dropdownInit(".dropdownAfterLoad")
    }

    xhr.send();

});