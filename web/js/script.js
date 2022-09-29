$(document).ready(function (){
    $('#arm').mask('00-00000');
    $('.onlyinp').on('input',function(){
        $(this).val(this.value.replace(/[^0-9]/g, ''));
        this.value = this.value.substr(0, 16);
    })

})




