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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the configuration and related information of k8s node data disk.
 *
 * @method string getDiskType() Obtain Cloud disk type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDiskType(string $DiskType) Set Cloud disk type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getFileSystem() Obtain File system (ext3/ext4/xfs).

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setFileSystem(string $FileSystem) Set File system (ext3/ext4/xfs).

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getDiskSize() Obtain Cloud disk size (GB)

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size (GB)

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getAutoFormatAndMount() Obtain Whether to automatically format and mount disks.

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) Set Whether to automatically format and mount disks.

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDiskPartition() Obtain Mount device name or partition name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDiskPartition(string $DiskPartition) Set Mount device name or partition name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getMountTarget() Obtain Mounting directory

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMountTarget(string $MountTarget) Set Mounting directory

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getEncrypt() Obtain This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEncrypt(string $Encrypt) Set This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getKmsKeyId() Obtain Custom key for purchasing encrypted disks. When this parameter is input, the Encrypt input parameter cannot be left empty.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKmsKeyId(string $KmsKeyId) Set Custom key for purchasing encrypted disks. When this parameter is input, the Encrypt input parameter cannot be left empty.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getSnapshotId() Obtain Snapshot ID. If it is input, a cloud disk will be created based on this snapshot. The snapshot must be a data disk snapshot.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID. If it is input, a cloud disk will be created based on this snapshot. The snapshot must be a data disk snapshot.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getThroughputPerformance() Obtain Cloud disk performance (unit: MB/s), which can be used to purchase additional performance for cloud disks.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Cloud disk performance (unit: MB/s), which can be used to purchase additional performance for cloud disks.
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string Cloud disk type
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DiskType;

    /**
     * @var string File system (ext3/ext4/xfs).

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $FileSystem;

    /**
     * @var integer Cloud disk size (GB)

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DiskSize;

    /**
     * @var boolean Whether to automatically format and mount disks.

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoFormatAndMount;

    /**
     * @var string Mount device name or partition name
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DiskPartition;

    /**
     * @var string Mounting directory

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MountTarget;

    /**
     * @var string This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Encrypt;

    /**
     * @var string Custom key for purchasing encrypted disks. When this parameter is input, the Encrypt input parameter cannot be left empty.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $KmsKeyId;

    /**
     * @var string Snapshot ID. If it is input, a cloud disk will be created based on this snapshot. The snapshot must be a data disk snapshot.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SnapshotId;

    /**
     * @var integer Cloud disk performance (unit: MB/s), which can be used to purchase additional performance for cloud disks.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskType Cloud disk type
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $FileSystem File system (ext3/ext4/xfs).

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $DiskSize Cloud disk size (GB)

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $AutoFormatAndMount Whether to automatically format and mount disks.

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DiskPartition Mount device name or partition name
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $MountTarget Mounting directory

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Encrypt This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT.
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $KmsKeyId Custom key for purchasing encrypted disks. When this parameter is input, the Encrypt input parameter cannot be left empty.
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $SnapshotId Snapshot ID. If it is input, a cloud disk will be created based on this snapshot. The snapshot must be a data disk snapshot.
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $ThroughputPerformance Cloud disk performance (unit: MB/s), which can be used to purchase additional performance for cloud disks.
Note: This field may return "null", indicating that no valid value can be obtained.
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

        if (array_key_exists("DiskPartition",$param) and $param["DiskPartition"] !== null) {
            $this->DiskPartition = $param["DiskPartition"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
