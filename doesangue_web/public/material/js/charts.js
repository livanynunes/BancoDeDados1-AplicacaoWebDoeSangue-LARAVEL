$(document).ready(function() {
    var chartL = new Morris.Bar({
        element  : 'qntPorTipo',
        resize   : true,
        barColors   : ['#A59DB7', '#765ea8'],
        data     : qntTipos();
        xkey     : 'x',
        ykeys    : 'y',
        labels   : ['A+', 'B+', 'AB'+', 'O+', 'A-', 'B-', 'AB-', 'O-'],
        hideHover: 'auto',
        gridTextColor    : '#333'
    })
});

function qntTipos() {
    var data = [];
    var labels = ['A+', 'B+', 'AB'+', 'O+', 'A-', 'B-', 'AB-', 'O-'];
    for(var i=0;i<8;i++) {
        data.push({x: labels[i], y: qntLabel(i)})
    }
    return data;
}

function qntLabel(i) {
    SELECT COUNT(*) FROM bancodesangue WHERE tipo = i
}