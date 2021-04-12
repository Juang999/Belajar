def penjumlahan(*angka):
    total = 0
    for list_angka in angka:
        total = total + list_angka
    print(f"total dari {angka} adalah {total}")

jumlah = int(input("masukkan jumlah : "))

for ulang in range(0, jumlah):
    masukkan = int(input("masukkan nilai : "))
    print(masukkan)

penjumlahan(10, 100)