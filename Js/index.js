$('.añadir').click(function(){
    var nuevoElement = $('<div></div>');
    nuevoElement.css ({
        'background-color': 'blue',
    });
    $('.divClases').append(nuevoElement);
});