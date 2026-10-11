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
 * Vulnerability ignore rule.
 *
 * @method integer getVulID() Obtain Vulnerability rule ID.
 * @method void setVulID(integer $VulID) Set Vulnerability rule ID.
 * @method integer getAssetScopeType() Obtain <li>0: all hosts</li>
<li>1: Optional host</li>
 * @method void setAssetScopeType(integer $AssetScopeType) Set <li>0: all hosts</li>
<li>1: Optional host</li>
 * @method array getIncludeQuuidList() Obtain List of QUUIDs for custom-selected hosts when custom hosts are used.
 * @method void setIncludeQuuidList(array $IncludeQuuidList) Set List of QUUIDs for custom-selected hosts when custom hosts are used.
 * @method array getExcludeQuuidList() Obtain Hosts excluded when all hosts are selected.
 * @method void setExcludeQuuidList(array $ExcludeQuuidList) Set Hosts excluded when all hosts are selected.
 * @method string getRemark() Obtain Reason for ignoring.
 * @method void setRemark(string $Remark) Set Reason for ignoring.
 * @method integer getConfigHostCount() Obtain Number of configured hosts.
 * @method void setConfigHostCount(integer $ConfigHostCount) Set Number of configured hosts.
 * @method integer getAffectedHostCount() Obtain Number of hosts actually affected.
 * @method void setAffectedHostCount(integer $AffectedHostCount) Set Number of hosts actually affected.
 * @method string getVulName() Obtain Vulnerability name.
 * @method void setVulName(string $VulName) Set Vulnerability name.
 * @method integer getRuleID() Obtain Ignore rule ID.
 * @method void setRuleID(integer $RuleID) Set Ignore rule ID.
 * @method string getModifyTime() Obtain Latest update time
 * @method void setModifyTime(string $ModifyTime) Set Latest update time
 */
class VulIgnoreRule extends AbstractModel
{
    /**
     * @var integer Vulnerability rule ID.
     */
    public $VulID;

    /**
     * @var integer <li>0: all hosts</li>
<li>1: Optional host</li>
     */
    public $AssetScopeType;

    /**
     * @var array List of QUUIDs for custom-selected hosts when custom hosts are used.
     */
    public $IncludeQuuidList;

    /**
     * @var array Hosts excluded when all hosts are selected.
     */
    public $ExcludeQuuidList;

    /**
     * @var string Reason for ignoring.
     */
    public $Remark;

    /**
     * @var integer Number of configured hosts.
     */
    public $ConfigHostCount;

    /**
     * @var integer Number of hosts actually affected.
     */
    public $AffectedHostCount;

    /**
     * @var string Vulnerability name.
     */
    public $VulName;

    /**
     * @var integer Ignore rule ID.
     */
    public $RuleID;

    /**
     * @var string Latest update time
     */
    public $ModifyTime;

    /**
     * @param integer $VulID Vulnerability rule ID.
     * @param integer $AssetScopeType <li>0: all hosts</li>
<li>1: Optional host</li>
     * @param array $IncludeQuuidList List of QUUIDs for custom-selected hosts when custom hosts are used.
     * @param array $ExcludeQuuidList Hosts excluded when all hosts are selected.
     * @param string $Remark Reason for ignoring.
     * @param integer $ConfigHostCount Number of configured hosts.
     * @param integer $AffectedHostCount Number of hosts actually affected.
     * @param string $VulName Vulnerability name.
     * @param integer $RuleID Ignore rule ID.
     * @param string $ModifyTime Latest update time
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
        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("AssetScopeType",$param) and $param["AssetScopeType"] !== null) {
            $this->AssetScopeType = $param["AssetScopeType"];
        }

        if (array_key_exists("IncludeQuuidList",$param) and $param["IncludeQuuidList"] !== null) {
            $this->IncludeQuuidList = $param["IncludeQuuidList"];
        }

        if (array_key_exists("ExcludeQuuidList",$param) and $param["ExcludeQuuidList"] !== null) {
            $this->ExcludeQuuidList = $param["ExcludeQuuidList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConfigHostCount",$param) and $param["ConfigHostCount"] !== null) {
            $this->ConfigHostCount = $param["ConfigHostCount"];
        }

        if (array_key_exists("AffectedHostCount",$param) and $param["AffectedHostCount"] !== null) {
            $this->AffectedHostCount = $param["AffectedHostCount"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
