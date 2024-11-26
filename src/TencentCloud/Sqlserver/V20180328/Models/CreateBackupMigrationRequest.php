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
 * CreateBackupMigration request structure.
 *
 * @method string getInstanceId() Obtain ID of imported target instance
 * @method void setInstanceId(string $InstanceId) Set ID of imported target instance
 * @method string getRecoveryType() Obtain Migration task restoration type. FULL: full backup restoration, FULL_LOG: full backup and transaction log restoration, FULL_DIFF: full backup and differential backup restoration
 * @method void setRecoveryType(string $RecoveryType) Set Migration task restoration type. FULL: full backup restoration, FULL_LOG: full backup and transaction log restoration, FULL_DIFF: full backup and differential backup restoration
 * @method string getUploadType() Obtain Backup upload type. COS_URL: the backup is stored in user's Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application's Cloud Object Storage and needs to be uploaded by the user.
 * @method void setUploadType(string $UploadType) Set Backup upload type. COS_URL: the backup is stored in user's Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application's Cloud Object Storage and needs to be uploaded by the user.
 * @method string getMigrationName() Obtain Task name
 * @method void setMigrationName(string $MigrationName) Set Task name
 * @method array getBackupFiles() Obtain If the UploadType is COS_URL, fill in the URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 * @method void setBackupFiles(array $BackupFiles) Set If the UploadType is COS_URL, fill in the URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 */
class CreateBackupMigrationRequest extends AbstractModel
{
    /**
     * @var string ID of imported target instance
     */
    public $InstanceId;

    /**
     * @var string Migration task restoration type. FULL: full backup restoration, FULL_LOG: full backup and transaction log restoration, FULL_DIFF: full backup and differential backup restoration
     */
    public $RecoveryType;

    /**
     * @var string Backup upload type. COS_URL: the backup is stored in user's Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application's Cloud Object Storage and needs to be uploaded by the user.
     */
    public $UploadType;

    /**
     * @var string Task name
     */
    public $MigrationName;

    /**
     * @var array If the UploadType is COS_URL, fill in the URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
     */
    public $BackupFiles;

    /**
     * @param string $InstanceId ID of imported target instance
     * @param string $RecoveryType Migration task restoration type. FULL: full backup restoration, FULL_LOG: full backup and transaction log restoration, FULL_DIFF: full backup and differential backup restoration
     * @param string $UploadType Backup upload type. COS_URL: the backup is stored in user's Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application's Cloud Object Storage and needs to be uploaded by the user.
     * @param string $MigrationName Task name
     * @param array $BackupFiles If the UploadType is COS_URL, fill in the URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
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

        if (array_key_exists("RecoveryType",$param) and $param["RecoveryType"] !== null) {
            $this->RecoveryType = $param["RecoveryType"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("MigrationName",$param) and $param["MigrationName"] !== null) {
            $this->MigrationName = $param["MigrationName"];
        }

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }
    }
}
