$.getJSON(window.location.origin + '/codeby-teste/assets/json/acima-10-reais.json', function(data) {

    var listProducts        = [],
        totalWithDiscount   = data.totalizers[0].value + data.totalizers[1].value,
        priceFormat         = {style: 'currency', currency: 'BRL'}; 

    $.each(data.items, function(index){
        var name            = this.name,
            imageUrl        = this.imageUrl,
            price           = (this.price / 100).toLocaleString('pt-br', priceFormat),
            sellingPrice    = (this.sellingPrice / 100).toLocaleString('pt-br', priceFormat),
            detailUrl       = window.location.origin + '/codeby-teste' + this.detailUrl;
            

        listProducts.push(
            '<li>' +
                '<a href="' + detailUrl + '">' +
                    '<div class="col-image">' +
                        '<img src="' + imageUrl + '" alt="' + name + '">' +
                    '</div>' +
                    '<div class="col-text">' +
                        '<h2 class="title">' + name + '</h2>' +
                        '<p class="price">' + price + '</p>' +
                        '<p class="price-selling">' + sellingPrice + '</p>' +
                    '</div>' +
                '</a>' +
            '</li>');
    });
    
    $('.list-products').html(listProducts.join(''));

    // Valor total dos produtos
    $('.form-cart .price-total .price').text((totalWithDiscount / 100).toLocaleString('pt-br', priceFormat));

    // Mensagem de frete grátis
    if(totalWithDiscount >= 1000){
        $('.price-total').append('<div class="container"><div class="alert alert-success"><p>Parabéns, sua compra tem frete grátis !</p></div></div>')
    }
}); 