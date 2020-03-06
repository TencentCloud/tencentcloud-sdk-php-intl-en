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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getEsVersion() Obtain Target ES version
 * @method void setEsVersion(string $EsVersion) Set Target ES version
 * @method boolean getCheckOnly() Obtain Whether to check for upgrade only. Default value: false
 * @method void setCheckOnly(boolean $CheckOnly) Set Whether to check for upgrade only. Default value: false
 * @method string getLicenseType() Obtain Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
 * @method void setLicenseType(string $LicenseType) Set Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
 * @method integer getBasicSecurityType() Obtain 
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set 
 */

/**
 *UpgradeInstance request structure.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Target ES version
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
     * @var integer 
     */
    public $BasicSecurityType;
    /**
     * @param string $InstanceId Instance ID
     * @param string $EsVersion Target ES version
     * @param boolean $CheckOnly Whether to check for upgrade only. Default value: false
     * @param string $LicenseType Target X-Pack edition: <li>OSS: Open-source Edition </li><li>basic: Basic Edition </li>Currently only used for v5.6.4 to v6.x upgrade. Default value: basic
     * @param integer $BasicSecurityType 
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
    }
}
