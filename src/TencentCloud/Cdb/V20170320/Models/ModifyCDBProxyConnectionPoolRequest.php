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
 * ModifyCDBProxyConnectionPool request structure.
 *
 * @method string getProxyGroupId() Obtain Database proxy ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy ID
 * @method boolean getOpenConnectionPool() Obtain Whether to enable the connection pool. Valid values: `true` (enable);
                             `false` (disable).
 * @method void setOpenConnectionPool(boolean $OpenConnectionPool) Set Whether to enable the connection pool. Valid values: `true` (enable);
                             `false` (disable).
 * @method string getConnectionPoolType() Obtain Connection pool type.
You can use the `DescribeProxyConnectionPoolConf` API to query the connection pool type.
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type.
You can use the `DescribeProxyConnectionPoolConf` API to query the connection pool type.
 * @method integer getPoolConnectionTimeOut() Obtain Connection persistence timeout in seconds
 * @method void setPoolConnectionTimeOut(integer $PoolConnectionTimeOut) Set Connection persistence timeout in seconds
 */
class ModifyCDBProxyConnectionPoolRequest extends AbstractModel
{
    /**
     * @var string Database proxy ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean Whether to enable the connection pool. Valid values: `true` (enable);
                             `false` (disable).
     */
    public $OpenConnectionPool;

    /**
     * @var string Connection pool type.
You can use the `DescribeProxyConnectionPoolConf` API to query the connection pool type.
     */
    public $ConnectionPoolType;

    /**
     * @var integer Connection persistence timeout in seconds
     */
    public $PoolConnectionTimeOut;

    /**
     * @param string $ProxyGroupId Database proxy ID
     * @param boolean $OpenConnectionPool Whether to enable the connection pool. Valid values: `true` (enable);
                             `false` (disable).
     * @param string $ConnectionPoolType Connection pool type.
You can use the `DescribeProxyConnectionPoolConf` API to query the connection pool type.
     * @param integer $PoolConnectionTimeOut Connection persistence timeout in seconds
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("PoolConnectionTimeOut",$param) and $param["PoolConnectionTimeOut"] !== null) {
            $this->PoolConnectionTimeOut = $param["PoolConnectionTimeOut"];
        }
    }
}
