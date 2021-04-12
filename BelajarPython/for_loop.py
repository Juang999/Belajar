from pprint import pprint

#rumah makan padang
pelanggan = ["ilahaka", "genta", "fauzan", "juang", "dzul"]

for nama in pelanggan:
    print(nama)

pilih = str(input("masukkan nama yang ingin anda hapus : "))

pelanggan.remove(pilih)

nomor = 1
for nama in pelanggan:
    print(f"{nomor=+}. {pilih}")
    