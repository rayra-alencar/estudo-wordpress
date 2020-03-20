

function navbarHanler() {
    if (document.querySelectorAll("#navbar").length > 0 && document.querySelectorAll("#navbar-handler").length > 0) {
        let res = document.querySelector("#navbar-handler").getBoundingClientRect();
        console.log("aaaa");

        if (res.top >= 0 && res.bottom <= (window.innerHeight || document.documentElement.clientHeight)) {
            document.querySelector("#navbar").style.background = "transparent";
            console.log("teste");
        }
    }
}
navbarHanler();


function menuBtnHandler() {

    if (document.querySelectorAll('.banner-horarios').length > 0) {
        // let menuBtn = document.querySelector('#btn-loja').getBoundingClientRect();

        if (document.querySelector('.banner-horarios').getBoundingClientRect().top != 1) {
            console.log("teste menu");
            document.querySelector('#container-btn').classList.add('nova');
            // document.querySelector('#container-btn').style.background = "#fff";
            // document.querySelector('#container-btn').style.position = "fixed";
            // document.querySelector('#container-btn').style.top = "0";
            // document.querySelector('#container-btn').style.right = "21px";

        }
    }

}
menuBtnHandler();


function primeiraEdicao() {

    let primeira = document.querySelector('#archive').firstElementChild;
    let primeiraRevista = primeira.firstElementChild;

    // $('#archive').firstElementChild;
    if (document.querySelectorAll("#img-revista").length > 0) {
        primeiraRevista.firstElementChild.classList.add('primeira');
    }
}
primeiraEdicao();



function revistasHandler() {
    let contador = 0;

    document.querySelectorAll('#revista').forEach(e => {
        contador = contador + 1;

        if (contador >= 9) {
            e.style.display = "none";
        }

    });
}
revistasHandler();



function verMais() {

    let cont = 0;

    if (document.querySelectorAll('#btn-vermais').length > 0) {
        document.querySelector('#btn-vermais').addEventListener('click', () => {

            //3 pra 1 linha de revistas, 7 pra duas
            if (cont >= 3) {
                cont = 0;
            }

            if (document.querySelectorAll('#revista').length > 0) {
                document.querySelectorAll('#revista').forEach(e => {

                    if (e.style.display == "none" && cont <= 3) {
                        e.style.display = "block";
                        cont = cont + 1;
                    }
                });
            }

        });
    }

}
verMais();



(function ($) {
    var primeiraRevista = $('.revista').first().find('a .img-revista');
    var divPrimeiraRevista = $('.revista').first();

    if ($('.img-revista').length > 0) {
        primeiraRevista.attr('id', 'primeira');
        divPrimeiraRevista.attr('id', 'primeira-revista');
    }

    var contador = 0;
    // var revistas = $('#revista');

    $('.revista').each(function () {

        contador += 1;

        if (contador >= 10) {
            $(this).hide();
        }

    });


    var cont = 0;

    if ($("#btn-vermais").length > 0) {

        $("#btn-vermais").click(function (e) {
            e.preventDefault();

            if (cont >= 3) {
                cont = 0;
            }

            if ($(".revista").length > 0 && cont <= 3) {
                $(".revista").not(':visible').each(function () {

                    if (cont <= 3) {
                        $(this).show("slow");
                        cont += 1;
                    }

                });
            }

        });

    }


})(jQuery);

