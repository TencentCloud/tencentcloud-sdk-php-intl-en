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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Volume
 *
 * @method string getVolumeId() Obtain Volume ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVolumeId(string $VolumeId) Set Volume ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironmentId() Obtain Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Volume type. Valid values:
* SHARED: Multi-point mount shared storage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Volume type. Valid values:
* SHARED: Multi-point mount shared storage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpec() Obtain Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCapacity() Obtain Volume size (GB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCapacity(integer $Capacity) Set Volume size (GB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsage() Obtain Volume usage (Byte)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsage(integer $Usage) Set Volume usage (Byte)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getBandwidthLimit() Obtain Volume throughput upper limit (MiB/s)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthLimit(float $BandwidthLimit) Set Volume throughput upper limit (MiB/s)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultMountPath() Obtain Default mount path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultMountPath(string $DefaultMountPath) Set Default mount path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDefault() Obtain Whether it is the default volume.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default volume.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Volume extends AbstractModel
{
    /**
     * @var string Volume ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VolumeId;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Volume type. Valid values:
* SHARED: Multi-point mount shared storage
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @var integer Volume size (GB)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Capacity;

    /**
     * @var integer Volume usage (Byte)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Usage;

    /**
     * @var float Volume throughput upper limit (MiB/s)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthLimit;

    /**
     * @var string Default mount path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultMountPath;

    /**
     * @var boolean Whether it is the default volume.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefault;

    /**
     * @var string Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $VolumeId Volume ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnvironmentId Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Volume type. Valid values:
* SHARED: Multi-point mount shared storage
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Spec Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Capacity Volume size (GB)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Usage Volume usage (Byte)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $BandwidthLimit Volume throughput upper limit (MiB/s)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultMountPath Default mount path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDefault Whether it is the default volume.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("DefaultMountPath",$param) and $param["DefaultMountPath"] !== null) {
            $this->DefaultMountPath = $param["DefaultMountPath"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
