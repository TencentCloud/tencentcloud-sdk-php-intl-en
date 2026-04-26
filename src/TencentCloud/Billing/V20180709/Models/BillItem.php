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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Component name filter list
 *
 * @method string getItemCode() Obtain Component name code
 * @method void setItemCode(string $ItemCode) Set Component name code
 * @method string getItemCodeName() Obtain Component name: The specific component of a product or service purchased by the user
 * @method void setItemCodeName(string $ItemCodeName) Set Component name: The specific component of a product or service purchased by the user
 */
class BillItem extends AbstractModel
{
    /**
     * @var string Component name code
     */
    public $ItemCode;

    /**
     * @var string Component name: The specific component of a product or service purchased by the user
     */
    public $ItemCodeName;

    /**
     * @param string $ItemCode Component name code
     * @param string $ItemCodeName Component name: The specific component of a product or service purchased by the user
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
        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }
    }
}
