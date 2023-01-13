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
        id('entrada_1').focus();
}
</script>
<style type="text/css">
    * { margin: 0; padding: 0; border: 0; }
    input { background: #fff; border: 1px solid #ccc; padding: 2px;}
    #teclado { width: 940px; }
    #teclado fieldset  { width: 689px; text-align: center; float: left; margin: 2px;}
    #teclao #text {float: left; width: 940px; margin-top: 20px; }
    #teclado #text input{width: 60px; height: 45px; margin-bottom: 15px; margin-right: 5px; margin-top: 10px; border-radius: 5px;}
    /*fieldset { margin: 5px; }*/
</style>
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
    </fieldset>
    <fieldset id="text">
        <input type="button" name="q" value="q" />
        <input type="button" name="w" value="w" />
        <input type="button" name="e" value="e" />
        <input type="button" name="r" value="r" />
        <input type="button" name="t" value="t" />
        <input type="button" name="y" value="y" />
        <input type="button" name="u" value="u" />
        <input type="button" name="i" value="i" />
        <input type="button" name="o" value="o" />
        <input type="button" name="p" value="p" />

        <input type="button" name="a" value="a" />
        <input type="button" name="s" value="s" />
        <input type="button" name="d" value="d" />
        <input type="button" name="f" value="f" />
        <input type="button" name="g" value="g" />
        <input type="button" name="h" value="h" />
        <input type="button" name="j" value="j" />
        <input type="button" name="k" value="k" />
        <input type="button" name="l" value="l" />
        <input type="button" name="ç" value="ç" />

        <input type="button" name="z" value="z" />
        <input type="button" name="x" value="x" />
        <input type="button" name="c" value="c" />
        <input type="button" name="v" value="v" />                      
        <input type="button" name="b" value="b" />
        <input type="button" name="n" value="n" />
        <input type="button" name="m" value="m" />

        <a href="cadastro.php" class="primary-btn"" />Apagar <span class="lnr lnr-arrow-left"></span></a>
        <!--input type="reset" name="reset" value= "Limpar" style="width:60px" /-->
        <input type="button" name="espaço" value= " " style="width:465px" />
    </fieldset>
</fieldset>