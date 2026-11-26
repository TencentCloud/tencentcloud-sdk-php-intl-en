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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeL4Proxy request structure.
 *
 * @method string getZoneId() Obtain ID of the zone where the Layer 4 proxy instance belongs.
 * @method void setZoneId(string $ZoneId) Set ID of the zone where the Layer 4 proxy instance belongs.
 * @method integer getOffset() Obtain Offset of paginated query. If left empty, the default value is 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. If left empty, the default value is 0.
 * @method integer getLimit() Obtain The limit of paginated query. Default value: 20. Maximum value: 1,000.	
 * @method void setLimit(integer $Limit) Set The limit of paginated query. Default value: 20. Maximum value: 1,000.	
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all Layer 4 proxy instance information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>proxy-id: filter by L4 proxy instance ID;</li>
<li>ddos-protection-type: filters by security protection type.</li>


 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all Layer 4 proxy instance information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>proxy-id: filter by L4 proxy instance ID;</li>
<li>ddos-protection-type: filters by security protection type.</li>
 */
class DescribeL4ProxyRequest extends AbstractModel
{
    /**
     * @var string ID of the zone where the Layer 4 proxy instance belongs.
     */
    public $ZoneId;

    /**
     * @var integer Offset of paginated query. If left empty, the default value is 0.
     */
    public $Offset;

    /**
     * @var integer The limit of paginated query. Default value: 20. Maximum value: 1,000.	
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all Layer 4 proxy instance information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>proxy-id: filter by L4 proxy instance ID;</li>
<li>ddos-protection-type: filters by security protection type.</li>


     */
    public $Filters;

    /**
     * @param string $ZoneId ID of the zone where the Layer 4 proxy instance belongs.
     * @param integer $Offset Offset of paginated query. If left empty, the default value is 0.
     * @param integer $Limit The limit of paginated query. Default value: 20. Maximum value: 1,000.	
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. If this parameter is left empty, all Layer 4 proxy instance information under the current zone ID will be returned. The detailed filter criteria are as follows:
<li>proxy-id: filter by L4 proxy instance ID;</li>
<li>ddos-protection-type: filters by security protection type.</li>
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
