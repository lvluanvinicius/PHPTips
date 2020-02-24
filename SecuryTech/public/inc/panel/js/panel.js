function exit(config) {
  const xhttp = new XMLHttpRequest();

  xhttp.open(config.method, config.url, true);

  xhttp.onreadystatechange = e => {
    if (xhttp.readyState === 4 && xhttp.status === 200)
    {
      const locate = location.href;
      location.href = locate;
    }
  }

  xhttp.send();
}

setInterval(function() {
  const locate = location.href.split("admin");
  exit({
    url: `${locate[0]}admin/exit`,
    method: "GET"
  });
  console.log(`${locate[0]}admin/exit`)
}, 600000)
