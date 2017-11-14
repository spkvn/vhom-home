//delete modal handler
$(function () {
    var $deleteModal = $('#delete-modal').foundation();
    var $deleteButton = $deleteModal.find('.delete');
    var deleteHandlers = [];

    function addDeleteHandler(handler) {
        var wrappedHandler = function(e) {
            handler();
            $deleteModal.foundation('close');
        };
        $deleteButton.one('click', wrappedHandler);
        deleteHandlers.push(wrappedHandler);
    }

    // Clear delete handlers when the modal closes
    $deleteModal.on('closed.zf.reveal', function() {
        deleteHandlers.forEach(function(handler) {
            $deleteButton.off('click', handler);
        });
        deleteHandlers = [];
    });

    $('.delete__form').each(function(index, el) {
        var $form = $(el);
        $form.click(function(e) {
            e.preventDefault();
            $deleteModal.foundation('open');
            addDeleteHandler(function() {
                $form.submit();
            });
        });
    });
});
