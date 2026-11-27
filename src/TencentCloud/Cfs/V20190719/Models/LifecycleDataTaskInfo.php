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
 * Lifecycle task.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskStatus() Obtain <p>Task status.</p><p>Valid values:</p><ul><li>init: queuing</li><li>running: running</li><li>finished: completed</li><li>failed: failed</li><li>stopping: stopping</li><li>stopped: stopped</li></ul>
 * @method void setTaskStatus(string $TaskStatus) Set <p>Task status.</p><p>Valid values:</p><ul><li>init: queuing</li><li>running: running</li><li>finished: completed</li><li>failed: failed</li><li>stopping: stopping</li><li>stopped: stopped</li></ul>
 * @method string getCreationTime() Obtain <p>Task creation time</p>
 * @method void setCreationTime(string $CreationTime) Set <p>Task creation time</p>
 * @method string getFinishTime() Obtain <p>Task end time</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Task end time</p>
 * @method integer getFileTotalCount() Obtain <p>Total number of files</p>
 * @method void setFileTotalCount(integer $FileTotalCount) Set <p>Total number of files</p>
 * @method integer getFileSuccessedCount() Obtain <p>Number of files processed successfully</p>
 * @method void setFileSuccessedCount(integer $FileSuccessedCount) Set <p>Number of files processed successfully</p>
 * @method integer getFileFailedCount() Obtain <p>Number of files that have failed</p>
 * @method void setFileFailedCount(integer $FileFailedCount) Set <p>Number of files that have failed</p>
 * @method integer getFileTotalSize() Obtain <p>File size, in bytes</p>
 * @method void setFileTotalSize(integer $FileTotalSize) Set <p>File size, in bytes</p>
 * @method integer getFileSuccessedSize() Obtain <p>Size of processed files, in bytes</p>
 * @method void setFileSuccessedSize(integer $FileSuccessedSize) Set <p>Size of processed files, in bytes</p>
 * @method integer getFileFailedSize() Obtain <p>Size of failed files, in bytes</p>
 * @method void setFileFailedSize(integer $FileFailedSize) Set <p>Size of failed files, in bytes</p>
 * @method string getFileTotalList() Obtain <p>Total file list.</p>
 * @method void setFileTotalList(string $FileTotalList) Set <p>Total file list.</p>
 * @method string getFileSuccessedList() Obtain <p>List of successful files.</p>
 * @method void setFileSuccessedList(string $FileSuccessedList) Set <p>List of successful files.</p>
 * @method string getFileFailedList() Obtain <p>List of failed files.</p>
 * @method void setFileFailedList(string $FileFailedList) Set <p>List of failed files.</p>
 * @method string getFileSystemId() Obtain <p>FileSystemId</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>FileSystemId</p>
 * @method string getTaskName() Obtain <p>Task name.</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name.</p>
 * @method string getTaskPath() Obtain <p>Task path.</p>
 * @method void setTaskPath(string $TaskPath) Set <p>Task path.</p>
 * @method string getType() Obtain <p>Task type. archive: an archiving task. restore: a retrieval task.</p>
 * @method void setType(string $Type) Set <p>Task type. archive: an archiving task. restore: a retrieval task.</p>
 * @method string getDataFlowId() Obtain <p>Data flow Id.</p>
 * @method void setDataFlowId(string $DataFlowId) Set <p>Data flow Id.</p>
 * @method boolean getIsOverwrite() Obtain <p>Whether to overwrite files with the same name in CFS Turbo and external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).<br>If this parameter is left empty, the default value is false.</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) Set <p>Whether to overwrite files with the same name in CFS Turbo and external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).<br>If this parameter is left empty, the default value is false.</p>
 * @method string getListPath() Obtain <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. This parameter and TaskPath are alternative. <br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
 * @method void setListPath(string $ListPath) Set <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. This parameter and TaskPath are alternative. <br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
 */
