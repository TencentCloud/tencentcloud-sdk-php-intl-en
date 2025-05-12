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
 * DescribeDBSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Specifies that the instance ID must be provided by selecting either InstanceId or InstanceGroupId.
 * @method void setInstanceId(string $InstanceId) Set Specifies that the instance ID must be provided by selecting either InstanceId or InstanceGroupId.
 * @method string getInstanceGroupId() Obtain Specifies that the instance group ID must be provided by selecting either InstanceId or InstanceGroupId.
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Specifies that the instance group ID must be provided by selecting either InstanceId or InstanceGroupId.
 */
class DescribeDBSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Specifies that the instance ID must be provided by selecting either InstanceId or InstanceGroupId.
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var string Specifies that the instance group ID must be provided by selecting either InstanceId or InstanceGroupId.
     */
    public $InstanceGroupId;

    /**
     * @param string $InstanceId Specifies that the instance ID must be provided by selecting either InstanceId or InstanceGroupId.
     * @param string $InstanceGroupId Specifies that the instance group ID must be provided by selecting either InstanceId or InstanceGroupId.
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

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }
    }
}
