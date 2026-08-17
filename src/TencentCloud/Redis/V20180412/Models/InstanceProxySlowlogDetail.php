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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy slow query details
 *
 * @method integer getDuration() Obtain <p>Slow query duration. Measurement unit: ms.</p>
 * @method void setDuration(integer $Duration) Set <p>Slow query duration. Measurement unit: ms.</p>
 * @method string getClient() Obtain <p>Client address.</p>
 * @method void setClient(string $Client) Set <p>Client address.</p>
 * @method string getCommand() Obtain <p>Slow query command.</p>
 * @method void setCommand(string $Command) Set <p>Slow query command.</p>
 * @method string getCommandLine() Obtain <p>Slow query command line information.</p>
 * @method void setCommandLine(string $CommandLine) Set <p>Slow query command line information.</p>
 * @method string getExecuteTime() Obtain <p>Execution time.</p>
 * @method void setExecuteTime(string $ExecuteTime) Set <p>Execution time.</p>
 * @method integer getRecvClientEnd() Obtain <p>Duration of receiving client requests (ms)</p>
 * @method void setRecvClientEnd(integer $RecvClientEnd) Set <p>Duration of receiving client requests (ms)</p>
 * @method integer getSendClientEnd() Obtain <p>Duration of sending client requests (ms)</p>
 * @method void setSendClientEnd(integer $SendClientEnd) Set <p>Duration of sending client requests (ms)</p>
 * @method string getNode() Obtain <p>Proxy node ID.</p>
 * @method void setNode(string $Node) Set <p>Proxy node ID.</p>
 */
class InstanceProxySlowlogDetail extends AbstractModel
{
    /**
     * @var integer <p>Slow query duration. Measurement unit: ms.</p>
     */
    public $Duration;

    /**
     * @var string <p>Client address.</p>
     */
    public $Client;

    /**
     * @var string <p>Slow query command.</p>
     */
    public $Command;

    /**
     * @var string <p>Slow query command line information.</p>
     */
    public $CommandLine;

    /**
     * @var string <p>Execution time.</p>
     */
    public $ExecuteTime;

    /**
     * @var integer <p>Duration of receiving client requests (ms)</p>
     */
    public $RecvClientEnd;

    /**
     * @var integer <p>Duration of sending client requests (ms)</p>
     */
    public $SendClientEnd;

    /**
     * @var string <p>Proxy node ID.</p>
     */
    public $Node;

    /**
     * @param integer $Duration <p>Slow query duration. Measurement unit: ms.</p>
     * @param string $Client <p>Client address.</p>
     * @param string $Command <p>Slow query command.</p>
     * @param string $CommandLine <p>Slow query command line information.</p>
     * @param string $ExecuteTime <p>Execution time.</p>
     * @param integer $RecvClientEnd <p>Duration of receiving client requests (ms)</p>
     * @param integer $SendClientEnd <p>Duration of sending client requests (ms)</p>
     * @param string $Node <p>Proxy node ID.</p>
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

        if (array_key_exists("RecvClientEnd",$param) and $param["RecvClientEnd"] !== null) {
            $this->RecvClientEnd = $param["RecvClientEnd"];
        }

        if (array_key_exists("SendClientEnd",$param) and $param["SendClientEnd"] !== null) {
            $this->SendClientEnd = $param["SendClientEnd"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }
    }
}