class LifecycleDataTaskInfo extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task status.</p><p>Valid values:</p><ul><li>init: queuing</li><li>running: running</li><li>finished: completed</li><li>failed: failed</li><li>stopping: stopping</li><li>stopped: stopped</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreationTime;

    /**
     * @var string <p>Task end time</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>Total number of files</p>
     */
    public $FileTotalCount;

    /**
     * @var integer <p>Number of files processed successfully</p>
     */
    public $FileSuccessedCount;

    /**
     * @var integer <p>Number of files that have failed</p>
     */
    public $FileFailedCount;

    /**
     * @var integer <p>File size, in bytes</p>
     */
    public $FileTotalSize;

    /**
     * @var integer <p>Size of processed files, in bytes</p>
     */
    public $FileSuccessedSize;

    /**
     * @var integer <p>Size of failed files, in bytes</p>
     */
    public $FileFailedSize;

    /**
     * @var string <p>Total file list.</p>
     */
    public $FileTotalList;

    /**
     * @var string <p>List of successful files.</p>
     */
    public $FileSuccessedList;

    /**
     * @var string <p>List of failed files.</p>
     */
    public $FileFailedList;

    /**
     * @var string <p>FileSystemId</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Task name.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Task path.</p>
     */
    public $TaskPath;

    /**
     * @var string <p>Task type. archive: an archiving task. restore: a retrieval task.</p>
     */
    public $Type;

    /**
     * @var string <p>Data flow Id.</p>
     */
    public $DataFlowId;

    /**
     * @var boolean <p>Whether to overwrite files with the same name in CFS Turbo and external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).<br>If this parameter is left empty, the default value is false.</p>
     */
    public $IsOverwrite;

    /**
     * @var string <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. This parameter and TaskPath are alternative. <br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
     */
    public $ListPath;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskStatus <p>Task status.</p><p>Valid values:</p><ul><li>init: queuing</li><li>running: running</li><li>finished: completed</li><li>failed: failed</li><li>stopping: stopping</li><li>stopped: stopped</li></ul>
     * @param string $CreationTime <p>Task creation time</p>
     * @param string $FinishTime <p>Task end time</p>
     * @param integer $FileTotalCount <p>Total number of files</p>
     * @param integer $FileSuccessedCount <p>Number of files processed successfully</p>
     * @param integer $FileFailedCount <p>Number of files that have failed</p>
     * @param integer $FileTotalSize <p>File size, in bytes</p>
     * @param integer $FileSuccessedSize <p>Size of processed files, in bytes</p>
     * @param integer $FileFailedSize <p>Size of failed files, in bytes</p>
     * @param string $FileTotalList <p>Total file list.</p>
     * @param string $FileSuccessedList <p>List of successful files.</p>
     * @param string $FileFailedList <p>List of failed files.</p>
     * @param string $FileSystemId <p>FileSystemId</p>
     * @param string $TaskName <p>Task name.</p>
     * @param string $TaskPath <p>Task path.</p>
     * @param string $Type <p>Task type. archive: an archiving task. restore: a retrieval task.</p>
     * @param string $DataFlowId <p>Data flow Id.</p>
     * @param boolean $IsOverwrite <p>Whether to overwrite files with the same name in CFS Turbo and external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).<br>If this parameter is left empty, the default value is false.</p>
     * @param string $ListPath <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. This parameter and TaskPath are alternative. <br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("FileTotalCount",$param) and $param["FileTotalCount"] !== null) {
            $this->FileTotalCount = $param["FileTotalCount"];
        }

        if (array_key_exists("FileSuccessedCount",$param) and $param["FileSuccessedCount"] !== null) {
            $this->FileSuccessedCount = $param["FileSuccessedCount"];
        }

        if (array_key_exists("FileFailedCount",$param) and $param["FileFailedCount"] !== null) {
            $this->FileFailedCount = $param["FileFailedCount"];
        }

        if (array_key_exists("FileTotalSize",$param) and $param["FileTotalSize"] !== null) {
            $this->FileTotalSize = $param["FileTotalSize"];
        }

        if (array_key_exists("FileSuccessedSize",$param) and $param["FileSuccessedSize"] !== null) {
            $this->FileSuccessedSize = $param["FileSuccessedSize"];
        }

        if (array_key_exists("FileFailedSize",$param) and $param["FileFailedSize"] !== null) {
            $this->FileFailedSize = $param["FileFailedSize"];
        }

        if (array_key_exists("FileTotalList",$param) and $param["FileTotalList"] !== null) {
            $this->FileTotalList = $param["FileTotalList"];
        }

        if (array_key_exists("FileSuccessedList",$param) and $param["FileSuccessedList"] !== null) {
            $this->FileSuccessedList = $param["FileSuccessedList"];
        }

        if (array_key_exists("FileFailedList",$param) and $param["FileFailedList"] !== null) {
            $this->FileFailedList = $param["FileFailedList"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("ListPath",$param) and $param["ListPath"] !== null) {
            $this->ListPath = $param["ListPath"];
        }
    }
}
