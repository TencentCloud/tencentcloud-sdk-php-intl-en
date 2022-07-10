<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewDBInstance response structure.
 *
 * @method integer getOriginalPrice() Obtain Total cost before discount; for example, 24650 indicates 246.5 CNY
 * @method void setOriginalPrice(integer $OriginalPrice) Set Total cost before discount; for example, 24650 indicates 246.5 CNY
 * @method integer getPrice() Obtain Actual amount payable; for example, 24650 indicates 246.5 CNY
 * @method void setPrice(integer $Price) Set Actual amount payable; for example, 24650 indicates 246.5 CNY
 * @method string getCurrency() Obtain Currency, such as USD for US dollar.
 * @method void setCurrency(string $Currency) Set Currency, such as USD for US dollar.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquiryPriceRenewDBInstanceResponse extends AbstractModel
{
    /**
     * @var integer Total cost before discount; for example, 24650 indicates 246.5 CNY
     */
    public $OriginalPrice;

    /**
     * @var integer Actual amount payable; for example, 24650 indicates 246.5 CNY
     */
    public $Price;

    /**
     * @var string Currency, such as USD for US dollar.
     */
    public $Currency;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $OriginalPrice Total cost before discount; for example, 24650 indicates 246.5 CNY
     * @param integer $Price Actual amount payable; for example, 24650 indicates 246.5 CNY
     * @param string $Currency Currency, such as USD for US dollar.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
