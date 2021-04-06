from pprint import pprint

#rumah makan padang
pelanggan = ["ilahaka", "genta", "fauzan", "juang", "dzul"]

for nama in pelanggan:
    print(nama)

pilih = str(input("masukkan nama yang ingin anda hapus : "))

pelanggan.remove(pilih)

for nama in pelanggan:
    print(nama)
    