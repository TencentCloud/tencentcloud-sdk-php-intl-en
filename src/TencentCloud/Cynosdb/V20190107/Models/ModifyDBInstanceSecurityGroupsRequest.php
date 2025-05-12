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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Network group id (starting with the cynosdbmysql-grp- prefix) or cluster id.
 * @method void setInstanceId(string $InstanceId) Set Network group id (starting with the cynosdbmysql-grp- prefix) or cluster id.
 * @method array getSecurityGroupIds() Obtain List of IDs of security groups to be modified, which is an array of one or more security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of IDs of security groups to be modified, which is an array of one or more security group IDs.
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Network group id (starting with the cynosdbmysql-grp- prefix) or cluster id.
     */
    public $InstanceId;

    /**
     * @var array List of IDs of security groups to be modified, which is an array of one or more security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @param string $InstanceId Network group id (starting with the cynosdbmysql-grp- prefix) or cluster id.
     * @param array $SecurityGroupIds List of IDs of security groups to be modified, which is an array of one or more security group IDs.
     * @param string $Zone AZ
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
