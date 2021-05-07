#Belajar list

nama = []

while True:
    tambah = input("masukkan nama : ")

    nama.append(tambah)

    pilihan = input("ulangi [y/n]?")
    if pilihan == 'n':
        print(f"jumlah nama dalam list ada {len(nama)}")
        print(nama)
        break