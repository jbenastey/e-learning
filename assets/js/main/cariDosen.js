$(document).ready(function () {
  /*  console.log('test');*/
    let baseURL=window.location.origin+'/e-learning-rps/'; //development
    /*console.log(baseURL);*/
    let inputDosen=$('#nama-dosen');

    //menjalankan fungsi
    injectInput();

    function injectInput() {
        let url = baseURL + 'Service/dosens';
        let dataDosen = [];
        $.ajax({
            url: url,
            asyc: true,
            dataType: 'JSON',
            type: 'GET',
            cache: false,

            success: function (response) {
                for (let i = 0; i < response.length; i++) {
                    dataDosen.push({
                        'id': response[i].dosen_id,
                        'nama': response[i].dosen_nama,
                        'jurusan': response[i].dosen_jurusan

                    });

                }
                // console.log(dataDosen);

            }

        });
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
                    $('#dosen').val(idDosen);
                }
            }

        };
        inputDosen.easyAutocomplete(options);
    }
});