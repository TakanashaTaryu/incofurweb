import './bootstrap';

// Mencegah klik kanan
document.addEventListener('contextmenu', event => event.preventDefault());

// Mencegah shortcut keyboard tertentu untuk inspect element
document.onkeydown = function (e) {
    // F12 key, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
    if (e.keyCode == 123 || (e.ctrlKey && e.shiftKey && 
       (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'J'.charCodeAt(0))) || 
       (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
        return false;
    }
}
