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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method array getSecurityGroupIdSet() Obtain Specifies the security group list to bind to the instance or read-only group.
Security group information can be queried by calling the sgId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1).
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method void setSecurityGroupIdSet(array $SecurityGroupIdSet) Set Specifies the security group list to bind to the instance or read-only group.
Security group information can be queried by calling the sgId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1).
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). specify either DBInstanceId or ReadOnlyGroupId. if both are provided, ReadOnlyGroupId is ignored.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). specify either DBInstanceId or ReadOnlyGroupId. if both are provided, ReadOnlyGroupId is ignored.
 * @method string getReadOnlyGroupId() Obtain ReadOnlyGroupId. specifies the read-only group ID, which can be obtained through the api [DescribeReadOnlyGroups](https://www.tencentcloud.com/document/product/409/39725). valid values: DBInstanceId and ReadOnlyGroupId (at least one is required). if you need to modify the associated security group of the read-only group, only ReadOnlyGroupId is required.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set ReadOnlyGroupId. specifies the read-only group ID, which can be obtained through the api [DescribeReadOnlyGroups](https://www.tencentcloud.com/document/product/409/39725). valid values: DBInstanceId and ReadOnlyGroupId (at least one is required). if you need to modify the associated security group of the read-only group, only ReadOnlyGroupId is required.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array Specifies the security group list to bind to the instance or read-only group.
Security group information can be queried by calling the sgId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1).
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     */
    public $SecurityGroupIdSet;

    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). specify either DBInstanceId or ReadOnlyGroupId. if both are provided, ReadOnlyGroupId is ignored.
     */
    public $DBInstanceId;

    /**
     * @var string ReadOnlyGroupId. specifies the read-only group ID, which can be obtained through the api [DescribeReadOnlyGroups](https://www.tencentcloud.com/document/product/409/39725). valid values: DBInstanceId and ReadOnlyGroupId (at least one is required). if you need to modify the associated security group of the read-only group, only ReadOnlyGroupId is required.
     */
    public $ReadOnlyGroupId;

    /**
     * @param array $SecurityGroupIdSet Specifies the security group list to bind to the instance or read-only group.
Security group information can be queried by calling the sgId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1).
**Note:** This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). specify either DBInstanceId or ReadOnlyGroupId. if both are provided, ReadOnlyGroupId is ignored.
     * @param string $ReadOnlyGroupId ReadOnlyGroupId. specifies the read-only group ID, which can be obtained through the api [DescribeReadOnlyGroups](https://www.tencentcloud.com/document/product/409/39725). valid values: DBInstanceId and ReadOnlyGroupId (at least one is required). if you need to modify the associated security group of the read-only group, only ReadOnlyGroupId is required.
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
        if (array_key_exists("SecurityGroupIdSet",$param) and $param["SecurityGroupIdSet"] !== null) {
            $this->SecurityGroupIdSet = $param["SecurityGroupIdSet"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}
