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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query Details of Host-related Core File Monitoring Rules
 *
 * @method string getName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleCategory() Obtain Rule Type. 0: System Rule; 1: User Rule
 * @method void setRuleCategory(integer $RuleCategory) Set Rule Type. 0: System Rule; 1: User Rule
 * @method array getRule() Obtain Rule
 * @method void setRule(array $Rule) Set Rule
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 */
class MachineFileTamperRule extends AbstractModel
{
    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Rule Type. 0: System Rule; 1: User Rule
     */
    public $RuleCategory;

    /**
     * @var array Rule
     */
    public $Rule;

    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @param string $Name Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleCategory Rule Type. 0: System Rule; 1: User Rule
     * @param array $Rule Rule
     * @param integer $Id Unique ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
