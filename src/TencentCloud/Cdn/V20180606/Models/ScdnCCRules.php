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
 * @method string getRuleType() Obtain Rule types:
`all`: effective for all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: effective for web homepages and root directories.
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: effective for all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: effective for web homepages and root directories.
 * @method array getRuleValue() Obtain Rule value (blocking condition)
 * @method void setRuleValue(array $RuleValue) Set Rule value (blocking condition)
 * @method integer getQps() Obtain IP access limit rule
 * @method void setQps(integer $Qps) Set IP access limit rule
 * @method integer getDetectionTime() Obtain Detection granularity
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDetectionTime(integer $DetectionTime) Set Detection granularity
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getFrequencyLimit() Obtain Frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFrequencyLimit(integer $FrequencyLimit) Set Frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPunishmentSwitch() Obtain Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPunishmentSwitch(string $PunishmentSwitch) Set Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPunishmentTime() Obtain Suspicious IP restriction duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPunishmentTime(integer $PunishmentTime) Set Suspicious IP restriction duration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRedirectUrl() Obtain The redirection target URL used when the `Action` is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set The redirection target URL used when the `Action` is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnCCRules extends AbstractModel
{
    /**
     * @var string Rule types:
`all`: effective for all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: effective for web homepages and root directories.
     */
    public $RuleType;

    /**
     * @var array Rule value (blocking condition)
     */
    public $RuleValue;

    /**
     * @var integer IP access limit rule
     */
    public $Qps;

    /**
     * @var integer Detection granularity
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DetectionTime;

    /**
     * @var integer Frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FrequencyLimit;

    /**
     * @var string Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PunishmentSwitch;

    /**
     * @var integer Suspicious IP restriction duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PunishmentTime;

    /**
     * @var string Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string The redirection target URL used when the `Action` is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RedirectUrl;

    /**
     * @param string $RuleType Rule types:
`all`: effective for all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: effective for web homepages and root directories.
     * @param array $RuleValue Rule value (blocking condition)
     * @param integer $Qps IP access limit rule
     * @param integer $DetectionTime Detection granularity
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $FrequencyLimit Frequency threshold
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PunishmentSwitch Whether to enable IP blocking. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $PunishmentTime Suspicious IP restriction duration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Action Action. Valid values: `intercept` and `redirect`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RedirectUrl The redirection target URL used when the `Action` is `redirect`
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
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
    }
}
