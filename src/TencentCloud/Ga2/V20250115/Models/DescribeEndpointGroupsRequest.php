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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEndpointGroups request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returns. Default value: 10. Maximum value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returns. Default value: 10. Maximum value: 10.</p>
 * @method array getFilters() Obtain <p>Filter criteria. endpoint-group-id - String - (Filter criterion) Terminal node group instance ID. endpoint-group-type - String - (Filter criterion) Terminal node group instance type.</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. endpoint-group-id - String - (Filter criterion) Terminal node group instance ID. endpoint-group-type - String - (Filter criterion) Terminal node group instance type.</p>
 */
class DescribeEndpointGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returns. Default value: 10. Maximum value: 10.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria. endpoint-group-id - String - (Filter criterion) Terminal node group instance ID. endpoint-group-type - String - (Filter criterion) Terminal node group instance type.</p>
     */
    public $Filters;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returns. Default value: 10. Maximum value: 10.</p>
     * @param array $Filters <p>Filter criteria. endpoint-group-id - String - (Filter criterion) Terminal node group instance ID. endpoint-group-type - String - (Filter criterion) Terminal node group instance type.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
