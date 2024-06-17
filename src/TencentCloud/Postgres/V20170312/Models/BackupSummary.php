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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance backup statistics
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method integer getLogBackupCount() Obtain Number of log backups of an instance
 * @method void setLogBackupCount(integer $LogBackupCount) Set Number of log backups of an instance
 * @method integer getLogBackupSize() Obtain Size of log backups of an instance
 * @method void setLogBackupSize(integer $LogBackupSize) Set Size of log backups of an instance
 * @method integer getManualBaseBackupCount() Obtain Number of manually created instance data backups.
 * @method void setManualBaseBackupCount(integer $ManualBaseBackupCount) Set Number of manually created instance data backups.
 * @method integer getManualBaseBackupSize() Obtain Size of manually created instance data backups.
 * @method void setManualBaseBackupSize(integer $ManualBaseBackupSize) Set Size of manually created instance data backups.
 * @method integer getAutoBaseBackupCount() Obtain Number of automatically created instance data backups.
 * @method void setAutoBaseBackupCount(integer $AutoBaseBackupCount) Set Number of automatically created instance data backups.
 * @method integer getAutoBaseBackupSize() Obtain Size of automatically created instance data backups.
 * @method void setAutoBaseBackupSize(integer $AutoBaseBackupSize) Set Size of automatically created instance data backups.
 * @method integer getTotalBackupCount() Obtain Total number of backups
 * @method void setTotalBackupCount(integer $TotalBackupCount) Set Total number of backups
 * @method integer getTotalBackupSize() Obtain Total backup size
 * @method void setTotalBackupSize(integer $TotalBackupSize) Set Total backup size
 */
class BackupSummary extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var integer Number of log backups of an instance
     */
    public $LogBackupCount;

    /**
     * @var integer Size of log backups of an instance
     */
    public $LogBackupSize;

    /**
     * @var integer Number of manually created instance data backups.
     */
    public $ManualBaseBackupCount;

    /**
     * @var integer Size of manually created instance data backups.
     */
    public $ManualBaseBackupSize;

    /**
     * @var integer Number of automatically created instance data backups.
     */
    public $AutoBaseBackupCount;

    /**
     * @var integer Size of automatically created instance data backups.
     */
    public $AutoBaseBackupSize;

    /**
     * @var integer Total number of backups
     */
    public $TotalBackupCount;

    /**
     * @var integer Total backup size
     */
    public $TotalBackupSize;

    /**
     * @param string $DBInstanceId Instance ID
     * @param integer $LogBackupCount Number of log backups of an instance
     * @param integer $LogBackupSize Size of log backups of an instance
     * @param integer $ManualBaseBackupCount Number of manually created instance data backups.
     * @param integer $ManualBaseBackupSize Size of manually created instance data backups.
     * @param integer $AutoBaseBackupCount Number of automatically created instance data backups.
     * @param integer $AutoBaseBackupSize Size of automatically created instance data backups.
     * @param integer $TotalBackupCount Total number of backups
     * @param integer $TotalBackupSize Total backup size
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("ManualBaseBackupCount",$param) and $param["ManualBaseBackupCount"] !== null) {
            $this->ManualBaseBackupCount = $param["ManualBaseBackupCount"];
        }

        if (array_key_exists("ManualBaseBackupSize",$param) and $param["ManualBaseBackupSize"] !== null) {
            $this->ManualBaseBackupSize = $param["ManualBaseBackupSize"];
        }

        if (array_key_exists("AutoBaseBackupCount",$param) and $param["AutoBaseBackupCount"] !== null) {
            $this->AutoBaseBackupCount = $param["AutoBaseBackupCount"];
        }

        if (array_key_exists("AutoBaseBackupSize",$param) and $param["AutoBaseBackupSize"] !== null) {
            $this->AutoBaseBackupSize = $param["AutoBaseBackupSize"];
        }

        if (array_key_exists("TotalBackupCount",$param) and $param["TotalBackupCount"] !== null) {
            $this->TotalBackupCount = $param["TotalBackupCount"];
        }

        if (array_key_exists("TotalBackupSize",$param) and $param["TotalBackupSize"] !== null) {
            $this->TotalBackupSize = $param["TotalBackupSize"];
        }
    }
}
