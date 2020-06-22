var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5ef0fa6a4a7c6258179b209d/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

Tawk_API.onLoad = function () {
    Tawk_API.hideWidget();
};

Tawk_API.onChatMinimized = function () {
    Tawk_API.hideWidget();
};

Tawk_API.onChatEnded = function () {
    Tawk_API.hideWidget();
};
function togglewidget() {
    Tawk_API.showWidget();
}