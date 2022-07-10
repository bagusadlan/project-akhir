const formDataDokumen = $('.data_dokumen')
const edit = $('.edit-button')
const addModal = document.querySelectorAll('.add-modal')
let addModalId, editModalId

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1
}

$('.detail-button').click(function () {
    $('body').addClass('overflow-none')
    var id = $(this).data('id')
    $('#modal-container' + id).removeClass('out').addClass('two')
})

$('.modal-container').click(function (e) {
    if (hasClass(addModal, 'two')) {
        e.stopPropagation()
    } else {
        $('body').removeClass('overflow-none')
        $(this).removeClass('two').addClass('out')
    }
})

$('.modal').click(function (e) {
    e.stopPropagation()
})

$('.button-close').click(function (e) {
    $('.edit-modal').addClass('out').removeClass('two')
    $('.add-modal').addClass('out').removeClass('two')
})

$('.close-modal-container').click(function (e) {
    $('.modal-container').addClass('out').removeClass('two')
    $('body').removeClass('overflow-none')
})

function closeAddModal(id) {
    $('#add-modal' + id).addClass('out').removeClass('two')
}

function closeEditModal(id) {
    $('#edit-modal' + id).addClass('out').removeClass('two')
}

$('.add-modal').click(function (e) {
    e.stopPropagation()
})

$('.add-button').click(function (e) {
    e.stopPropagation()
    addModalId = $(this).data('id')
    $('#add-modal' + addModalId).removeClass('out').addClass('two')
    addButtonClicked(addModalId)
})

function getAngkaKreditPerKategori() {
    $.ajax({
        url: base_url + '/Pendidikan/kategoriPendidikan',
        method: "GET",
        success: function (res) {
            console.log(res)

            $.each(JSON.parse(res), function (i, val) {
                console.log(i)
                insertAngkaKredit(val, i)
            })
        },
        error: function (res) {
            console.log(res)
        }
    })
}

function insertAngkaKredit(val, i) {
    $('#angka-kredit-perkategori' + i).html(val)
}

function editButtonClicked() {
    $('.edit-button').click(function (e) {
        e.stopPropagation()
        dokumenId = $(this).data('id')
        editModalId = $(this).data('id-bidang')
        console.log(editModalId)
        $('#edit-modal' + editModalId).removeClass('out').addClass('two')
        $.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        })
        $.ajax({
            url: base_url + '/EditDataKumPendidikan/getData' + editModalId,
            method: "POST",
            data: {
                id: dokumenId
            },
            // processData: false,
            dataType: 'json',
            // enctype: 'multipart/form-data',image.pngimage.png
            success: function (res) {
                console.log(res)
                $('.edit-nomor' + editModalId).val(dokumenId)
                $('.edit-program' + editModalId).val(res.PROGRAM)
                $('.edit-mata-kuliah' + editModalId).val(res.MATA_KULIAH)
                $('.edit-sks' + editModalId).val(res.SKS)
                $('.edit-kelas' + editModalId).val(res.KELAS)
                $('.edit-nama_perusahaan' + editModalId).val(res.NAMA_PERUSAHAAN)
                $('.edit-kategori_pembimbing' + editModalId).val(res.KATEGORI_PEMBIMBING)
                $('.edit-nama_mahasiswa' + editModalId).val(res.NAMA_MAHASISWA)
                $('.edit-jenis_tugasakhir' + editModalId).val(res.JENIS_TUGASAKHIR)
                $('.edit-kategori_penguji' + editModalId).val(res.KATEGORI_PENGUJI)
                $('.edit-nama_produk' + editModalId).val(res.NAMA_PRODUK)
                $('.edit-jenis_produk' + editModalId).val(res.JENIS_PRODUK)                 // 9
                $('.edit-judul_bahan_ajar' + editModalId).val(res.JUDUL_BAHAN_AJAR)         // 9
                $('.edit-nama_orasi_ilmiah' + editModalId).val(res.NAMA_ORASI_ILMIAH)       // 10
                $('.edit-kategori_pembimbing_dosen' + editModalId).val(res.KATEGORI_PEMBIMBING_DOSEN)   // 11
                $('.edit-kategori_kegiatan' + editModalId).val(res.KATEGORI_KEGIATAN)       // 12
                $('.edit-durasi_pengembangan_diri' + editModalId).val(res.DURASI_PENGEMBANGAN_DIRI)     // 13
                $('.edit-tahun_ajaran' + editModalId).val(res.TAHUN_AJARAN) 
                $('.edit-semester' + editModalId).val(res.SEMESTER)
                $('.edit-tempat' + editModalId).val(res.TEMPAT)
                $('.edit-tanggal' + editModalId).val(res.TANGGAL)
                $('.edit-keterangan' + editModalId).val(res.KETERANGAN)
                $.unblockUI()

                $('.form-edit-dokumen').submit(function (e) {
                    e.preventDefault()
                    $.blockUI({
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    })

                    var formEditData = new FormData(this)
                    $.ajax({
                        url: $(this).attr('action'),
                        method: "POST",
                        data: formEditData,
                        processData: false,
                        contentType: false,
                        enctype: 'multipart/form-data',
                        success: function (res) {
                            console.log(res)
                            $('.edit-modal').addClass('out').removeClass('two')
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 4000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
                            $.unblockUI()


                            Toast.fire({
                                icon: 'success',
                                title: 'Data Berhasil Diubah'
                            })

                            $.ajax({
                                url: base_url + '/GetAllAngkaKredit/getDokumenBidang' + editModalId + '/' + nipDosen,
                                method: "GET",
                                success: function (res) {
                                    console.log(res)
                                    $('#detail' + editModalId + ' > tr').remove();

                                    jQuery.each(JSON.parse(res), function (i, val) {
                                        let html = insertDetail(val, editModalId, i + 1)
                                        $('#detail' + editModalId).append(html)
                                    })

                                    getAngkaKreditPerKategori()
                                    editButtonClicked()
                                    insertAngkaKredit()
                                },
                                error: function (res) {
                                    console.log(res)
                                }
                            })
                        },
                        error: function (res) {
                            console.log(res)
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 6000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Data Gagal Diubah'
                            })
                        }
                    })
                })
            }
        })
    })
}

