<!doctype html>
<html lang="en">
<head>
    <title>Michael H Baek</title>
    <!-- headersettings.html -->
    <?php include 'settings/headersettings.html'; ?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('div.hidden').fadeIn(1000).removeClass('hidden');
        } )
    </script>
</head>

<body>
    <div class="hidden">
        <header class='sidebar'>
            <?php include 'content/sidebar.html'; ?>
        </header>

        <!-- main body -->
        <div class="content pure-u-1 pure-u-md-3-4">
            <div>
                <!-- A wrapper for all the blog posts -->
                <div class="posts">
                    <h1 class="content-subhead">Projects</h1>
                    <!-- A single post -->
                    <?php include 'content/projects/taekwondoscoreboard.html'; ?>
                    <?php include 'content/projects/vutkdsite.html'; ?>
                </div>

                <div class="interests">
                    <?php include 'content/interests.html'; ?>
                </div>

                <div class="footer">
                    <?php include 'content/footer.html'; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
