const Messages = [
    {
        productNo: '1',
        productName: 'Kum Penunjang anda sudah memenuhi syarat untuk naik jabatan.',
        productNumber: '12 Mar'
    }
]

Messages.forEach(message => {
    const tr = document.createElement('tr')
    const trContent = `
                        <td>${message.productName}</td>
                        <td>${message.productNumber}</td>
                        <td><button class="primary detail-button" data-id="${message.productNo}">Detail</button></td>
                    `
    tr.innerHTML = trContent;
    document.querySelector('.pesan-box table tbody').appendChild(tr);
})