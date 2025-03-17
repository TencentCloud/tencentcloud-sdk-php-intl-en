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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Engine task information.
 *
 * @method string getEngineSubmitTime() Obtain Engine submission time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineSubmitTime(string $EngineSubmitTime) Set Engine submission time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeTime() Obtain Engine execution time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeTime(string $EngineExeTime) Set Engine execution time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEngineExeTimes() Obtain Total execution time of the engine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeTimes(integer $EngineExeTimes) Set Total execution time of the engine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCuConsume() Obtain cu consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCuConsume(integer $CuConsume) Set cu consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResourceUsage() Obtain Resource consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceUsage(integer $ResourceUsage) Set Resource consumption.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineName() Obtain Engine name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineName(string $EngineName) Set Engine name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeStatus() Obtain Engine execution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeStatus(string $EngineExeStatus) Set Engine execution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskKind() Obtain Task type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskKind(string $TaskKind) Set Task type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskContent() Obtain Task SQL statement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskContent(string $TaskContent) Set Task SQL statement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInputBytesSum() Obtain Total bytes of data scanning.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputBytesSum(integer $InputBytesSum) Set Total bytes of data scanning.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShuffleReadBytesSum() Obtain Total shuffle read bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) Set Total shuffle read bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShuffleReadRecordsSum() Obtain Total number of shuffle read lines.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) Set Total number of shuffle read lines.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOutputRecordsSum() Obtain Total number of outputs.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) Set Total number of outputs.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOutputBytesSum() Obtain Total output in bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputBytesSum(integer $OutputBytesSum) Set Total output in bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOutputFilesNum() Obtain Number of output files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputFilesNum(integer $OutputFilesNum) Set Number of output files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOutputSmallFilesNum() Obtain Number of small files output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) Set Number of small files output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWaitTime() Obtain Execution wait time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWaitTime(integer $WaitTime) Set Execution wait time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQueryResultTime() Obtain Query result time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueryResultTime(integer $QueryResultTime) Set Query result time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCmdArgs() Obtain Input parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCmdArgs(string $CmdArgs) Set Input parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EngineTaskInfo extends AbstractModel
{
    /**
     * @var string Engine submission time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineSubmitTime;

    /**
     * @var string Engine execution time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeTime;

    /**
     * @var integer Total execution time of the engine.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeTimes;

    /**
     * @var integer cu consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CuConsume;

    /**
     * @var integer Resource consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceUsage;

    /**
     * @var string Engine name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineName;

    /**
     * @var string Engine execution status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeStatus;

    /**
     * @var string Task type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskKind;

    /**
     * @var string Task type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Task SQL statement.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskContent;

    /**
     * @var integer Total bytes of data scanning.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputBytesSum;

    /**
     * @var integer Total shuffle read bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShuffleReadBytesSum;

    /**
     * @var integer Total number of shuffle read lines.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var integer Total number of outputs.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputRecordsSum;

    /**
     * @var integer Total output in bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputBytesSum;

    /**
     * @var integer Number of output files.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputFilesNum;

    /**
     * @var integer Number of small files output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer Execution wait time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WaitTime;

    /**
     * @var integer Query result time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueryResultTime;

    /**
     * @var string Input parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CmdArgs;

    /**
     * @param string $EngineSubmitTime Engine submission time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeTime Engine execution time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EngineExeTimes Total execution time of the engine.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CuConsume cu consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResourceUsage Resource consumption.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineName Engine name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeStatus Engine execution status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskKind Task type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskContent Task SQL statement.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InputBytesSum Total bytes of data scanning.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShuffleReadBytesSum Total shuffle read bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShuffleReadRecordsSum Total number of shuffle read lines.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OutputRecordsSum Total number of outputs.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OutputBytesSum Total output in bytes.
Note: This field may return null, indicating that no valid values can be obtained.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OutputFilesNum Number of output files.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OutputSmallFilesNum Number of small files output.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WaitTime Execution wait time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QueryResultTime Query result time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CmdArgs Input parameters.
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
        if (array_key_exists("EngineSubmitTime",$param) and $param["EngineSubmitTime"] !== null) {
            $this->EngineSubmitTime = $param["EngineSubmitTime"];
        }

        if (array_key_exists("EngineExeTime",$param) and $param["EngineExeTime"] !== null) {
            $this->EngineExeTime = $param["EngineExeTime"];
        }

        if (array_key_exists("EngineExeTimes",$param) and $param["EngineExeTimes"] !== null) {
            $this->EngineExeTimes = $param["EngineExeTimes"];
        }

        if (array_key_exists("CuConsume",$param) and $param["CuConsume"] !== null) {
            $this->CuConsume = $param["CuConsume"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = $param["ResourceUsage"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("TaskKind",$param) and $param["TaskKind"] !== null) {
            $this->TaskKind = $param["TaskKind"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskContent",$param) and $param["TaskContent"] !== null) {
            $this->TaskContent = $param["TaskContent"];
        }

        if (array_key_exists("InputBytesSum",$param) and $param["InputBytesSum"] !== null) {
            $this->InputBytesSum = $param["InputBytesSum"];
        }

        if (array_key_exists("ShuffleReadBytesSum",$param) and $param["ShuffleReadBytesSum"] !== null) {
            $this->ShuffleReadBytesSum = $param["ShuffleReadBytesSum"];
        }

        if (array_key_exists("ShuffleReadRecordsSum",$param) and $param["ShuffleReadRecordsSum"] !== null) {
            $this->ShuffleReadRecordsSum = $param["ShuffleReadRecordsSum"];
        }

        if (array_key_exists("OutputRecordsSum",$param) and $param["OutputRecordsSum"] !== null) {
            $this->OutputRecordsSum = $param["OutputRecordsSum"];
        }

        if (array_key_exists("OutputBytesSum",$param) and $param["OutputBytesSum"] !== null) {
            $this->OutputBytesSum = $param["OutputBytesSum"];
        }

        if (array_key_exists("OutputFilesNum",$param) and $param["OutputFilesNum"] !== null) {
            $this->OutputFilesNum = $param["OutputFilesNum"];
        }

        if (array_key_exists("OutputSmallFilesNum",$param) and $param["OutputSmallFilesNum"] !== null) {
            $this->OutputSmallFilesNum = $param["OutputSmallFilesNum"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("QueryResultTime",$param) and $param["QueryResultTime"] !== null) {
            $this->QueryResultTime = $param["QueryResultTime"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }
    }
}
