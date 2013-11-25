function showEasyPageComments(name, data) {
        document.getElementById('Comments').innerHTML = data; }

      function showEasyPageCommentForm(name, data) {
        document.getElementById('CommentForm').innerHTML = data; }

      function addEasyPageComments() {
        EasyPageComments.createCommentsList('Example');
        EasyPageComments.createCommentForm('Example'); }

      document.addEventListener("DOMContentLoaded", addEasyPageComments, false)