const a = document.getElementById("a")
const b = document.getElementById("b")
const button = document.getElementsByTagName("a")[0]

button.addEventListener("click", (e) => {
    document.getElementById("result").value = a.value * b.value
    e.preventDefault()
}, false)
