$(document).ready(function () {

    (function(){
           $.ajax({

                    type: 'POST',
                    data: {

                        action: "getstudents"
                    },

                    url: '/ajax/ajax.php',
                    success: function(data) {

                        //HARCODED assume correct
                        var lista = [{'firstname':'name student1','lastname':"lastname student 1", 'course':'PHP'},
                                    {'firstname':'name student2','lastname':"lastname student 2", 'course':'Java'},
                                    {'firstname':'name student3','lastname':"lastname student 3", 'course':'C++'}] 
                       
                       Object.keys(lista).forEach(function(key) {
                            var student = lista[key];
                            var studentline ="<div class='row'>";
                                studentline +="<div class='col-md-4'>"+student.firstname+"</div>";
                                studentline +="<div class='col-md-4'>"+student.lastname+"</div>";
                                studentline +="<div class='col-md-4'>"+student.course+"</div>";
                                studentline +="</div>";
                          $('#listaestudiantes').append(studentline);
                        });

                    }
                 });
    })();

    $(".alert-warning").html('');
    $(".alert-warning").hide();



    $("#go_button").click(function () {

        $(".alert-warning").hide();

        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var courseValue = $('#mycourse option:selected').attr('id');

        if (courseValue == "-1") {
                 $('.alert-warning').html('Please select a course');
                 $(".alert-warning").show();

                 return false;
        }
        if (firstname == "") {
                 $('.alert-warning').html('Please type your firstname');
                 $(".alert-warning").show();

                 return false;
        }
        if (lastname == "") {
                 $('.alert-warning').html('Please type your lastname');
                 $(".alert-warning").show();

                 return false;
        }
           

        $.ajax({

            type: 'POST',
            data: {
                course: courseValue,
                firstname : firstname,
                lastname : lastname,
                action: "addstudent"
            },

            url: '/ajax/ajax.php',
            success: function(data) {
                //HARCODED assume correct
                console.log(firstname);
                console.log(lastname);
                console.log($( ".mycourse option:selected" ).text());
                 var studentline ="<div class='row'>";
                        studentline +="<div class='col-md-4'>"+firstname+"</div>";
                        studentline +="<div class='col-md-4'>"+lastname+"</div>";
                        studentline +="<div class='col-md-4'>"+$( ".mycourse option:selected" ).text()+"</div>";
                        studentline +="</div>";
                  $('#listaestudiantes').append(studentline);
            }
        });

    });
   });     
