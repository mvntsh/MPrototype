    
    
    <div class="toast-container top-50 start-50 translate-middle" style="cursor: default;">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 0px;">
            <div class="toast-header">
             <img src="../logo/Diamante.png" class="rounded me-2" alt="..." width="20" height="20">
                <strong class="me-auto">System Prompt</strong>
                <small>Page: <?php echo $title; ?></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function toastMessage(){
            const toastLiveExample = document.getElementById('liveToast')
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)

            toastBootstrap.show()
        }
    </script>
</body>
</html>