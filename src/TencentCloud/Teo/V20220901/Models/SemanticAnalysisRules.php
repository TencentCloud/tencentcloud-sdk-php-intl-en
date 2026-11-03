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
 * 
 *
 * @method string getEnabled() Obtain 
 * @method void setEnabled(string $Enabled) Set 
 * @method array getRuleActions() Obtain 
 * @method void setRuleActions(array $RuleActions) Set 
 * @method ManagedRuleGroupMeta getMetaData() Obtain 
 * @method void setMetaData(ManagedRuleGroupMeta $MetaData) Set 
 */
class SemanticAnalysisRules extends AbstractModel
{
    /**
     * @var string 
     */
    public $Enabled;

    /**
     * @var array 
     */
    public $RuleActions;

    /**
     * @var ManagedRuleGroupMeta 
     */
    public $MetaData;

    /**
     * @param string $Enabled 
     * @param array $RuleActions 
     * @param ManagedRuleGroupMeta $MetaData 
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = [];
            foreach ($param["RuleActions"] as $key => $value){
                $obj = new ManagedRuleAction();
                $obj->deserialize($value);
                array_push($this->RuleActions, $obj);
            }
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new ManagedRuleGroupMeta();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
