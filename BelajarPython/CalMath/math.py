def kuadrat():
    a = int(input("masukkan nilai a : "))
    b = int(input("masukkan nilai b : "))
    c = int(input("masukkan nilai c : "))

    print("\n")
    print("soal : ")
    print(f"y = {a}x** + {b}x + {c}")

    print("\n")
    print("mencari nilai x")
    x = -b/(2*a)
    print(f"nilai x adalah = {x}")

    print("\n")
    print("penyelesaian")
    print(f"y = ({a}.{x}**) + ({b}.{x}) + {c}")

    a1 = a * (x**2)
    b1 = b * x

    hasil = a1 + b1 + c

    print("\n")
    print(f"x = {x}")
    print(f"y = {hasil}")

kuadrat()