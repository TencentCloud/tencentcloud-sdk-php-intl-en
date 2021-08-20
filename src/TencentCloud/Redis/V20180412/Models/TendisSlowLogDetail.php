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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tendis slow query details
 *
 * @method string getExecuteTime() Obtain Execution time
 * @method void setExecuteTime(string $ExecuteTime) Set Execution time
 * @method integer getDuration() Obtain Duration of the slow query (ms)
 * @method void setDuration(integer $Duration) Set Duration of the slow query (ms)
 * @method string getCommand() Obtain Command
 * @method void setCommand(string $Command) Set Command
 * @method string getCommandLine() Obtain Command line details
 * @method void setCommandLine(string $CommandLine) Set Command line details
 * @method string getNode() Obtain Node ID
 * @method void setNode(string $Node) Set Node ID
 */
class TendisSlowLogDetail extends AbstractModel
{
    /**
     * @var string Execution time
     */
    public $ExecuteTime;

    /**
     * @var integer Duration of the slow query (ms)
     */
    public $Duration;

    /**
     * @var string Command
     */
    public $Command;

    /**
     * @var string Command line details
     */
    public $CommandLine;

    /**
     * @var string Node ID
     */
    public $Node;

    /**
     * @param string $ExecuteTime Execution time
     * @param integer $Duration Duration of the slow query (ms)
     * @param string $Command Command
     * @param string $CommandLine Command line details
     * @param string $Node Node ID
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
        if (array_key_exists("ExecuteTime",$param) and $param["ExecuteTime"] !== null) {
            $this->ExecuteTime = $param["ExecuteTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("CommandLine",$param) and $param["CommandLine"] !== null) {
            $this->CommandLine = $param["CommandLine"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }
    }
}
