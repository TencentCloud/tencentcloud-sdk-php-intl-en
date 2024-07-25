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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Run job details
 *
 * @method string getRunType() Obtain Run type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunType(string $RunType) Set Run type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunId() Obtain Run ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunId(string $RunId) Set Run ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParentId() Obtain Parent layer ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentId(string $ParentId) Set Parent layer ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobId() Obtain Job ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set Job ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCallName() Obtain Job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCallName(string $CallName) Set Job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScatterIndex() Obtain Scatter index
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScatterIndex(string $ScatterIndex) Set Scatter index
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInput() Obtain Input
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInput(string $Input) Set Input
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutput() Obtain Output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(string $Output) Set Output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubmitTime() Obtain Submission time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubmitTime(string $SubmitTime) Set Submission time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCommand() Obtain Command Line
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommand(string $Command) Set Command Line
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuntime() Obtain Runtime
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuntime(string $Runtime) Set Runtime
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPreprocess() Obtain Preprocessing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPreprocess(boolean $Preprocess) Set Preprocessing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPostProcess() Obtain Post-processing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPostProcess(boolean $PostProcess) Set Post-processing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCallCached() Obtain Cache hit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCallCached(boolean $CallCached) Set Cache hit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStdout() Obtain Standard output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStdout(string $Stdout) Set Standard output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStderr() Obtain Error output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStderr(string $Stderr) Set Error output
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMeta() Obtain Other information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMeta(string $Meta) Set Other information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RunMetadata extends AbstractModel
{
    /**
     * @var string Run type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunType;

    /**
     * @var string Run ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunId;

    /**
     * @var string Parent layer ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentId;

    /**
     * @var string Job ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Job name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CallName;

    /**
     * @var string Scatter index
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScatterIndex;

    /**
     * @var string Input
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var string Output
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Submission time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubmitTime;

    /**
     * @var string End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Command Line
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Command;

    /**
     * @var string Runtime
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Runtime;

    /**
     * @var boolean Preprocessing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Preprocess;

    /**
     * @var boolean Post-processing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PostProcess;

    /**
     * @var boolean Cache hit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CallCached;

    /**
     * @var string Standard output
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stdout;

    /**
     * @var string Error output
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stderr;

    /**
     * @var string Other information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Meta;

    /**
     * @param string $RunType Run type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunId Run ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParentId Parent layer ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobId Job ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CallName Job name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScatterIndex Scatter index
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Input Input
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Output Output
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubmitTime Submission time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Command Command Line
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Runtime Runtime
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Preprocess Preprocessing
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $PostProcess Post-processing
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CallCached Cache hit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Stdout Standard output
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Stderr Error output
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Meta Other information
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
        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CallName",$param) and $param["CallName"] !== null) {
            $this->CallName = $param["CallName"];
        }

        if (array_key_exists("ScatterIndex",$param) and $param["ScatterIndex"] !== null) {
            $this->ScatterIndex = $param["ScatterIndex"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Preprocess",$param) and $param["Preprocess"] !== null) {
            $this->Preprocess = $param["Preprocess"];
        }

        if (array_key_exists("PostProcess",$param) and $param["PostProcess"] !== null) {
            $this->PostProcess = $param["PostProcess"];
        }

        if (array_key_exists("CallCached",$param) and $param["CallCached"] !== null) {
            $this->CallCached = $param["CallCached"];
        }

        if (array_key_exists("Stdout",$param) and $param["Stdout"] !== null) {
            $this->Stdout = $param["Stdout"];
        }

        if (array_key_exists("Stderr",$param) and $param["Stderr"] !== null) {
            $this->Stderr = $param["Stderr"];
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }
    }
}
