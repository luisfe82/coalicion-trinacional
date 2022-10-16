function NumText(string) { //solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro =
        'abcdefghijklmnñopqrstuvwxyz ,;.:-_=¿?!¡()"<>\/*+ºª@#$%&[]{}ÉÁÍÓÚéáúóíABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890'; //Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}

function Numeros(string) { //solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '1234567890-'; //Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}