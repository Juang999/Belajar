import os

def pertambahan(nilai1, nilai2):
    hasil = nilai1 + nilai2
    print(f"hasil dari {nilai1} + {nilai2} = {hasil}")

def pengurangan(nilai1, nilai2):
    hasil = nilai1 - nilai2
    print(f"hasil dari {nilai1} - {nilai2} = {hasil}")

def perkalian(nilai1, nilai2):
    hasil = nilai1 * nilai2
    print(f"hasil dari {nilai1} * {nilai2} = {hasil}")

def pembagian(nilai1, nilai2):
    hasil = nilai1 / nilai2
    print(f"hasil dari {nilai1} / {nilai2} = {hasil}")

while True:
    os.system("clear")
    print("--=[ KALKULATOR SEDERHANA ]=--")
    print("\n")
    print("1. pertambahan")
    print("2. pengurangan")
    print("3. perkalian")
    print("4. pembagian")
    print("\n")
    pilihan = int(input("pilihan > "))

    if pilihan == 1:
        nilai_1 = int(input("masukkan nilai pertama : "))
        nilai_2 = int(input("masukkan nilai kedua : "))

        pertambahan(nilai_1, nilai_2)

    elif pilihan == 2:
        nilai_1 = int(input("masukkan nilai pertama : "))
        nilai_2 = int(input("masukkan nilai kedua : "))

        pengurangan(nilai_1, nilai_2)

    elif pilihan == 3:
        nilai_1 = int(input("masukkan nilai pertama : "))
        nilai_2 = int(input("masukkan nilai kedua : "))

        perkalian(nilai_1, nilai_2)

    elif pilihan == 4:
        nilai_1 = int(input("masukkan nilai pertama : "))
        nilai_2 = int(input("masukkan nilai kedua : "))

        pembagian(nilai_1, nilai_2)

    else:
        print("pilihan tidak ada!!!")
        break

    print("\n")
    pilih = str(input("ingin diulangi [y/n]? "))

    if pilih == "n":
        print("terimakasih telah menggunakan tools kami :)")
        break

    print("\n")