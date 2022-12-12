document.querySelector('button').addEventListener('click', () => {
    const inputPrice = document.querySelector('#price');
    const inputMembers = document.querySelector('#members');
    const selectTip = document.querySelector('#tip');
    const error = document.querySelector('#error');
    const costInfo = document.querySelector('#cost-info')

    if (inputPrice.value == '' || inputMembers.value == '') {
        costInfo.style.display = 'none';
        error.textContent = "Wypełnij wszystkie pola!";
    } else {
        costInfo.style.display = 'block';
        error.textContent = '';
        document.querySelector('#cost').textContent = Math.round(((inputPrice.value * (1.0 + parseFloat(selectTip.options[selectTip.selectedIndex].value))) / inputMembers.value) * 100) / 100
    }
})