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
 * Baseline policy information
 *
 * @method string getPolicyName() Obtain Policy name, which is no more than 128 English characters in length.
 * @method void setPolicyName(string $PolicyName) Set Policy name, which is no more than 128 English characters in length.
 * @method integer getDetectInterval() Obtain Detection interval [1: 1 day|3: 3 days|5: 5 days|7: 7 days]
 * @method void setDetectInterval(integer $DetectInterval) Set Detection interval [1: 1 day|3: 3 days|5: 5 days|7: 7 days]
 * @method string getDetectTime() Obtain Detection time
 * @method void setDetectTime(string $DetectTime) Set Detection time
 * @method integer getIsEnabled() Obtain Whether enabled [0: not enabled|1: enabled]
 * @method void setIsEnabled(integer $IsEnabled) Set Whether enabled [0: not enabled|1: enabled]
 * @method integer getAssetType() Obtain Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
 * @method void setAssetType(integer $AssetType) Set Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getRuleCount() Obtain Number of associated baseline items
 * @method void setRuleCount(integer $RuleCount) Set Number of associated baseline items
 * @method integer getItemCount() Obtain Number of associated baseline items
 * @method void setItemCount(integer $ItemCount) Set Number of associated baseline items
 * @method integer getHostCount() Obtain Number of associated baseline hosts
 * @method void setHostCount(integer $HostCount) Set Number of associated baseline hosts
 * @method array getRuleIds() Obtain Rule ID
 * @method void setRuleIds(array $RuleIds) Set Rule ID
 * @method array getHostIds() Obtain Host ID
 * @method void setHostIds(array $HostIds) Set Host ID
 * @method array getHostIps() Obtain Host IP
 * @method void setHostIps(array $HostIps) Set Host IP
 * @method integer getIsDefault() Obtain Whether the system default
 * @method void setIsDefault(integer $IsDefault) Set Whether the system default
 */
class BaselinePolicy extends AbstractModel
{
    /**
     * @var string Policy name, which is no more than 128 English characters in length.
     */
    public $PolicyName;

    /**
     * @var integer Detection interval [1: 1 day|3: 3 days|5: 5 days|7: 7 days]
     */
    public $DetectInterval;

    /**
     * @var string Detection time
     */
    public $DetectTime;

    /**
     * @var integer Whether enabled [0: not enabled|1: enabled]
     */
    public $IsEnabled;

    /**
     * @var integer Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
     */
    public $AssetType;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Number of associated baseline items
     */
    public $RuleCount;

    /**
     * @var integer Number of associated baseline items
     */
    public $ItemCount;

    /**
     * @var integer Number of associated baseline hosts
     */
    public $HostCount;

    /**
     * @var array Rule ID
     */
    public $RuleIds;

    /**
     * @var array Host ID
     */
    public $HostIds;

    /**
     * @var array Host IP
     */
    public $HostIps;

    /**
     * @var integer Whether the system default
     */
    public $IsDefault;

    /**
     * @param string $PolicyName Policy name, which is no more than 128 English characters in length.
     * @param integer $DetectInterval Detection interval [1: 1 day|3: 3 days|5: 5 days|7: 7 days]
     * @param string $DetectTime Detection time
     * @param integer $IsEnabled Whether enabled [0: not enabled|1: enabled]
     * @param integer $AssetType Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
     * @param integer $PolicyId Policy ID
     * @param integer $RuleCount Number of associated baseline items
     * @param integer $ItemCount Number of associated baseline items
     * @param integer $HostCount Number of associated baseline hosts
     * @param array $RuleIds Rule ID
     * @param array $HostIds Host ID
     * @param array $HostIps Host IP
     * @param integer $IsDefault Whether the system default
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

        if (array_key_exists("DetectInterval",$param) and $param["DetectInterval"] !== null) {
            $this->DetectInterval = $param["DetectInterval"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
