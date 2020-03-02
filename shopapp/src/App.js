import React, { Fragment, useState, useEffect } from "react";
import axios from "axios";

import { Link } from 'react-router-dom'
import Pagination from "./components/Pagination";

function App() {
  const [items, setItems] = useState([]);
  const [categoryList, setCategoryList] = useState([]);
  const [category, setCategory] = useState(["All"]);

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

          <div className="col-md-6">
            <input
              className="form-control"
              type="text"
              placeholder="Search"
              aria-label="Search"
            />
          </div>
        </div>
        <div className="row">
          {currentItems.map(item => (
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
                        <h5>
                        Stock: {item.quantity}</h5>
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
                        photo: item.photo
                      }
                    }}
                  >
                  <button
                    type="button"
                    class="btn btn-outline-info waves-effect"
                  >
                    Info
                  </button>
                  </Link>
                </div>
              </div>
            </div>
          ))}
        </div>
        <br />
        <Pagination
          itemsPerPage={itemsPerPage}
          totalItems={items.length}
          paginate={paginate}
        />
      </div>
    </Fragment>
  );
}

export default App;
