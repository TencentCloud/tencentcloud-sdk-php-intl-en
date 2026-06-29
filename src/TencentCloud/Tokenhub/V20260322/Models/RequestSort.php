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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sort criteria
 *
 * @method string getName() Obtain Sorting field name.
 * @method void setName(string $Name) Set Sorting field name.
 * @method string getOrder() Obtain Sorting order. Value: ASC (ascending), DESC (descending).
 * @method void setOrder(string $Order) Set Sorting order. Value: ASC (ascending), DESC (descending).
 */
class RequestSort extends AbstractModel
{
    /**
     * @var string Sorting field name.
     */
    public $Name;

    /**
     * @var string Sorting order. Value: ASC (ascending), DESC (descending).
     */
    public $Order;

    /**
     * @param string $Name Sorting field name.
     * @param string $Order Sorting order. Value: ASC (ascending), DESC (descending).
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
