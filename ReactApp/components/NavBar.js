class NavBar extends React.Component {
  render() {
    return (
      <React.Fragment>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar unique-color-dark">
          <a class="navbar-brand" href="/e-commerce_with_purephp">
            <img
              src="assets/images/acom-logo-white.png"
              class="img-fluid"
              alt="ACOM"
              width="50px"
              height="50px"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">
                  Shop
                </a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  id="navbarDropdownMenuLink-333"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-user"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-default unique-color-dark"
                  aria-labelledby="navbarDropdownMenuLink-333"
                >
                  <a class="dropdown-item text-light" href="#">
                    Login
                  </a>
                  <a class="dropdown-item text-light" href="#">
                    Register
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </React.Fragment>
    );
  }
}

ReactDOM.render(<NavBar />, document.getElementById("NavBar"));
