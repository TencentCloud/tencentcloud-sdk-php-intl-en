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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesAttributes request structure.
 *
 * @method array getAttributes() Obtain Instance attributes to be obtained. Valid value(s): 
UserData: Custom data of instances.
 * @method void setAttributes(array $Attributes) Set Instance attributes to be obtained. Valid value(s): 
UserData: Custom data of instances.
 * @method array getInstanceIds() Obtain Instance ID list.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list.
 */
class DescribeInstancesAttributesRequest extends AbstractModel
{
    /**
     * @var array Instance attributes to be obtained. Valid value(s): 
UserData: Custom data of instances.
     */
    public $Attributes;

    /**
     * @var array Instance ID list.
     */
    public $InstanceIds;

    /**
     * @param array $Attributes Instance attributes to be obtained. Valid value(s): 
UserData: Custom data of instances.
     * @param array $InstanceIds Instance ID list.
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
