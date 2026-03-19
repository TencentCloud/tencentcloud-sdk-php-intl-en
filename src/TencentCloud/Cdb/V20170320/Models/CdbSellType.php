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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purchasable instance type
 *
 * @method string getTypeName() Obtain Purchasable instance name.
Z3: High-availability, corresponds to the specified specification DeviceType, including UNIVERSAL and EXCLUSIVE.
CVM: It is a basic edition type, and the DeviceType in the corresponding specifications is BASIC (Offline).
TKE: It is the basic version v2 type, and the DeviceType in the corresponding specifications is BASIC_V2.
CLOUD_NATIVE_CLUSTER: Represents the standard type of cloud disk edition.
CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Indicates the enhanced cloud disk edition.
ECONOMICAL: Means economical.
 * @method void setTypeName(string $TypeName) Set Purchasable instance name.
Z3: High-availability, corresponds to the specified specification DeviceType, including UNIVERSAL and EXCLUSIVE.
CVM: It is a basic edition type, and the DeviceType in the corresponding specifications is BASIC (Offline).
TKE: It is the basic version v2 type, and the DeviceType in the corresponding specifications is BASIC_V2.
CLOUD_NATIVE_CLUSTER: Represents the standard type of cloud disk edition.
CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Indicates the enhanced cloud disk edition.
ECONOMICAL: Means economical.
 * @method array getEngineVersion() Obtain Engine version number
 * @method void setEngineVersion(array $EngineVersion) Set Engine version number
 * @method array getConfigIds() Obtain Purchasable specifications ID
 * @method void setConfigIds(array $ConfigIds) Set Purchasable specifications ID
 */
class CdbSellType extends AbstractModel
{
    /**
     * @var string Purchasable instance name.
Z3: High-availability, corresponds to the specified specification DeviceType, including UNIVERSAL and EXCLUSIVE.
CVM: It is a basic edition type, and the DeviceType in the corresponding specifications is BASIC (Offline).
TKE: It is the basic version v2 type, and the DeviceType in the corresponding specifications is BASIC_V2.
CLOUD_NATIVE_CLUSTER: Represents the standard type of cloud disk edition.
CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Indicates the enhanced cloud disk edition.
ECONOMICAL: Means economical.
     */
    public $TypeName;

    /**
     * @var array Engine version number
     */
    public $EngineVersion;

    /**
     * @var array Purchasable specifications ID
     */
    public $ConfigIds;

    /**
     * @param string $TypeName Purchasable instance name.
Z3: High-availability, corresponds to the specified specification DeviceType, including UNIVERSAL and EXCLUSIVE.
CVM: It is a basic edition type, and the DeviceType in the corresponding specifications is BASIC (Offline).
TKE: It is the basic version v2 type, and the DeviceType in the corresponding specifications is BASIC_V2.
CLOUD_NATIVE_CLUSTER: Represents the standard type of cloud disk edition.
CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Indicates the enhanced cloud disk edition.
ECONOMICAL: Means economical.
     * @param array $EngineVersion Engine version number
     * @param array $ConfigIds Purchasable specifications ID
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ConfigIds",$param) and $param["ConfigIds"] !== null) {
            $this->ConfigIds = $param["ConfigIds"];
        }
    }
}
