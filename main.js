
const btnLogout = document.querySelectorAll('.btn-logout');
const modal = document.querySelector('.modal')

document.addEventListener('DOMContentLoaded', function(){
    btnLogout.forEach(function (button){
        button.addEventListener('click', function(e){
            e.stopPropagation();
            if(modal.style.display === 'block'){
                modal.style.display = 'none';
            }else{
                modal.style.display = 'block';
            }
        })
    })

    


window.addEventListener('click', function(event){
    if(event.target !== modal && !modal.contains(event.target) && modal.style.display === 'block'){
        modal.style.display = 'none';
    }
});
})

