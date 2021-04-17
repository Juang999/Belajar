import confunc

#list dictionary
daftar_kontak = []
daftar_kontak.append({
    "nama": "Juang",
    "email": "juangraharjo007@gmail.com",
    "telepon": "081577802550"
})

while True:
    print("--[ Kontak ]=--")
    print("\n")
    print("1. Lihat Kontak")
    print("2. Tambah Kontak")
    print("3. Hapus Kontak")
    print("4. Cari Kontak")
    print("0. Keluar")
    pilih = int(input("pilihan > "))

    if pilih == 0:
        print("terimakasih telah menggunakan tools ini :)")
        break

    elif pilih == 1:
        confunc.display_kontak(daftar_kontak)

    elif pilih == 2:
        kontak = confunc.new_kontak()
        daftar_kontak.append(kontak)

    elif pilih == 3:
        confunc.delete_kontak(daftar_kontak)

    elif pilih == 4:
        confunc.find_kontak(daftar_kontak)

    else: 
        print("pilihan tidak ada!!!")
        break

    