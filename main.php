<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="proxy.php" id="verbix-search">
        <input type="text" name="search-word" placeholder="Search Keyword">
        <button type="submit" id="button-addon1">Search</button>
    </form>

    <ul id="list-item"></ul>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#verbix-search").unbind('submit').bind('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var type = form.attr('method');

                $.ajax({
                    url: url,
                    type: type,
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        res = (response);
                         console.log(res)
                        // res.map(function(item) {
                        //     $("#list-item").append('<li>' + item.verb + '</li>')
                        // })
                    }
                })
            })
        })
    </script>
</body>

</html>