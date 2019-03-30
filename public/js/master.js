         /* Preloader after 1second adding none class and removing preloader*/
         setTimeout(function(){
            document.getElementById("loading").classList.add("none");
          }, 1000);

          $(document).ready(function(){
            $("#myInputSearch").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myULSearch li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
