function calculator(){
    var pilihan = prompt("pilih perhitungan yang anda mau: ");
    
    var nilai1 = parseInt(prompt("masukkan nilai pertama: "));
    var nilai2 = parseInt(prompt("masukkan nilai kedua: "));

    if (pilihan == "+") {
        var hasilTambah = nilai1 + nilai2;
        alert(hasilTambah);
        var konfirmasi = confirm("terimakasih telah menggunakan tools ini!!! \n apakah ingin mengulangi?");
        if (konfirmasi == true) {
            calculator();
        } else {
            alert("datang lagi ya!!!");
        }
    } else if(pilihan == "-"){
        var hasilKurang = nilai1 - nilai2;
        alert(hasilKurang);
        var konfirmasi = confirm("terimakasih telah menggunakan tools ini!!! \n apakah ingin mengulangi?");
        if (konfirmasi == true) {
            calculator();
        } else {
            alert("datang lagi ya!!!");
        }
    } else if(pilihan == "*"){
        var hasilKali = nilai1 * nilai2;
        alert(hasilKali);
        var konfirmasi = confirm("terimakasih telah menggunakan tools ini!!! \n apakah ingin mengulangi?");
        if (konfirmasi == true) {
            calculator();
        } else {
            alert("datang lagi ya!!!");
        }
    } else if(pilihan == "/"){
        var hasilBagi = nilai1 / nilai2;
        alert(hasilBagi);
        var konfirmasi = confirm("terimakasih telah menggunakan tools ini!!! \n apakah ingin mengulangi?");
        if (konfirmasi == true) {
            calculator();
        } else {
            alert("datang lagi ya!!!");
        }
    } else {
        alert("piliihan tidak ada bodoh!!!");
    }
}

calculator();