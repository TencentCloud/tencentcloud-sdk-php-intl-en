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
 * Slow log details
 *
 * @method integer getDuration() Obtain Slow log duration
 * @method void setDuration(integer $Duration) Set Slow log duration
 * @method string getClient() Obtain Client address
 * @method void setClient(string $Client) Set Client address
 * @method string getCommand() Obtain Command
 * @method void setCommand(string $Command) Set Command
 * @method string getCommandLine() Obtain Command line details
 * @method void setCommandLine(string $CommandLine) Set Command line details
 * @method string getExecuteTime() Obtain Execution duration
 * @method void setExecuteTime(string $ExecuteTime) Set Execution duration
 * @method string getNode() Obtain Node ID
 * @method void setNode(string $Node) Set Node ID
 */
class InstanceSlowlogDetail extends AbstractModel
{
    /**
     * @var integer Slow log duration
     */
    public $Duration;

    /**
     * @var string Client address
     */
    public $Client;

    /**
     * @var string Command
     */
    public $Command;

    /**
     * @var string Command line details
     */
    public $CommandLine;

    /**
     * @var string Execution duration
     */
    public $ExecuteTime;

    /**
     * @var string Node ID
     */
    public $Node;

    /**
     * @param integer $Duration Slow log duration
     * @param string $Client Client address
     * @param string $Command Command
     * @param string $CommandLine Command line details
     * @param string $ExecuteTime Execution duration
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Client",$param) and $param["Client"] !== null) {
            $this->Client = $param["Client"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("CommandLine",$param) and $param["CommandLine"] !== null) {
            $this->CommandLine = $param["CommandLine"];
        }

        if (array_key_exists("ExecuteTime",$param) and $param["ExecuteTime"] !== null) {
            $this->ExecuteTime = $param["ExecuteTime"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }
    }
}
