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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReservedInstancesConfigInfos request structure.
 *
 * @method array getFilters() Obtain <li><strong>zone</li></strong>
Filters by the availability zones in which the reserved instance can be purchased, such as `ap-guangzhou-1`.
Type: String
Required: no
Valid values: list of regions/availability zones

<li><strong>product-description</li></strong>
Filters by the platform description (operating system) of the reserved instance, such as `linux`.
Type: String
Required: no
Valid value: linux

<li><strong>duration</li></strong>
Filters by the **validity** of the reserved instance, which is the purchased usage period. For example, `31536000`.
Type: Integer
Unit: second
Required: no
Valid value: 31536000 (1 year)
 * @method void setFilters(array $Filters) Set <li><strong>zone</li></strong>
Filters by the availability zones in which the reserved instance can be purchased, such as `ap-guangzhou-1`.
Type: String
Required: no
Valid values: list of regions/availability zones

<li><strong>product-description</li></strong>
Filters by the platform description (operating system) of the reserved instance, such as `linux`.
Type: String
Required: no
Valid value: linux

<li><strong>duration</li></strong>
Filters by the **validity** of the reserved instance, which is the purchased usage period. For example, `31536000`.
Type: Integer
Unit: second
Required: no
Valid value: 31536000 (1 year)
 */
class DescribeReservedInstancesConfigInfosRequest extends AbstractModel
{
    /**
     * @var array <li><strong>zone</li></strong>
Filters by the availability zones in which the reserved instance can be purchased, such as `ap-guangzhou-1`.
Type: String
Required: no
Valid values: list of regions/availability zones

<li><strong>product-description</li></strong>
Filters by the platform description (operating system) of the reserved instance, such as `linux`.
Type: String
Required: no
Valid value: linux

<li><strong>duration</li></strong>
Filters by the **validity** of the reserved instance, which is the purchased usage period. For example, `31536000`.
Type: Integer
Unit: second
Required: no
Valid value: 31536000 (1 year)
     */
    public $Filters;

    /**
     * @param array $Filters <li><strong>zone</li></strong>
Filters by the availability zones in which the reserved instance can be purchased, such as `ap-guangzhou-1`.
Type: String
Required: no
Valid values: list of regions/availability zones

<li><strong>product-description</li></strong>
Filters by the platform description (operating system) of the reserved instance, such as `linux`.
Type: String
Required: no
Valid value: linux

<li><strong>duration</li></strong>
Filters by the **validity** of the reserved instance, which is the purchased usage period. For example, `31536000`.
Type: Integer
Unit: second
Required: no
Valid value: 31536000 (1 year)
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
