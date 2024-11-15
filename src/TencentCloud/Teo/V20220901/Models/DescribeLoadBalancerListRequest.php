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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancerList request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.		
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.		
 * @method integer getLimit() Obtain Paginated query limit. Default value: 20, maximum value: 100.	
 * @method void setLimit(integer $Limit) Set Paginated query limit. Default value: 20, maximum value: 100.	
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all LoadBalancer information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>InstanceName: Filter by LoadBalancer name.</li>
<li>InstanceId: Filter by LoadBalancer ID.</li>

 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all LoadBalancer information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>InstanceName: Filter by LoadBalancer name.</li>
<li>InstanceId: Filter by LoadBalancer ID.</li>
 */
class DescribeLoadBalancerListRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer Offset of paginated query. Default value: 0.		
     */
    public $Offset;

    /**
     * @var integer Paginated query limit. Default value: 20, maximum value: 100.	
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all LoadBalancer information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>InstanceName: Filter by LoadBalancer name.</li>
<li>InstanceId: Filter by LoadBalancer ID.</li>

     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset Offset of paginated query. Default value: 0.		
     * @param integer $Limit Paginated query limit. Default value: 20, maximum value: 100.	
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all LoadBalancer information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>InstanceName: Filter by LoadBalancer name.</li>
<li>InstanceId: Filter by LoadBalancer ID.</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
