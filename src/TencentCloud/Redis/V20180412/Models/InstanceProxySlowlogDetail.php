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
 * Proxy slow query details
 *
 * @method integer getDuration() Obtain Slow query duration in milliseconds
 * @method void setDuration(integer $Duration) Set Slow query duration in milliseconds
 * @method string getClient() Obtain Client address
 * @method void setClient(string $Client) Set Client address
 * @method string getCommand() Obtain Slow query command
 * @method void setCommand(string $Command) Set Slow query command
 * @method string getCommandLine() Obtain Detailed command line information of slow query
 * @method void setCommandLine(string $CommandLine) Set Detailed command line information of slow query
 * @method string getExecuteTime() Obtain Execution time
 * @method void setExecuteTime(string $ExecuteTime) Set Execution time
 */
class InstanceProxySlowlogDetail extends AbstractModel
{
    /**
     * @var integer Slow query duration in milliseconds
     */
    public $Duration;

    /**
     * @var string Client address
     */
    public $Client;

    /**
     * @var string Slow query command
     */
    public $Command;

    /**
     * @var string Detailed command line information of slow query
     */
    public $CommandLine;

    /**
     * @var string Execution time
     */
    public $ExecuteTime;

    /**
     * @param integer $Duration Slow query duration in milliseconds
     * @param string $Client Client address
     * @param string $Command Slow query command
     * @param string $CommandLine Detailed command line information of slow query
     * @param string $ExecuteTime Execution time
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
    }
}
