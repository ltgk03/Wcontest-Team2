function createGrid(size) {
    let height = Math.max( document.body.scrollHeight, document.body.offsetHeight, document.body.clientHeight, 
        document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight );
    let ratioW = Math.ceil(screen.width / size);
    let ratioH = Math.ceil(height / size);

    var parent = document.body; 
    parent.classList.add('grid');
    parent.style.width = (ratioW * size) + 'px';
    parent.style.height = (ratioH * size) + 'px';
    for (var i = 0; i < ratioH; i++) {
        for (var p = 0; p < ratioW; p++) {
            var cell = document.createElement('div');
            cell.style.height = (size - 1) + 'px';
            cell.style.width = (size - 1) + 'px';
            parent.appendChild(cell);
        }
    }
}
createGrid(30);
window.addEventListener('scroll', createGrid(30));