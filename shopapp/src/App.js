import React, { Fragment, useState, useEffect } from "react";
import axios from "axios";

import { Link } from "react-router-dom";
import Pagination from "./components/Pagination";

function App() {
  const [items, setItems] = useState([]);
  const [categoryList, setCategoryList] = useState([]);
  const [category, setCategory] = useState(["All"]);
  const [cart, setCart] = useState([]);
  const [totalPrice, setTotalPrice] = useState(0);

  const [search, setSearch] = useState("");

  const [currentPage, setCurrentPage] = useState(1);
  const [itemsPerPage] = useState(12);

  useEffect(() => {
    fetchCategory();
  }, []);

  useEffect(() => {
    fetchItems();
  }, [category]);

  const fetchCategory = async () => {
    const response = await axios({
      method: "post",
      url: "/e-commerce_with_purephp/acom_cms_admin/database/serveSideNav.php"
    });
    const temp = [];
    response.data.forEach(element => {
      if (element.Tables_in_acom !== "admin") {
        if (element.Tables_in_acom !== "customer") {
          temp.push(element.Tables_in_acom);
        }
      }
    });
    setCategoryList(temp);
  };

  const fetchItems = async () => {
    let selectedCat = new FormData();
    selectedCat.append("category", category);
    const response = await axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/serveShop.php",
      data: selectedCat,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    });
    setItems(response.data);
  };

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
      total += +e["price"];
    });
    setCart(cartItems);
    setTotalPrice(total);
  };

  const indexOfLastItem = currentPage * itemsPerPage;
  const indexOfFirstItem = indexOfLastItem - itemsPerPage;
  const currentItems = items.slice(indexOfFirstItem, indexOfLastItem);

  const paginate = pageNumber => setCurrentPage(pageNumber);

  return (
    <Fragment>
      <div className="container my-5 text-center">
        <h1>Shop</h1>
        <div className="row my-5">
          <div className="col-md-3">
            <div>
              <select
                className="browser-default custom-select"
                value={category}
                onChange={e => setCategory(event.target.value)}
              >
                <option value="All">All</option>
                {categoryList.map(cat => (
                  <option value={cat}>
                    {cat.charAt(0).toUpperCase() + cat.slice(1)}
                  </option>
                ))}
              </select>
            </div>
          </div>

          <div className="col-md-3"></div>
          <div className="col-md-1">
            <i
              class="fas fa-shopping-cart fa-2x black-text"
              style={{ cursor: "pointer" }}
              data-toggle="modal"
              data-target="#modalCart"
              onClick={fetchCartItems}
            ></i>
          </div>
          <div className="col-md-1">
            <Link to="/e-commerce_with_purephp/pages/checkout">
              <i class="fas fa-clipboard-list fa-2x black-text"></i>
            </Link>
          </div>
          <div className="col-md-4">
            <input
              class="form-control"
              id="listSearch"
              type="text"
              placeholder="Search by item name"
              onChange={e => setSearch(e.target.value)}
            />
          </div>
        </div>
        <div className="row">
          {currentItems.map(item =>
            search !== "" &&
            item.name.toLowerCase().indexOf(search.toLowerCase()) ===
              -1 ? null : (
              <div className="col-lg-3 col-md-6 mb-lg-0 mb-4 my-5">
                <div className="card align-items-center">
                  <div className="view overlay my-3">
                    <img
                      src={`/e-commerce_with_purephp/acom_cms_admin/database/images/items/${item.photo}`}
                      className="card-img-top"
                      alt="Invalid"
                      width="80px"
                      height="200px"
                    />
                    <a>
                      <div className="mask rgba-white-slight"> </div>
                    </a>
                  </div>
                  <div className="card-body text-center">
                    <h5>
                      <strong>
                        <h5>Stock: {item.quantity}</h5>
                      </strong>
                    </h5>
                    <h6 className="font-weight-bold black-text">
                      <strong> Price: {item.price} $ </strong>
                    </h6>
                    <Link
                      to={{
                        pathname: `/e-commerce_with_purephp/pages/shop.php?${item.id}`,
                        itemProps: {
                          id: item.id,
                          name: item.name,
                          anime: item.anime,
                          price: item.price,
                          quantity: item.quantity,
                          detail: item.detail,
                          photo: item.photo,
                          category: item.category
                        }
                      }}
                    >
                      <button
                        type="button"
                        class="btn btn-outline-black waves-effect"
                      >
                        Check
                      </button>
                    </Link>
                  </div>
                </div>
              </div>
            )
          )}
        </div>
        <br />
        <Pagination
          itemsPerPage={itemsPerPage}
          totalItems={items.length}
          paginate={paginate}
        />
      </div>

      <div
        class="modal fade"
        id="modalCart"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
                Your cart
              </h4>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  {cart.map(item => (
                    <tr>
                      <th scope="row">{item.id}</th>
                      <td>{item.name}</td>
                      <td></td>
                      <td>${+item.price}</td>
                      <td>
                        <a>
                          <i class="fas fa-times"></i>
                        </a>
                      </td>
                    </tr>
                  ))}
                  <tr class="total">
                    <th scope="row"></th>
                    <td>
                      <strong>Total price</strong>
                    </td>
                    <td></td>
                    <td>${totalPrice}</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer"></div>
          </div>
        </div>
      </div>
    </Fragment>
  );
}

export default App;
