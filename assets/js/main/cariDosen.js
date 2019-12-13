$(document).ready(function () {
  /*  console.log('test');*/
    let baseURL=window.location.origin+'/e-learning-rps/'; //development
    // console.log(baseURL);
    let inputDosen=$('#nama-dosen');

    //menjalankan fungsi
    injectInput();

    function injectInput() {
        let url = baseURL + 'Service/dosens';
        let dataDosen = [];
        // console.log(url);
        $.ajax({
            url: url,
            asyc: true,
            dataType: 'JSON',
            type: 'GET',
            cache: false,

            success: function (response) {
                // console.log(response);
                for (let i = 0; i < response.length; i++) {
                    dataDosen.push({
                        'id': response[i].id_dosen,
                        'nip': response[i].nip_nik_dosen,
                        'nama': response[i].nama_dosen,
                        'jurusan': response[i].jurusan_dosen

                    });

                }

            }

        });
        console.log(dataDosen);

        var options={
            data:dataDosen,
            getValue:"nama",
            template:{
                type:"description",
                fields: {
                    description:"jurusan"
                }
            },
            list:{
                maxNumberOfElements: 8,
                match:{
                    enabled:true
                },
                onClickEvent:function () {
                    let idDosen=inputDosen.getSelectedItemData().id;
                    let nipDosen=inputDosen.getSelectedItemData().nip;
                    $('#nip_dosen').val(nipDosen);
                }
            }

        };
        inputDosen.easyAutocomplete(options);
    }
});