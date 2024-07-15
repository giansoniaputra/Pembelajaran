// var angka = parseInt(prompt('Masukan Angka :'));

// switch(angka){
//     case 1 :
//         alert('Anda memasukan angka 1');
//         break;
//     case 2 :
//         alert('Anda memasukan angka 2');
//         break;
//     case 3 :
//         alert('Anda memasukan angka 3');
//         break;
//     case 4 :
//         alert('Anda memasukan angka 4');
//         break;
//     default :
//         alert('Angka yang anda masukan salah!');
//         break;
// }

var item = prompt('Masukan nama makanan/Minuman: \n (cth : nasi, daging, susu, hamburger, softdring)');

switch (item){
    case 'nasi' :
    case 'daging' :
    case 'susu' :
        alert('Makanan/Minuman Sehat!');
        break;
    case 'hamburger' :
    case 'softdring' :
        alert('Makanan/Minuman Tidak Sehat!');
        break;
    default :
        alert('Anda memasukan makanan atau minuman salah');
        break;
}