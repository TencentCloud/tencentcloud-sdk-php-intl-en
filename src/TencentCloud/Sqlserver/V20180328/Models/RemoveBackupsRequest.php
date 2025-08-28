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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveBackups request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, mssql-j8kv137v.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, mssql-j8kv137v.
 * @method array getBackupNames() Obtain Backup names to be deleted. Backup names can be obtained through the FileName field of the DescribeBackups API. The number of backups for batch deletion in a single request should not exceed 10. This field is required when the values of StartTime and EndTime are null.
 * @method void setBackupNames(array $BackupNames) Set Backup names to be deleted. Backup names can be obtained through the FileName field of the DescribeBackups API. The number of backups for batch deletion in a single request should not exceed 10. This field is required when the values of StartTime and EndTime are null.
 * @method string getStartTime() Obtain Start time for batch deletion of manual backups. This field is required when the value of BackupNames is null.
 * @method void setStartTime(string $StartTime) Set Start time for batch deletion of manual backups. This field is required when the value of BackupNames is null.
 * @method string getEndTime() Obtain Deadline for batch deletion of manual backups. This field is required when the value of BackupNames is null.
 * @method void setEndTime(string $EndTime) Set Deadline for batch deletion of manual backups. This field is required when the value of BackupNames is null.
 */
class RemoveBackupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, mssql-j8kv137v.
     */
    public $InstanceId;

    /**
     * @var array Backup names to be deleted. Backup names can be obtained through the FileName field of the DescribeBackups API. The number of backups for batch deletion in a single request should not exceed 10. This field is required when the values of StartTime and EndTime are null.
     */
    public $BackupNames;

    /**
     * @var string Start time for batch deletion of manual backups. This field is required when the value of BackupNames is null.
     */
    public $StartTime;

    /**
     * @var string Deadline for batch deletion of manual backups. This field is required when the value of BackupNames is null.
     */
    public $EndTime;

    /**
     * @param string $InstanceId Instance ID. For example, mssql-j8kv137v.
     * @param array $BackupNames Backup names to be deleted. Backup names can be obtained through the FileName field of the DescribeBackups API. The number of backups for batch deletion in a single request should not exceed 10. This field is required when the values of StartTime and EndTime are null.
     * @param string $StartTime Start time for batch deletion of manual backups. This field is required when the value of BackupNames is null.
     * @param string $EndTime Deadline for batch deletion of manual backups. This field is required when the value of BackupNames is null.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
