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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostgreSQL for Serverless instance network description
 *
 * @method string getAddress() Obtain Address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getIp() Obtain IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getNetType() Obtain Network type
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNetType(string $NetType) Set Network type
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServerlessDBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string Address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var integer Port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Status
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Network type
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NetType;

    /**
     * @param string $Address Address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Ip IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Port Port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Status Status
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $NetType Network type
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}
