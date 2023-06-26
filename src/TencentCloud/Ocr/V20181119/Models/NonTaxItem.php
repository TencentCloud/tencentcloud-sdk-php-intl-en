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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Non-tax revenue items
 *
 * @method string getItemID() Obtain Item code
 * @method void setItemID(string $ItemID) Set Item code
 * @method string getName() Obtain Item name
 * @method void setName(string $Name) Set Item name
 * @method string getUnit() Obtain Unit
 * @method void setUnit(string $Unit) Set Unit
 * @method string getQuantity() Obtain Quantity
 * @method void setQuantity(string $Quantity) Set Quantity
 * @method string getStandard() Obtain Standard
 * @method void setStandard(string $Standard) Set Standard
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 */
class NonTaxItem extends AbstractModel
{
    /**
     * @var string Item code
     */
    public $ItemID;

    /**
     * @var string Item name
     */
    public $Name;

    /**
     * @var string Unit
     */
    public $Unit;

    /**
     * @var string Quantity
     */
    public $Quantity;

    /**
     * @var string Standard
     */
    public $Standard;

    /**
     * @var string Amount
     */
    public $Total;

    /**
     * @param string $ItemID Item code
     * @param string $Name Item name
     * @param string $Unit Unit
     * @param string $Quantity Quantity
     * @param string $Standard Standard
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
