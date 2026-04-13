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
 * OpenDBExtranetAccess request structure.
 *
 * @method string getDBInstanceId() Obtain Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method integer getIsIpv6() Obtain Specifies whether to enable public network Ipv6. valid values: 1 (yes), 0 (no).
Default value: 0
 * @method void setIsIpv6(integer $IsIpv6) Set Specifies whether to enable public network Ipv6. valid values: 1 (yes), 0 (no).
Default value: 0
 */
class OpenDBExtranetAccessRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var integer Specifies whether to enable public network Ipv6. valid values: 1 (yes), 0 (no).
Default value: 0
     */
    public $IsIpv6;

    /**
     * @param string $DBInstanceId Specifies the instance ID, such as postgres-hez4fh0v. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param integer $IsIpv6 Specifies whether to enable public network Ipv6. valid values: 1 (yes), 0 (no).
Default value: 0
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

        if (array_key_exists("IsIpv6",$param) and $param["IsIpv6"] !== null) {
            $this->IsIpv6 = $param["IsIpv6"];
        }
    }
}
