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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name. Valid value: `dcdb`.
 * @method void setProduct(string $Product) Set Database engine name. Valid value: `dcdb`.
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method array getInstanceIds() Obtain Instance ID list, which is an array of one or more instance IDs.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list, which is an array of one or more instance IDs.
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name. Valid value: `dcdb`.
     */
    public $Product;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @var array Instance ID list, which is an array of one or more instance IDs.
     */
    public $InstanceIds;

    /**
     * @param string $Product Database engine name. Valid value: `dcdb`.
     * @param string $SecurityGroupId Security group ID
     * @param array $InstanceIds Instance ID list, which is an array of one or more instance IDs.
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

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
