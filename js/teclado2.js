var campo='nome';function init(){var sort=Math.random();if((sort>=0)&&(sort<0.1)){sort=0;}else if((sort>=0.1)&&(sort<0.2)){sort=1;}else if((sort>=0.2)&&(sort<0.3)){sort=2;}else if((sort>=0.3)&&(sort<0.4)){sort=3;}else if((sort>=0.4)&&(sort<0.5)){sort=4;}else if((sort>=0.5)&&(sort<0.6)){sort=5;}else if((sort>=0.6)&&(sort<0.7)){sort=6;}else if((sort>=0.7)&&(sort<0.8)){sort=7;}else if((sort>=0.8)&&(sort<0.9)){sort=8;}else{sort=9;}
var teclas=$('teclas').getElementsByTagName('a');var i;for(i=0;i<teclas.length;i++){teclas[i].firstChild.data=sort;sort++;sort=(sort>9)?0:sort;var click=function(v){$(campo).value+=teclas[v].firstChild.data;};addEvent(teclas[i],"click",click.bind(this,i));addEvent(teclas[i],"mouseover",esconde);addEvent(teclas[i],"mouseout",mostra);}}
function esconde(){var teclas=$('teclas').getElementsByTagName('a');var i;for(i=0;i<teclas.length;i++){teclas[i].className='esconde';}}
function mostra(){var teclas=$('teclas').getElementsByTagName('a');var i;for(i=0;i<teclas.length;i++){teclas[i].className='mostra';}}
function $(e){return document.getElementById(e);}
var $A=Array.from=function(iterable){if(!iterable)return[];if(iterable.toArray){return iterable.toArray();}else{var results=[];for(var i=0;i<iterable.length;i++)
results.push(iterable[i]);return results;}};Function.prototype.bind=function(){var __method=this,args=$A(arguments),object=args.shift();return function(){return __method.apply(object,args.concat($A(arguments)));};};function addEvent(obj,evType,fn){if(typeof obj=="string"){if(null==(obj=document.getElementById(obj))){throw new Error("Elemento HTML não encontrado. Não foi possível adicionar o evento.");}}
if(obj.attachEvent){return obj.attachEvent(("on"+evType),fn);}else if(obj.addEventListener){return obj.addEventListener(evType,fn,true);}else{throw new Error("Seu browser não suporta adição de eventos.");}}
addEvent(window,'load',init);