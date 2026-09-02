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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Export task info
 *
 * @method string getJobID() Obtain Task ID.
 * @method void setJobID(string $JobID) Set Task ID.
 * @method string getJobName() Obtain Task name.
 * @method void setJobName(string $JobName) Set Task name.
 * @method string getSource() Obtain Task source.
 * @method void setSource(string $Source) Set Task source.
 * @method string getExportJobStatus() Obtain Task status.
 * @method void setExportJobStatus(string $ExportJobStatus) Set Task status.
 * @method integer getExportProgress() Obtain Task progress
 * @method void setExportProgress(integer $ExportProgress) Set Task progress
 * @method string getFailureMsg() Obtain Error message
 * @method void setFailureMsg(string $FailureMsg) Set Error message
 * @method string getTimeout() Obtain Task Timeout Duration
 * @method void setTimeout(string $Timeout) Set Task Timeout Duration
 * @method string getInsertTime() Obtain Task creation time
 * @method void setInsertTime(string $InsertTime) Set Task creation time
 */
class ExportJobItem extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $JobID;

    /**
     * @var string Task name.
     */
    public $JobName;

    /**
     * @var string Task source.
     */
    public $Source;

    /**
     * @var string Task status.
     */
    public $ExportJobStatus;

    /**
     * @var integer Task progress
     */
    public $ExportProgress;

    /**
     * @var string Error message
     */
    public $FailureMsg;

    /**
     * @var string Task Timeout Duration
     */
    public $Timeout;

    /**
     * @var string Task creation time
     */
    public $InsertTime;

    /**
     * @param string $JobID Task ID.
     * @param string $JobName Task name.
     * @param string $Source Task source.
     * @param string $ExportJobStatus Task status.
     * @param integer $ExportProgress Task progress
     * @param string $FailureMsg Error message
     * @param string $Timeout Task Timeout Duration
     * @param string $InsertTime Task creation time
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ExportJobStatus",$param) and $param["ExportJobStatus"] !== null) {
            $this->ExportJobStatus = $param["ExportJobStatus"];
        }

        if (array_key_exists("ExportProgress",$param) and $param["ExportProgress"] !== null) {
            $this->ExportProgress = $param["ExportProgress"];
        }

        if (array_key_exists("FailureMsg",$param) and $param["FailureMsg"] !== null) {
            $this->FailureMsg = $param["FailureMsg"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
