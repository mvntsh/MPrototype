    
    
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function toastMessage(){
            const toastLiveExample = document.getElementById('liveToast')
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)

            toastBootstrap.show(); 
        }
    </script>
</body>
</html>