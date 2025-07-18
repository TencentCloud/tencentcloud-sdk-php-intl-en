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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sort by criterion
 *
 * @method string getField() Obtain Sort by field
 * @method void setField(string $Field) Set Sort by field
 * @method string getOrder() Obtain Sorting order. Valid values: Asc (ascending), Desc (descending)
 * @method void setOrder(string $Order) Set Sorting order. Valid values: Asc (ascending), Desc (descending)
 */
class SortBy extends AbstractModel
{
    /**
     * @var string Sort by field
     */
    public $Field;

    /**
     * @var string Sorting order. Valid values: Asc (ascending), Desc (descending)
     */
    public $Order;

    /**
     * @param string $Field Sort by field
     * @param string $Order Sorting order. Valid values: Asc (ascending), Desc (descending)
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
