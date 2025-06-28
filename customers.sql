CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  phone VARCHAR(15),
  address TEXT,
  reg_number VARCHAR(20) UNIQUE
);