// Nodelist forEach Polyfill
if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}

document.querySelectorAll('.dropdown').forEach(function (dropDownWrapper) {

    // const dropDownFilesButton = dropDownWrapper.querySelector('#filesDropdownBtn');
    // const dropDownButtonFiles = dropDownWrapper.querySelector('#filesDropdown');
    // const dropDownFilesListItems = dropDownButtonFiles.querySelectorAll('.dropdown-list__item');

    // dropDownFilesListItems.forEach(function (listItem) {
    //     listItem.addEventListener('click', function (e) {
    //         e.stopPropagation();
    //         dropDownFilesButton.innerText = this.innerText;
    //         dropDownInput.value = this.dataset.value;
    //         dropDownList.classList.remove('dropdown-list--visible');
    //     });
    // });

    const dropDownButton = dropDownWrapper.querySelector('.dropdown__button');
    const dropDownList = dropDownWrapper.querySelector('.dropdown-list');
    const dropDownListItems = dropDownList.querySelectorAll('.dropdown-list__item');
    const dropDownInput = dropDownWrapper.querySelector('.dropdown__input');

    dropDownButton.addEventListener('click', function () {
        dropDownList.classList.toggle('dropdown-list--visible');
    });

    dropDownListItems.forEach(function (listItem) {
        listItem.addEventListener('click', function (e) {
            e.stopPropagation();
            dropDownButton.innerText = this.innerText;
            dropDownInput.value = this.dataset.value;
            dropDownList.classList.remove('dropdown-list--visible');

            if (this.classList.contains('dropdown-list__item--files_true')) {
                console.log("GOGO!!!!");
                ddFilesCountInPageToSearch.value = this.dataset.value;
                filesDropdownForm.submit();
            }
        });
    });

    document.addEventListener('click', function (e) {
        if (e.target !== dropDownButton) {
            dropDownList.classList.remove('dropdown-list--visible');
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab' || e.key === 'Escape') {
            dropDownList.classList.remove('dropdown-list--visible');
        }
    });

});


// Search

let searchButton = document.querySelector('.header-bottom-wrap-search');
let searchButtonImg = document.querySelector('.header-bottom-wrap-search-btn__img');
let searchButtonDesc = document.querySelector('.header-bottom-wrap-search-btn__desc');
let searchLine = document.querySelector('.header-bottom-wrap-search-hidden');
let headerMenu = document.querySelector('.header-bottom-wrap-menu');
let headerDownloadBtn = document.querySelector('.production-top-right__btn');


searchButton.addEventListener('click', function (e) {
    e.stopPropagation();
    searchButton.classList.add('active');
    searchLine.classList.add('header-bottom-wrap-search-visible');
    headerMenu.classList.add('header-bottom-wrap-menu-hidden');
    headerDownloadBtn.classList.add('active');
});

document.addEventListener('click', function (e) {
    if ((e.target !== searchButton) || (e.target !== searchButtonImg) || (e.target !== searchButtonDesc) || (e.target !== searchLine)) {
        // console.log('Document click');
        searchLine.classList.remove('header-bottom-wrap-search-visible');
        headerMenu.classList.remove('header-bottom-wrap-menu-hidden');
        headerDownloadBtn.classList.remove('active');
    }
});