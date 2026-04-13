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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSSLConfig request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method boolean getSSLEnabled() Obtain Turn on or off SSL. true - turn on; false - turn off.
 * @method void setSSLEnabled(boolean $SSLEnabled) Set Turn on or off SSL. true - turn on; false - turn off.
 * @method string getConnectAddress() Obtain The unique connection address protected by an SSL certificate. for a primary instance, it can be set to private and public IP addresses. for a read-only instance, it can be set to the instance IP or read-only group IP. this parameter is required when enabling SSL or modifying the SSL-protected connection address. it will be ignored when disabling SSL.
 * @method void setConnectAddress(string $ConnectAddress) Set The unique connection address protected by an SSL certificate. for a primary instance, it can be set to private and public IP addresses. for a read-only instance, it can be set to the instance IP or read-only group IP. this parameter is required when enabling SSL or modifying the SSL-protected connection address. it will be ignored when disabling SSL.
 */
class ModifyDBInstanceSSLConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var boolean Turn on or off SSL. true - turn on; false - turn off.
     */
    public $SSLEnabled;

    /**
     * @var string The unique connection address protected by an SSL certificate. for a primary instance, it can be set to private and public IP addresses. for a read-only instance, it can be set to the instance IP or read-only group IP. this parameter is required when enabling SSL or modifying the SSL-protected connection address. it will be ignored when disabling SSL.
     */
    public $ConnectAddress;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param boolean $SSLEnabled Turn on or off SSL. true - turn on; false - turn off.
     * @param string $ConnectAddress The unique connection address protected by an SSL certificate. for a primary instance, it can be set to private and public IP addresses. for a read-only instance, it can be set to the instance IP or read-only group IP. this parameter is required when enabling SSL or modifying the SSL-protected connection address. it will be ignored when disabling SSL.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SSLEnabled",$param) and $param["SSLEnabled"] !== null) {
            $this->SSLEnabled = $param["SSLEnabled"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }
    }
}
