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
 * Connection pool configuration of database proxy
 *
 * @method string getConnectionPoolType() Obtain Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getMaxPoolConnectionTimeOut() Obtain Maximum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setMaxPoolConnectionTimeOut(integer $MaxPoolConnectionTimeOut) Set Maximum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getMinPoolConnectionTimeOut() Obtain Minimum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setMinPoolConnectionTimeOut(integer $MinPoolConnectionTimeOut) Set Minimum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
 */
class PoolConf extends AbstractModel
{
    /**
     * @var string Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ConnectionPoolType;

    /**
     * @var integer Maximum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $MaxPoolConnectionTimeOut;

    /**
     * @var integer Minimum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $MinPoolConnectionTimeOut;

    /**
     * @param string $ConnectionPoolType Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $MaxPoolConnectionTimeOut Maximum value of connection persistence timeout in seconds
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $MinPoolConnectionTimeOut Minimum value of connection persistence timeout in seconds
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
        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("MaxPoolConnectionTimeOut",$param) and $param["MaxPoolConnectionTimeOut"] !== null) {
            $this->MaxPoolConnectionTimeOut = $param["MaxPoolConnectionTimeOut"];
        }

        if (array_key_exists("MinPoolConnectionTimeOut",$param) and $param["MinPoolConnectionTimeOut"] !== null) {
            $this->MinPoolConnectionTimeOut = $param["MinPoolConnectionTimeOut"];
        }
    }
}
