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
 * OpenSSL request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Required when the read-only group ID is empty. Can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Required when the read-only group ID is empty. Can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getRoGroupId() Obtain Read-only group ID. Required when the instance ID is empty. Can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/api/236/40939?from_cn_redirect=1) API.
 * @method void setRoGroupId(string $RoGroupId) Set Read-only group ID. Required when the instance ID is empty. Can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/api/236/40939?from_cn_redirect=1) API.
 */
class OpenSSLRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Required when the read-only group ID is empty. Can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Read-only group ID. Required when the instance ID is empty. Can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/api/236/40939?from_cn_redirect=1) API.
     */
    public $RoGroupId;

    /**
     * @param string $InstanceId Instance ID. Required when the read-only group ID is empty. Can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $RoGroupId Read-only group ID. Required when the instance ID is empty. Can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/api/236/40939?from_cn_redirect=1) API.
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

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }
    }
}
