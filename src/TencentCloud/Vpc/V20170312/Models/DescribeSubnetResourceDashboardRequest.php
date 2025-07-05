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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubnetResourceDashboard request structure.
 *
 * @method array getSubnetIds() Obtain Subnet instance ID, such as `subnet-f1xjkw1b`.
 * @method void setSubnetIds(array $SubnetIds) Set Subnet instance ID, such as `subnet-f1xjkw1b`.
 */
class DescribeSubnetResourceDashboardRequest extends AbstractModel
{
    /**
     * @var array Subnet instance ID, such as `subnet-f1xjkw1b`.
     */
    public $SubnetIds;

    /**
     * @param array $SubnetIds Subnet instance ID, such as `subnet-f1xjkw1b`.
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
