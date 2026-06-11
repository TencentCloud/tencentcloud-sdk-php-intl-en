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
 * Vulnerability defense settings
 *
 * @method string getStrategyName() Obtain Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyName(string $StrategyName) Set Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyType() Obtain System policy
Create a custom policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyType(integer $StrategyType) Set System policy
Create a custom policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getThreatLevel() Obtain Threat level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThreatLevel(integer $ThreatLevel) Set Threat level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScope() Obtain All Flagship Edition Hosts
Specified hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScope(integer $Scope) Set All Flagship Edition Hosts
Specified hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSupportVulNum() Obtain Number of supported vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportVulNum(integer $SupportVulNum) Set Number of supported vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnable() Obtain 0: disabled, 1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set 0: disabled, 1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberId() Obtain User's member ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberId(string $MemberId) Set User's member ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyAction() Obtain Policy action
Alarm
1. Defense
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyAction(integer $StrategyAction) Set Policy action
Alarm
1. Defense
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNickname() Obtain User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNickname(string $Nickname) Set User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefenceType() Obtain Protection type
Vulnerability defense
Attack detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenceType(integer $DefenceType) Set Protection type
Vulnerability defense
Attack detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceNum() Obtain Number of custom hosts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNum(integer $InstanceNum) Set Number of custom hosts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyId() Obtain Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(string $StrategyId) Set Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulDefenceSetting extends AbstractModel
{
    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyName;

    /**
     * @var integer System policy
Create a custom policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyType;

    /**
     * @var integer Threat level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThreatLevel;

    /**
     * @var integer All Flagship Edition Hosts
Specified hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scope;

    /**
     * @var integer Number of supported vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportVulNum;

    /**
     * @var integer 0: disabled, 1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer User appid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User's member ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberId;

    /**
     * @var integer Policy action
Alarm
1. Defense
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyAction;

    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nickname;

    /**
     * @var integer Protection type
Vulnerability defense
Attack detection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenceType;

    /**
     * @var integer Number of custom hosts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNum;

    /**
     * @var string Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @param string $StrategyName Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyType System policy
Create a custom policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ThreatLevel Threat level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Scope All Flagship Edition Hosts
Specified hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SupportVulNum Number of supported vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Enable 0: disabled, 1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId User appid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberId User's member ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyAction Policy action
Alarm
1. Defense
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nickname User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefenceType Protection type
Vulnerability defense
Attack detection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceNum Number of custom hosts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyId Policy ID
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("ThreatLevel",$param) and $param["ThreatLevel"] !== null) {
            $this->ThreatLevel = $param["ThreatLevel"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("SupportVulNum",$param) and $param["SupportVulNum"] !== null) {
            $this->SupportVulNum = $param["SupportVulNum"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StrategyAction",$param) and $param["StrategyAction"] !== null) {
            $this->StrategyAction = $param["StrategyAction"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("DefenceType",$param) and $param["DefenceType"] !== null) {
            $this->DefenceType = $param["DefenceType"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
