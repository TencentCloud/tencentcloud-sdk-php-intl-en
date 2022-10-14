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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud disk backup point.
 *
 * @method string getDiskBackupId() Obtain Cloud disk backup point ID.
 * @method void setDiskBackupId(string $DiskBackupId) Set Cloud disk backup point ID.
 * @method string getDiskId() Obtain ID of the cloud disk with which the backup point is associated.
 * @method void setDiskId(string $DiskId) Set ID of the cloud disk with which the backup point is associated.
 * @method integer getDiskSize() Obtain Cloud disk size in GB.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size in GB.
 * @method string getDiskUsage() Obtain Cloud disk type. Valid values:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk
 * @method void setDiskUsage(string $DiskUsage) Set Cloud disk type. Valid values:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk
 * @method string getDiskBackupName() Obtain Backup point name.
 * @method void setDiskBackupName(string $DiskBackupName) Set Backup point name.
 * @method string getDiskBackupState() Obtain Cloud disk backup point status. Valid values:<br><li>NORMAL: Normal<br><li>CREATING: Creating<br><li>ROLLBACKING: Rolling back
 * @method void setDiskBackupState(string $DiskBackupState) Set Cloud disk backup point status. Valid values:<br><li>NORMAL: Normal<br><li>CREATING: Creating<br><li>ROLLBACKING: Rolling back
 * @method integer getPercent() Obtain Cloud disk creation progress in percentage.
 * @method void setPercent(integer $Percent) Set Cloud disk creation progress in percentage.
 * @method string getCreateTime() Obtain Creation time of the cloud disk backup point.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the cloud disk backup point.
 * @method boolean getEncrypt() Obtain Whether the cloud disk is encrypted. Valid values: <br><li>false: Not encrypted <br><li>true: Encrypted
 * @method void setEncrypt(boolean $Encrypt) Set Whether the cloud disk is encrypted. Valid values: <br><li>false: Not encrypted <br><li>true: Encrypted
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
     * @var integer Cloud disk size in GB.
     */
    public $DiskSize;

    /**
     * @var string Cloud disk type. Valid values:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk
     */
    public $DiskUsage;

    /**
     * @var string Backup point name.
     */
    public $DiskBackupName;

    /**
     * @var string Cloud disk backup point status. Valid values:<br><li>NORMAL: Normal<br><li>CREATING: Creating<br><li>ROLLBACKING: Rolling back
     */
    public $DiskBackupState;

    /**
     * @var integer Cloud disk creation progress in percentage.
     */
    public $Percent;

    /**
     * @var string Creation time of the cloud disk backup point.
     */
    public $CreateTime;

    /**
     * @var boolean Whether the cloud disk is encrypted. Valid values: <br><li>false: Not encrypted <br><li>true: Encrypted
     */
    public $Encrypt;

    /**
     * @param string $DiskBackupId Cloud disk backup point ID.
     * @param string $DiskId ID of the cloud disk with which the backup point is associated.
     * @param integer $DiskSize Cloud disk size in GB.
     * @param string $DiskUsage Cloud disk type. Valid values:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk
     * @param string $DiskBackupName Backup point name.
     * @param string $DiskBackupState Cloud disk backup point status. Valid values:<br><li>NORMAL: Normal<br><li>CREATING: Creating<br><li>ROLLBACKING: Rolling back
     * @param integer $Percent Cloud disk creation progress in percentage.
     * @param string $CreateTime Creation time of the cloud disk backup point.
     * @param boolean $Encrypt Whether the cloud disk is encrypted. Valid values: <br><li>false: Not encrypted <br><li>true: Encrypted
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
