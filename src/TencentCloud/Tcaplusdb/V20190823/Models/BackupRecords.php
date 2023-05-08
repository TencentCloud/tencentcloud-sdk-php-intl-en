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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup records
When it is used as an output parameter, each field will be filled.
When it is used as an input parameter, each field will be filled back into the structure as it is. This API can only be called if `FIleTag` = `OSDATA`.
 *
 * @method integer getZoneId() Obtain Table group ID
 * @method void setZoneId(integer $ZoneId) Set Table group ID
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getBackupType() Obtain Backup source
 * @method void setBackupType(string $BackupType) Set Backup source
 * @method string getFileTag() Obtain File tag: TCAPLUS_FULL or OSDATA
 * @method void setFileTag(string $FileTag) Set File tag: TCAPLUS_FULL or OSDATA
 * @method integer getShardCount() Obtain Number of shards
 * @method void setShardCount(integer $ShardCount) Set Number of shards
 * @method string getBackupBatchTime() Obtain Backup batch date
 * @method void setBackupBatchTime(string $BackupBatchTime) Set Backup batch date
 * @method integer getBackupFileSize() Obtain Total size of backup files
 * @method void setBackupFileSize(integer $BackupFileSize) Set Total size of backup files
 * @method string getBackupSuccRate() Obtain Backup success rate
 * @method void setBackupSuccRate(string $BackupSuccRate) Set Backup success rate
 * @method string getBackupExpireTime() Obtain Backup file expiration time
 * @method void setBackupExpireTime(string $BackupExpireTime) Set Backup file expiration time
 * @method integer getAppId() Obtain Business ID
 * @method void setAppId(integer $AppId) Set Business ID
 */
class BackupRecords extends AbstractModel
{
    /**
     * @var integer Table group ID
     */
    public $ZoneId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Backup source
     */
    public $BackupType;

    /**
     * @var string File tag: TCAPLUS_FULL or OSDATA
     */
    public $FileTag;

    /**
     * @var integer Number of shards
     */
    public $ShardCount;

    /**
     * @var string Backup batch date
     */
    public $BackupBatchTime;

    /**
     * @var integer Total size of backup files
     */
    public $BackupFileSize;

    /**
     * @var string Backup success rate
     */
    public $BackupSuccRate;

    /**
     * @var string Backup file expiration time
     */
    public $BackupExpireTime;

    /**
     * @var integer Business ID
     */
    public $AppId;

    /**
     * @param integer $ZoneId Table group ID
     * @param string $TableName Table name
     * @param string $BackupType Backup source
     * @param string $FileTag File tag: TCAPLUS_FULL or OSDATA
     * @param integer $ShardCount Number of shards
     * @param string $BackupBatchTime Backup batch date
     * @param integer $BackupFileSize Total size of backup files
     * @param string $BackupSuccRate Backup success rate
     * @param string $BackupExpireTime Backup file expiration time
     * @param integer $AppId Business ID
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("FileTag",$param) and $param["FileTag"] !== null) {
            $this->FileTag = $param["FileTag"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("BackupBatchTime",$param) and $param["BackupBatchTime"] !== null) {
            $this->BackupBatchTime = $param["BackupBatchTime"];
        }

        if (array_key_exists("BackupFileSize",$param) and $param["BackupFileSize"] !== null) {
            $this->BackupFileSize = $param["BackupFileSize"];
        }

        if (array_key_exists("BackupSuccRate",$param) and $param["BackupSuccRate"] !== null) {
            $this->BackupSuccRate = $param["BackupSuccRate"];
        }

        if (array_key_exists("BackupExpireTime",$param) and $param["BackupExpireTime"] !== null) {
            $this->BackupExpireTime = $param["BackupExpireTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
