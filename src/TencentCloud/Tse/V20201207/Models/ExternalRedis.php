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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway traffic throttling plugin external redis configuration
 *
 * @method string getRedisHost() Obtain redis ip
 * @method void setRedisHost(string $RedisHost) Set redis ip
 * @method string getRedisPassword() Obtain redis password
 * @method void setRedisPassword(string $RedisPassword) Set redis password
 * @method integer getRedisPort() Obtain redis port
 * @method void setRedisPort(integer $RedisPort) Set redis port
 * @method integer getRedisTimeout() Obtain Timeout interval. Unit: ms
 * @method void setRedisTimeout(integer $RedisTimeout) Set Timeout interval. Unit: ms
 */
class ExternalRedis extends AbstractModel
{
    /**
     * @var string redis ip
     */
    public $RedisHost;

    /**
     * @var string redis password
     */
    public $RedisPassword;

    /**
     * @var integer redis port
     */
    public $RedisPort;

    /**
     * @var integer Timeout interval. Unit: ms
     */
    public $RedisTimeout;

    /**
     * @param string $RedisHost redis ip
     * @param string $RedisPassword redis password
     * @param integer $RedisPort redis port
     * @param integer $RedisTimeout Timeout interval. Unit: ms
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
        if (array_key_exists("RedisHost",$param) and $param["RedisHost"] !== null) {
            $this->RedisHost = $param["RedisHost"];
        }

        if (array_key_exists("RedisPassword",$param) and $param["RedisPassword"] !== null) {
            $this->RedisPassword = $param["RedisPassword"];
        }

        if (array_key_exists("RedisPort",$param) and $param["RedisPort"] !== null) {
            $this->RedisPort = $param["RedisPort"];
        }

        if (array_key_exists("RedisTimeout",$param) and $param["RedisTimeout"] !== null) {
            $this->RedisTimeout = $param["RedisTimeout"];
        }
    }
}
