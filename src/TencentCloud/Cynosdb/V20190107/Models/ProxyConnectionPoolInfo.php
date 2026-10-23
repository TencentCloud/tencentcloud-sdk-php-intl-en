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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database proxy connection pool information
 *
 * @method integer getConnectionPoolTimeOut() Obtain Connection pool persistence threshold: measurement unit (seconds)
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set Connection pool persistence threshold: measurement unit (seconds)
 * @method string getOpenConnectionPool() Obtain Whether the connection pool is enabled
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set Whether the connection pool is enabled
 * @method string getConnectionPoolType() Obtain Connection pool type: SessionConnectionPool (session-level connection pool)
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type: SessionConnectionPool (session-level connection pool)
 */
class ProxyConnectionPoolInfo extends AbstractModel
{
    /**
     * @var integer Connection pool persistence threshold: measurement unit (seconds)
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var string Whether the connection pool is enabled
     */
    public $OpenConnectionPool;

    /**
     * @var string Connection pool type: SessionConnectionPool (session-level connection pool)
     */
    public $ConnectionPoolType;

    /**
     * @param integer $ConnectionPoolTimeOut Connection pool persistence threshold: measurement unit (seconds)
     * @param string $OpenConnectionPool Whether the connection pool is enabled
     * @param string $ConnectionPoolType Connection pool type: SessionConnectionPool (session-level connection pool)
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
        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }
    }
}
