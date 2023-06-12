const toggleBtn = document.querySelector('#checkboxInput');
const divList = document.querySelector(".secondCourse");

toggleBtn.addEventListener('click', ()=>{
    if(divList.style.display === 'none'){
        divList.style.display = 'none';
    }
    else{
        divList.style.display = 'block'
    }
})