def penjumlahan(*list_angka):
    total = 0
    for jumlah in list_angka:
        total = total + jumlah
    
    return (list_angka, total)

list_angka, hallo = penjumlahan(10, 10)

print(f"hasil dari {list_angka} adalah {hallo}")
