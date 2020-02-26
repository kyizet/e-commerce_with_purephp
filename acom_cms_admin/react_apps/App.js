function ItemTable(props) {
  return <div></div>;
}

class App extends React.Component {
  constructor() {
    super();
    this.state = {
      ItemData: [],
      isLoading: false,
      category: [],
      addNewCat: false,
      newCat: "",
      deleteCat: false,
      deleteCatName: "",

      selectedCat: "",
      selectedItem: "",
      isPageStart: true,
      isAddItem: false,
      isEditItem: false,

      name: "",
      anime: "",
      price: "",
      quantity: "",
      detail: "",
      photo: "",

      prevName: ""
    };
    this.handleClick = this.handleClick.bind(this);
    this.handleAddItem = this.handleAddItem.bind(this);
    this.handleDelete = this.handleDelete.bind(this);
    this.handleAddCat = this.handleAddCat.bind(this);
    this.handleDeleteCat = this.handleDeleteCat.bind(this);
    this.handleEditItem = this.handleEditItem.bind(this);
  }

  componentDidMount() {
    axios
      .get("/e-commerce_with_purephp/acom_cms_admin/database/serveSideNav.php")
      .then(response => response.data)
      .then(data => {
        this.setState({
          category: data
        });
      });
    document.addEventListener(
      "keydown",
      () => {
        if (event.keyCode === 27) {
          this.setState({
            addNewCat: false,
            deleteCat: false,
            isEditItem: false
          });
        }
      },
      false
    );
  }

