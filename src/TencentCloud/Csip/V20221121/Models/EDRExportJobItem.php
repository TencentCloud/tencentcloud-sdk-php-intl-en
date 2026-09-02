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
 * EDR task list
 *
 * @method string getJobId() Obtain <p>Task ID.</p>
 * @method void setJobId(string $JobId) Set <p>Task ID.</p>
 * @method string getJobName() Obtain <p>Task name</p>
 * @method void setJobName(string $JobName) Set <p>Task name</p>
 * @method string getSource() Obtain <p>Data source</p>
 * @method void setSource(string $Source) Set <p>Data source</p>
 * @method string getExportStatus() Obtain <p>Export status.</p>
 * @method void setExportStatus(string $ExportStatus) Set <p>Export status.</p>
 * @method integer getExportProgress() Obtain <p>Export progress</p>
 * @method void setExportProgress(integer $ExportProgress) Set <p>Export progress</p>
 * @method string getFailureMsg() Obtain <p>Description of failure</p>
 * @method void setFailureMsg(string $FailureMsg) Set <p>Description of failure</p>
 * @method string getTimeout() Obtain <p>Timeout period.</p>
 * @method void setTimeout(string $Timeout) Set <p>Timeout period.</p>
 * @method string getInsertTime() Obtain <p>Insertion time.</p>
 * @method void setInsertTime(string $InsertTime) Set <p>Insertion time.</p>
 */
class EDRExportJobItem extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $JobId;

    /**
     * @var string <p>Task name</p>
     */
    public $JobName;

    /**
     * @var string <p>Data source</p>
     */
    public $Source;

    /**
     * @var string <p>Export status.</p>
     */
    public $ExportStatus;

    /**
     * @var integer <p>Export progress</p>
     */
    public $ExportProgress;

    /**
     * @var string <p>Description of failure</p>
     */
    public $FailureMsg;

    /**
     * @var string <p>Timeout period.</p>
     */
    public $Timeout;

    /**
     * @var string <p>Insertion time.</p>
     */
    public $InsertTime;

    /**
     * @param string $JobId <p>Task ID.</p>
     * @param string $JobName <p>Task name</p>
     * @param string $Source <p>Data source</p>
     * @param string $ExportStatus <p>Export status.</p>
     * @param integer $ExportProgress <p>Export progress</p>
     * @param string $FailureMsg <p>Description of failure</p>
     * @param string $Timeout <p>Timeout period.</p>
     * @param string $InsertTime <p>Insertion time.</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
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
