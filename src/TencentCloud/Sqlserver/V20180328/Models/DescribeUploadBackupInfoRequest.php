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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUploadBackupInfo request structure.
 *
 * @method string getInstanceId() Obtain ID of imported target instance
 * @method void setInstanceId(string $InstanceId) Set ID of imported target instance
 * @method string getBackupMigrationId() Obtain Backup import task ID, which is returned through the API CreateBackupMigration
 * @method void setBackupMigrationId(string $BackupMigrationId) Set Backup import task ID, which is returned through the API CreateBackupMigration
 */
class DescribeUploadBackupInfoRequest extends AbstractModel
{
    /**
     * @var string ID of imported target instance
     */
    public $InstanceId;

    /**
     * @var string Backup import task ID, which is returned through the API CreateBackupMigration
     */
    public $BackupMigrationId;

    /**
     * @param string $InstanceId ID of imported target instance
     * @param string $BackupMigrationId Backup import task ID, which is returned through the API CreateBackupMigration
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

        if (array_key_exists("BackupMigrationId",$param) and $param["BackupMigrationId"] !== null) {
            $this->BackupMigrationId = $param["BackupMigrationId"];
        }
    }
}
