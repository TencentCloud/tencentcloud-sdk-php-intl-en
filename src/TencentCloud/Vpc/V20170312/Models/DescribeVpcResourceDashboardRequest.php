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
 * DescribeVpcResourceDashboard request structure.
 *
 * @method array getVpcIds() Obtain Vpc instance ID, e.g. vpc-f1xjkw1b.
 * @method void setVpcIds(array $VpcIds) Set Vpc instance ID, e.g. vpc-f1xjkw1b.
 */
class DescribeVpcResourceDashboardRequest extends AbstractModel
{
    /**
     * @var array Vpc instance ID, e.g. vpc-f1xjkw1b.
     */
    public $VpcIds;

    /**
     * @param array $VpcIds Vpc instance ID, e.g. vpc-f1xjkw1b.
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }
    }
}
