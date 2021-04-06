pilihan = ""

while pilihan != "n":
    print("[ kalkulator sederhana ]")
    print("\n")
    print("1. tambah")
    print("2. kurang")
    print("3. kali")
    print("4. bagi")
    print("\n")

    pilih = int(input("pilihan = "))

    if pilih == 1:
        nilai_1 = int(input("nilai pertama : "))
        nilai_2 = int(input("niali kedua : "))

        hasil = nilai_1 + nilai_2

        print(f"hasil {nilai_1} + {nilai_2} = {hasil}")

    elif pilih == 2:
        nilai_1 = int(input("nilai pertama : "))
        nilai_2 = int(input("niali kedua : "))

        hasil = nilai_1 - nilai_2

        print(f"hasil {nilai_1} - {nilai_2} = {hasil}")

    elif pilih == 3:
        nilai_1 = int(input("nilai pertama : "))
        nilai_2 = int(input("niali kedua : "))

        hasil = nilai_1 * nilai_2

        print(f"hasil {nilai_1} * {nilai_2} = {hasil}")

    elif pilih == 4:
        nilai_1 = int(input("nilai pertama : "))
        nilai_2 = int(input("niali kedua : "))

        hasil = nilai_1 / nilai_2

        print(f"hasil {nilai_1} / {nilai_2} = {hasil}")

    else:
        print("maaf pilihan tidak ada!!")

    pilihan = str(input("ingin diulangi [y/n]? "))