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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP Address
 *
 * @method string getType() Obtain Type. Valid values: `advertise`, `public`, and others
 * @method void setType(string $Type) Set Type. Valid values: `advertise`, `public`, and others
 * @method string getIp() Obtain IP Address
 * @method void setIp(string $Ip) Set IP Address
 * @method integer getPort() Obtain Network port
 * @method void setPort(integer $Port) Set Network port
 */
class IPAddress extends AbstractModel
{
    /**
     * @var string Type. Valid values: `advertise`, `public`, and others
     */
    public $Type;

    /**
     * @var string IP Address
     */
    public $Ip;

    /**
     * @var integer Network port
     */
    public $Port;

    /**
     * @param string $Type Type. Valid values: `advertise`, `public`, and others
     * @param string $Ip IP Address
     * @param integer $Port Network port
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
