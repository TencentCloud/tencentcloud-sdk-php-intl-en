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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of the order
 *
 * @method string getOrderId() Obtain <p>The ID of the order</p>
 * @method void setOrderId(string $OrderId) Set <p>The ID of the order</p>
 * @method Amount getAmount() Obtain <p>The amount of the order</p>
 * @method void setAmount(Amount $Amount) Set <p>The amount of the order</p>
 * @method array getItems() Obtain <p>The detail information of the items in the order</p>
 * @method void setItems(array $Items) Set <p>The detail information of the items in the order</p>
 * @method Delivery getDelivery() Obtain <p>The detail information of the delivery associated with the order</p>
 * @method void setDelivery(Delivery $Delivery) Set <p>The detail information of the delivery associated with the order</p>
 */
class Order extends AbstractModel
{
    /**
     * @var string <p>The ID of the order</p>
     */
    public $OrderId;

    /**
     * @var Amount <p>The amount of the order</p>
     */
    public $Amount;

    /**
     * @var array <p>The detail information of the items in the order</p>
     */
    public $Items;

    /**
     * @var Delivery <p>The detail information of the delivery associated with the order</p>
     */
    public $Delivery;

    /**
     * @param string $OrderId <p>The ID of the order</p>
     * @param Amount $Amount <p>The amount of the order</p>
     * @param array $Items <p>The detail information of the items in the order</p>
     * @param Delivery $Delivery <p>The detail information of the delivery associated with the order</p>
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = new Amount();
            $this->Amount->deserialize($param["Amount"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Delivery",$param) and $param["Delivery"] !== null) {
            $this->Delivery = new Delivery();
            $this->Delivery->deserialize($param["Delivery"]);
        }
    }
}