editButtonClicked()


function addButtonClicked(idBidang) {
    $('.input-field').val('')
    // $('.input-program' + editModalId).val('')
    // $('.input-mata-kuliah' + editModalId).val('')
    // $('.input-sks' + editModalId).val('')
    // $('.input-kelas' + editModalId).val('')
    // $('.input-nama_perusahaan' + editModalId).val('')
    // $('.input-kategori_pembimbing' + editModalId).val('')
    // $('.input-nama_mahasiswa' + editModalId).val('')
    // $('.input-jenis_tugasakhir' + editModalId).val('')
    // $('.input-kategori_penguji' + editModalId).val('')
    // $('.input-nama_produk' + editModalId).val('')
    // $('.input-jenis_produk' + editModalId).val('')
    // $('.input-judul_bahan_ajar' + editModalId).val('')
    // $('.input-tahun_ajaran' + editModalId).val('')
    // $('.input-semester' + editModalId).val('')
    // $('.input-tempat' + editModalId).val('')
    // $('.input-tanggal' + editModalId).val('')
    // $('.input-keterangan' + editModalId).val('')
    formDataDokumen.submit(function (e) {
        e.preventDefault()
        console.log(idBidang)

        var formData = new FormData(this)
        console.log(e)
        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            success: function (res) {
                console.log(res)
                closeAddModal(addModalId)
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                $.ajax({
                    url: base_url + '/GetAllAngkaKredit/getDokumenBidang' + idBidang + '/' + nipDosen,
                    method: "GET",
                    success: function (res) {
                        console.log(res)
                        $('#detail' + idBidang + ' > tr').remove()

                        jQuery.each(JSON.parse(res), function (i, val) {
                            let html = insertDetail(val, idBidang, i + 1)
                            $('#detail' + idBidang).append(html)
                        })

                        getAngkaKreditPerKategori()
                        insertAngkaKredit()
                    },
                    error: function (res) {
                        console.log(res)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan'
                })
            },
            error: function (res) {
                console.log(res)
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'Data Gagal Ditambahkan'
                })
            }
        })
    })
}

function deleteData(url, idBidang) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: 'Data ini akan terhapus',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#7380ec',
        cancelButtonColor: '#ff7782',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                method: "GET",
                success: function (res) {
                    $.ajax({
                        url: base_url + '/GetAllAngkaKredit/getDokumenBidang' + idBidang + '/' + nipDosen,
                        method: "GET",
                        success: function (res) {
                            $('#detail' + idBidang + ' > tr').remove()
    
                            jQuery.each(JSON.parse(res), function (i, val) {
                                let html = insertDetail(val, idBidang, i + 1)
                                $('#detail' + idBidang).append(html)
                            })
    
                            getAngkaKreditPerKategori()
                            insertAngkaKredit()

                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 4000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: 'Data Berhasil Dihapus'
                            })
                        },
                        error: function (res) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 4000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
            
                            Toast.fire({
                                icon: 'error',
                                title: 'Data Gagal Dihapus'
                            })
                        }
                    })
                }
            })
        }
    })
}

function insertDetail(res, editModalId, number) {
    let html;
    if (editModalId == 1) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.MATA_KULIAH}</td>
                <td>${res.KELAS}</td>
                <td>${res.SKS}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 2) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 3) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.NAMA_PERUSAHAAN}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 4) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.KATEGORI_PEMBIMBING}</td>
                <td>${res.NAMA_MAHASISWA}</td>
                <td>${res.JENIS_AKHIR_AKHIR}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 5) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.KATEGORI_PENGUJI}</td>
                <td>${res.NAMA_MAHASISWA}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 6) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 7) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.NAMA_PRODUK}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 8) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.JENIS_PRODUK}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 9) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.NAMA_ORASI_ILMIAH}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 10) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.JABATAN_PIMPINAN}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 11) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.KATEGORI_PEMBIMBING_DOSEN}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 12) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.KATEGORI_KEGIATAN}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    } else if (editModalId == 13) {
        html = `
            <tr>
                <td>${number}</td>
                <td>${res.PROGRAM}</td>
                <td>${res.DURASI_PENGEMBANGAN_DIRI}</td>
                <td>${res.TAHUN_AJARAN}</td>
                <td>${res.SEMESTER}</td>
                <td>${res.TEMPAT}</td>
                <td>${res.TANGGAL}</td>
                <td>${res.KETERANGAN}</td>
                <td>
                    <button data-id="${res.NOMOR}" data-id-bidang="${res.NOMOR_BIDANG}" class="edit-button button">Edit</button>
                    <button data-id="${res.NOMOR}" class="delete-button button" onclick="deleteData('${base_url}/HapusDataDokumen/hapusDataPendidikan/${res.NOMOR}', ${res.NOMOR_BIDANG})">Hapus</button>
                </td>
            </tr>
        `
    }
    return html;
}