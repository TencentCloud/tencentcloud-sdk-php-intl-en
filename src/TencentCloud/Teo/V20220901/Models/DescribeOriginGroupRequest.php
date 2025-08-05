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
 * @method string getZoneId() Obtain (Required) Site ID
 * @method void setZoneId(string $ZoneId) Set (Required) Site ID
 * @method integer getOffset() Obtain The paginated query offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The paginated query offset. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Value range: 1-1000. Default value: 20.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Value range: 1-1000. Default value: 20.
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:

<li>`origin-group-id`: filter by origin group id. fuzzy queries are not supported. format: `origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a`;</li><li>`origin-group-name`: filter by origin group name. when fuzzy search is used, only one origin server group name is supported.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:

<li>`origin-group-id`: filter by origin group id. fuzzy queries are not supported. format: `origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a`;</li><li>`origin-group-name`: filter by origin group name. when fuzzy search is used, only one origin server group name is supported.</li>.
 */
class DescribeOriginGroupRequest extends AbstractModel
{
    /**
     * @var string (Required) Site ID
     */
    public $ZoneId;

    /**
     * @var integer The paginated query offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Value range: 1-1000. Default value: 20.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:

<li>`origin-group-id`: filter by origin group id. fuzzy queries are not supported. format: `origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a`;</li><li>`origin-group-name`: filter by origin group name. when fuzzy search is used, only one origin server group name is supported.</li>.
     */
    public $Filters;

    /**
     * @param string $ZoneId (Required) Site ID
     * @param integer $Offset The paginated query offset. Default value: 0
     * @param integer $Limit Limit on paginated queries. Value range: 1-1000. Default value: 20.
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:

<li>`origin-group-id`: filter by origin group id. fuzzy queries are not supported. format: `origin-2ccgtb24-7dc5-46s2-9r3e-95825d53dwe3a`;</li><li>`origin-group-name`: filter by origin group name. when fuzzy search is used, only one origin server group name is supported.</li>.
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
