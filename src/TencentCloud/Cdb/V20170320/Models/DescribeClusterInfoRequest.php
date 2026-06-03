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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInfo request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
Description: Only able to input the instance ID of instances with cloud disk architecture, corresponding to console instance configurations displayed as "Cloud Disk Edition (Cloud Disk)".
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
Description: Only able to input the instance ID of instances with cloud disk architecture, corresponding to console instance configurations displayed as "Cloud Disk Edition (Cloud Disk)".
 */
class DescribeClusterInfoRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
Description: Only able to input the instance ID of instances with cloud disk architecture, corresponding to console instance configurations displayed as "Cloud Disk Edition (Cloud Disk)".
     */
    public $InstanceId;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
Description: Only able to input the instance ID of instances with cloud disk architecture, corresponding to console instance configurations displayed as "Cloud Disk Edition (Cloud Disk)".
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
    }
}
