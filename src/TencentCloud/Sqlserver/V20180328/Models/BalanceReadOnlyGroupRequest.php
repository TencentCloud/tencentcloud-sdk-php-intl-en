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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BalanceReadOnlyGroup request structure.
 *
 * @method string getInstanceId() Obtain Primary instance ID, in the format of mssql-3l3fgqn7.
 * @method void setInstanceId(string $InstanceId) Set Primary instance ID, in the format of mssql-3l3fgqn7.
 * @method string getReadOnlyGroupId() Obtain Read-only group ID, in the format of mssqlrg-dj5i29c5n.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set Read-only group ID, in the format of mssqlrg-dj5i29c5n.
 */
class BalanceReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID, in the format of mssql-3l3fgqn7.
     */
    public $InstanceId;

    /**
     * @var string Read-only group ID, in the format of mssqlrg-dj5i29c5n.
     */
    public $ReadOnlyGroupId;

    /**
     * @param string $InstanceId Primary instance ID, in the format of mssql-3l3fgqn7.
     * @param string $ReadOnlyGroupId Read-only group ID, in the format of mssqlrg-dj5i29c5n.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}
