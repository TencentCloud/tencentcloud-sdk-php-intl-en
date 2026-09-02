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
 * Container process information.
 *
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method integer getPID() Obtain Host process ID
 * @method void setPID(integer $PID) Set Host process ID
 * @method integer getContainerPID() Obtain Containerized process ID
 * @method void setContainerPID(integer $ContainerPID) Set Containerized process ID
 * @method string getProcessPath() Obtain Executable file path of the process
 * @method void setProcessPath(string $ProcessPath) Set Executable file path of the process
 * @method string getRunAs() Obtain Process running user
 * @method void setRunAs(string $RunAs) Set Process running user
 * @method string getStartTime() Obtain Process startup time
 * @method void setStartTime(string $StartTime) Set Process startup time
 */
class ContainerProcessItem extends AbstractModel
{
    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var integer Host process ID
     */
    public $PID;

    /**
     * @var integer Containerized process ID
     */
    public $ContainerPID;

    /**
     * @var string Executable file path of the process
     */
    public $ProcessPath;

    /**
     * @var string Process running user
     */
    public $RunAs;

    /**
     * @var string Process startup time
     */
    public $StartTime;

    /**
     * @param string $ProcessName Process name
     * @param integer $PID Host process ID
     * @param integer $ContainerPID Containerized process ID
     * @param string $ProcessPath Executable file path of the process
     * @param string $RunAs Process running user
     * @param string $StartTime Process startup time
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
