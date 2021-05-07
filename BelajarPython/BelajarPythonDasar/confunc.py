def display_kontak(daftar_kontak):
    for kontak in daftar_kontak:
        print("\n")
        print("===========================")
        print(f"Nama : {kontak['nama']}")
        print(f"Email : {kontak['email']}")
        print(f"Telepon : {kontak['telepon']}")
        print("===========================")
        print("\n")

def new_kontak():
    nama = str(input("nama : "))
    email = str(input("email : "))
    telepon = str(input("telepon : "))

    kontak = {
        "nama": nama,
        "email": email,
        "telepon": telepon,
    }

    return kontak

def delete_kontak(daftar_kontak):
    telepon = input("masukkan nomor telepon yang ingin dihapus : ")

    index = -1

    for i in range(0, len(daftar_kontak)):
        kontak = daftar_kontak[i]
        if telepon == kontak["telepon"]:
            index = i
            break

    if index == -1:
        print("kontak tidak ditemukan !!!")
    
    else:
        del daftar_kontak[index]
        print("kontak berhasil di hapus!!!")

    
def find_kontak(daftar_kontak):
    nama_pencarian = input("masukkan nama : ")

    for kontak in daftar_kontak:
        nama = kontak["nama"]
        if nama.lower().find(nama_pencarian.lower()) != -1:
            print("\n")
            print("===========================")
            print(f"Nama : {kontak['nama']}")
            print(f"Email : {kontak['email']}")
            print(f"Telepon : {kontak['telepon']}")
            print("===========================")
            print("\n")