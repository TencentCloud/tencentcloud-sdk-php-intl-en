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
 * DescribeSSLStatus request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for two-node or three-node instances, you need to specify the instance ID parameter. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for two-node or three-node instances, you need to specify the instance ID parameter. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
 * @method string getRoGroupId() Obtain Read-only group ID, which can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/product/236/35704) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for read-only instances or groups, you need to specify the RoGroupId parameter. Note that the value should be the read-only group ID. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
 * @method void setRoGroupId(string $RoGroupId) Set Read-only group ID, which can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/product/236/35704) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for read-only instances or groups, you need to specify the RoGroupId parameter. Note that the value should be the read-only group ID. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
 */
class DescribeSSLStatusRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for two-node or three-node instances, you need to specify the instance ID parameter. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
     */
    public $InstanceId;

    /**
     * @var string Read-only group ID, which can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/product/236/35704) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for read-only instances or groups, you need to specify the RoGroupId parameter. Note that the value should be the read-only group ID. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
     */
    public $RoGroupId;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for two-node or three-node instances, you need to specify the instance ID parameter. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
     * @param string $RoGroupId Read-only group ID, which can be obtained through the [DescribeRoGroups](https://www.tencentcloud.com/document/product/236/35704) API. Note: Either the instance ID or read-only group ID parameter needs to be specified. To query the enabling status of the SSL for read-only instances or groups, you need to specify the RoGroupId parameter. Note that the value should be the read-only group ID. Single-node (cloud disk) and Cluster Edition instances do not support enabling SSL; thus, queries are not supported.
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
