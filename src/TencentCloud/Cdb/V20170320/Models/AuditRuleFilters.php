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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter of rule audit
 *
 * @method array getRuleFilters() Obtain Audit rule 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule 
Note:  This field may return null, indicating that no valid values can be obtained.
 */
class AuditRuleFilters extends AbstractModel
{
    /**
     * @var array Audit rule 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleFilters;

    /**
     * @param array $RuleFilters Audit rule 
Note:  This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }
    }
}
