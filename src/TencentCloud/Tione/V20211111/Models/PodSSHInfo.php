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
 * Information about Pod access over SSH.
 *
 * @method string getHost() Obtain IP address of the Pod.
 * @method void setHost(string $Host) Set IP address of the Pod.
 * @method integer getPort() Obtain SSH port of the Pod.
 * @method void setPort(integer $Port) Set SSH port of the Pod.
 * @method string getLoginCommand() Obtain SSH access command.
 * @method void setLoginCommand(string $LoginCommand) Set SSH access command.
 */
class PodSSHInfo extends AbstractModel
{
    /**
     * @var string IP address of the Pod.
     */
    public $Host;

    /**
     * @var integer SSH port of the Pod.
     */
    public $Port;

    /**
     * @var string SSH access command.
     */
    public $LoginCommand;

    /**
     * @param string $Host IP address of the Pod.
     * @param integer $Port SSH port of the Pod.
     * @param string $LoginCommand SSH access command.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LoginCommand",$param) and $param["LoginCommand"] !== null) {
            $this->LoginCommand = $param["LoginCommand"];
        }
    }
}
