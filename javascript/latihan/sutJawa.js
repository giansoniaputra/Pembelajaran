//----------------------------------- KODINGAN SENDIRI ------------------------------------

// //menangkap pilihan player
// var y = true;
// while(y) {
    
// var p = prompt('Pilih : Gajah, Semut, Orang');

// //menangkap pilihan komputer
// var comp = Math.random();

//     if(comp < 0.34){
//         comp = 'Gajah';
//     } else if (comp >= 0.34 && comp < 0.67){
//         comp = 'Orang';
       
//     } else {
//         comp = 'Semut';
//     }
//     console.log(comp);

// //Menentukan Rules

//     if(p == comp){
//         alert('Pilihan Seri');
//     } else if (p == 'Gajah' && comp == 'Semut'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Kalah');
//     } else if (p == 'Semut' && comp == 'Gajah'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Menang');
//     } else if (p == 'Gajah' && comp == 'Orang'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Menang');
//     } else if (p == 'Orang' && comp == 'Gajah'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Kalah');
//     } else if (p == 'Orang' && comp == 'Semut'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Memang');
//     } else if (p == 'Semut' && comp == 'Orang'){
//         alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda Kalah');
//     } else if(p !== 'Gajah' && p !== 'Semut' && p !== 'Orang') {
//         alert('Error :\nSilahkan Pilih sesuai dengan Roles\ndan Pastikan Hurup awalnya Besar!');
//     }
// //Mengulangi
//     y = confirm('Lagi?');
// }


//------------------------------------------- KODINGAN PAK SANDHIKA --------------------------------



var y = true;
while(y) {
    
var p = prompt('Pilih : Gajah, Semut, Orang');

//menangkap pilihan komputer
var comp = Math.random();

    if(comp < 0.34){
        comp = 'Gajah';
    } else if (comp >= 0.34 && comp < 0.67){
        comp = 'Orang';
       
    } else {
        comp = 'Semut';
    }
    console.log(comp);

//Menentukan Rules
var hasil
    if(p == comp){
        hasil = 'SERI'
    } else if (p == 'Gajah'){
        hasil = (comp == 'Orang') ? 'Menang' : 'Kalah';
    } else if (p == 'Semut'){
        hasil = (comp == 'Orang') ? 'Kalah' : 'Menang';
    } else if (p == 'Orang'){
        hasil = (comp == 'Semut') ? 'Menang' : 'Kalah';
    } else {
        hasil = 'Kamu Memasukan Pilihan Yang Salah';
    }

// Hasil
alert('Pilihan Komputer : '+comp+'\nPilihan Anda : '+p+'\nAnda '+hasil);
//Mengulangi
    y = confirm('Lagi?');
}

alert('terimakasih sudah bermain');



    