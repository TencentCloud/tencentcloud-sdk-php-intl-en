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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The product purchased.
 *
 * @method string getProductName() Obtain The name of the product.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setProductName(string $ProductName) Set The name of the product.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSubProductName() Obtain 
 * @method void setSubProductName(string $SubProductName) Set 
 */
class UsageDetails extends AbstractModel
{
    /**
     * @var string The name of the product.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ProductName;

    /**
     * @var string 
     */
    public $SubProductName;

    /**
     * @param string $ProductName The name of the product.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SubProductName 
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }
    }
}
