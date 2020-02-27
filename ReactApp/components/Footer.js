function NavBar() {
  return (
    <React.Fragment>
      <footer class="page-footer font-small unique-color-dark">
        <div style={{ backgroundColor: "#6351ce;" }}>
          <div class="container">
            <div class="row py-4 d-flex align-items-center">
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Follow us on social media for hot news!</h6>
              </div>
              <div class="col-md-6 col-lg-7 text-center text-md-right">
                <a class="fb-ic" href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <a class="tw-ic" href="https://www.linkedin.com/">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <a class="li-ic" href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <a class="ins-ic" href="https://www.instagram.com/">
                  <i class="fab fa-instagram white-text"> </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container text-center text-md-left mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">ACOM Inc.</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style={{ width: "60px;" }}
              />
              <p>
                  We sell anime-related products such as Clothes, Mugs. We are shipping it World Wide with our company based in Myanmar. We have over 100 branches all over the world,
                  which will satisfy your needs from your near local store.
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Quick links</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style={{ width: "60px;" }}
              />
              <p>
                <a href="#!">We are always hiring, apply a job!</a>
              </p>
              <p>
                <a href="#!">We always welcome our sharer, be one!</a>
              </p>
              <p>
                <a href="#!">Shipping Rates</a>
              </p>
              <p>
                <a href="#!">Help</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style={{ width: "60px" }}
              />
              <p>
                <i class="fas fa-home mr-3"></i> Myanmar Institute of Theology, Seminary Hills, Insein, Yangon, Myanmar.
              </p>
              <p>
                <i class="fas fa-envelope mr-3"></i> business@acom.com
              </p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 95 420027180
              </p>
              <p>
                <i class="fas fa-print mr-3"></i> + 95 9976373747
              </p>
            </div>
          </div>
        </div>
        <div class="footer-copyright text-center py-3">
          © 2020 Copyright:
          <a href="/e-commerce_with_purephp"> acom.com</a>
        </div>
      </footer>
    </React.Fragment>
  );
}

ReactDOM.render(<NavBar />, document.getElementById("Footer"));
