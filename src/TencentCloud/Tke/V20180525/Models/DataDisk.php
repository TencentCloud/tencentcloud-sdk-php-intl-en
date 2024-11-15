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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Described the configuration and information of k8s node data disk.
 *
 * @method string getDiskType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileSystem() Obtain File system (ext3/ext4/xfs)
Note: This field may return null, indicating that no valid value was found.
 * @method void setFileSystem(string $FileSystem) Set File system (ext3/ext4/xfs)
Note: This field may return null, indicating that no valid value was found.
 * @method integer getDiskSize() Obtain Disk size (G)
Note: This field may return null, indicating that no valid value was found.
 * @method void setDiskSize(integer $DiskSize) Set Disk size (G)
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getAutoFormatAndMount() Obtain Whether the disk is auto-formatted and mounted
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) Set Whether the disk is auto-formatted and mounted
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getMountTarget() Obtain Mounting directory
Note: This field may return null, indicating that no valid value was found.
 * @method void setMountTarget(string $MountTarget) Set Mounting directory
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskPartition() Obtain Mounted device name or partition name (only required when adding an existing node)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiskPartition(string $DiskPartition) Set Mounted device name or partition name (only required when adding an existing node)
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var string File system (ext3/ext4/xfs)
Note: This field may return null, indicating that no valid value was found.
     */
    public $FileSystem;

    /**
     * @var integer Disk size (G)
Note: This field may return null, indicating that no valid value was found.
     */
    public $DiskSize;

    /**
     * @var boolean Whether the disk is auto-formatted and mounted
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AutoFormatAndMount;

    /**
     * @var string Mounting directory
Note: This field may return null, indicating that no valid value was found.
     */
    public $MountTarget;

    /**
     * @var string Mounted device name or partition name (only required when adding an existing node)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiskPartition;

    /**
     * @param string $DiskType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileSystem File system (ext3/ext4/xfs)
Note: This field may return null, indicating that no valid value was found.
     * @param integer $DiskSize Disk size (G)
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $AutoFormatAndMount Whether the disk is auto-formatted and mounted
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $MountTarget Mounting directory
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskPartition Mounted device name or partition name (only required when adding an existing node)
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("DiskPartition",$param) and $param["DiskPartition"] !== null) {
            $this->DiskPartition = $param["DiskPartition"];
        }
    }
}
