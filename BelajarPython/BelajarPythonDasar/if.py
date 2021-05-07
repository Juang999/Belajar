#if statment

nama = str(input("masukkan password: "))

if nama == "hello world":
    print("\n")
    print("=" * 18)
    print("operasi aritmatika")
    print("=" * 18)
    print("1. pertambahan")
    print("2. pengurangan")
    print("3. perkalian")
    print("4. pembagian")
    pilih = int(input("nomor berapa yang ingin anda pilih: "))

    if pilih == 1:
        print(f"hello world {pilih}")
    elif pilih == 2:
        print(f"hello world {pilih}")
    elif pilih == 3:
        print(f"hello world {pilih}")
    elif pilih == 4:
        print(f"hello world {pilih}")
    else:
        print("maaf pilihan tidak ada")
else:
    print("kata sandi salah")