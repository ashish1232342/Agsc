CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  service VARCHAR(100) NOT NULL,
  quantity INT NOT NULL,
  amount INT NOT NULL,
  payment_id VARCHAR(100) NOT NULL,
  payment_status VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
