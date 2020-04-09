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
 * Access source information
 *
 * @method string getIp() Obtain Source IP
 * @method void setIp(string $Ip) Set Source IP
 * @method integer getConn() Obtain Number of connections
 * @method void setConn(integer $Conn) Set Number of connections
 * @method integer getCmd() Obtain Command
 * @method void setCmd(integer $Cmd) Set Command
 */
class SourceInfo extends AbstractModel
{
    /**
     * @var string Source IP
     */
    public $Ip;

    /**
     * @var integer Number of connections
     */
    public $Conn;

    /**
     * @var integer Command
     */
    public $Cmd;

    /**
     * @param string $Ip Source IP
     * @param integer $Conn Number of connections
     * @param integer $Cmd Command
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Conn",$param) and $param["Conn"] !== null) {
            $this->Conn = $param["Conn"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }
    }
}
