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
 * Port detection information
 *
 * @method string getHost() Obtain Host address (ip or domain name)
 * @method void setHost(string $Host) Set Host address (ip or domain name)
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method string getUpdateTime() Obtain Last discovery time
 * @method void setUpdateTime(string $UpdateTime) Set Last discovery time
 */
class PortDetectInfo extends AbstractModel
{
    /**
     * @var string Host address (ip or domain name)
     */
    public $Host;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var string Last discovery time
     */
    public $UpdateTime;

    /**
     * @param string $Host Host address (ip or domain name)
     * @param integer $Port Port.
     * @param string $Protocol Protocol
     * @param string $Status Status.
     * @param string $UpdateTime Last discovery time
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
