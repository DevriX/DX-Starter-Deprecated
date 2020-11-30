const fp = require("find-free-port");
let port = 3000;

fp(3000, function (err, freePort) {
  port = freePort;
});

module.exports = {
  url: "local.dxstarter.com",
  port: 3100,
  proxy: "http://local.dxstarter.com",
};