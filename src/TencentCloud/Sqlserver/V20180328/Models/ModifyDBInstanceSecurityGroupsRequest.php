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
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format of mssql-c1nl9rpv or mssqlro-c1nl9rpv, which is the same as that displayed on the cloud database console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of mssql-c1nl9rpv or mssqlro-c1nl9rpv, which is the same as that displayed on the cloud database console page.
 * @method array getSecurityGroupIdSet() Obtain List of security group IDs to be modified, which is an array of one or more security group IDs.
 * @method void setSecurityGroupIdSet(array $SecurityGroupIdSet) Set List of security group IDs to be modified, which is an array of one or more security group IDs.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format of mssql-c1nl9rpv or mssqlro-c1nl9rpv, which is the same as that displayed on the cloud database console page.
     */
    public $InstanceId;

    /**
     * @var array List of security group IDs to be modified, which is an array of one or more security group IDs.
     */
    public $SecurityGroupIdSet;

    /**
     * @param string $InstanceId Instance ID, in the format of mssql-c1nl9rpv or mssqlro-c1nl9rpv, which is the same as that displayed on the cloud database console page.
     * @param array $SecurityGroupIdSet List of security group IDs to be modified, which is an array of one or more security group IDs.
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

        if (array_key_exists("SecurityGroupIdSet",$param) and $param["SecurityGroupIdSet"] !== null) {
            $this->SecurityGroupIdSet = $param["SecurityGroupIdSet"];
        }
    }
}
