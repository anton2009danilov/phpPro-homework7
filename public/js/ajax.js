$(document).ready(function(){
    $(".action").on('click', function(e){
        let id = e.target.id;
        $.ajax({
            url: "/product/AddBasket/",
            type: "POST",
            dataType : "json",
            data:{
                id: id
            },
            error: function() {alert('error');},
            success: function(answer){
                {window.location.reload()}
            }

        })
    });

    $(".delete").on('click', function(e){
        let id = e.target.id;
        $.ajax({
            url: "/basket/delete/",
            type: "POST",
            dataType : "json",
            data:{
                id: id
            },
            error: function() {alert('error');},
            success: function(answer){
                {window.location.reload()}
            }

        })
    });

});

// $(document).ready(function(){
//     $(".delete").on('click', function(e){
//         let id = e.target.id;
//         $.ajax({
//             url: "/basket/delete/",
//             type: "POST",
//             dataType : "json",
//             data:{
//                 id: id
//             },
//             error: function() {alert('error');},
//             success: function(answer){
//                 {window.location.reload()}
//             }

//         })
//     });

// });

