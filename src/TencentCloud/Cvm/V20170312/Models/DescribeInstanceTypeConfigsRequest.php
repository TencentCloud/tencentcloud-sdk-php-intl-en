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
 * @method array getFilters() Obtain Filters.
<li> `zone` - String - Optional - Filter results by [availability zone](https://cloud.tencent.com/document/product/213/15753#ZoneInfo).</li>
<li> `instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
 * @method void setFilters(array $Filters) Set Filters.
<li> `zone` - String - Optional - Filter results by [availability zone](https://cloud.tencent.com/document/product/213/15753#ZoneInfo).</li>
<li> `instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
 */

/**
 *DescribeInstanceTypeConfigs request structure.
 */
class DescribeInstanceTypeConfigsRequest extends AbstractModel
{
    /**
     * @var array Filters.
<li> `zone` - String - Optional - Filter results by [availability zone](https://cloud.tencent.com/document/product/213/15753#ZoneInfo).</li>
<li> `instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
     */
    public $Filters;
    /**
     * @param array $Filters Filters.
<li> `zone` - String - Optional - Filter results by [availability zone](https://cloud.tencent.com/document/product/213/15753#ZoneInfo).</li>
<li> `instance-family` - String - Optional - Filter results by instance model family, such as `S1`, `I1`, and `M1`.</li>
Each request can have up to 10 `Filters` and 1 `Filters.Values`.
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
