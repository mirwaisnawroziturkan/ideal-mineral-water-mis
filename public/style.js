document.getElementById("addvendor").addEventListener("click", function () {
    document.getElementById("addvendors").classList.add("vendorClass");
});
document.getElementById("btnclose").addEventListener("click", function () {
    document.getElementById("addvendors").classList.remove("vendorClass");
});