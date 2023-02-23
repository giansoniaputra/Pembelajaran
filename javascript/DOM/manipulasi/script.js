// //Manipulation part 1
// const item = document.querySelector('#b ul li:nth-child(1)');
// item.innerHTML = 'Hideung 1';

// const judul = document.querySelector('#judul');
// judul.innerHTML = 'Gian Sonia <input type="checkbox">';
// judul.style.color = 'red';
// judul.setAttribute('class', 'judul');

// const a = document.querySelector('a');
// a.removeAttribute('href');
// a.classList.add('label');
// a.classList.toggle('label');

//DOM Manipulation part2 (AppendChild)
    //Buat Element Baru
const pBaru = document.createElement('p');
const textBaru = document.createTextNode('Paragraf Baru');

pBaru.appendChild(textBaru);

const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);




//DOM Manipulation part2 (InsertBefore)

const liBaru = document.createElement('li');
const textLiBaru = document.createTextNode('Item Baru');

liBaru.appendChild(textLiBaru);
const ul = document.querySelector('section#b ul');
const li2 = ul.querySelector('li:nth-child(2)');

ul.insertBefore(liBaru, li2);



//DOM Manipulation part2 (Remove Child)

const link = document.getElementsByTagName('a')[0];

sectionA.removeChild(link);

//DOM Manipulation part2 (Remove Child)

const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');

const h2Baru = document.createElement('h2');
const textH2 = document.createTextNode('Judul Baru');

h2Baru.appendChild(textH2);

sectionB.replaceChild(h2Baru, p4);


