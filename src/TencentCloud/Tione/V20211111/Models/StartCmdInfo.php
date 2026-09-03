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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Startup command information.
 *
 * @method string getStartCmd() Obtain Startup command.
 * @method void setStartCmd(string $StartCmd) Set Startup command.
 * @method string getPsStartCmd() Obtain Startup command for ps nodes.
 * @method void setPsStartCmd(string $PsStartCmd) Set Startup command for ps nodes.
 * @method string getWorkerStartCmd() Obtain Startup command for Worker nodes.
 * @method void setWorkerStartCmd(string $WorkerStartCmd) Set Startup command for Worker nodes.
 */
class StartCmdInfo extends AbstractModel
{
    /**
     * @var string Startup command.
     */
    public $StartCmd;

    /**
     * @var string Startup command for ps nodes.
     */
    public $PsStartCmd;

    /**
     * @var string Startup command for Worker nodes.
     */
    public $WorkerStartCmd;

    /**
     * @param string $StartCmd Startup command.
     * @param string $PsStartCmd Startup command for ps nodes.
     * @param string $WorkerStartCmd Startup command for Worker nodes.
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
        if (array_key_exists("StartCmd",$param) and $param["StartCmd"] !== null) {
            $this->StartCmd = $param["StartCmd"];
        }

        if (array_key_exists("PsStartCmd",$param) and $param["PsStartCmd"] !== null) {
            $this->PsStartCmd = $param["PsStartCmd"];
        }

        if (array_key_exists("WorkerStartCmd",$param) and $param["WorkerStartCmd"] !== null) {
            $this->WorkerStartCmd = $param["WorkerStartCmd"];
        }
    }
}
