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
 * List of core file monitoring rules
 *
 * @method string getName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleCategory() Obtain Rule Type. 0: System Rule; 1: User Rule
 * @method void setRuleCategory(integer $RuleCategory) Set Rule Type. 0: System Rule; 1: User Rule
 * @method integer getHostCount() Obtain Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCount(integer $HostCount) Set Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getStatus() Obtain Status. 0: Enabled; 1: Disabled
 * @method void setStatus(integer $Status) Set Status. 0: Enabled; 1: Disabled
 * @method integer getId() Obtain Rule ID, which is set to 0 for system rules
 * @method void setId(integer $Id) Set Rule ID, which is set to 0 for system rules
 * @method integer getIsGlobal() Obtain Whether global 0: no; 1: yes
 * @method void setIsGlobal(integer $IsGlobal) Set Whether global 0: no; 1: yes
 * @method integer getLevel() Obtain Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method void setLevel(integer $Level) Set Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method integer getWriteRuleCount() Obtain Number of write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWriteRuleCount(integer $WriteRuleCount) Set Number of write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadRuleCount() Obtain Number of read entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadRuleCount(integer $ReadRuleCount) Set Number of read entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadWriteRuleCount() Obtain Number of read and write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadWriteRuleCount(integer $ReadWriteRuleCount) Set Number of read and write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileAction() Obtain Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileAction(string $FileAction) Set Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddWhiteType() Obtain Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddWhiteType(string $AddWhiteType) Set Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileTamperRuleInfo extends AbstractModel
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
     * @var integer Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCount;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Status. 0: Enabled; 1: Disabled
     */
    public $Status;

    /**
     * @var integer Rule ID, which is set to 0 for system rules
     */
    public $Id;

    /**
     * @var integer Whether global 0: no; 1: yes
     */
    public $IsGlobal;

    /**
     * @var integer Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     */
    public $Level;

    /**
     * @var integer Number of write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WriteRuleCount;

    /**
     * @var integer Number of read entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadRuleCount;

    /**
     * @var integer Number of read and write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadWriteRuleCount;

    /**
     * @var string Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileAction;

    /**
     * @var string Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddWhiteType;

    /**
     * @param string $Name Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleCategory Rule Type. 0: System Rule; 1: User Rule
     * @param integer $HostCount Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Update time
     * @param string $CreateTime Creation time
     * @param integer $Status Status. 0: Enabled; 1: Disabled
     * @param integer $Id Rule ID, which is set to 0 for system rules
     * @param integer $IsGlobal Whether global 0: no; 1: yes
     * @param integer $Level Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     * @param integer $WriteRuleCount Number of write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadRuleCount Number of read entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadWriteRuleCount Number of read and write entries for the sub-rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileAction Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddWhiteType Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WriteRuleCount",$param) and $param["WriteRuleCount"] !== null) {
            $this->WriteRuleCount = $param["WriteRuleCount"];
        }

        if (array_key_exists("ReadRuleCount",$param) and $param["ReadRuleCount"] !== null) {
            $this->ReadRuleCount = $param["ReadRuleCount"];
        }

        if (array_key_exists("ReadWriteRuleCount",$param) and $param["ReadWriteRuleCount"] !== null) {
            $this->ReadWriteRuleCount = $param["ReadWriteRuleCount"];
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
