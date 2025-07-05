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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Items of a general VAT invoice (roll)
 *
 * @method string getName() Obtain Item name
 * @method void setName(string $Name) Set Item name
 * @method string getQuantity() Obtain Quantity
 * @method void setQuantity(string $Quantity) Set Quantity
 * @method string getPrice() Obtain Unit price
 * @method void setPrice(string $Price) Set Unit price
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 */
class VatRollItem extends AbstractModel
{
    /**
     * @var string Item name
     */
    public $Name;

    /**
     * @var string Quantity
     */
    public $Quantity;

    /**
     * @var string Unit price
     */
    public $Price;

    /**
     * @var string Amount
     */
    public $Total;

    /**
     * @param string $Name Item name
     * @param string $Quantity Quantity
     * @param string $Price Unit price
     * @param string $Total Amount
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
