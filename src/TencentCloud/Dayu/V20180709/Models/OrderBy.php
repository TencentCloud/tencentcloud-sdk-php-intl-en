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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sort by field
 *
 * @method string getField() Obtain Sort by field name. Valid values: [
bandwidth (bandwidth),
overloadCount (number of times of exceeding peak value)
]
 * @method void setField(string $Field) Set Sort by field name. Valid values: [
bandwidth (bandwidth),
overloadCount (number of times of exceeding peak value)
]
 * @method string getOrder() Obtain Sorting order. Valid values: [asc (ascending), desc (descending)]
 * @method void setOrder(string $Order) Set Sorting order. Valid values: [asc (ascending), desc (descending)]
 */
class OrderBy extends AbstractModel
{
    /**
     * @var string Sort by field name. Valid values: [
bandwidth (bandwidth),
overloadCount (number of times of exceeding peak value)
]
     */
    public $Field;

    /**
     * @var string Sorting order. Valid values: [asc (ascending), desc (descending)]
     */
    public $Order;

    /**
     * @param string $Field Sort by field name. Valid values: [
bandwidth (bandwidth),
overloadCount (number of times of exceeding peak value)
]
     * @param string $Order Sorting order. Valid values: [asc (ascending), desc (descending)]
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
