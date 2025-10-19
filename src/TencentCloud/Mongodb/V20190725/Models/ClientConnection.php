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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Client connection information, including client IP and number of connections
 *
 * @method string getIP() Obtain IP address of the connected client.
 * @method void setIP(string $IP) Set IP address of the connected client.
 * @method integer getCount() Obtain Number of connections corresponding to the client IP address.
 * @method void setCount(integer $Count) Set Number of connections corresponding to the client IP address.
 * @method boolean getInternalService() Obtain Whether it is an internal IP address.
 * @method void setInternalService(boolean $InternalService) Set Whether it is an internal IP address.
 */
class ClientConnection extends AbstractModel
{
    /**
     * @var string IP address of the connected client.
     */
    public $IP;

    /**
     * @var integer Number of connections corresponding to the client IP address.
     */
    public $Count;

    /**
     * @var boolean Whether it is an internal IP address.
     */
    public $InternalService;

    /**
     * @param string $IP IP address of the connected client.
     * @param integer $Count Number of connections corresponding to the client IP address.
     * @param boolean $InternalService Whether it is an internal IP address.
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("InternalService",$param) and $param["InternalService"] !== null) {
            $this->InternalService = $param["InternalService"];
        }
    }
}
