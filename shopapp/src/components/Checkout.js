import React, { Fragment, useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

function Checkout() {
  const [cart, setCart] = useState([]);
  const [totalPrice, setTotalPrice] = useState(0);

  const [deletedItem, setDeletedItem] = useState("");

  useEffect(() => {
    fetchCartItems();
  }, []);

  const fetchCartItems = async () => {
    const response = await axios.get(
      "/e-commerce_with_purephp/includes/shoppingCart.php"
    );
    const cartItems = response.data;
    let i = 1;
    let total = 0;
    cartItems.forEach(e => {
      e["id"] = i;
      i += 1;
      e["quantity"] = 1;
      total += +e["price"];
    });
    setCart(cartItems);
    setTotalPrice(total);
  };

  const deleteCartItem = async () => {
    let itemToBeDeleted = new FormData();
    itemToBeDeleted.append("name", deletedItem);
    const response = await axios({
      method: "post",
      url: "/e-commerce_with_purephp/includes/deleteCartItem.php",
      data: itemToBeDeleted,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    });
    const cartItems = response.data;
    let i = 1;
    let total = 0;
    cartItems.forEach(e => {
      e["id"] = i;
      i += 1;
      e["quantity"] = 1;
      total += +e["price"];
    });
    setCart(cartItems);
    setTotalPrice(total);
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
        </div>
      </div>
      <div class="container z-depth-1 p-5 my-5 white">
        <section>
          <div class="table-responsive">
            <table class="table product-table table-cart-v-1">
              <thead>
                <tr>
                  <th>
                    <strong>#</strong>
                  </th>
                  <th>
                    <strong>Photo</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>Name</strong>
                  </th>
                  <th>
                    <strong>Price</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>Quantity</strong>
                  </th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                {cart.map(item => (
                  <tr>
                    <td>{item.id}</td>
                    <th scope="row">
                      <img
                        src={`/e-commerce_with_purephp/acom_cms_admin/database/images/items/${item.photo}`}
                        alt=""
                        class="img-fluid z-depth-0"
                        width="100px"
                        height="100px"
                      />
                    </th>
                    <td>
                      <h5 class="mt-3">
                        <strong>{item.name}</strong>
                      </h5>
                    </td>
                    <td>${item.price}</td>
                    <td class="text-center text-md-left">{item.quantity}</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm btn-black white-text"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Remove item"
                        onClick={async () => {
                          await setDeletedItem(item.name);
                          deleteCartItem();
                        }}
                      >
                        x
                      </button>
                    </td>
                  </tr>
                ))}
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <strong>Total</strong>
                  </td>
                  <td>
                    <strong>{totalPrice}$</strong>
                  </td>
                  <td></td>
                  <td>
                    <button
                      class="btn btn-outline-black"
                      data-toggle="modal"
                      data-target="#centralModalSm"
                    >
                      Checkout
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
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
                Your order has been accepted!
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

export default Checkout;
