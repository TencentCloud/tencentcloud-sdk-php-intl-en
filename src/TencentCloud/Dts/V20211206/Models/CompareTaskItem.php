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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the data consistency check object
 *
 * @method string getJobId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCompareTaskId() Obtain Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareTaskId(string $CompareTaskId) Set Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Data consistency check task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Data consistency check task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CompareObject getConfig() Obtain Data consistency check task configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(CompareObject $Config) Set Data consistency check task configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessProgress getCheckProcess() Obtain Check details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckProcess(ProcessProgress $CheckProcess) Set Check details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessProgress getCompareProcess() Obtain Running details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareProcess(ProcessProgress $CompareProcess) Set Running details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConclusion() Obtain Comparison result. Valid values: `same`, `different`, `skipAll`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConclusion(string $Conclusion) Set Comparison result. Valid values: `same`, `different`, `skipAll`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartedAt() Obtain Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartedAt(string $StartedAt) Set Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFinishedAt() Obtain Comparison end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFinishedAt(string $FinishedAt) Set Comparison end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain Comparison type: (`dataCheck`: Full data comparison; `sampleDataCheck`: Sampling data comparison; `rowsCount`: Row count comparison)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set Comparison type: (`dataCheck`: Full data comparison; `sampleDataCheck`: Sampling data comparison; `rowsCount`: Row count comparison)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CompareOptions getOptions() Obtain Configuration information of the comparison task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptions(CompareOptions $Options) Set Configuration information of the comparison task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Consistency check prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Consistency check prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareTaskItem extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareTaskId;

    /**
     * @var string Data consistency check task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var CompareObject Data consistency check task configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Config;

    /**
     * @var ProcessProgress Check details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckProcess;

    /**
     * @var ProcessProgress Running details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareProcess;

    /**
     * @var string Comparison result. Valid values: `same`, `different`, `skipAll`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Conclusion;

    /**
     * @var string Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartedAt;

    /**
     * @var string Comparison end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FinishedAt;

    /**
     * @var string Comparison type: (`dataCheck`: Full data comparison; `sampleDataCheck`: Sampling data comparison; `rowsCount`: Row count comparison)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var CompareOptions Configuration information of the comparison task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Options;

    /**
     * @var string Consistency check prompt message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param string $JobId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CompareTaskId Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Data consistency check task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CompareObject $Config Data consistency check task configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessProgress $CheckProcess Check details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessProgress $CompareProcess Running details of the data consistency check task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Conclusion Comparison result. Valid values: `same`, `different`, `skipAll`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartedAt Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FinishedAt Comparison end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Method Comparison type: (`dataCheck`: Full data comparison; `sampleDataCheck`: Sampling data comparison; `rowsCount`: Row count comparison)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CompareOptions $Options Configuration information of the comparison task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Consistency check prompt message
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CompareObject();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CheckProcess",$param) and $param["CheckProcess"] !== null) {
            $this->CheckProcess = new ProcessProgress();
            $this->CheckProcess->deserialize($param["CheckProcess"]);
        }

        if (array_key_exists("CompareProcess",$param) and $param["CompareProcess"] !== null) {
            $this->CompareProcess = new ProcessProgress();
            $this->CompareProcess->deserialize($param["CompareProcess"]);
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
