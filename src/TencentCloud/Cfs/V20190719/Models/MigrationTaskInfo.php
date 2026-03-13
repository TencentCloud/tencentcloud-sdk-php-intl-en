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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a CFS data migration task
 *
 * @method string getTaskName() Obtain Migration task name
 * @method void setTaskName(string $TaskName) Set Migration task name
 * @method string getTaskId() Obtain Migration task ID
 * @method void setTaskId(string $TaskId) Set Migration task ID
 * @method integer getMigrationType() Obtain Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
 * @method void setMigrationType(integer $MigrationType) Set Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
 * @method integer getMigrationMode() Obtain Migration mode. Default value: `0` (full migration).
 * @method void setMigrationMode(integer $MigrationMode) Set Migration mode. Default value: `0` (full migration).
 * @method string getBucketName() Obtain Data source bucket name.
 * @method void setBucketName(string $BucketName) Set Data source bucket name.
 * @method string getBucketRegion() Obtain Source bucket region.
 * @method void setBucketRegion(string $BucketRegion) Set Source bucket region.
 * @method string getBucketAddress() Obtain Data source bucket address.
 * @method void setBucketAddress(string $BucketAddress) Set Data source bucket address.
 * @method string getListAddress() Obtain Checklist address.
 * @method void setListAddress(string $ListAddress) Set Checklist address.
 * @method string getFsName() Obtain File system instance name.
 * @method void setFsName(string $FsName) Set File system instance name.
 * @method string getFileSystemId() Obtain File system instance ID
 * @method void setFileSystemId(string $FileSystemId) Set File system instance ID
 * @method string getFsPath() Obtain File system path
 * @method void setFsPath(string $FsPath) Set File system path
 * @method integer getCoverType() Obtain Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method void setCoverType(integer $CoverType) Set Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getEndTime() Obtain Completion/Termination time.
 * @method void setEndTime(integer $EndTime) Set Completion/Termination time.
 * @method integer getStatus() Obtain Migration status. 0: completed; 1: creating; 2: running; 3: terminating; 4: terminated; 5: creation failed; 6: running failure; 7: ending; 8: deleting; 9: waiting.
 * @method void setStatus(integer $Status) Set Migration status. 0: completed; 1: creating; 2: running; 3: terminating; 4: terminated; 5: creation failed; 6: running failure; 7: ending; 8: deleting; 9: waiting.
 * @method integer getFileTotalCount() Obtain Number of files.
 * @method void setFileTotalCount(integer $FileTotalCount) Set Number of files.
 * @method integer getFileMigratedCount() Obtain Number of migrated files.
 * @method void setFileMigratedCount(integer $FileMigratedCount) Set Number of migrated files.
 * @method integer getFileFailedCount() Obtain Number of failed files in migration.
 * @method void setFileFailedCount(integer $FileFailedCount) Set Number of failed files in migration.
 * @method integer getFileTotalSize() Obtain File capacity, in Byte.
 * @method void setFileTotalSize(integer $FileTotalSize) Set File capacity, in Byte.
 * @method integer getFileMigratedSize() Obtain Migrated file capacity in Byte.
 * @method void setFileMigratedSize(integer $FileMigratedSize) Set Migrated file capacity in Byte.
 * @method integer getFileFailedSize() Obtain Capacity of failed migration files, in Byte.
 * @method void setFileFailedSize(integer $FileFailedSize) Set Capacity of failed migration files, in Byte.
 * @method string getFileTotalList() Obtain Total inventory.
 * @method void setFileTotalList(string $FileTotalList) Set Total inventory.
 * @method string getFileCompletedList() Obtain File list completed.
 * @method void setFileCompletedList(string $FileCompletedList) Set File list completed.
 * @method string getFileFailedList() Obtain Failed file list.
 * @method void setFileFailedList(string $FileFailedList) Set Failed file list.
 * @method string getBucketPath() Obtain Source bucket path.
 * @method void setBucketPath(string $BucketPath) Set Source bucket path.
 * @method integer getDirection() Obtain Migration direction. valid values: 0 (cos migration to file system), 1 (file system migration to cos). default is 0.
 * @method void setDirection(integer $Direction) Set Migration direction. valid values: 0 (cos migration to file system), 1 (file system migration to cos). default is 0.
 */
class MigrationTaskInfo extends AbstractModel
{
    /**
     * @var string Migration task name
     */
    public $TaskName;

    /**
     * @var string Migration task ID
     */
    public $TaskId;

    /**
     * @var integer Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
     */
    public $MigrationType;

    /**
     * @var integer Migration mode. Default value: `0` (full migration).
     */
    public $MigrationMode;

    /**
     * @var string Data source bucket name.
     */
    public $BucketName;

    /**
     * @var string Source bucket region.
     */
    public $BucketRegion;

    /**
     * @var string Data source bucket address.
     */
    public $BucketAddress;

    /**
     * @var string Checklist address.
     */
    public $ListAddress;

    /**
     * @var string File system instance name.
     */
    public $FsName;

    /**
     * @var string File system instance ID
     */
    public $FileSystemId;

    /**
     * @var string File system path
     */
    public $FsPath;

