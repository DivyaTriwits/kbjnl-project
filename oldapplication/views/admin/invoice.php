<!DOCTYPE html>
<html>
<head>
	<title>KBJNL Invoice</title>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		.card {
    margin-bottom: 1.5rem
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3
}
	</style>
</head>
<body>
<div class="container-fluid" style="padding-top: 20px !important">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header">Invoice
                    <strong>#<?php echo $customer->order_id?></strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                   <!--  <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" data-abc="true">
                        <i class="fa fa-save"></i> Save</a> -->
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h6 class="mb-3">From:</h6>
                            <div>
                                <strong>KBJNL</strong>
                            </div>
                            <div>O/o The Chief Engineer,KBJNL, </div>
                            <div>Dam Zone, Almatti</div>
                            <div>Email: cedam_almatti@yahoo.com</div>
                            <div>Phone: +91 9886351288</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">To:</h6>
                            <div>
                                <strong><?php echo $customer->full_name?></strong>
                            </div>
                            <div><?php echo $customer->state?>, <?php echo $customer->district?>, <?php echo $customer->village?>, <?php echo $customer->taluka?></div>
                          
                            <div>Aadhaar No: <?php echo $customer->aadhaar_no?></div>
                            <div>Phone: <?php echo $customer->mobile_no?></div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">Details:</h6>
                            <div>Invoice
                                <strong>#<?php echo $customer->order_id?></strong>
                            </div>
                            <div>Order Date : <?php echo $customer->ordered_date?></div>
                            <!-- <div>VAT: NYC09090390</div> -->
                          <!--   <div>Account Name: BBBootstrap Inc</div>
                            <div>
                                <strong>SWIFT code: 99 8888 7777 6666 5555</strong>
                            </div> -->
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Saplings</th>
                                    <th>Bag Size</th>
                                     <th class="right">Unit Cost</th>
                                    <th class="center">Quantity</th>
                                   
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i=1; $total=0; $qty=0; foreach($order as $orders){
                                     $subtotal=$orders->ordered_quantity * $orders->price;
                                     $total+=$subtotal;
                                     $qty+=$orders->ordered_quantity;
                            		?>
                                <tr>
                                    <td class="center"><?php echo $i;?></td>
                                    <td class="left"><?php echo $orders->sapling?></td>
                                    <td class="left"><?php echo $orders->bagsize?></td>
                                     <td class="right"><?php echo $orders->price?></td>
                                    <td class="center"><?php echo $orders->ordered_quantity?></td>
                                   
                                    <td class="right"><?php echo $subtotal?></td>
                                </tr>
                               <?php $i++; }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                     <!--    <div class="col-lg-4 col-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div> -->
                        <div class="col-lg-6 col-sm-6 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                    <!--     <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="right">$8.497,00</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (20%)</strong>
                                        </td>
                                        <td class="right">$1,699,40</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>VAT (10%)</strong>
                                        </td>
                                        <td class="right">$679,76</td>
                                    </tr> -->
                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong><?php echo $qty?></strong>
                                        </td>
                                        <td class="right">
                                            <strong><?php echo $total?></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <a class="btn btn-success" href="#" data-abc="true">
                                <i class="fa fa-usd"></i> Proceed to Payment</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>