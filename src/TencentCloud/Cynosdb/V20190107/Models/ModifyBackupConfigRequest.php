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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupConfig request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getBackupTimeBeg() Obtain Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) Set Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method integer getBackupTimeEnd() Obtain Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively.
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) Set Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively.
 * @method integer getReserveDuration() Obtain Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800. Maximum value: 158112000.
 * @method void setReserveDuration(integer $ReserveDuration) Set Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800. Maximum value: 158112000.
 * @method array getBackupFreq() Obtain Backup frequency. It is an array of 7 elements corresponding to Monday through Sunday. full: full backup; increment: incremental backup. This parameter cannot be modified currently and doesn't need to be entered.
 * @method void setBackupFreq(array $BackupFreq) Set Backup frequency. It is an array of 7 elements corresponding to Monday through Sunday. full: full backup; increment: incremental backup. This parameter cannot be modified currently and doesn't need to be entered.
 * @method string getBackupType() Obtain Currently, this parameter does not support modification and is not required.
 * @method void setBackupType(string $BackupType) Set Currently, this parameter does not support modification and is not required.
 * @method LogicBackupConfigInfo getLogicBackupConfig() Obtain 
 * @method void setLogicBackupConfig(LogicBackupConfigInfo $LogicBackupConfig) Set 
 * @method boolean getDeleteAutoLogicBackup() Obtain 
 * @method void setDeleteAutoLogicBackup(boolean $DeleteAutoLogicBackup) Set 
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     */
    public $BackupTimeBeg;

    /**
     * @var integer Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively.
     */
    public $BackupTimeEnd;

    /**
     * @var integer Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800. Maximum value: 158112000.
     */
    public $ReserveDuration;

    /**
     * @var array Backup frequency. It is an array of 7 elements corresponding to Monday through Sunday. full: full backup; increment: incremental backup. This parameter cannot be modified currently and doesn't need to be entered.
     */
    public $BackupFreq;

    /**
     * @var string Currently, this parameter does not support modification and is not required.
     */
    public $BackupType;

    /**
     * @var LogicBackupConfigInfo 
     */
    public $LogicBackupConfig;

    /**
     * @var boolean 
     */
    public $DeleteAutoLogicBackup;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $BackupTimeBeg Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     * @param integer $BackupTimeEnd Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively.
     * @param integer $ReserveDuration Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800. Maximum value: 158112000.
     * @param array $BackupFreq Backup frequency. It is an array of 7 elements corresponding to Monday through Sunday. full: full backup; increment: incremental backup. This parameter cannot be modified currently and doesn't need to be entered.
     * @param string $BackupType Currently, this parameter does not support modification and is not required.
     * @param LogicBackupConfigInfo $LogicBackupConfig 
     * @param boolean $DeleteAutoLogicBackup 
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("BackupFreq",$param) and $param["BackupFreq"] !== null) {
            $this->BackupFreq = $param["BackupFreq"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("LogicBackupConfig",$param) and $param["LogicBackupConfig"] !== null) {
            $this->LogicBackupConfig = new LogicBackupConfigInfo();
            $this->LogicBackupConfig->deserialize($param["LogicBackupConfig"]);
        }

        if (array_key_exists("DeleteAutoLogicBackup",$param) and $param["DeleteAutoLogicBackup"] !== null) {
            $this->DeleteAutoLogicBackup = $param["DeleteAutoLogicBackup"];
        }
    }
}
