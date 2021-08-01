var btn = document.getElementById('btn_form_edit');
var form = document.getElementById('form_edit');

btn.addEventListener("click", function(e){
    e.preventDefault();
    form.style.display = 'block';
})