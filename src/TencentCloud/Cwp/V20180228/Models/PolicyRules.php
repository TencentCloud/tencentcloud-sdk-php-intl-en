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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Policy rule expression.
 *
 * @method CommandLine getProcess() Obtain Process
 * @method void setProcess(CommandLine $Process) Set Process
 * @method CommandLine getPProcess() Obtain Parent process
 * @method void setPProcess(CommandLine $PProcess) Set Parent process
 * @method CommandLine getAProcess() Obtain Ancestor process
 * @method void setAProcess(CommandLine $AProcess) Set Ancestor process
 */
class PolicyRules extends AbstractModel
{
    /**
     * @var CommandLine Process
     */
    public $Process;

    /**
     * @var CommandLine Parent process
     */
    public $PProcess;

    /**
     * @var CommandLine Ancestor process
     */
    public $AProcess;

    /**
     * @param CommandLine $Process Process
     * @param CommandLine $PProcess Parent process
     * @param CommandLine $AProcess Ancestor process
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
        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new CommandLine();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("PProcess",$param) and $param["PProcess"] !== null) {
            $this->PProcess = new CommandLine();
            $this->PProcess->deserialize($param["PProcess"]);
        }

        if (array_key_exists("AProcess",$param) and $param["AProcess"] !== null) {
            $this->AProcess = new CommandLine();
            $this->AProcess->deserialize($param["AProcess"]);
        }
    }
}
