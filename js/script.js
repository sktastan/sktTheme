//--------------------------------------------------------------------------------//
//convert hex to rgba
//--------------------------------------------------------------------------------//
function hexTOrgba(hex, opacity) {
    hex = hex.replace('#', '');
    r = parseInt(hex.substring(0, 2), 16);
    g = parseInt(hex.substring(2, 4), 16);
    b = parseInt(hex.substring(4, 6), 16);

    //result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
    result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
    // console.log(result);
    return result;
}