$(document).ready(function () {
    var form = $('.emailform');

    /*console.log(form.serialize());*/


    form.submit(function (e) {
        e.preventDefault();

        var a = $("input[name='name']").val();
        var b = $("input[name='email']").val();
        var c = $("input[name='movil']").val();
        var d = $("input[name='website']").val();
        var e = $("textarea[name='comment']").val();
        var myObj = [a, b, c, d, e];
        //myObj[0].push("name");                       

        $(form).find("input[type='submit']").addClass('disabled');

        if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "", e == null || e == "") {
            $(form).append('<div class="alert alert-warning" role="alert">Por favor complete todos los campos :/ </div>');
            setTimeout(function () {
                $(form).children('.alert').remove();
            }, 3000);
            return false;
        }
        /*
        if(!$(form).valid()){
            return
        }*/
        else {
            $.ajax({
                url: "{{ route('contacto.store') }}",
                method: 'POST',
                data: form.serialize(),
                dataType: 'json',
                success: function (msg) {
                    $(form).find("input[type='text'], input[type='tel'], input[type='email'], textarea").val("").attr('disabled', true);
                    $(form).append('<div class="alert alert-success" role="alert">Gracias por contactarnos :)</div>');
                    setTimeout(function () {
                        $(form).children('.alert').remove();
                        $(form).find("input[type='submit']").removeClass('disabled');
                        $(form).find("input[type='text'], input[type='tel'], input[type='email'], textarea").removeAttr('disabled');
                    }, 3000);

                },
                error: function (msg) {
                    $(form).append('<div class="alert alert-danger" role="alert">Su mensaje no fue enviado, intente mas tarde.</div>')
                }
            });
        }
    });
});