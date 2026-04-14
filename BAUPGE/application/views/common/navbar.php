    <nav class="navbar navbar-expand-lg" style="background-color: #f0f0f0; cursor: default;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../logo/Diamante.png" alt="Logo" width="60" height="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="letter-spacing: -1px; text-transform: uppercase;">
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Data Entry
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="bpientry">Online Banking <span class="badge bg-danger text-light" style="border-radius: 0px;">BPI</span></a></li>
                        <li><a class="dropdown-item" href="#">Online Banking <span class="badge bg-secondary text-light" style="border-radius: 0px;">OTHER</span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Batch Upload</a></li>
                        <li><a class="dropdown-item" href="#">Lending</a></li>
                        <li><a class="dropdown-item" href="#">Special Wallet</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" style="background-color: transparent; padding: 0.5em; border-radius: 0px;">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: center; font-size: 16.3pt;">
                            <span class="badge bg-danger text-light" style="height: 3.5em; border-radius: 0px; padding: 1.1em;"><i class="fa-solid fa-shield-halved" style="color: rgb(255, 212, 59);"></i> MARVIN B. BATITAY</span>
                        </td>
                        <td>
                            <div class="d-grid">
                                <button class="btn btn-danger" type="submit" style="height: 3.6em; border-radius: 0px;">Logout</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="vertical-align: middle; text-align: center;">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="text-transform: uppercase; background-color: #d9d8d7; border-radius: 0px;">
                                    <option value="Luzon">Luzon</option>
                                    <option value="VisMin">VisMin</option>
                                </select>
                                <label for="floatingSelect"><i class="fa-solid fa-earth-asia" style="color: rgb(255, 59, 59);"></i> Region</label>
                            </div>
                        </td>
                        
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </nav>