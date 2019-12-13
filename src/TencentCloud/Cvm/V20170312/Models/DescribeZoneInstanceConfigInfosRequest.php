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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFilters() 获取Filters.

<li> `zone` - String - Optional - Filter results by availability zone.</li>

<li>`instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>

<li>`instance-type` - String - Optional - Filter results by model. Different instance models have different configurations. You can call `DescribeInstanceTypeConfigs` to query the latest configuration list or refer to the documentation on instance types. If this parameter is not specified, `S1.SMALL1` will be used by default.</li>

<li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for CDH instances, not the CVMs running on the CDH instances.</li>
 * @method void setFilters(array $Filters) 设置Filters.

<li> `zone` - String - Optional - Filter results by availability zone.</li>

<li>`instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>

<li>`instance-type` - String - Optional - Filter results by model. Different instance models have different configurations. You can call `DescribeInstanceTypeConfigs` to query the latest configuration list or refer to the documentation on instance types. If this parameter is not specified, `S1.SMALL1` will be used by default.</li>

<li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for CDH instances, not the CVMs running on the CDH instances.</li>
 */

/**
 *DescribeZoneInstanceConfigInfos request structure.
 */
class DescribeZoneInstanceConfigInfosRequest extends AbstractModel
{
    /**
     * @var array Filters.

<li> `zone` - String - Optional - Filter results by availability zone.</li>

<li>`instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>

<li>`instance-type` - String - Optional - Filter results by model. Different instance models have different configurations. You can call `DescribeInstanceTypeConfigs` to query the latest configuration list or refer to the documentation on instance types. If this parameter is not specified, `S1.SMALL1` will be used by default.</li>

<li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for CDH instances, not the CVMs running on the CDH instances.</li>
     */
    public $Filters;
    /**
     * @param array $Filters Filters.

<li> `zone` - String - Optional - Filter results by availability zone.</li>

<li>`instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>

<li>`instance-type` - String - Optional - Filter results by model. Different instance models have different configurations. You can call `DescribeInstanceTypeConfigs` to query the latest configuration list or refer to the documentation on instance types. If this parameter is not specified, `S1.SMALL1` will be used by default.</li>

<li>`instance-charge-type` - String - Optional - Filter results by instance billing method. `POSTPAID_BY_HOUR`: pay-as-you-go | `CDHPAID`: you are only billed for CDH instances, not the CVMs running on the CDH instances.</li>
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
