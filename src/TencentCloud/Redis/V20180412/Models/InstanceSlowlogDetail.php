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
 * @method integer getDuration() 获取Slow log duration
 * @method void setDuration(integer $Duration) 设置Slow log duration
 * @method string getClient() 获取Client address
 * @method void setClient(string $Client) 设置Client address
 * @method string getCommand() 获取Command
 * @method void setCommand(string $Command) 设置Command
 * @method string getCommandLine() 获取Command line details
 * @method void setCommandLine(string $CommandLine) 设置Command line details
 * @method string getExecuteTime() 获取Execution duration
 * @method void setExecuteTime(string $ExecuteTime) 设置Execution duration
 */

/**
 *Slow log details
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
     * @param integer $Duration Slow log duration
     * @param string $Client Client address
     * @param string $Command Command
     * @param string $CommandLine Command line details
     * @param string $ExecuteTime Execution duration
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
