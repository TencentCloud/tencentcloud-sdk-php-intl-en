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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Owasp rule.
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method integer getStatus() Obtain Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
 * @method void setStatus(integer $Status) Set Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
 * @method integer getLevel() Obtain Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 * @method void setLevel(integer $Level) Set Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 * @method integer getVulLevel() Obtain Threat level. valid values: 0 (unknown), 100 (low risk), 200 (medium risk), 300 (high risk), 400 (critical).
 * @method void setVulLevel(integer $VulLevel) Set Threat level. valid values: 0 (unknown), 100 (low risk), 200 (medium risk), 300 (high risk), 400 (critical).
 * @method string getCveID() Obtain CVE ID
 * @method void setCveID(string $CveID) Set CVE ID
 * @method integer getTypeId() Obtain Specifies the rule type ID.
 * @method void setTypeId(integer $TypeId) Set Specifies the rule type ID.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Update time.
 * @method void setModifyTime(string $ModifyTime) Set Update time.
 * @method integer getLocked() Obtain Whether the user is locked.
 * @method void setLocked(integer $Locked) Set Whether the user is locked.
 * @method integer getReason() Obtain Reason for modification

0: none (compatibility records are empty).
1: avoid false positives due to business characteristics.
2: reporting of rule-based false positives.
3: gray release of core business rules.
4: others
 * @method void setReason(integer $Reason) Set Reason for modification

0: none (compatibility records are empty).
1: avoid false positives due to business characteristics.
2: reporting of rule-based false positives.
3: gray release of core business rules.
4: others
 */
class OwaspRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var integer Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
     */
    public $Status;

    /**
     * @var integer Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
     */
    public $Level;

    /**
     * @var integer Threat level. valid values: 0 (unknown), 100 (low risk), 200 (medium risk), 300 (high risk), 400 (critical).
     */
    public $VulLevel;

    /**
     * @var string CVE ID
     */
    public $CveID;

    /**
     * @var integer Specifies the rule type ID.
     */
    public $TypeId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $ModifyTime;

    /**
     * @var integer Whether the user is locked.
     */
    public $Locked;

    /**
     * @var integer Reason for modification

0: none (compatibility records are empty).
1: avoid false positives due to business characteristics.
2: reporting of rule-based false positives.
3: gray release of core business rules.
4: others
     */
    public $Reason;

    /**
     * @param integer $RuleId Rule ID
     * @param string $Description Rule description
     * @param integer $Status Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
     * @param integer $Level Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
     * @param integer $VulLevel Threat level. valid values: 0 (unknown), 100 (low risk), 200 (medium risk), 300 (high risk), 400 (critical).
     * @param string $CveID CVE ID
     * @param integer $TypeId Specifies the rule type ID.
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Update time.
     * @param integer $Locked Whether the user is locked.
     * @param integer $Reason Reason for modification

0: none (compatibility records are empty).
1: avoid false positives due to business characteristics.
2: reporting of rule-based false positives.
3: gray release of core business rules.
4: others
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
