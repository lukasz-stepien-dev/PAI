for (let i = 1; i < 11; i++) {
    for (let a = 1; a < 11; a++) {
        if (a * i < 10 && a * i > 0) {
            document.write(a * i + "&nbsp;&nbsp;&nbsp;")
        } else {
            document.write(a * i + " ")
        }
    }
    document.write("<br>")
}