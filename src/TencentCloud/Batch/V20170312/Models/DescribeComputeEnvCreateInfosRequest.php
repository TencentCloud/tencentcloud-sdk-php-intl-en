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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvCreateInfos request structure.
 *
 * @method array getEnvIds() Obtain List of compute environment IDs, which cannot be specified together with the `Filters` parameter.
 * @method void setEnvIds(array $EnvIds) Set List of compute environment IDs, which cannot be specified together with the `Filters` parameter.
 * @method array getFilters() Obtain Filter conditions
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `env-id` - String - Optional - Filter by the compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by the compute environment name.</li>
It cannot be specified together with `EnvIds`.
 * @method void setFilters(array $Filters) Set Filter conditions
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `env-id` - String - Optional - Filter by the compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by the compute environment name.</li>
It cannot be specified together with `EnvIds`.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Maximum number of returned items
 * @method void setLimit(integer $Limit) Set Maximum number of returned items
 */
class DescribeComputeEnvCreateInfosRequest extends AbstractModel
{
    /**
     * @var array List of compute environment IDs, which cannot be specified together with the `Filters` parameter.
     */
    public $EnvIds;

    /**
     * @var array Filter conditions
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `env-id` - String - Optional - Filter by the compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by the compute environment name.</li>
It cannot be specified together with `EnvIds`.
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Maximum number of returned items
     */
    public $Limit;

    /**
     * @param array $EnvIds List of compute environment IDs, which cannot be specified together with the `Filters` parameter.
     * @param array $Filters Filter conditions
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `env-id` - String - Optional - Filter by the compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by the compute environment name.</li>
It cannot be specified together with `EnvIds`.
     * @param integer $Offset Offset
     * @param integer $Limit Maximum number of returned items
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
        if (array_key_exists("EnvIds",$param) and $param["EnvIds"] !== null) {
            $this->EnvIds = $param["EnvIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
