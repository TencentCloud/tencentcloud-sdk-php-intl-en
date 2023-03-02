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
 * ModifyBackupMigration request structure.
 *
 * @method string getInstanceId() Obtain ID of imported target instance
 * @method void setInstanceId(string $InstanceId) Set ID of imported target instance
 * @method string getBackupMigrationId() Obtain Backup import task ID, which is returned through the API CreateBackupMigration
 * @method void setBackupMigrationId(string $BackupMigrationId) Set Backup import task ID, which is returned through the API CreateBackupMigration
 * @method string getMigrationName() Obtain Task name
 * @method void setMigrationName(string $MigrationName) Set Task name
 * @method string getRecoveryType() Obtain Migration task restoration type: FULL,FULL_LOG,FULL_DIFF
 * @method void setRecoveryType(string $RecoveryType) Set Migration task restoration type: FULL,FULL_LOG,FULL_DIFF
 * @method string getUploadType() Obtain COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
 * @method void setUploadType(string $UploadType) Set COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
 * @method array getBackupFiles() Obtain If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 * @method void setBackupFiles(array $BackupFiles) Set If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
 * @method array getDBRename() Obtain Name set of databases to be renamed
 * @method void setDBRename(array $DBRename) Set Name set of databases to be renamed
 */
class ModifyBackupMigrationRequest extends AbstractModel
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
     * @var string Task name
     */
    public $MigrationName;

    /**
     * @var string Migration task restoration type: FULL,FULL_LOG,FULL_DIFF
     */
    public $RecoveryType;

    /**
     * @var string COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
     */
    public $UploadType;

    /**
     * @var array If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
     */
    public $BackupFiles;

    /**
     * @var array Name set of databases to be renamed
     */
    public $DBRename;

    /**
     * @param string $InstanceId ID of imported target instance
     * @param string $BackupMigrationId Backup import task ID, which is returned through the API CreateBackupMigration
     * @param string $MigrationName Task name
     * @param string $RecoveryType Migration task restoration type: FULL,FULL_LOG,FULL_DIFF
     * @param string $UploadType COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
     * @param array $BackupFiles If the UploadType is COS_URL, fill in URL here. If the UploadType is COS_UPLOAD, fill in the name of the backup file here. Only 1 backup file is supported, but a backup file can involve multiple databases.
     * @param array $DBRename Name set of databases to be renamed
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

        if (array_key_exists("MigrationName",$param) and $param["MigrationName"] !== null) {
            $this->MigrationName = $param["MigrationName"];
        }

        if (array_key_exists("RecoveryType",$param) and $param["RecoveryType"] !== null) {
            $this->RecoveryType = $param["RecoveryType"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }

        if (array_key_exists("DBRename",$param) and $param["DBRename"] !== null) {
            $this->DBRename = [];
            foreach ($param["DBRename"] as $key => $value){
                $obj = new RenameRestoreDatabase();
                $obj->deserialize($value);
                array_push($this->DBRename, $obj);
            }
        }
    }
}
