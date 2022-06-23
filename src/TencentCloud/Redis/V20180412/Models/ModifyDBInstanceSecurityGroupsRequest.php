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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb, etc.
 * @method void setProduct(string $Product) Set Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb, etc.
 * @method array getSecurityGroupIds() Obtain The ID list of the security groups to be modified, which is an array of one or more security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The ID list of the security groups to be modified, which is an array of one or more security group IDs.
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB Console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB Console.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb, etc.
     */
    public $Product;

    /**
     * @var array The ID list of the security groups to be modified, which is an array of one or more security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB Console.
     */
    public $InstanceId;

    /**
     * @param string $Product Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb, etc.
     * @param array $SecurityGroupIds The ID list of the security groups to be modified, which is an array of one or more security group IDs.
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB Console.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
