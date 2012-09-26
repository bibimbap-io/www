    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("em").each(function() {
                if ($(this).html() == "bibimbap") {
                    $(this).replaceWith("<span class=\"label\">"+$(this).html()+"</span>");
                } else {
                    $(this).replaceWith("<span class=\"label label-important\">"+$(this).html()+"</span>");
                }
            });
        });
    </script>
  </body>
</html>
