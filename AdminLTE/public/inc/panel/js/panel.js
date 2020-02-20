function ajax(config) {
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST", config.url, true);

  xhttp.onreadystatechange = ev => {
    if (xhttp.readyState === 4 && xhttp.status === 200)
    {
      console.log("bye!!!")
    }
  }
}

setInterval(function() {
  const locate = location.href;
  ajax({
    url: `${locate}admin/destroi`
  });
}, 5000)
