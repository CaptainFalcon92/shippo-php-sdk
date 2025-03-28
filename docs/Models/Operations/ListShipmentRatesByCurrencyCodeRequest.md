# ListShipmentRatesByCurrencyCodeRequest


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `shipmentId`                                         | *string*                                             | :heavy_check_mark:                                   | Object ID of the shipment to update                  |                                                      |
| `currencyCode`                                       | *string*                                             | :heavy_check_mark:                                   | ISO currency code for the rates                      |                                                      |
| `page`                                               | *?int*                                               | :heavy_minus_sign:                                   | The page number you want to select                   |                                                      |
| `results`                                            | *?int*                                               | :heavy_minus_sign:                                   | The number of results to return per page (max 100)   |                                                      |
| `shippoApiVersion`                                   | *?string*                                            | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |