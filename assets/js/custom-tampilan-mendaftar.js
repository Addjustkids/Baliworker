//FORM VALIDASI SUKSES
var tab=1;
$.validator.setDefaults({
    submitHandler: function() {
        if(tab<=4){
            tab++;
            next="c"+tab;
            document.getElementById(next).click();
        }
       
    }
});

//VALIDASI FORM DATA AKUN
$().ready(function() {
    $("#data_akun").validate({
        rules: {
            daftar_nama: {
            	required:true,
            	minlength:2
            },
            daftar_username: {
                required: true,
                minlength: 2
            },
            daftar_password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#daftar_password"
            },
            daftar_email: {
                required: true,
                email: true
            },
            daftar_jalan: {
                required: true,
            },
            daftar_deskripsi: {
                required: true,
            }
        },
        messages: {
            daftar_nama: {
            	required: "Mohon input nama lengkap",
            	minlength: "Nama lengkap minimal 2 karakter"
            },
            daftar_username: {
                required: "Mohon input username",
                minlength: "Username minimal 2 karakter"
            },
            daftar_password: {
                required: "Mohon input password",
                minlength: "Password minimal memiliki panjang 5 karakter"
            },
            confirm_password: {
                required: "Mohon input password",
                minlength: "Password minimal memiliki panjang 5 karakter",
                equalTo: "Mohon input password yang sama seperti di atas"
            },
            daftar_email: "Mohon input alamat email yang valid",
            daftar_jalan: {
                required: "Mohon berikan keterangan yang lebih jelas",
            },
            daftar_deskripsi: {
                required: "Mohon deskripsikan jasa yang bisa anda tawarkan",
            }
        }
    });
});


function cek_selectize(){
	cek_kategori();
	cek_keahlian();
    cek_kabupaten();
    cek_kecamatan();
    cek_kelurahan();
}

function cek_kategori(){
	if(document.getElementById("daftar_kategori").value=="")
	{
		document.getElementById("error_kategori").innerHTML="<b>Mohon pilih kategori keahlian anda</b>";
	}
	else{
		document.getElementById("error_kategori").innerHTML="";
	}
}

function cek_keahlian(){
	if(document.getElementById("daftar_keahlian").value=="")
	{
		document.getElementById("error_keahlian").innerHTML="<b>Mohon pilih keahlian yang anda miliki</b>";
	}
	else{
		document.getElementById("error_keahlian").innerHTML="";
	}
}

function cek_kabupaten(){
    if(document.getElementById("daftar_kabupaten").value=="")
    {
        document.getElementById("error_kabupaten").innerHTML="<b>Mohon pilih Kabupaten</b>";
    }
    else{
        document.getElementById("error_kabupaten").innerHTML="";
    }

    if(document.getElementById("daftar_kabupaten").value=="Denpasar")
    {   
        $('#daftar_kecamatan').selectize({
            persist: false,
            maxItems: 1,
            searchField: ['kecamatan'],
            valueField: 'kecamatan',
            options: [
                {kecamatan: 'Denpasar Barat'},
                {kecamatan: 'Denpasar Selatan'},
                {kecamatan: 'Denpasar Timur'},
                {kecamatan: 'Denpasar Utara'}
            ],
            render: {
                item: function(item, escape) {
                    return '<div>' +
                        (item.kecamatan ? '<span class="">' + escape(item.kecamatan) + '</span>' : '') +
                    '</div>';
                },
                option: function(item, escape) {
                    var caption = item.kecamatan ? item.kecamatan : null;
                    return '<div>' +
                    (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                    '</div>';
                }
            }
        });
    }

    else if(document.getElementById("daftar_kabupaten").value=="Badung")
    {
        $('#daftar_kecamatan').selectize({
            persist: false,
            maxItems: 1,
            searchField: ['kecamatan'],
            valueField: 'kecamatan',
            options: [
                {kecamatan: 'Abiansemal'},
                {kecamatan: 'Kuta'},
                {kecamatan: 'Kuta Selatan'},
                {kecamatan: 'Kuta Utara'},
                {kecamatan: 'Mengwi'},
                {kecamatan: 'Petang'}
            ],
            render: {
                item: function(item, escape) {
                    return '<div>' +
                        (item.kecamatan ? '<span class="">' + escape(item.kecamatan) + '</span>' : '') +
                    '</div>';
                },
                option: function(item, escape) {
                    var caption = item.kecamatan ? item.kecamatan : null;
                    return '<div>' +
                    (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                    '</div>';
                }
            }
        });
    }
    else if(document.getElementById("daftar_kabupaten").value=="Gianyar")
    {
        $('#daftar_kecamatan').selectize({
            persist: false,
            maxItems: 1,
            searchField: ['kecamatan'],
            valueField: 'kecamatan',
            options: [
                {kecamatan: 'Blahbatuh'},
                {kecamatan: 'Gianyar'},
                {kecamatan: 'Payangan'},
                {kecamatan: 'Sukawati'},
                {kecamatan: 'Tampak Siring'},
                {kecamatan: 'Tegallalang'},
                {kecamatan: 'Ubud'}
            ],
            render: {
                item: function(item, escape) {
                    return '<div>' +
                        (item.kecamatan ? '<span class="">' + escape(item.kecamatan) + '</span>' : '') +
                    '</div>';
                },
                option: function(item, escape) {
                    var caption = item.kecamatan ? item.kecamatan : null;
                    return '<div>' +
                    (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                    '</div>';
                }
            }
        });
    }

}

function cek_kecamatan(){
    if(document.getElementById("daftar_kecamatan").value=="")
    {
        document.getElementById("error_kecamatan").innerHTML="<b>Mohon pilih Kecamatan</b>";
    }
    else{
        document.getElementById("error_kecamatan").innerHTML="";
    }
}

function cek_kelurahan(){
    if(document.getElementById("daftar_kelurahan").value=="")
    {
        document.getElementById("error_kelurahan").innerHTML="<b>Mohon pilih Kelurahan</b>";
    }
    else{
        document.getElementById("error_kelurahan").innerHTML="";
    }
}



