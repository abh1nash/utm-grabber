window.onload = () => {
  console.log("Page loaded.");

  let detectedParams: { [key: string]: string } = {};

  function loadStorageData() {
    if (localStorage.getItem("utm_param_data")) {
      let storedData = JSON.parse(localStorage.getItem("utm_param_data"));
      let expiry = new Date(storedData.expiry);

      if (Date.now() > expiry.getTime()) {
        localStorage.removeItem("utm_param_data");
        return;
      }

      detectedParams = { ...storedData.detectedParams };
    }
  }

  function searchUTMParams() {
    const paramsList = [
      "utm_source",
      "utm_medium",
      "utm_term",
      "utm_content",
      "utm_campaign",
      "gclid",
      "email",
      "username",
    ];
    const urlParams = new URLSearchParams(window.location.search);
    paramsList.forEach((param) => {
      if (urlParams.get(param)) {
        detectedParams[param] = urlParams.get(param);
      }
    });
  }

  function setData() {
    let expiry = new Date(
      new Date().getFullYear(),
      new Date().getMonth() + 1,
      new Date().getDate()
    );
    if (localStorage.getItem("utm_param_data")) {
      expiry = new Date(
        JSON.parse(localStorage.getItem("utm_param_data")).expiry
      );
    }
    localStorage.setItem(
      "utm_param_data",
      JSON.stringify({ detectedParams, expiry })
    );
  }

  function setParamsToLinks() {
    let elms = document.querySelectorAll(".wrap a.btn");
    if (Object.keys(detectedParams).length > 0 && elms.length > 0) {
      elms.forEach((item) => {
        let targetURL = new URL((item as HTMLAnchorElement).href);
        let params = new URLSearchParams(targetURL.search);
        Object.keys(detectedParams).forEach((entry) => {
          params.set(entry, detectedParams[entry]);
        });
        (item as HTMLAnchorElement).href +=
          "?" + params.toString().replace("+", "%20");
      });
    }
  }

  loadStorageData();
  searchUTMParams();
  setData();
  setParamsToLinks();
};
