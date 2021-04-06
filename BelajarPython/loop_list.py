nama = []
umur = []

banyak = int(input("masukkan banyak data : "))

for hello in range(0, banyak):
    print(f"data ke {hello}")
    input_nama = str(input("nama : "))
    input_umur = int(input("umur : "))

    print("\n")

    nama.append(input_nama)
    umur.append(input_umur)

print("\n")

for i in range(0, len(nama)):
    data_nama = nama[i]
    data_umur = umur[i]
    print(f"nama {data_nama} berumur {data_umur}")