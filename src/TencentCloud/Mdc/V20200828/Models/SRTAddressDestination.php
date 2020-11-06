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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Push destination address information.
 *
 * @method string getIp() Obtain Destination address IP.
 * @method void setIp(string $Ip) Set Destination address IP.
 * @method integer getPort() Obtain Destination address port.
 * @method void setPort(integer $Port) Set Destination address port.
 */
class SRTAddressDestination extends AbstractModel
{
    /**
     * @var string Destination address IP.
     */
    public $Ip;

    /**
     * @var integer Destination address port.
     */
    public $Port;

    /**
     * @param string $Ip Destination address IP.
     * @param integer $Port Destination address port.
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
