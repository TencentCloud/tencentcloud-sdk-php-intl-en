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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupConfig response structure.
 *
 * @method integer getBackupTimeBeg() Obtain Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) Set Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method integer getBackupTimeEnd() Obtain Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) Set Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
 * @method integer getReserveDuration() Obtain Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800
 * @method void setReserveDuration(integer $ReserveDuration) Set Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800
 * @method array getBackupFreq() Obtain Backup frequency. an array with a length of 7, indicating the backup methods corresponding to monday to sunday respectively. full represents full backup, and increment represents incremental backup.
 * @method void setBackupFreq(array $BackupFreq) Set Backup frequency. an array with a length of 7, indicating the backup methods corresponding to monday to sunday respectively. full represents full backup, and increment represents incremental backup.
 * @method string getBackupType() Obtain Backup method. specifies the method of backup. valid values: logic (indicates logical backup), snapshot (indicates snapshot backup).
 * @method void setBackupType(string $BackupType) Set Backup method. specifies the method of backup. valid values: logic (indicates logical backup), snapshot (indicates snapshot backup).
 * @method string getLogicCrossRegionsConfigUpdateTime() Obtain Cross-Regional logical backup configuration modification time.
 * @method void setLogicCrossRegionsConfigUpdateTime(string $LogicCrossRegionsConfigUpdateTime) Set Cross-Regional logical backup configuration modification time.
 * @method LogicBackupConfigInfo getLogicBackupConfig() Obtain Automatic logical backup configuration.
 * @method void setLogicBackupConfig(LogicBackupConfigInfo $LogicBackupConfig) Set Automatic logical backup configuration.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     */
    public $BackupTimeBeg;

    /**
     * @var integer Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     */
    public $BackupTimeEnd;

    /**
     * @var integer Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800
     */
    public $ReserveDuration;

    /**
     * @var array Backup frequency. an array with a length of 7, indicating the backup methods corresponding to monday to sunday respectively. full represents full backup, and increment represents incremental backup.
     */
    public $BackupFreq;

    /**
     * @var string Backup method. specifies the method of backup. valid values: logic (indicates logical backup), snapshot (indicates snapshot backup).
     */
    public $BackupType;

    /**
     * @var string Cross-Regional logical backup configuration modification time.
     */
    public $LogicCrossRegionsConfigUpdateTime;

    /**
     * @var LogicBackupConfigInfo Automatic logical backup configuration.
     */
    public $LogicBackupConfig;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BackupTimeBeg Full backup start time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     * @param integer $BackupTimeEnd Full backup end time. Value range: [0-24*3600]. For example, 0:00 AM, 1:00 AM, and 2:00 AM are represented by 0, 3600, and 7200, respectively
     * @param integer $ReserveDuration Backup retention period in seconds. Backups will be cleared after this period elapses. 7 days is represented by 3600*24*7 = 604800
     * @param array $BackupFreq Backup frequency. an array with a length of 7, indicating the backup methods corresponding to monday to sunday respectively. full represents full backup, and increment represents incremental backup.
     * @param string $BackupType Backup method. specifies the method of backup. valid values: logic (indicates logical backup), snapshot (indicates snapshot backup).
     * @param string $LogicCrossRegionsConfigUpdateTime Cross-Regional logical backup configuration modification time.
     * @param LogicBackupConfigInfo $LogicBackupConfig Automatic logical backup configuration.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("LogicCrossRegionsConfigUpdateTime",$param) and $param["LogicCrossRegionsConfigUpdateTime"] !== null) {
            $this->LogicCrossRegionsConfigUpdateTime = $param["LogicCrossRegionsConfigUpdateTime"];
        }

        if (array_key_exists("LogicBackupConfig",$param) and $param["LogicBackupConfig"] !== null) {
            $this->LogicBackupConfig = new LogicBackupConfigInfo();
            $this->LogicBackupConfig->deserialize($param["LogicBackupConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
