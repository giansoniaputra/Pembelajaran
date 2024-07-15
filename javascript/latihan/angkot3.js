var noAngkot = 1;
var jmlAngkot = 10;
var angkotBeroperasi = 6;


for(noAngkot ; noAngkot <= jmlAngkot; noAngkot++) { 
    if(noAngkot <= angkotBeroperasi){
        console.log('Angkot No.' + noAngkot + ' Beroperasi dengan Baik.' );
    } else {
        console.log('Angkot No.' + noAngkot +' sedang tidak beroperasi.' );
    }

}