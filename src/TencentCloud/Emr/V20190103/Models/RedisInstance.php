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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis instance information.
 *
 * @method string getId() Obtain Redis instance ID.
 * @method void setId(string $Id) Set Redis instance ID.
 * @method string getHost() Obtain Instance IP address.
 * @method void setHost(string $Host) Set Instance IP address.
 * @method integer getPort() Obtain Instance port.
 * @method void setPort(integer $Port) Set Instance port.
 */
class RedisInstance extends AbstractModel
{
    /**
     * @var string Redis instance ID.
     */
    public $Id;

    /**
     * @var string Instance IP address.
     */
    public $Host;

    /**
     * @var integer Instance port.
     */
    public $Port;

    /**
     * @param string $Id Redis instance ID.
     * @param string $Host Instance IP address.
     * @param integer $Port Instance port.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
