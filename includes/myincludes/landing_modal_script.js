 $(document).ready(function () {
     //Discount Modal popup
     var _ouibounce = ouibounce(document.getElementById('pop-up'), {
         aggressive: localStorage.getItem('discountmodal_pop') != 'shown', //Making this true makes ouibounce not to obey "once per visitor" rule
     });

     // Get the modal
     var modal = document.getElementById('pop-up');

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function (event) {
         if (event.target == modal) {
             localStorage.setItem('discountmodal_pop', 'shown');
             modal.style.display = "none";
         }
     }
     /////////////////////end///////////////////////

     $(document).on('click', '.hide_discountmodal', function (e) {
         modal.style.display = "none";
         $('body').removeClass('modal-open');
         $('body').addClass('modal_closed');
         localStorage.setItem('discountmodal_pop', 'shown');
     })
 });
