import React, { Fragment } from "react";

function ItemDetail(props) {
  return (
    <Fragment>
      <p>{props.location.itemProps.name}</p>
      <p>{props.location.itemProps.anime}</p>
      <p>{props.location.itemProps.price}</p>
      <p>{props.location.itemProps.quantity}</p>
      <p>{props.location.itemProps.detail}</p>
      <p>{props.location.itemProps.photo}</p>
      <div class="container my-5 py-5 z-depth-1">
        <section class="text-center">
          <h3 class="font-weight-bold mb-5">Product Details</h3>

          <div class="row">
            <div class="col-lg-6">
              <div
                id="carousel-thumb1"
                class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                data-ride="carousel"
              >
                <div
                  class="carousel-inner text-center text-md-left"
                  role="listbox"
                >
                  <div class="carousel-item active">
                    <img
                      src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                      alt="First slide"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#carousel-thumb1"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carousel-thumb1"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <div class="row mb-4">
                <div class="col-md-12">
                  <div id="mdb-lightbox-ui"></div>
                  <div class="mdb-lightbox no-margin">
                    <figure class="col-md-4">
                      <a
                        href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                        data-size="1600x1067"
                      >
                        <img
                          src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                          class="img-fluid"
                        />
                      </a>
                    </figure>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5 text-center text-md-left">
              <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                iPad PRO
              </h2>
              <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">
                bestseller
              </span>
              <span class="badge badge-success product mb-4 ml-2">SALE</span>

              <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                <span class="red-text font-weight-bold">
                  <strong>$1449</strong>
                </span>
                <span class="grey-text">
                  <small>
                    <s>$1789</s>
                  </small>
                </span>
              </h3>

              <div class="font-weight-normal">
                <p class="ml-xl-0 ml-4">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Sapiente nesciunt atque nemo neque ut officiis nostrum
                  incidunt maiores, magni optio et sunt suscipit iusto nisi
                  totam quis, nobis mollitia necessitatibus.
                </p>

                <p class="ml-xl-0 ml-4">
                  <strong>Storage: </strong>64GB
                </p>
                <p class="ml-xl-0 ml-4">
                  <strong>Size: </strong>9.6-inch
                </p>
                <p class="ml-xl-0 ml-4">
                  <strong>Resolution: </strong>2048 x 1536
                </p>
                <p class="ml-xl-0 ml-4">
                  <strong>Availability: </strong>In stock
                </p>

                <div class="mt-5">
                  <div class="row mt-3 mb-4">
                    <div class="col-md-12 text-center text-md-left text-md-right">
                      <button class="btn btn-primary btn-rounded">
                        <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i>{" "}
                        Add to cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </Fragment>
  );
}

export default ItemDetail;
