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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node system disk and data disk configuration
 *
 * @method string getDiskType() Obtain Cloud disk type
 * @method void setDiskType(string $DiskType) Set Cloud disk type
 * @method integer getDiskSize() Obtain Cloud disk size (G)
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size (G)
 * @method boolean getAutoFormatAndMount() Obtain Whether to automatically format and mount disks.
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) Set Whether to automatically format and mount disks.
 * @method string getFileSystem() Obtain File system
 * @method void setFileSystem(string $FileSystem) Set File system
 * @method string getMountTarget() Obtain Mounting directory
 * @method void setMountTarget(string $MountTarget) Set Mounting directory
 * @method string getDiskId() Obtain Cloud disk ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getEncrypt() Obtain Encrypt the system disk
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEncrypt(string $Encrypt) Set Encrypt the system disk
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getKmsKeyId() Obtain Custom KMS ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKmsKeyId(string $KmsKeyId) Set Custom KMS ID
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class Disk extends AbstractModel
{
    /**
     * @var string Cloud disk type
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size (G)
     */
    public $DiskSize;

    /**
     * @var boolean Whether to automatically format and mount disks.
     */
    public $AutoFormatAndMount;

    /**
     * @var string File system
     */
    public $FileSystem;

    /**
     * @var string Mounting directory
     */
    public $MountTarget;

    /**
     * @var string Cloud disk ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DiskId;

    /**
     * @var string Encrypt the system disk
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Encrypt;

    /**
     * @var string Custom KMS ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $KmsKeyId;

    /**
     * @param string $DiskType Cloud disk type
     * @param integer $DiskSize Cloud disk size (G)
     * @param boolean $AutoFormatAndMount Whether to automatically format and mount disks.
     * @param string $FileSystem File system
     * @param string $MountTarget Mounting directory
     * @param string $DiskId Cloud disk ID
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Encrypt Encrypt the system disk
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $KmsKeyId Custom KMS ID
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
