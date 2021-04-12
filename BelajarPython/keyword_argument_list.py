def create_html(tag, isi, **attributes):
    
    html = f"<{tag} "

    for key, value in attributes.items():
        html = html + f"{key}='{value}'"

    html = html + f">{isi}<{tag}>"

    return html

html = create_html("h1", "hello python", href="www.google.com")
print(html)

html = create_html("h1", "hello python", style="margin-top:15px;")
print(html)
    