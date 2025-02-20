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
 * DescribeRules request structure.
 *
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method array getFilters() Obtain Filter criteria. the maximum value of filters.values is 20. the detailed filter criteria are as follows:
.
<Li>Rule-Id: filter by rule id.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. the maximum value of filters.values is 20. the detailed filter criteria are as follows:
.
<Li>Rule-Id: filter by rule id.</li>.
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var array Filter criteria. the maximum value of filters.values is 20. the detailed filter criteria are as follows:
.
<Li>Rule-Id: filter by rule id.</li>.
     */
    public $Filters;

    /**
     * @param string $ZoneId ID of the site
     * @param array $Filters Filter criteria. the maximum value of filters.values is 20. the detailed filter criteria are as follows:
.
<Li>Rule-Id: filter by rule id.</li>.
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
    }
}
