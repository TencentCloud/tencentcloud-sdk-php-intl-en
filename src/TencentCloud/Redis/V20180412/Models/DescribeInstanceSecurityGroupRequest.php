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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSecurityGroup request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list, with the array length ranging from 0 to 100, for example, ["crs-f2ho5rsz\n"].
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list, with the array length ranging from 0 to 100, for example, ["crs-f2ho5rsz\n"].
 */
class DescribeInstanceSecurityGroupRequest extends AbstractModel
{
    /**
     * @var array Instance ID list, with the array length ranging from 0 to 100, for example, ["crs-f2ho5rsz\n"].
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds Instance ID list, with the array length ranging from 0 to 100, for example, ["crs-f2ho5rsz\n"].
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
    }
}
