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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN custom CC rules
 *
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getDetectionTime() Obtain Detection duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDetectionTime(integer $DetectionTime) Set Detection duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getFrequencyLimit() Obtain Detection frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFrequencyLimit(integer $FrequencyLimit) Set Detection frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPunishmentSwitch() Obtain Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setPunishmentSwitch(string $PunishmentSwitch) Set Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method integer getPunishmentTime() Obtain IP penalty duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPunishmentTime(integer $PunishmentTime) Set IP penalty duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRedirectUrl() Obtain A redirection URL used when Action is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set A redirection URL used when Action is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getConfigure() Obtain Layer-7 rule configuration for CC frequency limiting
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setConfigure(array $Configure) Set Layer-7 rule configuration for CC frequency limiting
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSwitch() Obtain Whether to enable custom CC rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable custom CC rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 */
class AdvancedCCRules extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Detection duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DetectionTime;

    /**
     * @var integer Detection frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FrequencyLimit;

    /**
     * @var string Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $PunishmentSwitch;

    /**
     * @var integer IP penalty duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PunishmentTime;

    /**
     * @var string Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string A redirection URL used when Action is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RedirectUrl;

    /**
     * @var array Layer-7 rule configuration for CC frequency limiting
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Configure;

    /**
     * @var string Whether to enable custom CC rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @param string $RuleName Rule name
     * @param integer $DetectionTime Detection duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $FrequencyLimit Detection frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PunishmentSwitch Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param integer $PunishmentTime IP penalty duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Action Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RedirectUrl A redirection URL used when Action is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Configure Layer-7 rule configuration for CC frequency limiting
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Switch Whether to enable custom CC rules. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectionTime",$param) and $param["DetectionTime"] !== null) {
            $this->DetectionTime = $param["DetectionTime"];
        }

        if (array_key_exists("FrequencyLimit",$param) and $param["FrequencyLimit"] !== null) {
            $this->FrequencyLimit = $param["FrequencyLimit"];
        }

        if (array_key_exists("PunishmentSwitch",$param) and $param["PunishmentSwitch"] !== null) {
            $this->PunishmentSwitch = $param["PunishmentSwitch"];
        }

        if (array_key_exists("PunishmentTime",$param) and $param["PunishmentTime"] !== null) {
            $this->PunishmentTime = $param["PunishmentTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("Configure",$param) and $param["Configure"] !== null) {
            $this->Configure = [];
            foreach ($param["Configure"] as $key => $value){
                $obj = new ScdnSevenLayerRules();
                $obj->deserialize($value);
                array_push($this->Configure, $obj);
            }
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
