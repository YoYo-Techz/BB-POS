<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid p-3">
        <!-- Top Stats Section -->
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="p-3 border bg-light">
                    <h5>Received THB</h5>
                    <h2>145,300</h2>
                    <p>Hourly Rate 3000</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border 1bg-light">
                    <h5>Received THB</h5>
                    <h2>145,300</h2>
                    <p>Hourly Rate 3000</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border bg-light">
                    <h5>Received THB</h5>
                    <h2>145,300</h2>
                    <p>Hourly Rate 3000</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border bg-light">
                    <h5>Received THB</h5>
                    <h2>145,300</h2>
                    <p>Hourly Rate 3000</p>
                </div>
            </div>

            <div class="col-md-9 d-flex align-items-center">
                <button class="btn btn-primary mx-2">TRADE IN THB</button>
                <button class="btn btn-success mx-2">TRADE IN THB</button>
                <button class="btn btn-primary mx-2">TRADE IN THB</button>
            </div>
        </div>

        <!-- Main Table Section -->
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Time</th>
                                <th>Transfer By</th>
                                <th>From</th>
                                <th>Receive ACC</th>
                                <th>Owned</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7:20 AM</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>Owned</td>
                                <td>3000</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                            </tr>

                            <!-- Repeat rows dynamically -->
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link active" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">50</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-4">
                <!-- Trader Info -->
                <div class="p-3 border mb-3">
                    <h5>Trader Information</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Trader Name</th>
                                <th>Trade THB</th>
                                <th>Profit USDT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-warning"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Bank Summary -->
                <div class="p-3 border">
                    <h5>Bank Summary</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Bank Name</th>
                                <th>Count</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white">ABC Bank</td>
                                <td>6</td>
                                <td>14,500</td>
                            </tr>
                            <!-- Repeat dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>