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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos policy information
 *
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method integer getPolicyType() Obtain Policy type
PolicyType: 1 alarm policy 2 risk policy 3 allowlist policy 4 ip hiding policy
 * @method void setPolicyType(integer $PolicyType) Set Policy type
PolicyType: 1 alarm policy 2 risk policy 3 allowlist policy 4 ip hiding policy
 * @method integer getPolicySource() Obtain system: system built-in user: user-customized
 * @method void setPolicySource(integer $PolicySource) Set system: system built-in user: user-customized
 * @method string getPolicyContent() Obtain Policy content
 * @method void setPolicyContent(string $PolicyContent) Set Policy content
 * @method integer getPolicyStatus() Obtain 0: disabled
1: enabled.
 * @method void setPolicyStatus(integer $PolicyStatus) Set 0: disabled
1: enabled.
 * @method integer getPolicyAbnormalType() Obtain Policy classification
 * @method void setPolicyAbnormalType(integer $PolicyAbnormalType) Set Policy classification
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getPolicyCreateTime() Obtain Creation time.
 * @method void setPolicyCreateTime(integer $PolicyCreateTime) Set Creation time.
 * @method integer getPolicyUpdateTime() Obtain Update time.
 * @method void setPolicyUpdateTime(integer $PolicyUpdateTime) Set Update time.
 * @method integer getPolicyHitCount() Obtain Number of policy hits in the last 7 days
 * @method void setPolicyHitCount(integer $PolicyHitCount) Set Number of policy hits in the last 7 days
 * @method string getPolicyContentHash() Obtain Alarm content hash
 * @method void setPolicyContentHash(string $PolicyContentHash) Set Alarm content hash
 * @method integer getRelAccountCount() Obtain Number of associated accounts.
 * @method void setRelAccountCount(integer $RelAccountCount) Set Number of associated accounts.
 * @method string getRelAccountUin() Obtain Associated account UIN
 * @method void setRelAccountUin(string $RelAccountUin) Set Associated account UIN
 * @method string getRelAccountName() Obtain Name of the associated account
 * @method void setRelAccountName(string $RelAccountName) Set Name of the associated account
 * @method string getPolicyDescription() Obtain Description information
 * @method void setPolicyDescription(string $PolicyDescription) Set Description information
 * @method string getPolicyMarker() Obtain Remarks
 * @method void setPolicyMarker(string $PolicyMarker) Set Remarks
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method array getPolicyIdSet() Obtain id set in a multi-account scenario
 * @method void setPolicyIdSet(array $PolicyIdSet) Set id set in a multi-account scenario
 * @method integer getPolicyHistoryHandleStatus() Obtain Whether to dispose of historical data status. 0: no disposal required. 1: disposal required. 2: processed
 * @method void setPolicyHistoryHandleStatus(integer $PolicyHistoryHandleStatus) Set Whether to dispose of historical data status. 0: no disposal required. 1: disposal required. 2: processed
 * @method integer getSystemPolicyEditStatus() Obtain System policy edit status
 * @method void setSystemPolicyEditStatus(integer $SystemPolicyEditStatus) Set System policy edit status
 */
class CosPolicyInfo extends AbstractModel
{
    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var integer Policy type
PolicyType: 1 alarm policy 2 risk policy 3 allowlist policy 4 ip hiding policy
     */
    public $PolicyType;

    /**
     * @var integer system: system built-in user: user-customized
     */
    public $PolicySource;

    /**
     * @var string Policy content
     */
    public $PolicyContent;

    /**
     * @var integer 0: disabled
1: enabled.
     */
    public $PolicyStatus;

    /**
     * @var integer Policy classification
     */
    public $PolicyAbnormalType;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Creation time.
     */
    public $PolicyCreateTime;

    /**
     * @var integer Update time.
     */
    public $PolicyUpdateTime;

    /**
     * @var integer Number of policy hits in the last 7 days
     */
    public $PolicyHitCount;

    /**
     * @var string Alarm content hash
     */
    public $PolicyContentHash;

    /**
     * @var integer Number of associated accounts.
     */
    public $RelAccountCount;

    /**
     * @var string Associated account UIN
     */
    public $RelAccountUin;

    /**
     * @var string Name of the associated account
     */
    public $RelAccountName;

