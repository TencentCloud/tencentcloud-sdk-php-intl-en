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
 * DescribeDBInstanceSecurityGroups request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. Either this parameter or `ReadOnlyGroupId` must be passed in. If both parameters are passed in, `ReadOnlyGroupId` will be ignored.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. Either this parameter or `ReadOnlyGroupId` must be passed in. If both parameters are passed in, `ReadOnlyGroupId` will be ignored.
 * @method string getReadOnlyGroupId() Obtain RO group ID. Either this parameter or `DBInstanceId` must be passed in. To query the security groups associated with the RO groups, only pass in `ReadOnlyGroupId`.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID. Either this parameter or `DBInstanceId` must be passed in. To query the security groups associated with the RO groups, only pass in `ReadOnlyGroupId`.
 */
class DescribeDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Either this parameter or `ReadOnlyGroupId` must be passed in. If both parameters are passed in, `ReadOnlyGroupId` will be ignored.
     */
    public $DBInstanceId;

    /**
     * @var string RO group ID. Either this parameter or `DBInstanceId` must be passed in. To query the security groups associated with the RO groups, only pass in `ReadOnlyGroupId`.
     */
    public $ReadOnlyGroupId;

    /**
     * @param string $DBInstanceId Instance ID. Either this parameter or `ReadOnlyGroupId` must be passed in. If both parameters are passed in, `ReadOnlyGroupId` will be ignored.
     * @param string $ReadOnlyGroupId RO group ID. Either this parameter or `DBInstanceId` must be passed in. To query the security groups associated with the RO groups, only pass in `ReadOnlyGroupId`.
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

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}
