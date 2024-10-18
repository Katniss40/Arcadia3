let collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
let collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl)
})

$('#collapseMarais1').collapse({
  toggle: true
})

$('#collapseMarais2').collapse({
  toggle: true
})

$('#collapseMarais3').collapse({
  toggle: false
})

