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
 * Cold backup migration import
 *
 * @method string getMigrationId() Obtain Backup import task ID or incremental import task ID
 * @method void setMigrationId(string $MigrationId) Set Backup import task ID or incremental import task ID
 * @method string getMigrationName() Obtain Backup import task name. For an incremental import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 * @method void setMigrationName(string $MigrationName) Set Backup import task name. For an incremental import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain Application ID
 * @method void setAppId(integer $AppId) Set Application ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getInstanceId() Obtain ID of migrated target instance
 * @method void setInstanceId(string $InstanceId) Set ID of migrated target instance
 * @method string getRecoveryType() Obtain Migration task restoration type
 * @method void setRecoveryType(string $RecoveryType) Set Migration task restoration type
 * @method string getUploadType() Obtain Backup user upload type. COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
 * @method void setUploadType(string $UploadType) Set Backup user upload type. COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
 * @method array getBackupFiles() Obtain Backup file list, which is determined by UploadType. If the upload type is COS_URL, URL will be saved. If the upload type is COS_UPLOAD, the backup name will be saved.
 * @method void setBackupFiles(array $BackupFiles) Set Backup file list, which is determined by UploadType. If the upload type is COS_URL, URL will be saved. If the upload type is COS_UPLOAD, the backup name will be saved.
 * @method integer getStatus() Obtain Migration task status. Valid values: `2` (Creation completed), `7` (Importing full backups), `8` (Waiting for incremental backups), `9` (Import success), `10` (Import failure), `12` (Importing incremental backups).
 * @method void setStatus(integer $Status) Set Migration task status. Valid values: `2` (Creation completed), `7` (Importing full backups), `8` (Waiting for incremental backups), `9` (Import success), `10` (Import failure), `12` (Importing incremental backups).
 * @method string getCreateTime() Obtain Migration task creation time
 * @method void setCreateTime(string $CreateTime) Set Migration task creation time
 * @method string getStartTime() Obtain Migration task start time
 * @method void setStartTime(string $StartTime) Set Migration task start time
 * @method string getEndTime() Obtain Migration task end time
 * @method void setEndTime(string $EndTime) Set Migration task end time
 * @method string getMessage() Obtain More information
 * @method void setMessage(string $Message) Set More information
 * @method MigrationDetail getDetail() Obtain Migration detail
 * @method void setDetail(MigrationDetail $Detail) Set Migration detail
 * @method MigrationAction getAction() Obtain Operation allowed in the current status
 * @method void setAction(MigrationAction $Action) Set Operation allowed in the current status
 * @method string getIsRecovery() Obtain Whether this is the final restoration. For a full import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 * @method void setIsRecovery(string $IsRecovery) Set Whether this is the final restoration. For a full import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 * @method array getDBRename() Obtain Name set of renamed databases
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBRename(array $DBRename) Set Name set of renamed databases
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Migration extends AbstractModel
{
    /**
     * @var string Backup import task ID or incremental import task ID
     */
    public $MigrationId;

    /**
     * @var string Backup import task name. For an incremental import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
     */
    public $MigrationName;

    /**
     * @var integer Application ID
     */
    public $AppId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string ID of migrated target instance
     */
    public $InstanceId;

    /**
     * @var string Migration task restoration type
     */
    public $RecoveryType;

    /**
     * @var string Backup user upload type. COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
     */
    public $UploadType;

    /**
     * @var array Backup file list, which is determined by UploadType. If the upload type is COS_URL, URL will be saved. If the upload type is COS_UPLOAD, the backup name will be saved.
     */
    public $BackupFiles;

    /**
     * @var integer Migration task status. Valid values: `2` (Creation completed), `7` (Importing full backups), `8` (Waiting for incremental backups), `9` (Import success), `10` (Import failure), `12` (Importing incremental backups).
     */
    public $Status;

    /**
     * @var string Migration task creation time
     */
    public $CreateTime;

    /**
     * @var string Migration task start time
     */
    public $StartTime;

    /**
     * @var string Migration task end time
     */
    public $EndTime;

    /**
     * @var string More information
     */
    public $Message;

    /**
     * @var MigrationDetail Migration detail
     */
    public $Detail;

    /**
     * @var MigrationAction Operation allowed in the current status
     */
    public $Action;

    /**
     * @var string Whether this is the final restoration. For a full import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
     */
    public $IsRecovery;

    /**
     * @var array Name set of renamed databases
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBRename;

    /**
     * @param string $MigrationId Backup import task ID or incremental import task ID
     * @param string $MigrationName Backup import task name. For an incremental import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
     * @param integer $AppId Application ID
     * @param string $Region Region
     * @param string $InstanceId ID of migrated target instance
     * @param string $RecoveryType Migration task restoration type
     * @param string $UploadType Backup user upload type. COS_URL: the backup is stored in user’s Cloud Object Storage, with URL provided. COS_UPLOAD: the backup is stored in the application’s Cloud Object Storage and needs to be uploaded by the user.
     * @param array $BackupFiles Backup file list, which is determined by UploadType. If the upload type is COS_URL, URL will be saved. If the upload type is COS_UPLOAD, the backup name will be saved.
     * @param integer $Status Migration task status. Valid values: `2` (Creation completed), `7` (Importing full backups), `8` (Waiting for incremental backups), `9` (Import success), `10` (Import failure), `12` (Importing incremental backups).
     * @param string $CreateTime Migration task creation time
     * @param string $StartTime Migration task start time
     * @param string $EndTime Migration task end time
     * @param string $Message More information
     * @param MigrationDetail $Detail Migration detail
     * @param MigrationAction $Action Operation allowed in the current status
     * @param string $IsRecovery Whether this is the final restoration. For a full import task, this field will be left empty.
Note: this field may return ‘null’, indicating that no valid values can be obtained.
     * @param array $DBRename Name set of renamed databases
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
        if (array_key_exists("MigrationId",$param) and $param["MigrationId"] !== null) {
            $this->MigrationId = $param["MigrationId"];
        }

        if (array_key_exists("MigrationName",$param) and $param["MigrationName"] !== null) {
            $this->MigrationName = $param["MigrationName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new MigrationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new MigrationAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }

        if (array_key_exists("DBRename",$param) and $param["DBRename"] !== null) {
            $this->DBRename = [];
            foreach ($param["DBRename"] as $key => $value){
                $obj = new DBRenameRes();
                $obj->deserialize($value);
                array_push($this->DBRename, $obj);
            }
        }
    }
}
