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
 * CloseDBExtranetAccess request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-6r233v55
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-6r233v55
 * @method integer getIsIpv6() Obtain Whether to disable public network access over IPv6 address. Valid values: 1 (yes), 0 (no)
 * @method void setIsIpv6(integer $IsIpv6) Set Whether to disable public network access over IPv6 address. Valid values: 1 (yes), 0 (no)
 */
class CloseDBExtranetAccessRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-6r233v55
     */
    public $DBInstanceId;

    /**
     * @var integer Whether to disable public network access over IPv6 address. Valid values: 1 (yes), 0 (no)
     */
    public $IsIpv6;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-6r233v55
     * @param integer $IsIpv6 Whether to disable public network access over IPv6 address. Valid values: 1 (yes), 0 (no)
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
