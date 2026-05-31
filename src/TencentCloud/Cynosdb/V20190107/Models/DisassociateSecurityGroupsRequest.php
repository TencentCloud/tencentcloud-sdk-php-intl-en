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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups request structure.
 *
 * @method array getInstanceIds() Obtain Array of instance group IDs, starting with the prefix cynosdbmysql-grp- or cluster ID.
Description: To get the instance group ID of a cluster, perform [query cluster instance group](https://www.tencentcloud.com/document/product/1003/103934?from_cn_redirect=1).
 * @method void setInstanceIds(array $InstanceIds) Set Array of instance group IDs, starting with the prefix cynosdbmysql-grp- or cluster ID.
Description: To get the instance group ID of a cluster, perform [query cluster instance group](https://www.tencentcloud.com/document/product/1003/103934?from_cn_redirect=1).
 * @method array getSecurityGroupIds() Obtain Security group ID list to modify. An array of one or more security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID list to modify. An array of one or more security group IDs.
 * @method string getZone() Obtain Availability zone.
Description: Please enter the primary AZ of the cluster location correctly. If you enter a non-primary AZ of the cluster location, the call may display success but the actual execution will fail.
 * @method void setZone(string $Zone) Set Availability zone.
Description: Please enter the primary AZ of the cluster location correctly. If you enter a non-primary AZ of the cluster location, the call may display success but the actual execution will fail.
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array Array of instance group IDs, starting with the prefix cynosdbmysql-grp- or cluster ID.
Description: To get the instance group ID of a cluster, perform [query cluster instance group](https://www.tencentcloud.com/document/product/1003/103934?from_cn_redirect=1).
     */
    public $InstanceIds;

    /**
     * @var array Security group ID list to modify. An array of one or more security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var string Availability zone.
Description: Please enter the primary AZ of the cluster location correctly. If you enter a non-primary AZ of the cluster location, the call may display success but the actual execution will fail.
     */
    public $Zone;

    /**
     * @param array $InstanceIds Array of instance group IDs, starting with the prefix cynosdbmysql-grp- or cluster ID.
Description: To get the instance group ID of a cluster, perform [query cluster instance group](https://www.tencentcloud.com/document/product/1003/103934?from_cn_redirect=1).
     * @param array $SecurityGroupIds Security group ID list to modify. An array of one or more security group IDs.
     * @param string $Zone Availability zone.
Description: Please enter the primary AZ of the cluster location correctly. If you enter a non-primary AZ of the cluster location, the call may display success but the actual execution will fail.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
