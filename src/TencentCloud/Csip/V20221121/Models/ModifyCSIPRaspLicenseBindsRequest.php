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
 * ModifyCSIPRaspLicenseBinds request structure.
 *
 * @method string getResourceId() Obtain <p>Resource ID (designated binding to which order)</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID (designated binding to which order)</p>
 * @method string getLicenseType() Obtain <p>Authorization type. Enumeration values: rasp (RASP) / enterprise_hp (flagship edition). Defaults to rasp if empty.</p>
 * @method void setLicenseType(string $LicenseType) Set <p>Authorization type. Enumeration values: rasp (RASP) / enterprise_hp (flagship edition). Defaults to rasp if empty.</p>
 * @method string getAssetType() Obtain <p>Asset type. Enumeration values: host / cluster (container node) / eks (EKS super node). Defaults to host when empty.</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type. Enumeration values: host / cluster (container node) / eks (EKS super node). Defaults to host when empty.</p>
 * @method array getInstanceIDs() Obtain <p>List of instance IDs to be bound (optional when IsAll=true)</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>List of instance IDs to be bound (optional when IsAll=true)</p>
 * @method boolean getIsAll() Obtain <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
 * @method void setIsAll(boolean $IsAll) Set <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
 */
class ModifyCSIPRaspLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string <p>Resource ID (designated binding to which order)</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Authorization type. Enumeration values: rasp (RASP) / enterprise_hp (flagship edition). Defaults to rasp if empty.</p>
     */
    public $LicenseType;

    /**
     * @var string <p>Asset type. Enumeration values: host / cluster (container node) / eks (EKS super node). Defaults to host when empty.</p>
     */
    public $AssetType;

    /**
     * @var array <p>List of instance IDs to be bound (optional when IsAll=true)</p>
     */
    public $InstanceIDs;

    /**
     * @var boolean <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
     */
    public $IsAll;

    /**
     * @param string $ResourceId <p>Resource ID (designated binding to which order)</p>
     * @param string $LicenseType <p>Authorization type. Enumeration values: rasp (RASP) / enterprise_hp (flagship edition). Defaults to rasp if empty.</p>
     * @param string $AssetType <p>Asset type. Enumeration values: host / cluster (container node) / eks (EKS super node). Defaults to host when empty.</p>
     * @param array $InstanceIDs <p>List of instance IDs to be bound (optional when IsAll=true)</p>
     * @param boolean $IsAll <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }
    }
}
