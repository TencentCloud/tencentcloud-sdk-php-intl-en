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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getEsVersion() Obtain Target ES version. Valid values: 6.4.3, 6.8.2, 7.5.1
 * @method void setEsVersion(string $EsVersion) Set Target ES version. Valid values: 6.4.3, 6.8.2, 7.5.1
 * @method boolean getCheckOnly() Obtain Whether to check for upgrade only. Default value: false
 * @method void setCheckOnly(boolean $CheckOnly) Set Whether to check for upgrade only. Default value: false
 * @method string getLicenseType() Obtain Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
 * @method void setLicenseType(string $LicenseType) Set Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
 * @method integer getBasicSecurityType() Obtain Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
 * @method string getUpgradeMode() Obtain Upgrade mode. <li>scale: blue/green deployment</li><li>restart: rolling restart</li>Default value: scale
 * @method void setUpgradeMode(string $UpgradeMode) Set Upgrade mode. <li>scale: blue/green deployment</li><li>restart: rolling restart</li>Default value: scale
 * @method boolean getCosBackup() Obtain Whether to back up the cluster before version upgrade (no backup by default)
 * @method void setCosBackup(boolean $CosBackup) Set Whether to back up the cluster before version upgrade (no backup by default)
 * @method boolean getSkipCheckForceRestart() Obtain Whether to skip the check and perform a force restart in the rolling mode. Default value: `false`.
 * @method void setSkipCheckForceRestart(boolean $SkipCheckForceRestart) Set Whether to skip the check and perform a force restart in the rolling mode. Default value: `false`.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Target ES version. Valid values: 6.4.3, 6.8.2, 7.5.1
     */
    public $EsVersion;

    /**
     * @var boolean Whether to check for upgrade only. Default value: false
     */
    public $CheckOnly;

    /**
     * @var string Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
     */
    public $LicenseType;

    /**
     * @var integer Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
     */
    public $BasicSecurityType;

    /**
     * @var string Upgrade mode. <li>scale: blue/green deployment</li><li>restart: rolling restart</li>Default value: scale
     */
    public $UpgradeMode;

    /**
     * @var boolean Whether to back up the cluster before version upgrade (no backup by default)
     */
    public $CosBackup;

    /**
     * @var boolean Whether to skip the check and perform a force restart in the rolling mode. Default value: `false`.
     */
    public $SkipCheckForceRestart;

    /**
     * @param string $InstanceId Instance ID
     * @param string $EsVersion Target ES version. Valid values: 6.4.3, 6.8.2, 7.5.1
     * @param boolean $CheckOnly Whether to check for upgrade only. Default value: false
     * @param string $LicenseType Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
     * @param integer $BasicSecurityType Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
     * @param string $UpgradeMode Upgrade mode. <li>scale: blue/green deployment</li><li>restart: rolling restart</li>Default value: scale
     * @param boolean $CosBackup Whether to back up the cluster before version upgrade (no backup by default)
     * @param boolean $SkipCheckForceRestart Whether to skip the check and perform a force restart in the rolling mode. Default value: `false`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("CheckOnly",$param) and $param["CheckOnly"] !== null) {
            $this->CheckOnly = $param["CheckOnly"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = $param["CosBackup"];
        }

        if (array_key_exists("SkipCheckForceRestart",$param) and $param["SkipCheckForceRestart"] !== null) {
            $this->SkipCheckForceRestart = $param["SkipCheckForceRestart"];
        }
    }
}
