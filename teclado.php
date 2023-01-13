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
   #teclado { width: 400px; }
   #teclado fieldset  { width: 330px; text-align: center; float: left; margin: 2px;}
   #teclado #numbers { float: left; width: 330px; }
   #teclado #numbers input {width: 95px; height: 40px; border-radius: 50px; font-size: 16px; margin-top: 10px;margin-bottom: 10px; margin-right: 10px;}
   fieldset { margin: 5px; }
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
        <input type="reset" name="0" value="Limpar" />
    </fieldset>
</fieldset>