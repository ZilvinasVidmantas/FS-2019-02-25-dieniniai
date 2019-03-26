// -----------------------Elementų prijungimas - Node appendence--------------------------
// let tevas = document.querySelector('#parent'); // Iš dokumento ištraukiamas elementas
// let vaikai = document.querySelectorAll('.child'); // Iš dokumento ištraukiami elementai

// console.log(tevas);   // Spausdinimas į konsolę
// console.log(vaikai);  // Spausdinimas į konsolę

// let prijungtas = document.createElement('div'); //   Sukuriamas naujas elementas
// prijungtas.className = 'child child-appended';  //   Uždedama:  elementui: class"..."
// prijungtas.innerHTML = 'Prijungtas';            //   Nustatomas elemento vidus
// tevas.appendChild(prijungtas);                  //   Sukurtas elementas prijungiamas į
//                                                 // tėvo galą

// let įjunktas = document.createElement('div');   //   Sukuriamas naujas elementas
// įjunktas.className = 'child child-prepended';   //   Uždedama:  elementui: class"..."
// įjunktas.innerHTML = 'Įjunktas';                //   Nustatomas elemento vidus
// tevas.insertBefore(įjunktas, vaikai[0]);        //   Sukurtas elementas prijungiamas į
//                                                 // tėvo priekį

// let prieš = document.createElement('div');   
// prieš.className = 'child child-before';   
// prieš.innerHTML = 'Prieš';            
// tevas.parentElement.insertBefore(prieš, tevas);    


// let po = document.createElement('div');   
// po.className = 'child child-after';   
// po.innerHTML = 'Po';            
// tevas.parentElement.insertBefore(po, tevas.nextSibling);   

// ------------------------Įvykių jutikliai - Event listeners--------------------------
// function btnTestCallbackFunction(){
//   console.log('Paspaudei mane :)');
// }

// function btnTestCallbackFunction2(){
//   console.log('Užvedei ant manęs :)');
// }

// let btnTest = document.querySelector('.js-btn-test');
// //              ↓ funkcija jutiklio uždėjimui;   ↓ ką vykdyti įvykus įvykiui
// btnTest.addEventListener('click', btnTestCallbackFunction);
// // ↑ kam dedamas jutiklis   ↑ įvykis, kuriam įvykus vykdoma funkcija 
// btnTest.addEventListener('mouseenter', btnTestCallbackFunction2);

document.querySelector('.js-btn-add-square').addEventListener('click', () => {
  let select = document.querySelector('[name=parent]');
  let parentColor = select.value;
  let parentSelector = '#parent-' + parentColor;
  let parent = document.querySelector(parentSelector);

  let newSquare = document.createElement('div');
  newSquare.style.backgroundColor = document.querySelector('[type=color]').value;
  newSquare.className = 'child';
  parent.appendChild(newSquare);
});

let form = document.querySelector('.js-form');
console.log(form.name.value);