    /**
     * @var integer Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
     */
    public $CoverType;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Completion/Termination time.
     */
    public $EndTime;

    /**
     * @var integer Migration status. 0: completed; 1: creating; 2: running; 3: terminating; 4: terminated; 5: creation failed; 6: running failure; 7: ending; 8: deleting; 9: waiting.
     */
    public $Status;

    /**
     * @var integer Number of files.
     */
    public $FileTotalCount;

    /**
     * @var integer Number of migrated files.
     */
    public $FileMigratedCount;

    /**
     * @var integer Number of failed files in migration.
     */
    public $FileFailedCount;

    /**
     * @var integer File capacity, in Byte.
     */
    public $FileTotalSize;

    /**
     * @var integer Migrated file capacity in Byte.
     */
    public $FileMigratedSize;

    /**
     * @var integer Capacity of failed migration files, in Byte.
     */
    public $FileFailedSize;

    /**
     * @var string Total inventory.
     */
    public $FileTotalList;

    /**
     * @var string File list completed.
     */
    public $FileCompletedList;

    /**
     * @var string Failed file list.
     */
    public $FileFailedList;

    /**
     * @var string Source bucket path.
     */
    public $BucketPath;

    /**
     * @var integer Migration direction. valid values: 0 (cos migration to file system), 1 (file system migration to cos). default is 0.
     */
    public $Direction;

    /**
     * @param string $TaskName Migration task name
     * @param string $TaskId Migration task ID
     * @param integer $MigrationType Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
     * @param integer $MigrationMode Migration mode. Default value: `0` (full migration).
     * @param string $BucketName Data source bucket name.
     * @param string $BucketRegion Source bucket region.
     * @param string $BucketAddress Data source bucket address.
     * @param string $ListAddress Checklist address.
     * @param string $FsName File system instance name.
     * @param string $FileSystemId File system instance ID
     * @param string $FsPath File system path
     * @param integer $CoverType Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
     * @param integer $CreateTime Creation time
     * @param integer $EndTime Completion/Termination time.
     * @param integer $Status Migration status. 0: completed; 1: creating; 2: running; 3: terminating; 4: terminated; 5: creation failed; 6: running failure; 7: ending; 8: deleting; 9: waiting.
     * @param integer $FileTotalCount Number of files.
     * @param integer $FileMigratedCount Number of migrated files.
     * @param integer $FileFailedCount Number of failed files in migration.
     * @param integer $FileTotalSize File capacity, in Byte.
     * @param integer $FileMigratedSize Migrated file capacity in Byte.
     * @param integer $FileFailedSize Capacity of failed migration files, in Byte.
     * @param string $FileTotalList Total inventory.
     * @param string $FileCompletedList File list completed.
     * @param string $FileFailedList Failed file list.
     * @param string $BucketPath Source bucket path.
     * @param integer $Direction Migration direction. valid values: 0 (cos migration to file system), 1 (file system migration to cos). default is 0.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("MigrationMode",$param) and $param["MigrationMode"] !== null) {
            $this->MigrationMode = $param["MigrationMode"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketAddress",$param) and $param["BucketAddress"] !== null) {
            $this->BucketAddress = $param["BucketAddress"];
        }

        if (array_key_exists("ListAddress",$param) and $param["ListAddress"] !== null) {
            $this->ListAddress = $param["ListAddress"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("FsPath",$param) and $param["FsPath"] !== null) {
            $this->FsPath = $param["FsPath"];
        }

        if (array_key_exists("CoverType",$param) and $param["CoverType"] !== null) {
            $this->CoverType = $param["CoverType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileTotalCount",$param) and $param["FileTotalCount"] !== null) {
            $this->FileTotalCount = $param["FileTotalCount"];
        }

        if (array_key_exists("FileMigratedCount",$param) and $param["FileMigratedCount"] !== null) {
            $this->FileMigratedCount = $param["FileMigratedCount"];
        }

        if (array_key_exists("FileFailedCount",$param) and $param["FileFailedCount"] !== null) {
            $this->FileFailedCount = $param["FileFailedCount"];
        }

        if (array_key_exists("FileTotalSize",$param) and $param["FileTotalSize"] !== null) {
            $this->FileTotalSize = $param["FileTotalSize"];
        }

        if (array_key_exists("FileMigratedSize",$param) and $param["FileMigratedSize"] !== null) {
            $this->FileMigratedSize = $param["FileMigratedSize"];
        }

        if (array_key_exists("FileFailedSize",$param) and $param["FileFailedSize"] !== null) {
            $this->FileFailedSize = $param["FileFailedSize"];
        }

        if (array_key_exists("FileTotalList",$param) and $param["FileTotalList"] !== null) {
            $this->FileTotalList = $param["FileTotalList"];
        }

        if (array_key_exists("FileCompletedList",$param) and $param["FileCompletedList"] !== null) {
            $this->FileCompletedList = $param["FileCompletedList"];
        }

        if (array_key_exists("FileFailedList",$param) and $param["FileFailedList"] !== null) {
            $this->FileFailedList = $param["FileFailedList"];
        }

        if (array_key_exists("BucketPath",$param) and $param["BucketPath"] !== null) {
            $this->BucketPath = $param["BucketPath"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
