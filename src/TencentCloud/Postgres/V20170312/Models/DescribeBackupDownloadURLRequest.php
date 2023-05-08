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
 * DescribeBackupDownloadURL request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getBackupType() Obtain Backup type. Valid values: `LogBackup`, `BaseBackup`.
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `LogBackup`, `BaseBackup`.
 * @method string getBackupId() Obtain Unique backup ID.
 * @method void setBackupId(string $BackupId) Set Unique backup ID.
 * @method integer getURLExpireTime() Obtain Validity period of a URL, which is 12 hours by default.
 * @method void setURLExpireTime(integer $URLExpireTime) Set Validity period of a URL, which is 12 hours by default.
 * @method BackupDownloadRestriction getBackupDownloadRestriction() Obtain Backup download restriction
 * @method void setBackupDownloadRestriction(BackupDownloadRestriction $BackupDownloadRestriction) Set Backup download restriction
 */
class DescribeBackupDownloadURLRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Backup type. Valid values: `LogBackup`, `BaseBackup`.
     */
    public $BackupType;

    /**
     * @var string Unique backup ID.
     */
    public $BackupId;

    /**
     * @var integer Validity period of a URL, which is 12 hours by default.
     */
    public $URLExpireTime;

    /**
     * @var BackupDownloadRestriction Backup download restriction
     */
    public $BackupDownloadRestriction;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $BackupType Backup type. Valid values: `LogBackup`, `BaseBackup`.
     * @param string $BackupId Unique backup ID.
     * @param integer $URLExpireTime Validity period of a URL, which is 12 hours by default.
     * @param BackupDownloadRestriction $BackupDownloadRestriction Backup download restriction
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("URLExpireTime",$param) and $param["URLExpireTime"] !== null) {
            $this->URLExpireTime = $param["URLExpireTime"];
        }

        if (array_key_exists("BackupDownloadRestriction",$param) and $param["BackupDownloadRestriction"] !== null) {
            $this->BackupDownloadRestriction = new BackupDownloadRestriction();
            $this->BackupDownloadRestriction->deserialize($param["BackupDownloadRestriction"]);
        }
    }
}
