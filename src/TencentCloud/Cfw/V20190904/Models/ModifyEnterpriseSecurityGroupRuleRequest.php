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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnterpriseSecurityGroupRule request structure.
 *
 * @method integer getRuleUuid() Obtain UUID of the rule, which can be obtained by querying the rule list
 * @method void setRuleUuid(integer $RuleUuid) Set UUID of the rule, which can be obtained by querying the rule list
 * @method integer getModifyType() Obtain Modification type. Values: `0` (Modify rule content), `1` (Toggle on/off a rule) and `2` (Toggle on/off all rules)
 * @method void setModifyType(integer $ModifyType) Set Modification type. Values: `0` (Modify rule content), `1` (Toggle on/off a rule) and `2` (Toggle on/off all rules)
 * @method SecurityGroupRule getData() Obtain The new rule content you want. It’s only required when you want to modify the rule content (`ModifyType=0`)
 * @method void setData(SecurityGroupRule $Data) Set The new rule content you want. It’s only required when you want to modify the rule content (`ModifyType=0`)
 * @method integer getEnable() Obtain `0`: Do not enable; `1`: Enable
 * @method void setEnable(integer $Enable) Set `0`: Do not enable; `1`: Enable
 */
class ModifyEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer UUID of the rule, which can be obtained by querying the rule list
     */
    public $RuleUuid;

    /**
     * @var integer Modification type. Values: `0` (Modify rule content), `1` (Toggle on/off a rule) and `2` (Toggle on/off all rules)
     */
    public $ModifyType;

    /**
     * @var SecurityGroupRule The new rule content you want. It’s only required when you want to modify the rule content (`ModifyType=0`)
     */
    public $Data;

    /**
     * @var integer `0`: Do not enable; `1`: Enable
     */
    public $Enable;

    /**
     * @param integer $RuleUuid UUID of the rule, which can be obtained by querying the rule list
     * @param integer $ModifyType Modification type. Values: `0` (Modify rule content), `1` (Toggle on/off a rule) and `2` (Toggle on/off all rules)
     * @param SecurityGroupRule $Data The new rule content you want. It’s only required when you want to modify the rule content (`ModifyType=0`)
     * @param integer $Enable `0`: Do not enable; `1`: Enable
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
        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new SecurityGroupRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
