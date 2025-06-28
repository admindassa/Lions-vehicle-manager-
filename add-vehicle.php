<?php $cust_id = $_GET['cust_id']; ?>
<!DOCTYPE html>
<html>
<head><title>Add Vehicle</title></head>
<body>
  <div class="form-container">
    <h2>Add Vehicle</h2>
    <form action="insert-vehicle.php" method="POST">
      <input type="hidden" name="cust_id" value="<?php echo $cust_id; ?>" />

      <label>Vehicle Number</label>
      <input type="text" name="vehicle_no" required />

      <label>Vehicle Type</label>
      <input list="vehicle_types" name="vehicle_type" required />
      <datalist id="vehicle_types">
        <option>Bike</option><option>Three Wheel</option><option>Car</option>
        <option>Van</option><option>Bus</option><option>Lorry</option>
        <option>Tipper (Dump Truck)</option><option>Machinery</option><option>Other</option>
      </datalist>

      <label>Vehicle Brand</label>
      <input list="brands" name="brand" />
      <datalist id="brands">
        <option>Toyota</option><option>Mitsubishi</option><option>Nissan</option>
        <option>Isuzu</option><option>Mazda</option><option>Suzuki</option>
        <option>Hyundai</option><option>Tata</option><option>Leyland</option>
        <option>Mahindra</option><option>Other</option>
      </datalist>

      <h4>Filters</h4>
      <input type="text" name="oil_filter" placeholder="Oil Filter" />
      <input type="text" name="fuel_filter" placeholder="Fuel Filter" />
      <input type="text" name="fuel_strainer" placeholder="Fuel Strainer" />
      <input type="text" name="air_filter" placeholder="Air Filter" />
      <input type="text" name="ac_filter" placeholder="A/C Filter" />

      <h4>Oil & Capacity (Liters)</h4>
      <input type="text" name="engine_oil" placeholder="Engine Oil" />
      <input type="text" name="engine_oil_capacity" placeholder="Capacity (L)" />

      <input type="text" name="gear_oil" placeholder="Gear Oil" />
      <input type="text" name="gear_oil_capacity" placeholder="Capacity (L)" />

      <input type="text" name="trans_fluid" placeholder="Transmission Fluid" />
      <input type="text" name="trans_fluid_capacity" placeholder="Capacity (L)" />

      <input type="text" name="ps_fluid" placeholder="Power Steering Fluid" />
      <input type="text" name="brake_fluid" placeholder="Brake Fluid" />
      <input type="text" name="clutch_fluid" placeholder="Clutch Fluid" />
      <input type="text" name="other_oil" placeholder="Other Oil" />

      <button type="submit">Save Vehicle</button>
    </form>
  </div>
</body>
</html>