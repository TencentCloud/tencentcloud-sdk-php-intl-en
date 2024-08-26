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
 * Backup table information
 *
 * @method string getDatabase() Obtain Database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalBytes() Obtain Total number of bytes in the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalBytes(integer $TotalBytes) Set Total number of bytes in the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSingleReplicaBytes() Obtain Size of a single replica
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSingleReplicaBytes(string $SingleReplicaBytes) Set Size of a single replica
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupStatus() Obtain Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(integer $BackupStatus) Set Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupErrorMsg() Obtain Error message of the backup
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupErrorMsg(string $BackupErrorMsg) Set Error message of the backup
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsOpenCoolDown() Obtain Whether to bind the cold storage policy to the database and table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOpenCoolDown(boolean $IsOpenCoolDown) Set Whether to bind the cold storage policy to the database and table
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupTableContent extends AbstractModel
{
    /**
     * @var string Database
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var string Table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var integer Total number of bytes in the table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalBytes;

    /**
     * @var string Size of a single replica
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SingleReplicaBytes;

    /**
     * @var integer Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string Error message of the backup
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupErrorMsg;

    /**
     * @var boolean Whether to bind the cold storage policy to the database and table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsOpenCoolDown;

    /**
     * @param string $Database Database
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalBytes Total number of bytes in the table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SingleReplicaBytes Size of a single replica
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupStatus Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupErrorMsg Error message of the backup
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsOpenCoolDown Whether to bind the cold storage policy to the database and table
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("TotalBytes",$param) and $param["TotalBytes"] !== null) {
            $this->TotalBytes = $param["TotalBytes"];
        }

        if (array_key_exists("SingleReplicaBytes",$param) and $param["SingleReplicaBytes"] !== null) {
            $this->SingleReplicaBytes = $param["SingleReplicaBytes"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupErrorMsg",$param) and $param["BackupErrorMsg"] !== null) {
            $this->BackupErrorMsg = $param["BackupErrorMsg"];
        }

        if (array_key_exists("IsOpenCoolDown",$param) and $param["IsOpenCoolDown"] !== null) {
            $this->IsOpenCoolDown = $param["IsOpenCoolDown"];
        }
    }
}
