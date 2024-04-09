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
 * DescribeAliasDomains request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:
<li>target-name: Filter by the target domain name;</li>
<li>alias-name: Filter by the alias of the domain name.</li>Fuzzy queries are only supported for the field name alias-name.
 * @method void setFilters(array $Filters) Set Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:
<li>target-name: Filter by the target domain name;</li>
<li>alias-name: Filter by the alias of the domain name.</li>Fuzzy queries are only supported for the field name alias-name.
 */
class DescribeAliasDomainsRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:
<li>target-name: Filter by the target domain name;</li>
<li>alias-name: Filter by the alias of the domain name.</li>Fuzzy queries are only supported for the field name alias-name.
     */
    public $Filters;

    /**
     * @param string $ZoneId The site ID.
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:
<li>target-name: Filter by the target domain name;</li>
<li>alias-name: Filter by the alias of the domain name.</li>Fuzzy queries are only supported for the field name alias-name.
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
