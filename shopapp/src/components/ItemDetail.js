import React, { Fragment } from "react";

function ItemDetail(props) {
  return (
    <Fragment>
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
                      src={`/e-commerce_with_purephp/acom_cms_admin/database/images/items/${props.location.itemProps.photo}`}
                      alt="Invalid"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-5 text-center text-md-left">
              <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                {props.location.itemProps.name}
              </h2>

              <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                <span class="red-text font-weight-bold">
                  <strong>${props.location.itemProps.price}</strong>
                </span>
              </h3>

              <div class="font-weight-normal">
                <p class="ml-xl-0 ml-4">{props.location.itemProps.detail}
                </p>

                <p class="ml-xl-0 ml-4">
                  <strong>Stock: </strong>{props.location.itemProps.quantity}
                </p>
                <p class="ml-xl-0 ml-4">
                  <strong>Anime: </strong>{props.location.itemProps.anime}
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
