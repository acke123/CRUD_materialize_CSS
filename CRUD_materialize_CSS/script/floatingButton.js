document.addEventListener('DOMContentLoaded', function () {
    let elems = document.querySelectorAll('#floatBtn');
    let instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: false,
        hoverEnabled: false,
        isOpen: false
    });
});