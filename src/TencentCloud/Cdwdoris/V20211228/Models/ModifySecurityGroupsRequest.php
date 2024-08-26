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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method array getOldSecurityGroupIds() Obtain Security group information before modification
 * @method void setOldSecurityGroupIds(array $OldSecurityGroupIds) Set Security group information before modification
 * @method array getModifySecurityGroupIds() Obtain Modified security group information
 * @method void setModifySecurityGroupIds(array $ModifySecurityGroupIds) Set Modified security group information
 */
class ModifySecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var array Security group information before modification
     */
    public $OldSecurityGroupIds;

    /**
     * @var array Modified security group information
     */
    public $ModifySecurityGroupIds;

    /**
     * @param string $InstanceId Cluster ID
     * @param array $OldSecurityGroupIds Security group information before modification
     * @param array $ModifySecurityGroupIds Modified security group information
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

        if (array_key_exists("OldSecurityGroupIds",$param) and $param["OldSecurityGroupIds"] !== null) {
            $this->OldSecurityGroupIds = $param["OldSecurityGroupIds"];
        }

        if (array_key_exists("ModifySecurityGroupIds",$param) and $param["ModifySecurityGroupIds"] !== null) {
            $this->ModifySecurityGroupIds = $param["ModifySecurityGroupIds"];
        }
    }
}
