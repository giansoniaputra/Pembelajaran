const p4 = document.querySelector('#b p');
p4.style.color= 'green';
p4.style.fontSize= '3em';


const li = document.querySelector('#b li:nth-child(2)');
li.style.backgroundColor = 'blue';

const p = document.querySelectorAll('p');
for (let i = 0 ; i < 3 ; i++){
p[i].style.backgroundColor = 'lightblue';
p[i].innerHTML = 'Kontrol'
}
