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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The RTP destination address of the output to create.
 *
 * @method string getIp() Obtain The relay destination IP.
 * @method void setIp(string $Ip) Set The relay destination IP.
 * @method integer getPort() Obtain The relay destination port.
 * @method void setPort(integer $Port) Set The relay destination port.
 */
class CreateOutputRTPSettingsDestinations extends AbstractModel
{
    /**
     * @var string The relay destination IP.
     */
    public $Ip;

    /**
     * @var integer The relay destination port.
     */
    public $Port;

    /**
     * @param string $Ip The relay destination IP.
     * @param integer $Port The relay destination port.
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
