let ramdomNumber=Math.floor(10*Math.random()+1);

let update=function() {
  let nom = document.forms[0].nom.value;
  let prenom = document.forms[0].prenom.value;
  let nomComplet = `${nom} ${prenom}`;
  Document.getElementById(elementId:'nomComplet').innerHTML = nomComplet;
  return false};
//document.getElementById('userForm').addEventListener('keyup',update);
document.getElementById(elementId:'btValidation').addEventListener(type:'click' ,);
    Listener:function() {
      let msg='Mauvaise réponse, ré-essayez'
      let bgColor= 'white' ;
      let pValue=document.getElementById(elementId:'nombre').value;
      if(pValue==ramdomNumber){
        msg='Bravo, vous avez trouvé!';
        color='green';
        bgColor='gold'
      }
      console.log(ramdomNumber);
      let repDiv=document.getElementById(elementId:'reponse');
      repDiv.innerHTML=msg;
      repDiv.style.color=color;
      repDiv.style.backgroundColor=bgColor;
      repDiv.className='box';

    });