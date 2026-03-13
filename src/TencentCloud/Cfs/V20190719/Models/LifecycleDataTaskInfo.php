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
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getTaskStatus() Obtain Task status.
init: pending.
running: executing, finished: completed.
failed: failure.
Stopping: stopping, stopped: stopped.
 * @method void setTaskStatus(string $TaskStatus) Set Task status.
init: pending.
running: executing, finished: completed.
failed: failure.
Stopping: stopping, stopped: stopped.
 * @method string getCreationTime() Obtain Task creation time
 * @method void setCreationTime(string $CreationTime) Set Task creation time
 * @method string getFinishTime() Obtain Task end time.
 * @method void setFinishTime(string $FinishTime) Set Task end time.
 * @method integer getFileTotalCount() Obtain Total files.
 * @method void setFileTotalCount(integer $FileTotalCount) Set Total files.
 * @method integer getFileSuccessedCount() Obtain Number of successfully processed files.
 * @method void setFileSuccessedCount(integer $FileSuccessedCount) Set Number of successfully processed files.
 * @method integer getFileFailedCount() Obtain Number of failed files.
 * @method void setFileFailedCount(integer $FileFailedCount) Set Number of failed files.
 * @method integer getFileTotalSize() Obtain File capacity, in Byte.


 * @method void setFileTotalSize(integer $FileTotalSize) Set File capacity, in Byte.


 * @method integer getFileSuccessedSize() Obtain Processed file capacity, in Byte.


 * @method void setFileSuccessedSize(integer $FileSuccessedSize) Set Processed file capacity, in Byte.


 * @method integer getFileFailedSize() Obtain Capacity of processed failed files, in Byte.

 * @method void setFileFailedSize(integer $FileFailedSize) Set Capacity of processed failed files, in Byte.

 * @method string getFileTotalList() Obtain Total file list.
 * @method void setFileTotalList(string $FileTotalList) Set Total file list.
 * @method string getFileSuccessedList() Obtain List of successful files.
 * @method void setFileSuccessedList(string $FileSuccessedList) Set List of successful files.
 * @method string getFileFailedList() Obtain List of failed files.
 * @method void setFileFailedList(string $FileFailedList) Set List of failed files.
 * @method string getFileSystemId() Obtain FileSystemId
 * @method void setFileSystemId(string $FileSystemId) Set FileSystemId
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getTaskPath() Obtain Task path.
 * @method void setTaskPath(string $TaskPath) Set Task path.
 * @method string getType() Obtain Task type, archive: indicates settlement task, restore: indicates pull task.
 * @method void setType(string $Type) Set Task type, archive: indicates settlement task, restore: indicates pull task.
 * @method string getDataFlowId() Obtain Data flow Id.
 * @method void setDataFlowId(string $DataFlowId) Set Data flow Id.
 * @method boolean getIsOverwrite() Obtain When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time, it does not release hot data storage).
Default false when empty.
 * @method void setIsOverwrite(boolean $IsOverwrite) Set When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time, it does not release hot data storage).
Default false when empty.
 */
class LifecycleDataTaskInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status.
init: pending.
running: executing, finished: completed.
failed: failure.
Stopping: stopping, stopped: stopped.
     */
    public $TaskStatus;

    /**
     * @var string Task creation time
     */
    public $CreationTime;

    /**
     * @var string Task end time.
     */
    public $FinishTime;

    /**
     * @var integer Total files.
     */
    public $FileTotalCount;

    /**
     * @var integer Number of successfully processed files.
     */
    public $FileSuccessedCount;

    /**
     * @var integer Number of failed files.
     */
    public $FileFailedCount;

    /**
     * @var integer File capacity, in Byte.


     */
    public $FileTotalSize;

    /**
     * @var integer Processed file capacity, in Byte.


     */
    public $FileSuccessedSize;

    /**
     * @var integer Capacity of processed failed files, in Byte.

     */
    public $FileFailedSize;

    /**
     * @var string Total file list.
     */
    public $FileTotalList;

    /**
     * @var string List of successful files.
     */
    public $FileSuccessedList;

    /**
     * @var string List of failed files.
     */
    public $FileFailedList;

    /**
     * @var string FileSystemId
     */
    public $FileSystemId;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task path.
     */
    public $TaskPath;

    /**
     * @var string Task type, archive: indicates settlement task, restore: indicates pull task.
     */
    public $Type;

    /**
     * @var string Data flow Id.
     */
    public $DataFlowId;

    /**
     * @var boolean When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time, it does not release hot data storage).
Default false when empty.
     */
    public $IsOverwrite;

    /**
     * @param string $TaskId Task ID.
     * @param string $TaskStatus Task status.
init: pending.
running: executing, finished: completed.
failed: failure.
Stopping: stopping, stopped: stopped.
     * @param string $CreationTime Task creation time
     * @param string $FinishTime Task end time.
     * @param integer $FileTotalCount Total files.
     * @param integer $FileSuccessedCount Number of successfully processed files.
     * @param integer $FileFailedCount Number of failed files.
     * @param integer $FileTotalSize File capacity, in Byte.


     * @param integer $FileSuccessedSize Processed file capacity, in Byte.


     * @param integer $FileFailedSize Capacity of processed failed files, in Byte.

     * @param string $FileTotalList Total file list.
     * @param string $FileSuccessedList List of successful files.
     * @param string $FileFailedList List of failed files.
     * @param string $FileSystemId FileSystemId
     * @param string $TaskName Task name.
     * @param string $TaskPath Task path.
     * @param string $Type Task type, archive: indicates settlement task, restore: indicates pull task.
     * @param string $DataFlowId Data flow Id.
     * @param boolean $IsOverwrite When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time, it does not release hot data storage).
Default false when empty.
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
    }
}