  handleEditItem() {
    let editedItem = new FormData();
    editedItem.append("name", this.state.name);
    editedItem.append("anime", this.state.anime);
    editedItem.append("price", this.state.price);
    editedItem.append("quantity", this.state.quantity);
    editedItem.append("detail", this.state.detail);
    editedItem.append("category", this.state.selectedCat);
    editedItem.append("photo", this.state.photo);

    editedItem.append("selectedItem", this.state.selectedItem);

    axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/editItem.php",
      data: editedItem,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          ItemData: data
        });
      });

    this.setState({ isEditItem: false });
  }

  handleDeleteCat() {
    let deleteCat = new FormData();
    deleteCat.append("deleteCatName", this.state.deleteCatName);
    axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/deleteCat.php",
      data: deleteCat,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          category: data
        });
      });
  }

  handleAddCat() {
    let newCat = new FormData();
    newCat.append("newCatName", this.state.newCat);

    axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/addCat.php",
      data: newCat,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          category: data
        });
      });
  }

  handleDelete() {
    event.preventDefault();

    let deleteItemInfo = new FormData();
    deleteItemInfo.append("category", this.state.selectedCat);
    deleteItemInfo.append("name", this.state.selectedItem);

    axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/deleteItem.php",
      data: deleteItemInfo,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          ItemData: data
        });
      });
  }

  handleAddItem() {
    event.preventDefault();

    let formData = new FormData();
    formData.append("name", this.state.name);
    formData.append("anime", this.state.anime);
    formData.append("price", this.state.price);
    formData.append("quantity", this.state.quantity);
    formData.append("photo", this.state.photo);
    formData.append("detail", this.state.detail);
    formData.append("category", this.state.selectedCat);

    axios({
      method: "post",
      url:
        "/e-commerce_with_purephp/acom_cms_admin/database/functions/addItem.php",
      data: formData,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          ItemData: data
        });
      });
    this.setState({
      isAddItem: false
    });
  }

  handleClick(event) {
    this.setState({
      selectedCat: event.target.innerText,
      isAddItem: false,
      isPageStart: false
    });

    let sentCat = new FormData();
    sentCat.append("category", event.target.innerText);

    axios({
      method: "post",
      url: "/e-commerce_with_purephp/acom_cms_admin/database/serveData.php",
      data: sentCat,
      config: { headers: { "Content-Type": "multipart/form-data" } }
    })
      .then(response => response.data)
      .then(data => {
        this.setState({
          ItemData: data
        });
      });
  }

  render() {
    const ItemList = this.state.ItemData.map(item => (
      <ItemTable key={item.id} item={item} />
    ));

    return (
      <React.Fragment>
        <div style={{ marginTop: "2%" }}>
          <div className="row">
            <div
              className="col s2 z-depth-2 grey lighten-5 no-scroll"
              style={{ height: "55em", overflowY: "scroll" }}
            >
              <h5 className="center">
                <img
                  src="/e-commerce_with_purephp/acom_cms_admin/assets/acom-logo-black.png"
                  alt="invalid"
                  width="20px"
                  height="20px"
                />{" "}
                ACOM
              </h5>
              <div className="collection">
                <a
                  href="#!"
                  className="collection-item  black-text"
                  onClick={() => {
                    this.setState({
                      addNewCat: true,
                      deleteCat: false
                    });
                  }}
                >
                  Add Category
                </a>
                <a
                  href="#!"
                  className="collection-item  black-text"
                  onClick={() => {
                    this.setState({
                      deleteCat: true,
                      addNewCat: false
                    });
                  }}
                >
                  Delete Category
                </a>
                {this.state.addNewCat ? (
                  <a className="collection-item black-text">
                    <input
                      value={this.state.newCat}
                      onChange={e => this.setState({ newCat: e.target.value })}
                    />
                    <button
                      type="submit"
                      className="btn black white-text"
                      onClick={this.handleAddCat}
                    >
                      Add
                    </button>
                  </a>
                ) : (
                  ""
                )}
                {this.state.deleteCat ? (
                  <a className="collection-item black-text">
                    <input
                      value={this.state.deleteCatName}
                      onChange={e =>
                        this.setState({ deleteCatName: e.target.value })
                      }
                    />
                    <button
                      type="submit"
                      className="btn black white-text"
                      onClick={this.handleDeleteCat}
                    >
                      Delete
                    </button>
                  </a>
                ) : (
                  ""
                )}
              </div>
              <div className="divider"></div>
              <div className="subheader grey-text center">Categories‌‌</div>
              <div className="collection">
                {this.state.category.map((cat, index) =>
                  cat.Tables_in_acom !== "admin" ? (
                    cat.Tables_in_acom !== "customer" ? (
                      <a
                        key={index}
                        className={
                          this.state.selectedCat.charAt(0).toUpperCase() +
                            this.state.selectedCat.slice(1) ===
                          cat.Tables_in_acom.charAt(0).toUpperCase() +
                            cat.Tables_in_acom.slice(1)
                            ? "collection-item active black white-text"
                            : "collection-item black-text"
                        }
                        style={{ textTransform: "capitalize" }}
                        onClick={this.handleClick}
                      >
                        {cat.Tables_in_acom}
                      </a>
                    ) : (
                      ""
                    )
                  ) : (
                    ""
                  )
                )}
              </div>
            </div>
            {this.state.isAddItem ? (
              <div
                className="col s8 offset-s1 z-depth-2 grey lighten-5"
                style={{ height: "55em", overflowY: "scroll" }}
              >
                <div className="container">
                  <h3>Add Item</h3>
                  <div className="divider"></div>
                  <form className="col s12 con" encType="multipart/form-data">
                    <div className="input-field col s12">
                      <input
                        id="name"
                        type="text"
                        className="validate"
                        value={this.state.name}
                        onChange={e => this.setState({ name: e.target.value })}
                      />
                      <label htmlFor="name">Name</label>
                    </div>
                    <div className="input-field col s12">
                      <input
                        id="anime"
                        type="text"
                        className="validate"
                        value={this.state.anime}
                        onChange={e => this.setState({ anime: e.target.value })}
                      />
                      <label htmlFor="anime">Anime</label>
                    </div>
                    <div className="input-field col s12">
                      <input
                        id="price"
                        type="text"
                        className="validate"
                        value={this.state.price}
                        onChange={e => this.setState({ price: e.target.value })}
                      />
                      <label htmlFor="price">Price</label>
                    </div>
                    <div className="input-field col s12">
                      <input
                        id="quantity"
                        type="number"
                        className="validate"
                        value={this.state.quantity}
                        onChange={e =>
                          this.setState({ quantity: e.target.value })
                        }
                      />
                      <label htmlFor="quantity">Quantity</label>
                    </div>

                    <div className="file-field input-field col s12">
                      <div className="btn black white-text col s2">
                        <span>File</span>
                        <input
                          type="file"
                          onChange={e =>
                            this.setState({ photo: e.target.files[0] })
                          }
                        />
                      </div>
                      <div className="file-path-wrapper">
                        <input className="file-path validate" type="text" />
                      </div>
                    </div>

                    <div className="input-field col s12">
                      <textarea
                        id="detail"
                        className="materialize-textarea"
                        onChange={e =>
                          this.setState({ detail: e.target.value })
                        }
                      ></textarea>
                      <label htmlFor="detail">Detail</label>
                    </div>
                    <button
                      type="submit"
                      className="btn black white-text offset-s4 col s3"
                      onClick={this.handleAddItem}
                    >
                      Add
                    </button>
                  </form>
                </div>
              </div>
            ) : this.state.isPageStart ? (
              <div
                className="col s8 offset-s1 z-depth-2 blue-grey lighten-5"
                style={{
                  height: "55em",
                  overflow: "hidden",
                  paddingLeft: "25%",
                  paddingTop: "15%"
                }}
              >
                <img
                  src="/e-commerce_with_purephp/acom_cms_admin/assets/acom-logo-black.png"
                  alt="invalid"
                  width="40%"
                  height="40%"
                />
              </div>
            ) : (
              <div
                className="col s8 offset-s1 z-depth-2 grey lighten-5 no-scroll"
                style={{ height: "55em", overflowY: "scroll" }}
              >
                <table className="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Anime</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Photo Path</th>
                      <th>Detail</th>
                      <th style={{ width: "1%" }}>
                        <i
                          className="small material-icons"
                          style={{ cursor: "pointer" }}
                          onClick={() => this.setState({ isAddItem: true })}
                        >
                          add_box
                        </i>
                      </th>
                    </tr>
                  </thead>

                  {this.state.ItemData.map((item, photopath) => (
                    <tbody key={item.id}>
                      <tr>
                        <td style={{ textTransform: "capitalize" }}>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <input
                                type="text"
                                value={this.state.name}
                                onChange={e =>
                                  this.setState({ name: e.target.value })
                                }
                                className="col offset-s2 s8"
                              />
                            ) : (
                              item.name
                            )
                          ) : (
                            item.name
                          )}
                        </td>
                        <td>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <input
                                type="text"
                                value={this.state.anime}
                                onChange={e =>
                                  this.setState({ anime: e.target.value })
                                }
                                className="col offset-s2 s8"
                              />
                            ) : (
                              item.anime
                            )
                          ) : (
                            item.anime
                          )}
                        </td>
                        <td>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <input
                                type="text"
                                value={this.state.price}
                                onChange={e =>
                                  this.setState({ price: e.target.value })
                                }
                                className="col offset-s2 s8"
                              />
                            ) : (
                              item.price
                            )
                          ) : (
                            item.price
                          )}
                        </td>
                        <td>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <input
                                type="number"
                                value={this.state.quantity}
                                onChange={e =>
                                  this.setState({ quantity: e.target.value })
                                }
                                className="col offset-s2 s8"
                              />
                            ) : (
                              item.quantity
                            )
                          ) : (
                            item.quantity
                          )}
                        </td>
                        <td>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <div className="file-field input-field">
                                <div className="btn black text-white">
                                  <span>Choose</span>
                                  <input type="file" 
                                          onChange={(e) => this.setState({ photo: e.target.files[0]}) }
                                          />
                                </div>
                                <div className="file-path-wrapper">
                                  <input
                                    className="file-path validate"
                                    type="text"
                                  />
                                </div>
                              </div>
                            ) : (
                              <span>
                                <img
                                  src={`database/images/items/${item.photo}`}
                                  alt="invalid"
                                  width="60px"
                                  height="60px"
                                />
                                <span>{item.photo}</span>
                              </span>
                            )
                          ) : (
                            <span>
                              <img
                                src={`database/images/items/${item.photo}`}
                                alt="invalid"
                                width="60px"
                                height="60px"
                              />
                              <span>{item.photo}</span>
                            </span>
                          )}
                        </td>
                        <td>
                          {item.name === this.state.selectedItem ? (
                            this.state.isEditItem ? (
                              <input
                                type="text"
                                value={this.state.detail}
                                onChange={e =>
                                  this.setState({ detail: e.target.value })
                                }
                                className="col offset-s2 s8"
                              />
                            ) : (
                              item.detail.substring(0, 20) + " . . . "
                            )
                          ) : (
                            item.detail.substring(0, 20) + " . . . "
                          )}
                        </td>
                        <td>
                          {this.state.isEditItem ? (
                            item.name === this.state.selectedItem ? (
                              <i
                                className="small material-icons"
                                style={{ cursor: "pointer" }}
                                onClick={this.handleEditItem}
                              >
                                save
                              </i>
                            ) : (
                              <i
                                className="small material-icons"
                                style={{ cursor: "pointer" }}
                                onClick={async () => {
                                  await this.setState({
                                    isEditItem: true,
                                    selectedItem: item.name,
                                    name: item.name,
                                    anime: item.anime,
                                    price: item.price,
                                    quantity: item.quantity,
                                    detail: item.detail
                                  });
                                }}
                              >
                                edit
                              </i>
                            )
                          ) : (
                            <i
                              className="small material-icons"
                              style={{ cursor: "pointer" }}
                              onClick={async () => {
                                await this.setState({
                                  isEditItem: true,
                                  selectedItem: item.name,
                                  name: item.name,
                                  anime: item.anime,
                                  price: item.price,
                                  quantity: item.quantity,
                                  detail: item.detail
                                });
                              }}
                            >
                              edit
                            </i>
                          )}
                          <i
                            className="small material-icons col s12"
                            style={{ cursor: "pointer" }}
                            onClick={async () => {
                              await this.setState({
                                selectedItem: item.name
                              });
                              this.handleDelete();
                            }}
                          >
                            delete
                          </i>
                        </td>
                      </tr>
                    </tbody>
                  ))}
                </table>
              </div>
            )}
          </div>
        </div>
      </React.Fragment>
    );
  }
}

ReactDOM.render(<App />, document.getElementById("MainReact"));
