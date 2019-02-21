    function deleteRecord(tipo_id, acomodacion_id, hotel_id) {
            $.ajax({
                type: "post",
                url: 'eliminarHab.php',
                data: {
                    'tipo_id': tipo_id,
                    'acomodacion_id': acomodacion_id,
                    'hotel_id': hotel_id,
                },
                success: function (result) {
                    console.log(result);
                    $('tr[data-id="'+tipo_id+ acomodacion_id +hotel_id+'"]').fadeOut('slow', 'swing');
                }
            });
    }




