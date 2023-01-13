<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>33ª Salão de Artesanato da Paraíba</title>
                <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style2.css" rel="stylesheet" />
        <!-- Teclado JS-->
        <script type="text/javascript" src="js/teclado.js"></script>
        <script type="text/javascript">
            function id( el ){
                 return document.getElementById( el );
            }
            function val( destino, valor ){
                 destino.value += valor;
            }
            var focus = false;
            window.onload = function(){
                
            var botoes = id('teclado').getElementsByTagName('input');
               for( var i=0; i<botoes.length; i++ ){
                   botoes[i].onclick = function(){
                     if( !focus ){ alert('coloque o foco em algum input');exit(); }
                        val( id( focus ), this.value );
                        id( focus ).focus();
                     }
                }
             var inputs = id('area').getElementsByTagName('input');
               for( var i=0; i<inputs.length; i++ ){
                  inputs[i].onfocus = function(){
                     focus = this.id;
                  }
               }
             id('cpf').focus();
             }
             /* validar CPF */
            function TestaCPF(cpf) {
                var Soma;
                var Resto;
                Soma = 0;
            if (strCPF == "00000000000") return false;

            for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
            Resto = (Soma * 10) % 11;

                if ((Resto == 10) || (Resto == 11))  Resto = 0;
                if (Resto != parseInt(cpf.substring(9, 10)) ) return false;

            Soma = 0;
                for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
                Resto = (Soma * 10) % 11;

                if ((Resto == 10) || (Resto == 11))  Resto = 0;
                if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
                return true;
            }
            /*var strCPF = "12345678909";
            alert(TestaCPF(strCPF)); */

            function _cpf(cpf) {
                cpf = cpf.replace(/[^\d]+/g, '');
                if (cpf == '') return false;
                if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                return false;
                add = 0;
                for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
                rev = 11 - (add % 11);
                if (rev == 10 || rev == 11)
                rev = 0;
                if (rev != parseInt(cpf.charAt(9)))
                return false;
                add = 0;
                for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
                rev = 11 - (add % 11);
                if (rev == 10 || rev == 11)
                rev = 0;
                if (rev != parseInt(cpf.charAt(10)))
                return false;
                return true;
                }

                function validarCPF(el){
                    if( !_cpf(el.value) ){
                    alert("Digite um CPF válido! " + el.value + ".");
                    // apaga o valor
                    el.value = "";
                    }
                }
         </script>
         <style type="text/css">
            * { margin: 0; padding: 0; border: 0; }
            input { background: #fff; border: 1px solid #ccc; padding: 2px;}
            #teclado { width: 1000px; }
            #teclado fieldset  { width: 930px; text-align: center; float: left; margin: 2px;}
            #teclado #numbers { float: left; width: 600px; }
            #teclado #numbers input {width: 75px; height: 55px; border-radius: 40px; font-size: 20px; margin-top: 10px;margin-bottom: 10px; margin-right: 10px;}
            fieldset { margin: 5px; }
         </style>
    </head>
    <body>
        <!-- Page Content-->
        <section>
            <div class="container px-4 px-lg-5">
                <p style="text-align: center;">
                    <img src="imagens/arte.jpeg" width="26%"/>
                </p>
                <header> 
                        <div id="topo">
                         <p style="text-align: center;"><h2><b>Que Mestre é Esse?</b></h2></p>
                        </div>
                </header>
                <!--h5 style="text-align: center; color: aliceblue;">Coloque aqui sua opinião sobre qual o mestre da nossa galeria você gostaria de conhecer melhor. O mestre mais votado, ao final do 33° salão, terá sua vida e obra registrada em um documentário.</h5-->
            </div>
            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content">
                                <h4 style="text-align: center; color: aliceblue;">Confirme seu CPF para ter acesso ao painel de votação</h4>
                                <!--  -->
                                <form action="mestres.php" method="post"  >
                                    <fieldset id="area">
                                    <div class="input-group"> 
                                        <input type="number" name="cpf" id="cpf" \ pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \
                                        title="Digite apenas os números do CPF" minlength="11" class="form-control" maxlength="14" placeholder="Digite seu CPF" onmouseout="validarCPF(this)" required > <span class="input-group-btn"> <button class="btn" type="submit" >Confirmar</button> 
                                    </div>
                                    </fieldset>
                                    <fieldset id="teclado">
                                        <fieldset id="numbers">
                                            <input type="button" name="1" value="1" />
                                            <input type="button" name="2" value="2" />
                                            <input type="button" name="3" value="3" />
                                            <input type="button" name="4" value="4" />
                                            <input type="button" name="5" value="5" />
                                            <input type="button" name="6" value="6" />
                                            <input type="button" name="7" value="7" />
                                            <input type="button" name="8" value="8" />
                                            <input type="button" name="9" value="9" />
                                            <input type="button" name="0" value="0" />
                                            <input type="reset" name="0" value="Limpar" />
                                        </fieldset>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
