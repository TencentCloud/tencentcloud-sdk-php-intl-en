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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud disk backup point.
 *
 * @method string getDiskBackupId() Obtain Cloud disk backup point ID.
 * @method void setDiskBackupId(string $DiskBackupId) Set Cloud disk backup point ID.
 * @method string getDiskId() Obtain ID of the cloud disk with which the backup point is associated.
 * @method void setDiskId(string $DiskId) Set ID of the cloud disk with which the backup point is associated.
 * @method integer getDiskSize() Obtain Specifies the disk capacity in GiB.
 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk capacity in GiB.
 * @method string getDiskUsage() Obtain Cloud disk type. value ranges from...to...<br>.
<Li>SYSTEM_DISK: specifies the system disk.</li>.
<Li>DATA_DISK: specifies the data disk.</li>.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud disk type. value ranges from...to...<br>.
<Li>SYSTEM_DISK: specifies the system disk.</li>.
<Li>DATA_DISK: specifies the data disk.</li>.
 * @method string getDiskBackupName() Obtain Backup point name.
 * @method void setDiskBackupName(string $DiskBackupName) Set Backup point name.
 * @method string getDiskBackupState() Obtain <P>Specifies the status of the cloud disk backup point. valid values:</p>.
<ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
 * @method void setDiskBackupState(string $DiskBackupState) Set <P>Specifies the status of the cloud disk backup point. valid values:</p>.
<ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
 * @method integer getPercent() Obtain Specifies the creation percentage of the cloud disk backup point.
 * @method void setPercent(integer $Percent) Set Specifies the creation percentage of the cloud disk backup point.
 * @method string getCreateTime() Obtain Creation time of the cloud disk backup point.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the cloud disk backup point.
 * @method boolean getEncrypt() Obtain Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
 * @method void setEncrypt(boolean $Encrypt) Set Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
 */
class DiskBackup extends AbstractModel
{
    /**
     * @var string Cloud disk backup point ID.
     */
    public $DiskBackupId;

    /**
     * @var string ID of the cloud disk with which the backup point is associated.
     */
    public $DiskId;

    /**
     * @var integer Specifies the disk capacity in GiB.
     */
    public $DiskSize;

    /**
     * @var string Cloud disk type. value ranges from...to...<br>.
<Li>SYSTEM_DISK: specifies the system disk.</li>.
<Li>DATA_DISK: specifies the data disk.</li>.
     */
    public $DiskUsage;

    /**
     * @var string Backup point name.
     */
    public $DiskBackupName;

    /**
     * @var string <P>Specifies the status of the cloud disk backup point. valid values:</p>.
<ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
     */
    public $DiskBackupState;

    /**
     * @var integer Specifies the creation percentage of the cloud disk backup point.
     */
    public $Percent;

    /**
     * @var string Creation time of the cloud disk backup point.
     */
    public $CreateTime;

    /**
     * @var boolean Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
     */
    public $Encrypt;

    /**
     * @param string $DiskBackupId Cloud disk backup point ID.
     * @param string $DiskId ID of the cloud disk with which the backup point is associated.
     * @param integer $DiskSize Specifies the disk capacity in GiB.
     * @param string $DiskUsage Cloud disk type. value ranges from...to...<br>.
<Li>SYSTEM_DISK: specifies the system disk.</li>.
<Li>DATA_DISK: specifies the data disk.</li>.
     * @param string $DiskBackupName Backup point name.
     * @param string $DiskBackupState <P>Specifies the status of the cloud disk backup point. valid values:</p>.
<ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
     * @param integer $Percent Specifies the creation percentage of the cloud disk backup point.
     * @param string $CreateTime Creation time of the cloud disk backup point.
     * @param boolean $Encrypt Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
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
        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }

        if (array_key_exists("DiskBackupState",$param) and $param["DiskBackupState"] !== null) {
            $this->DiskBackupState = $param["DiskBackupState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }
    }
}
