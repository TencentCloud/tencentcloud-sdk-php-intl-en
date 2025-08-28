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
 * DescribeDBRestoreTime request structure.
 *
 * @method string getInstanceId() Obtain Original instance ID.
 * @method void setInstanceId(string $InstanceId) Set Original instance ID.
 * @method string getTargetInstanceId() Obtain ID of the target instance for rollback. If this parameter is left unspecified, roll back to the original instance by default.
 * @method void setTargetInstanceId(string $TargetInstanceId) Set ID of the target instance for rollback. If this parameter is left unspecified, roll back to the original instance by default.
 * @method string getTime() Obtain Queries databases that can be rolled back by time point, with the time format of YYYY-MM-DD HH:MM:SS. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
 * @method void setTime(string $Time) Set Queries databases that can be rolled back by time point, with the time format of YYYY-MM-DD HH:MM:SS. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
 * @method integer getBackupId() Obtain Queries databases that can be rolled back by backup set ID, which can be obtained through the DescribeBackups API. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
 * @method void setBackupId(integer $BackupId) Set Queries databases that can be rolled back by backup set ID, which can be obtained through the DescribeBackups API. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
 * @method string getDBName() Obtain Database name.
 * @method void setDBName(string $DBName) Set Database name.
 */
class DescribeDBRestoreTimeRequest extends AbstractModel
{
    /**
     * @var string Original instance ID.
     */
    public $InstanceId;

    /**
     * @var string ID of the target instance for rollback. If this parameter is left unspecified, roll back to the original instance by default.
     */
    public $TargetInstanceId;

    /**
     * @var string Queries databases that can be rolled back by time point, with the time format of YYYY-MM-DD HH:MM:SS. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
     */
    public $Time;

    /**
     * @var integer Queries databases that can be rolled back by backup set ID, which can be obtained through the DescribeBackups API. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
     */
    public $BackupId;

    /**
     * @var string Database name.
     */
    public $DBName;

    /**
     * @param string $InstanceId Original instance ID.
     * @param string $TargetInstanceId ID of the target instance for rollback. If this parameter is left unspecified, roll back to the original instance by default.
     * @param string $Time Queries databases that can be rolled back by time point, with the time format of YYYY-MM-DD HH:MM:SS. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
     * @param integer $BackupId Queries databases that can be rolled back by backup set ID, which can be obtained through the DescribeBackups API. Either BackupId or Time should be specified, as they cannot be empty simultaneously.
     * @param string $DBName Database name.
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

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }
    }
}
