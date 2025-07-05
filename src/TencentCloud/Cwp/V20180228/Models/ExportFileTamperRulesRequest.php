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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportFileTamperRules request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>RuleCategory- string- rule category: 0 = system rule; 1 = user rule</li>
<li>Name - String - Rule name</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>RuleCategory- string- rule category: 0 = system rule; 1 = user rule</li>
<li>Name - String - Rule name</li>
 */
class ExportFileTamperRulesRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>RuleCategory- string- rule category: 0 = system rule; 1 = user rule</li>
<li>Name - String - Rule name</li>
     */
    public $Filters;

    /**
     * @param array $Filters Filter criteria
<li>RuleCategory- string- rule category: 0 = system rule; 1 = user rule</li>
<li>Name - String - Rule name</li>
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
