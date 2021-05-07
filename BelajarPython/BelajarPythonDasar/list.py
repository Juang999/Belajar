
murid = [
    "juang",
    "genta",
    "dzul",
    "ilahaka",
    "ilahana",
]

print("=" * 11)
print("nama santri")
print("=" * 11)

print("\n")
print(f"1. {murid[0]}")
print(f"2. {murid[1]}")
print(f"3. {murid[2]}")
print(f"4. {murid[3]}")
print(f"5. {murid[4]}")
print("\n")

print("--=[ CRUD DASAR PYTHON ]=--")

print("1. tambah data")
print("2. kurang data")
print("3. ubah data")
print("\n")

pilih = int(input("masukkan mode > "))

if pilih == 1:
    nama = str(input("masukkan nama : "))
    murid.append(nama)
    print(murid)
elif pilih == 2:
    print("\n")
    print(f"1. {murid[0]}")
    print(f"2. {murid[1]}")
    print(f"3. {murid[2]}")
    print(f"4. {murid[3]}")
    print(f"5. {murid[4]}")
    print("\n")

    nama = str(input("masukkan nama : "))

    murid.remove(nama)
    print(murid)

elif pilih == 3:
    print("perhatian! angka dimulai dari angka 0")
    jumlah = len(murid)
    nomor = int(input("masukkan nomor : "))
    
    if nomor > jumlah:
        print("maaf, id santri tidak ada")
        exit()
    
    nama = str(input("masukkan nama : "))
    
    murid[nomor] = nama

    print(murid)

