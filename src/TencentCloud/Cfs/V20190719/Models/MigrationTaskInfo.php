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
 * @method string getBucketName() Obtain Data source bucket name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketName(string $BucketName) Set Data source bucket name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucketRegion() Obtain Data source bucket region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketRegion(string $BucketRegion) Set Data source bucket region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucketAddress() Obtain Data source bucket address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketAddress(string $BucketAddress) Set Data source bucket address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListAddress() Obtain List address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListAddress(string $ListAddress) Set List address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFsName() Obtain File system instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFsName(string $FsName) Set File system instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileSystemId() Obtain File system instance ID
 * @method void setFileSystemId(string $FileSystemId) Set File system instance ID
 * @method string getFsPath() Obtain File system path
 * @method void setFsPath(string $FsPath) Set File system path
 * @method integer getCoverType() Obtain Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method void setCoverType(integer $CoverType) Set Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getEndTime() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Migration status. Valid values: `0` (completed), `1` (in progress), and `2` (stopped).
 * @method void setStatus(integer $Status) Set Migration status. Valid values: `0` (completed), `1` (in progress), and `2` (stopped).
 * @method integer getFileTotalCount() Obtain Number of files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileTotalCount(integer $FileTotalCount) Set Number of files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileMigratedCount() Obtain Number of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMigratedCount(integer $FileMigratedCount) Set Number of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileFailedCount() Obtain Number of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileFailedCount(integer $FileFailedCount) Set Number of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileTotalSize() Obtain File size, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileTotalSize(integer $FileTotalSize) Set File size, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileMigratedSize() Obtain Size of migrated files, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMigratedSize(integer $FileMigratedSize) Set Size of migrated files, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileFailedSize() Obtain Size of files that failed to be migrated, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileFailedSize(integer $FileFailedSize) Set Size of files that failed to be migrated, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileTotalList() Obtain List of all files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileTotalList(string $FileTotalList) Set List of all files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileCompletedList() Obtain List of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileCompletedList(string $FileCompletedList) Set List of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileFailedList() Obtain List of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileFailedList(string $FileFailedList) Set List of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucketPath() Obtain Source bucket path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketPath(string $BucketPath) Set Source bucket path
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Data source bucket name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketName;

    /**
     * @var string Data source bucket region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketRegion;

    /**
     * @var string Data source bucket address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketAddress;

    /**
     * @var string List address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListAddress;

    /**
     * @var string File system instance name
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Migration status. Valid values: `0` (completed), `1` (in progress), and `2` (stopped).
     */
    public $Status;

    /**
     * @var integer Number of files
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileTotalCount;

    /**
     * @var integer Number of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMigratedCount;

    /**
     * @var integer Number of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileFailedCount;

    /**
     * @var integer File size, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileTotalSize;

    /**
     * @var integer Size of migrated files, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMigratedSize;

    /**
     * @var integer Size of files that failed to be migrated, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileFailedSize;

    /**
     * @var string List of all files
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileTotalList;

    /**
     * @var string List of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileCompletedList;

    /**
     * @var string List of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileFailedList;

    /**
     * @var string Source bucket path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketPath;

    /**
     * @param string $TaskName Migration task name
     * @param string $TaskId Migration task ID
     * @param integer $MigrationType Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
     * @param integer $MigrationMode Migration mode. Default value: `0` (full migration).
     * @param string $BucketName Data source bucket name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BucketRegion Data source bucket region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BucketAddress Data source bucket address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListAddress List address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FsName File system instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileSystemId File system instance ID
     * @param string $FsPath File system path
     * @param integer $CoverType Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
     * @param integer $CreateTime Creation time
     * @param integer $EndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Migration status. Valid values: `0` (completed), `1` (in progress), and `2` (stopped).
     * @param integer $FileTotalCount Number of files
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileMigratedCount Number of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileFailedCount Number of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileTotalSize File size, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileMigratedSize Size of migrated files, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileFailedSize Size of files that failed to be migrated, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileTotalList List of all files
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileCompletedList List of migrated files
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileFailedList List of files that failed to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BucketPath Source bucket path
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
    }
}
