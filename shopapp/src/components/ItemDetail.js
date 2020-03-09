import React, { Fragment } from "react";
import { Link } from "react-router-dom";

import axios from "axios";

function ItemDetail(props) {
  const addToCart = async () => {
    let itemDetails = new FormData();

    itemDetails.append("name", props.location.itemProps.name);
    itemDetails.append("category", props.location.itemProps.category);

    await axios({
      method: "post",
      url: "/e-commerce_with_purephp/includes/shoppingCart.php",
      data: itemDetails,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    }).then(response => console.log("RESPONSE " + response.data));
  };

  return (
    <Fragment>
      <div class="container my-5 text-center">
        <h1>Shop</h1>
        <div className="row my-5">
          <div className="col-md-3">
            <Link to="/e-commerce_with_purephp/pages/shop.php">
              <button className="btn black white-text">
                Continue Shopping
              </button>
            </Link>
          </div>
          <div className="col-md-6"></div>
          <div className="col-md-1">
            <Link to="/e-commerce_with_purephp/pages/checkout">
              <i class="fas fa-clipboard-list fa-2x black-text"></i>
            </Link>
          </div>
        </div>
      </div>
      <div class="container my-5 py-5 z-depth-1">
        <section class="text-center">
          <h3 class="font-weight-bold mb-5">Item Details</h3>

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
                <p class="ml-xl-0 ml-4">{props.location.itemProps.detail}</p>

                <p class="ml-xl-0 ml-4">
                  <strong>Stock: </strong>
                  {props.location.itemProps.quantity}
                </p>
                <p class="ml-xl-0 ml-4">
                  <strong>Anime: </strong>
                  {props.location.itemProps.anime}
                </p>

                <div class="mt-5">
                  <div class="row mt-3 mb-4">
                    <div class="col-md-12 text-center text-md-left text-md-right">
                      <button
                        class="btn btn-primary btn-rounded"
                        onClick={addToCart}
                        data-toggle="modal"
                        data-target="#centralModalSm"
                      >
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

      <div
        class="modal fade"
        id="centralModalSm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title w-100" id="myModalLabel">
                The item has been added!
              </h6>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </Fragment>
  );
}

export default ItemDetail;
