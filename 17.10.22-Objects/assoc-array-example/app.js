let phoneBook = new Array();
phoneBook["blank"] = "";
phoneBook["Kowalski"] = "123456789";
phoneBook["Malinowski"] = "987654321";
phoneBook["Nowak"] = "789123456";

function displatNumber(thePhoneBook, entry) {
    let theNumber = thePhoneBook[entry];
    document.getElementById("number").value = theNumber;
}

document.getElementById("select").addEventListener("change", function() {
    displatNumber(phoneBook, this.options[this.selectedIndex].value);
}, false);
