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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer version information
 *
 * @method array getCompatibleRuntimes() Obtain Runtime applicable to a version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) Set Runtime applicable to a version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getDescription() Obtain Version description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Version description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseInfo() Obtain License information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseInfo(string $LicenseInfo) Set License information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLayerVersion() Obtain Version number
 * @method void setLayerVersion(integer $LayerVersion) Set Version number
 * @method string getLayerName() Obtain Layer name
 * @method void setLayerName(string $LayerName) Set Layer name
 * @method string getStatus() Obtain Current status of a layer. Valid values:
publishing
available
unavailable
 * @method void setStatus(string $Status) Set Current status of a layer. Valid values:
publishing
available
unavailable
 */
class LayerVersionInfo extends AbstractModel
{
    /**
     * @var array Runtime applicable to a version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompatibleRuntimes;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Version description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string License information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseInfo;

    /**
     * @var integer Version number
     */
    public $LayerVersion;

    /**
     * @var string Layer name
     */
    public $LayerName;

    /**
     * @var string Current status of a layer. Valid values:
publishing
available
unavailable
     */
    public $Status;

    /**
     * @param array $CompatibleRuntimes Runtime applicable to a version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddTime Creation time
     * @param string $Description Version description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseInfo License information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LayerVersion Version number
     * @param string $LayerName Layer name
     * @param string $Status Current status of a layer. Valid values:
publishing
available
unavailable
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
        if (array_key_exists("CompatibleRuntimes",$param) and $param["CompatibleRuntimes"] !== null) {
            $this->CompatibleRuntimes = $param["CompatibleRuntimes"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LicenseInfo",$param) and $param["LicenseInfo"] !== null) {
            $this->LicenseInfo = $param["LicenseInfo"];
        }

        if (array_key_exists("LayerVersion",$param) and $param["LayerVersion"] !== null) {
            $this->LayerVersion = $param["LayerVersion"];
        }

        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
