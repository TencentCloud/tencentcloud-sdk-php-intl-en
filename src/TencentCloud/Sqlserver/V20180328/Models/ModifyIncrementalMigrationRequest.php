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
 * ModifyIncrementalMigration request structure.
 *
 * @method string getInstanceId() Obtain ID of imported target instance
 * @method void setInstanceId(string $InstanceId) Set ID of imported target instance
 * @method string getBackupMigrationId() Obtain Backup import task ID, which is returned through the API CreateBackupMigration
 * @method void setBackupMigrationId(string $BackupMigrationId) Set Backup import task ID, which is returned through the API CreateBackupMigration
 * @method string getIncrementalMigrationId() Obtain Incremental backup import task ID, which is returned through the `CreateIncrementalMigration` API.
 * @method void setIncrementalMigrationId(string $IncrementalMigrationId) Set Incremental backup import task ID, which is returned through the `CreateIncrementalMigration` API.
 * @method string getIsRecovery() Obtain Whether to restore backups. Valid values: `NO`, `YES`. If this parameter is not specified, current settings will be applied.
 * @method void setIsRecovery(string $IsRecovery) Set Whether to restore backups. Valid values: `NO`, `YES`. If this parameter is not specified, current settings will be applied.
 * @method array getBackupFiles() Obtain If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 * @method void setBackupFiles(array $BackupFiles) Set If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 */
class ModifyIncrementalMigrationRequest extends AbstractModel
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
     * @var string Incremental backup import task ID, which is returned through the `CreateIncrementalMigration` API.
     */
    public $IncrementalMigrationId;

    /**
     * @var string Whether to restore backups. Valid values: `NO`, `YES`. If this parameter is not specified, current settings will be applied.
     */
    public $IsRecovery;

    /**
     * @var array If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
     */
    public $BackupFiles;

    /**
     * @param string $InstanceId ID of imported target instance
     * @param string $BackupMigrationId Backup import task ID, which is returned through the API CreateBackupMigration
     * @param string $IncrementalMigrationId Incremental backup import task ID, which is returned through the `CreateIncrementalMigration` API.
     * @param string $IsRecovery Whether to restore backups. Valid values: `NO`, `YES`. If this parameter is not specified, current settings will be applied.
     * @param array $BackupFiles If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
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

        if (array_key_exists("IncrementalMigrationId",$param) and $param["IncrementalMigrationId"] !== null) {
            $this->IncrementalMigrationId = $param["IncrementalMigrationId"];
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }
    }
}
