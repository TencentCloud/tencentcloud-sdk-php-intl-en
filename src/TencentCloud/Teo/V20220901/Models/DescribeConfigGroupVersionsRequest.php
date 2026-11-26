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
 * DescribeConfigGroupVersions request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGroupId() Obtain Configuration group ID.
 * @method void setGroupId(string $GroupId) Set Configuration group ID.
 * @method array getFilters() Obtain Filter criteria. The maximum number of `Filters.Values` is 20. If this parameter is left empty, all version information under the selected configuration group is returned. Detailed filter criteria:
<li>version-id: Filter by version ID;</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of `Filters.Values` is 20. If this parameter is left empty, all version information under the selected configuration group is returned. Detailed filter criteria:
<li>version-id: Filter by version ID;</li>
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Paginated query limit. Default value: 20, maximum value: 100.
 * @method void setLimit(integer $Limit) Set Paginated query limit. Default value: 20, maximum value: 100.
 */
class DescribeConfigGroupVersionsRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Configuration group ID.
     */
    public $GroupId;

    /**
     * @var array Filter criteria. The maximum number of `Filters.Values` is 20. If this parameter is left empty, all version information under the selected configuration group is returned. Detailed filter criteria:
<li>version-id: Filter by version ID;</li>
     */
    public $Filters;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Paginated query limit. Default value: 20, maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GroupId Configuration group ID.
     * @param array $Filters Filter criteria. The maximum number of `Filters.Values` is 20. If this parameter is left empty, all version information under the selected configuration group is returned. Detailed filter criteria:
<li>version-id: Filter by version ID;</li>
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit Paginated query limit. Default value: 20, maximum value: 100.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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
