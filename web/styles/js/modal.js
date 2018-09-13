var ModalManager = (function () {

    var modal;

    var openBtn;

    function initModal(id, openBtnId) {
        modal = document.getElementById(id);
        openBtn = document.getElementById(openBtnId);
        initEvents();
    }

    function showModal() {
        modal.style.display = "block";
    }

    function hideModal() {
        modal.style.display = "none";
    }

    //private
    function initEvents() {
        $(openBtn).on('click', function () {
            showModal();
        });
        $('.close-modal').on('click', function () {
            hideModal();
        });

        window.onclick = function (event) {
            if (event.target == modal) {
                hideModal();
            }
        };
    }

    return {initModal: initModal, showModal: showModal, hideModal: hideModal};

});