def create_html(tag, note, href="www.bingo.com"):
    print(f"<{tag} href='{href}'>{note}</{tag}>")


tag = str(input("masukkan tag untuk html : "))
note = str(input("masukkan note untuk html : "))
href = str(input("masukkan link untuk html : "))

create_html(tag, note, href)