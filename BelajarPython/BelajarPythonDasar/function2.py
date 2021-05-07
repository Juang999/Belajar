def say_hello(nama):
    return f"hello {nama}"

def penjumlahan(*angka):
    hasil = 0

    for nomor in angka:
        hasil = hasil + nomor

    return hasil