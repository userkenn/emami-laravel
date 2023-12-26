document.getElementById('menu-toggle').addEventListener('click', function () {
  var sidebar = document.getElementById('sidebar');
  var content = document.getElementById('content');

  if (sidebar.style.left === '0px' || sidebar.style.left === '') {
    sidebar.style.left = '-250px';
    content.style.marginLeft = '0';
  } else {
    sidebar.style.left = '0';
    content.style.marginLeft = '250px';
  }
});

function showContent(contentId) {
  var contentElements = document.querySelectorAll('#content > div');
  contentElements.forEach(function (element) {
      element.style.display = 'none';
  });

  document.getElementById(contentId).style.display = 'block';
}