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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Connection pool information
 *
 * @method boolean getConnectionPool() Obtain Whether the connection pool is enabled
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setConnectionPool(boolean $ConnectionPool) Set Whether the connection pool is enabled
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getConnectionPoolType() Obtain Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getPoolConnectionTimeOut() Obtain Connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setPoolConnectionTimeOut(integer $PoolConnectionTimeOut) Set Connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 */
class ConnectionPoolInfo extends AbstractModel
{
    /**
     * @var boolean Whether the connection pool is enabled
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ConnectionPool;

    /**
     * @var string Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ConnectionPoolType;

    /**
     * @var integer Connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $PoolConnectionTimeOut;

    /**
     * @param boolean $ConnectionPool Whether the connection pool is enabled
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $ConnectionPoolType Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $PoolConnectionTimeOut Connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("PoolConnectionTimeOut",$param) and $param["PoolConnectionTimeOut"] !== null) {
            $this->PoolConnectionTimeOut = $param["PoolConnectionTimeOut"];
        }
    }
}
