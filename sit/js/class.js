$('#email').change(function(e) {
 e.preventDefault()
 let v=$('#email').val()
 s(v)
})
function s(v) {
    $.ajax({
        url:'sit/js/hc.php',
        type:"POST",
        data: {'name':v},
        success:function (e) {
            if (e==='0') {
                $('button').attr('disabled','disabled')
                // console.log('a')
                alert('bu email bor');
            }
            else if(e==='1'){
                // console.log('v')
                $('button').removeAttr('disabled')

            }
        },
        error:function() {
            console.log('hato')
        }
    
    })
}
$('#form').on('submit',function(as){
as.preventDefault()
let b =$('#file')
    let u={
        'name':$('#name').val(),'nameb':$('#nameb').val(),"fam":$('#fam').val(),'famb':$('#famb').val(),
        
        'email':$('#email').val(),'parol':$('#parol').val(),'num':$('#yu').val(),'jins':$('#jins').val(),'text':$('#text').val()};
log(u,b)
})
function log(u,b) {
    $.ajax({
        url:'sit/js/hc.php',
        type:"POST",
        data:{'btn':u,'b':b},
        success:function(as) {
            console.log(as)
        }
    })
}