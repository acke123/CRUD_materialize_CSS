function remove() {
    let r = confirm("Da li ste sigurni?");
    if (r == true) {
        document.getElementById("result").value = 'yes';
    } else {
        const onConfirmRefresh = function (event) {
            event.preventDefault();
            return event.returnValue = false;
        }

        window.addEventListener("beforeunload", onConfirmRefresh, {capture: true});
    }
}