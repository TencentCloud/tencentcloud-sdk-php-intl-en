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
 * DescribeL7AccRules request structure.
 *
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method array getFilters() Obtain Filter conditions. the upper limit for filters.values is 20. if this parameter is not filled in, the rules under the site are returned in order by default. detailed filtering conditions are as follows:.
<Li>Rule-Id: filter by rule id.</li>.
 * @method void setFilters(array $Filters) Set Filter conditions. the upper limit for filters.values is 20. if this parameter is not filled in, the rules under the site are returned in order by default. detailed filtering conditions are as follows:.
<Li>Rule-Id: filter by rule id.</li>.
 * @method integer getLimit() Obtain Number limit of paginated query. default value: 20. maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. default value: 20. maximum value: 1000.
 * @method integer getOffset() Obtain Offset of paginated query. default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. default value: 0.
 */
class DescribeL7AccRulesRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var array Filter conditions. the upper limit for filters.values is 20. if this parameter is not filled in, the rules under the site are returned in order by default. detailed filtering conditions are as follows:.
<Li>Rule-Id: filter by rule id.</li>.
     */
    public $Filters;

    /**
     * @var integer Number limit of paginated query. default value: 20. maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset of paginated query. default value: 0.
     */
    public $Offset;

    /**
     * @param string $ZoneId Zone id.
     * @param array $Filters Filter conditions. the upper limit for filters.values is 20. if this parameter is not filled in, the rules under the site are returned in order by default. detailed filtering conditions are as follows:.
<Li>Rule-Id: filter by rule id.</li>.
     * @param integer $Limit Number limit of paginated query. default value: 20. maximum value: 1000.
     * @param integer $Offset Offset of paginated query. default value: 0.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
