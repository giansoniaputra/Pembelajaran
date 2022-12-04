const item = document.querySelector('#b ul li:nth-child(1)');
item.innerHTML = 'Hideung 1';

const judul = document.querySelector('#judul');
judul.innerHTML = 'Gian Sonia <input type="checkbox">';
judul.style.color = 'red';
judul.setAttribute('class', 'judul');

const a = document.querySelector('a');
a.removeAttribute('href');
a.classList.add('label');
a.classList.toggle('label');
