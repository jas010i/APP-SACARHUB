var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "iridescXnt343_auth_user",
  password: "$6927=Jas010i.s03107@%"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});