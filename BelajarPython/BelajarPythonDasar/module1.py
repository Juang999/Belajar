import calfunc
import os

while True:
    os.system("clear")
    print("--=[ Kalkulator Dasar ]=--")
    print("\n")
    print("1. Pertambahan")
    print("2. Pengurangan")
    print("3. Perkalian")
    print("4. Pembagian")
    print("5. Keluar")
    print("\n")
    pilih = int(input("Pilihan > "))

    if pilih == 1:
        os.system("clear")
        print("[ PERTAMBAHAN ]")
        print("\n")
        nilai1 = int(input("masukkan nilai pertama = "))
        nilai2 = int(input("masukkan nilai kedua = "))
        calfunc.pertambahan(nilai1, nilai2)
        
    elif pilih == 2:
        os.system("clear")
        print("[ PENGURANGAN ]")
        print("\n")
        nilai1 = int(input("masukkan nilai pertama = "))
        nilai2 = int(input("masukkan nilai kedua = "))
        calfunc.pengurangan(nilai1, nilai2)

    elif pilih == 3:
        os.system("clear")
        print("[ PERKALIAN ]")
        print("\n")
        nilai1 = int(input("masukkan nilai pertama = "))
        nilai2 = int(input("masukkan nilai kedua = "))
        calfunc.perkalian(nilai1, nilai2)

    elif pilih == 4:
        os.system("clear")
        print("[ PEMBAGIAN ]")
        print("\n")
        nilai1 = int(input("masukkan nilai pertama = "))
        nilai2 = int(input("masukkan nilai kedua = "))
        calfunc.pembagian(nilai1, nilai2)

    elif pilih == 5:
        os.system("clear")
        print("terimakasih telah menggunakan tools ini :)")
        print("\n")
        break

    else:
        print("pilihan tidak ada!!!")
        print("\n")
        break
    
    print("\n")
    pilih1 = str(input("ingin diulangi Y/N ? "))
    
    if pilih1 == "N":
        os.system("terimakasih telah menggunakan tools ini :)")
        print("\n")
        break