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
 * ModifyBackupName request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format of mssql-3l3fgqn7.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of mssql-3l3fgqn7.
 * @method string getBackupName() Obtain Modified backup name.
 * @method void setBackupName(string $BackupName) Set Modified backup name.
 * @method integer getBackupId() Obtain The backup ID can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API. When the value of GroupId is null, BackupId is required.
 * @method void setBackupId(integer $BackupId) Set The backup ID can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API. When the value of GroupId is null, BackupId is required.
 * @method string getGroupId() Obtain Backup task group ID, which can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API in single-database backup file mode. BackupId and GroupId exist simultaneously, and are modified according to BackupId.
 * @method void setGroupId(string $GroupId) Set Backup task group ID, which can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API in single-database backup file mode. BackupId and GroupId exist simultaneously, and are modified according to BackupId.
 */
class ModifyBackupNameRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format of mssql-3l3fgqn7.
     */
    public $InstanceId;

    /**
     * @var string Modified backup name.
     */
    public $BackupName;

    /**
     * @var integer The backup ID can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API. When the value of GroupId is null, BackupId is required.
     */
    public $BackupId;

    /**
     * @var string Backup task group ID, which can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API in single-database backup file mode. BackupId and GroupId exist simultaneously, and are modified according to BackupId.
     */
    public $GroupId;

    /**
     * @param string $InstanceId Instance ID, in the format of mssql-3l3fgqn7.
     * @param string $BackupName Modified backup name.
     * @param integer $BackupId The backup ID can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API. When the value of GroupId is null, BackupId is required.
     * @param string $GroupId Backup task group ID, which can be obtained through the [DescribeBackups](https://cloud.tencent.com/document/product/238/19943) API in single-database backup file mode. BackupId and GroupId exist simultaneously, and are modified according to BackupId.
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