    /**
     * @var string Description information
     */
    public $PolicyDescription;

    /**
     * @var string Remarks
     */
    public $PolicyMarker;

    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var array id set in a multi-account scenario
     */
    public $PolicyIdSet;

    /**
     * @var integer Whether to dispose of historical data status. 0: no disposal required. 1: disposal required. 2: processed
     */
    public $PolicyHistoryHandleStatus;

    /**
     * @var integer System policy edit status
     */
    public $SystemPolicyEditStatus;

    /**
     * @param string $PolicyName Policy name.
     * @param integer $PolicyType Policy type
PolicyType: 1 alarm policy 2 risk policy 3 allowlist policy 4 ip hiding policy
     * @param integer $PolicySource system: system built-in user: user-customized
     * @param string $PolicyContent Policy content
     * @param integer $PolicyStatus 0: disabled
1: enabled.
     * @param integer $PolicyAbnormalType Policy classification
     * @param integer $RiskLevel Risk level
     * @param integer $PolicyId Policy ID
     * @param integer $PolicyCreateTime Creation time.
     * @param integer $PolicyUpdateTime Update time.
     * @param integer $PolicyHitCount Number of policy hits in the last 7 days
     * @param string $PolicyContentHash Alarm content hash
     * @param integer $RelAccountCount Number of associated accounts.
     * @param string $RelAccountUin Associated account UIN
     * @param string $RelAccountName Name of the associated account
     * @param string $PolicyDescription Description information
     * @param string $PolicyMarker Remarks
     * @param integer $AppId appid
     * @param array $PolicyIdSet id set in a multi-account scenario
     * @param integer $PolicyHistoryHandleStatus Whether to dispose of historical data status. 0: no disposal required. 1: disposal required. 2: processed
     * @param integer $SystemPolicyEditStatus System policy edit status
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicySource",$param) and $param["PolicySource"] !== null) {
            $this->PolicySource = $param["PolicySource"];
        }

        if (array_key_exists("PolicyContent",$param) and $param["PolicyContent"] !== null) {
            $this->PolicyContent = $param["PolicyContent"];
        }

        if (array_key_exists("PolicyStatus",$param) and $param["PolicyStatus"] !== null) {
            $this->PolicyStatus = $param["PolicyStatus"];
        }

        if (array_key_exists("PolicyAbnormalType",$param) and $param["PolicyAbnormalType"] !== null) {
            $this->PolicyAbnormalType = $param["PolicyAbnormalType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("PolicyUpdateTime",$param) and $param["PolicyUpdateTime"] !== null) {
            $this->PolicyUpdateTime = $param["PolicyUpdateTime"];
        }

        if (array_key_exists("PolicyHitCount",$param) and $param["PolicyHitCount"] !== null) {
            $this->PolicyHitCount = $param["PolicyHitCount"];
        }

        if (array_key_exists("PolicyContentHash",$param) and $param["PolicyContentHash"] !== null) {
            $this->PolicyContentHash = $param["PolicyContentHash"];
        }

        if (array_key_exists("RelAccountCount",$param) and $param["RelAccountCount"] !== null) {
            $this->RelAccountCount = $param["RelAccountCount"];
        }

        if (array_key_exists("RelAccountUin",$param) and $param["RelAccountUin"] !== null) {
            $this->RelAccountUin = $param["RelAccountUin"];
        }

        if (array_key_exists("RelAccountName",$param) and $param["RelAccountName"] !== null) {
            $this->RelAccountName = $param["RelAccountName"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("PolicyMarker",$param) and $param["PolicyMarker"] !== null) {
            $this->PolicyMarker = $param["PolicyMarker"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PolicyIdSet",$param) and $param["PolicyIdSet"] !== null) {
            $this->PolicyIdSet = $param["PolicyIdSet"];
        }

        if (array_key_exists("PolicyHistoryHandleStatus",$param) and $param["PolicyHistoryHandleStatus"] !== null) {
            $this->PolicyHistoryHandleStatus = $param["PolicyHistoryHandleStatus"];
        }

        if (array_key_exists("SystemPolicyEditStatus",$param) and $param["SystemPolicyEditStatus"] !== null) {
            $this->SystemPolicyEditStatus = $param["SystemPolicyEditStatus"];
        }
    }
}
