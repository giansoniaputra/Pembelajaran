// DOM SELECTION
// getElementById => ngambil element

const judul = document.getElementById('judul');

judul.style.color = 'white';
judul.style.backgroundColor = '#333';
judul.innerHTML = 'Gian Sonia';


//document.getElementByTag => mengembalikan HTML colection

const p = document.getElementsByTagName('p');
for(let i = 0; i < p.length ; i++){
    p[i].style.backgroundColor = 'lightgreen';
}

//document.getElementsByClassName();

const p1 =document.getElementsByClassName('p1')[0];

p1.innerHTML = 'ini dirubah oleh javascript';


