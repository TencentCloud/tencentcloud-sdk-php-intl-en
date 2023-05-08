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
 * GetLayerVersion response structure.
 *
 * @method array getCompatibleRuntimes() Obtain Compatible runtimes
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) Set Compatible runtimes
 * @method string getCodeSha256() Obtain SHA256 encoding of version file on the layer
 * @method void setCodeSha256(string $CodeSha256) Set SHA256 encoding of version file on the layer
 * @method string getLocation() Obtain Download address of version file on the layer
 * @method void setLocation(string $Location) Set Download address of version file on the layer
 * @method string getAddTime() Obtain Version creation time
 * @method void setAddTime(string $AddTime) Set Version creation time
 * @method string getDescription() Obtain Version description
 * @method void setDescription(string $Description) Set Version description
 * @method string getLicenseInfo() Obtain License information
 * @method void setLicenseInfo(string $LicenseInfo) Set License information
 * @method integer getLayerVersion() Obtain Version number
 * @method void setLayerVersion(integer $LayerVersion) Set Version number
 * @method string getLayerName() Obtain Layer name
 * @method void setLayerName(string $LayerName) Set Layer name
 * @method string getStatus() Obtain Current status of specific layer version. For the status values, [see here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
 * @method void setStatus(string $Status) Set Current status of specific layer version. For the status values, [see here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetLayerVersionResponse extends AbstractModel
{
    /**
     * @var array Compatible runtimes
     */
    public $CompatibleRuntimes;

    /**
     * @var string SHA256 encoding of version file on the layer
     */
    public $CodeSha256;

    /**
     * @var string Download address of version file on the layer
     */
    public $Location;

    /**
     * @var string Version creation time
     */
    public $AddTime;

    /**
     * @var string Version description
     */
    public $Description;

    /**
     * @var string License information
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
     * @var string Current status of specific layer version. For the status values, [see here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
     */
    public $Status;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CompatibleRuntimes Compatible runtimes
     * @param string $CodeSha256 SHA256 encoding of version file on the layer
     * @param string $Location Download address of version file on the layer
     * @param string $AddTime Version creation time
     * @param string $Description Version description
     * @param string $LicenseInfo License information
     * @param integer $LayerVersion Version number
     * @param string $LayerName Layer name
     * @param string $Status Current status of specific layer version. For the status values, [see here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("CodeSha256",$param) and $param["CodeSha256"] !== null) {
            $this->CodeSha256 = $param["CodeSha256"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
