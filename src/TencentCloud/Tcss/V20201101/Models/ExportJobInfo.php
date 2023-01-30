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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Export job details
 *
 * @method string getJobID() Obtain Job ID
 * @method void setJobID(string $JobID) Set Job ID
 * @method string getJobName() Obtain Job name
 * @method void setJobName(string $JobName) Set Job name
 * @method string getSource() Obtain Source
 * @method void setSource(string $Source) Set Source
 * @method string getExportStatus() Obtain Export status
 * @method void setExportStatus(string $ExportStatus) Set Export status
 * @method integer getExportProgress() Obtain Export progress
 * @method void setExportProgress(integer $ExportProgress) Set Export progress
 * @method string getFailureMsg() Obtain Reason for failure
 * @method void setFailureMsg(string $FailureMsg) Set Reason for failure
 * @method string getTimeout() Obtain Timeout threshold
 * @method void setTimeout(string $Timeout) Set Timeout threshold
 * @method string getInsertTime() Obtain Insertion time
 * @method void setInsertTime(string $InsertTime) Set Insertion time
 */
class ExportJobInfo extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobID;

    /**
     * @var string Job name
     */
    public $JobName;

    /**
     * @var string Source
     */
    public $Source;

    /**
     * @var string Export status
     */
    public $ExportStatus;

    /**
     * @var integer Export progress
     */
    public $ExportProgress;

    /**
     * @var string Reason for failure
     */
    public $FailureMsg;

    /**
     * @var string Timeout threshold
     */
    public $Timeout;

    /**
     * @var string Insertion time
     */
    public $InsertTime;

    /**
     * @param string $JobID Job ID
     * @param string $JobName Job name
     * @param string $Source Source
     * @param string $ExportStatus Export status
     * @param integer $ExportProgress Export progress
     * @param string $FailureMsg Reason for failure
     * @param string $Timeout Timeout threshold
     * @param string $InsertTime Insertion time
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

        if (array_key_exists("ExportStatus",$param) and $param["ExportStatus"] !== null) {
            $this->ExportStatus = $param["ExportStatus"];
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
