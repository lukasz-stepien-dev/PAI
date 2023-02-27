const paragraphs = document.getElementsByTagName("p");

const date = new Date();

paragraphs[0].textContent = `Czas lokalny ${date.toString()}`;
paragraphs[1].textContent = `Czas uniwersalny ${date.toGMTString()}`;
paragraphs[2].textContent = `Czas regionalny ${date.toLocaleString()}`;