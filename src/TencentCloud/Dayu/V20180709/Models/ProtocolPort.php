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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protocol and port parameters
 *
 * @method string getProtocol() Obtain Protocol (TCP, UDP)
 * @method void setProtocol(string $Protocol) Set Protocol (TCP, UDP)
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 */
class ProtocolPort extends AbstractModel
{
    /**
     * @var string Protocol (TCP, UDP)
     */
    public $Protocol;

    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @param string $Protocol Protocol (TCP, UDP)
     * @param integer $Port Port
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
