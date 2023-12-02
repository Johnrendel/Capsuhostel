
    // Get the modal element
    var modal = document.getElementById("modal");

    // Get the button that opens the modal
    var openModalButton = document.getElementById("openModal");

    // Get the button that close the modal
    var closeModalButton = document.getElementById("closeModal");

    // Get the button that confirms the input
    var confirmButton = document.getElementById("confirmBtn");

    openModalButton.addEventListener("click", openModal);
    closeModalButton.addEventListener("click", closeModal);
    confirmButton.addEventListener("click", confirmBtn);

    // When the user clicks on the button, open the modal
    openModalButton.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on the confirm button, close the modal
    confirmButton.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks on the close button, close the modal
    closeModalButton.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks outside the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }