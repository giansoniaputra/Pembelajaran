var noAngkot = 1;
var jmlAngkot = 10;
var angkotBeroperasi = 6;


for(noAngkot ; noAngkot <= jmlAngkot; noAngkot++) { 
    if(noAngkot <= angkotBeroperasi){
        console.log('Angkot No.' + noAngkot + ' Beroperasi dengan Baik.' );
    } else if(noAngkot === 8) {
        console.log('Angkot No.' + noAngkot +' Sedang Lembur.' );
    } else {
        console.log('Angkot No.' + noAngkot +' Sedang Tidak Beroperasi.' );
    }

}