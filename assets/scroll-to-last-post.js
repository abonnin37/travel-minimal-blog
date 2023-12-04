function scrollToLastPost () {
    const allH2El = document.getElementsByTagName('h2');
    const lastPostEl = Array.from(allH2El).pop();
    var lastPostElCoordonates = lastPostEl.getBoundingClientRect();

    window.scrollTo({
        top: lastPostElCoordonates.top,
        behavior: "smooth",
      });
}