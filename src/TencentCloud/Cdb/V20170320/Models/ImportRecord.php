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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Import task records
 *
 * @method integer getStatus() Obtain Status value
 * @method void setStatus(integer $Status) Set Status value
 * @method integer getCode() Obtain Status value
 * @method void setCode(integer $Code) Set Status value
 * @method integer getCostTime() Obtain Execution duration
 * @method void setCostTime(integer $CostTime) Set Execution duration
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getWorkId() Obtain Backend task ID
 * @method void setWorkId(string $WorkId) Set Backend task ID
 * @method string getFileName() Obtain Name of the file to be imported
 * @method void setFileName(string $FileName) Set Name of the file to be imported
 * @method integer getProcess() Obtain Execution progress
 * @method void setProcess(integer $Process) Set Execution progress
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getFileSize() Obtain File size
 * @method void setFileSize(string $FileSize) Set File size
 * @method string getMessage() Obtain Task execution information
 * @method void setMessage(string $Message) Set Task execution information
 * @method integer getJobId() Obtain Task ID
 * @method void setJobId(integer $JobId) Set Task ID
 * @method string getDbName() Obtain Name of the table to be imported
 * @method void setDbName(string $DbName) Set Name of the table to be imported
 * @method string getAsyncRequestId() Obtain Async task request ID
 * @method void setAsyncRequestId(string $AsyncRequestId) Set Async task request ID
 */
class ImportRecord extends AbstractModel
{
    /**
     * @var integer Status value
     */
    public $Status;

    /**
     * @var integer Status value
     */
    public $Code;

    /**
     * @var integer Execution duration
     */
    public $CostTime;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Backend task ID
     */
    public $WorkId;

    /**
     * @var string Name of the file to be imported
     */
    public $FileName;

    /**
     * @var integer Execution progress
     */
    public $Process;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string File size
     */
    public $FileSize;

    /**
     * @var string Task execution information
     */
    public $Message;

    /**
     * @var integer Task ID
     */
    public $JobId;

    /**
     * @var string Name of the table to be imported
     */
    public $DbName;

    /**
     * @var string Async task request ID
     */
    public $AsyncRequestId;

    /**
     * @param integer $Status Status value
     * @param integer $Code Status value
     * @param integer $CostTime Execution duration
     * @param string $InstanceId Instance ID
     * @param string $WorkId Backend task ID
     * @param string $FileName Name of the file to be imported
     * @param integer $Process Execution progress
     * @param string $CreateTime Task creation time
     * @param string $FileSize File size
     * @param string $Message Task execution information
     * @param integer $JobId Task ID
     * @param string $DbName Name of the table to be imported
     * @param string $AsyncRequestId Async task request ID
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }
    }
}
