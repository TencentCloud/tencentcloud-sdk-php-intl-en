<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBPrice response structure.
 *
 * @method integer getOriginalPrice() Obtain Original price  
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
 * @method void setOriginalPrice(integer $OriginalPrice) Set Original price  
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
 * @method integer getPrice() Obtain The actual price may be different from the original price due to discounts. 
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
 * @method void setPrice(integer $Price) Set The actual price may be different from the original price due to discounts. 
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDCDBPriceResponse extends AbstractModel
{
    /**
     * @var integer Original price  
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
     */
    public $OriginalPrice;

    /**
     * @var integer The actual price may be different from the original price due to discounts. 
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
     */
    public $Price;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $OriginalPrice Original price  
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
     * @param integer $Price The actual price may be different from the original price due to discounts. 
* Unit: Cent (default). If the request parameter contains `AmountUnit`, see `AmountUnit` description.
* Currency: CNY (Chinese site), USD (international site)
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
