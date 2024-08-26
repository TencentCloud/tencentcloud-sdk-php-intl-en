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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup instance details
 *
 * @method integer getJobId() Obtain Backup instance ID
 * @method void setJobId(integer $JobId) Set Backup instance ID
 * @method string getSnapshot() Obtain Backup instance name
 * @method void setSnapshot(string $Snapshot) Set Backup instance name
 * @method integer getBackUpSize() Obtain Backup data volume
 * @method void setBackUpSize(integer $BackUpSize) Set Backup data volume
 * @method integer getBackUpSingleSize() Obtain Backup single replica data volume
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackUpSingleSize(integer $BackUpSingleSize) Set Backup single replica data volume
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackUpTime() Obtain Instance creation time
 * @method void setBackUpTime(string $BackUpTime) Set Instance creation time
 * @method string getExpireTime() Obtain Instance expiration time
 * @method void setExpireTime(string $ExpireTime) Set Instance expiration time
 * @method string getJobStatus() Obtain Instance status
 * @method void setJobStatus(string $JobStatus) Set Instance status
 * @method integer getBackupType() Obtain 0: default; 1: one-time backup for the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupType(integer $BackupType) Set 0: default; 1: one-time backup for the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupTimeType() Obtain 0: default; 1: immediate backup; 2: migration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupTimeType(integer $BackupTimeType) Set 0: default; 1: immediate backup; 2: migration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DorisSourceInfo getDorisSourceInfo() Obtain Connection information of the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) Set Connection information of the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJobStatusNum() Obtain The value corresponding to the instance status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobStatusNum(integer $JobStatusNum) Set The value corresponding to the instance status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BackupCosInfo getBackupCosInfo() Obtain Information about cos in the backup instance	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupCosInfo(BackupCosInfo $BackupCosInfo) Set Information about cos in the backup instance	
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackUpJobDisplay extends AbstractModel
{
    /**
     * @var integer Backup instance ID
     */
    public $JobId;

    /**
     * @var string Backup instance name
     */
    public $Snapshot;

    /**
     * @var integer Backup data volume
     */
    public $BackUpSize;

    /**
     * @var integer Backup single replica data volume
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackUpSingleSize;

    /**
     * @var string Instance creation time
     */
    public $BackUpTime;

    /**
     * @var string Instance expiration time
     */
    public $ExpireTime;

    /**
     * @var string Instance status
     */
    public $JobStatus;

    /**
     * @var integer 0: default; 1: one-time backup for the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupType;

    /**
     * @var integer 0: default; 1: immediate backup; 2: migration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupTimeType;

    /**
     * @var DorisSourceInfo Connection information of the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DorisSourceInfo;

    /**
     * @var integer The value corresponding to the instance status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobStatusNum;

    /**
     * @var BackupCosInfo Information about cos in the backup instance	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupCosInfo;

    /**
     * @param integer $JobId Backup instance ID
     * @param string $Snapshot Backup instance name
     * @param integer $BackUpSize Backup data volume
     * @param integer $BackUpSingleSize Backup single replica data volume
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackUpTime Instance creation time
     * @param string $ExpireTime Instance expiration time
     * @param string $JobStatus Instance status
     * @param integer $BackupType 0: default; 1: one-time backup for the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupTimeType 0: default; 1: immediate backup; 2: migration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DorisSourceInfo $DorisSourceInfo Connection information of the remote Doris
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JobStatusNum The value corresponding to the instance status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BackupCosInfo $BackupCosInfo Information about cos in the backup instance	
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("BackUpSize",$param) and $param["BackUpSize"] !== null) {
            $this->BackUpSize = $param["BackUpSize"];
        }

        if (array_key_exists("BackUpSingleSize",$param) and $param["BackUpSingleSize"] !== null) {
            $this->BackUpSingleSize = $param["BackUpSingleSize"];
        }

        if (array_key_exists("BackUpTime",$param) and $param["BackUpTime"] !== null) {
            $this->BackUpTime = $param["BackUpTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTimeType",$param) and $param["BackupTimeType"] !== null) {
            $this->BackupTimeType = $param["BackupTimeType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("JobStatusNum",$param) and $param["JobStatusNum"] !== null) {
            $this->JobStatusNum = $param["JobStatusNum"];
        }

        if (array_key_exists("BackupCosInfo",$param) and $param["BackupCosInfo"] !== null) {
            $this->BackupCosInfo = new BackupCosInfo();
            $this->BackupCosInfo->deserialize($param["BackupCosInfo"]);
        }
    }
}
