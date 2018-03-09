
$('#enviar').click(function(event){
    event.preventDefault();
    $.post('./server/process.php', {
        text: $('#textarea1').val()
    }, function(response){
        showResponse(response)
    }, "json")
})

function showResponse(response) {
    response.data.forEach(element => {
        $('#freq-tabla').append(`
        <tr>
            <td>${element.emocion}</td>
            <td>${element.freq}</td>
        </tr>
        `);
        element.frases_encontradas.forEach(fr => {
            $('#frase-tabla').append(`
            <tr>
                <td>${fr.emocion}</td>
                <td>${fr.frase}</td>
            </tr>
            `);
        });

    });
    $('#text-container').html(response.texto_ingresado);
}