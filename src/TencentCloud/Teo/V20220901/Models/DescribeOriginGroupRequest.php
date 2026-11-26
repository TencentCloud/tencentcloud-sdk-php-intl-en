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
 * DescribeOriginGroup request structure.
 *
 * @method string getZoneId() Obtain Site ID. This parameter is required.
 * @method void setZoneId(string $ZoneId) Set Site ID. This parameter is required.
 * @method integer getOffset() Obtain Paginated query offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Default value: 0.
 * @method integer getLimit() Obtain Paginated query limit. If not specified, the default value is 20. Value range: 1-1000.
 * @method void setLimit(integer $Limit) Set Paginated query limit. If not specified, the default value is 20. Value range: 1-1000.
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>origin-group-id: filter by origin group ID. Fuzzy queries are not supported. The origin group ID format is: origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a;</li><li>origin-group-name: filter by origin group name. When fuzzy search is used, only one origin group name can be filled in.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>origin-group-id: filter by origin group ID. Fuzzy queries are not supported. The origin group ID format is: origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a;</li><li>origin-group-name: filter by origin group name. When fuzzy search is used, only one origin group name can be filled in.</li>
 */
class DescribeOriginGroupRequest extends AbstractModel
{
    /**
     * @var string Site ID. This parameter is required.
     */
    public $ZoneId;

    /**
     * @var integer Paginated query offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Paginated query limit. If not specified, the default value is 20. Value range: 1-1000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>origin-group-id: filter by origin group ID. Fuzzy queries are not supported. The origin group ID format is: origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a;</li><li>origin-group-name: filter by origin group name. When fuzzy search is used, only one origin group name can be filled in.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Site ID. This parameter is required.
     * @param integer $Offset Paginated query offset. Default value: 0.
     * @param integer $Limit Paginated query limit. If not specified, the default value is 20. Value range: 1-1000.
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>origin-group-id: filter by origin group ID. Fuzzy queries are not supported. The origin group ID format is: origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a;</li><li>origin-group-name: filter by origin group name. When fuzzy search is used, only one origin group name can be filled in.</li>
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
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
