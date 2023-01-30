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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulSummary request structure.
 *
 * @method array getFilters() Obtain Filter
<li>OnlyAffectedNewestImage- string- Required: No - Show only vulnerabilities that affect the latest image tags. Valid values: `true`, `false`.</li>
<li>OnlyAffectedContainer-string- Required: No - Show only vulnerabilities that affect containers. Valid values: `true`, `false`.</li>
<li>CategoryType- string - Required: No - Vulnerability type. Valid values: `SYSTEM` (system vulnerability); `WEB` (web application vulnerability); `ALL` (all vulnerabilities).</li>
 * @method void setFilters(array $Filters) Set Filter
<li>OnlyAffectedNewestImage- string- Required: No - Show only vulnerabilities that affect the latest image tags. Valid values: `true`, `false`.</li>
<li>OnlyAffectedContainer-string- Required: No - Show only vulnerabilities that affect containers. Valid values: `true`, `false`.</li>
<li>CategoryType- string - Required: No - Vulnerability type. Valid values: `SYSTEM` (system vulnerability); `WEB` (web application vulnerability); `ALL` (all vulnerabilities).</li>
 */
class DescribeVulSummaryRequest extends AbstractModel
{
    /**
     * @var array Filter
<li>OnlyAffectedNewestImage- string- Required: No - Show only vulnerabilities that affect the latest image tags. Valid values: `true`, `false`.</li>
<li>OnlyAffectedContainer-string- Required: No - Show only vulnerabilities that affect containers. Valid values: `true`, `false`.</li>
<li>CategoryType- string - Required: No - Vulnerability type. Valid values: `SYSTEM` (system vulnerability); `WEB` (web application vulnerability); `ALL` (all vulnerabilities).</li>
     */
    public $Filters;

    /**
     * @param array $Filters Filter
<li>OnlyAffectedNewestImage- string- Required: No - Show only vulnerabilities that affect the latest image tags. Valid values: `true`, `false`.</li>
<li>OnlyAffectedContainer-string- Required: No - Show only vulnerabilities that affect containers. Valid values: `true`, `false`.</li>
<li>CategoryType- string - Required: No - Vulnerability type. Valid values: `SYSTEM` (system vulnerability); `WEB` (web application vulnerability); `ALL` (all vulnerabilities).</li>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
