class WebConfig extends React.Component {
  constructor() {
    super();
    this.state = {
      isPageStart: true,
      isEditItem: false,

      selectedAdminCat: ""
    };
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick(event) {
    this.setState({
      isPageStart: false,
      selectedAdminCat: event.target.innerText
    });
  }

  render() {
    return (
      <React.Fragment>
        <div style={{ marginTop: "2%" }}>
          {/*Side Nav Block*/}
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
                  className={
                    this.state.selectedAdminCat === "Carousel"
                      ? "collection-item active black white-text"
                      : "collection-item black-text"
                  }
                  onClick={this.handleClick}
                >
                  Carousel
                </a>
              </div>
            </div>

            {/* Content Block */}
            {this.state.isPageStart ? (
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
            ) : this.state.isAddCarousel ? (
              <div className="container">
                <h3>Add Item</h3>
                <div className="divider"></div>
                <form
                  className="col s12 con"
                  encType="multipart/form-data"
                ></form>
              </div>
            ) : (
              <div
                className="col s8 offset-s1 z-depth-2 grey lighten-5 no-scroll"
                style={{ height: "55em", overflowY: "scroll" }}
              >
                <table>
                  <thead>
                    <tr>
                      <th>Carousel Name</th>
                      <th>Carousel Description</th>
                      <th>Carousel Photo</th>
                    </tr>
                  </thead>

                  <tbody>
                  </tbody>
                </table>
              </div>
            )}
          </div>
        </div>
      </React.Fragment>
    );
  }
}

ReactDOM.render(<WebConfig />, document.getElementById("WebConfig"));
