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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method integer getInstanceType() Obtain Specifies the instance type for querying. Valid values:
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: the query range includes the formal, read-only, and disaster recovery instances simultaneously.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the instance type for querying. Valid values:
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: the query range includes the formal, read-only, and disaster recovery instances simultaneously.
 * @method integer getClusterType() Obtain Specifies the cluster type of the instance to be queried. Valid values:
- 0: replica set instance.
- 1: sharded cluster instance.
- -1: replica set and sharded cluster instance.
 * @method void setClusterType(integer $ClusterType) Set Specifies the cluster type of the instance to be queried. Valid values:
- 0: replica set instance.
- 1: sharded cluster instance.
- -1: replica set and sharded cluster instance.
 * @method array getStatus() Obtain Specifies the current status of the instance to be queried. Valid values:
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
 * @method void setStatus(array $Status) Set Specifies the current status of the instance to be queried. Valid values:
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
 * @method string getVpcId() Obtain VPC ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the ID on the **VPC** page.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the ID on the **VPC** page.
 * @method string getSubnetId() Obtain VPC subnet ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the subnet ID on the **VPC** page.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the subnet ID on the **VPC** page.
 * @method integer getPayMode() Obtain Billing type. Valid value: 0 (pay-as-you-go)
 * @method void setPayMode(integer $PayMode) Set Billing type. Valid value: 0 (pay-as-you-go)
 * @method integer getLimit() Obtain Number of entries returned per request. The default value is 20, and the value range is (1, 100].
 * @method void setLimit(integer $Limit) Set Number of entries returned per request. The default value is 20, and the value range is (1, 100].
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method string getOrderBy() Obtain Configures the field for sorting returned results. Currently, "ProjectId", "InstanceName", and "CreateTime" are supported for sorting.
 * @method void setOrderBy(string $OrderBy) Set Configures the field for sorting returned results. Currently, "ProjectId", "InstanceName", and "CreateTime" are supported for sorting.
 * @method string getOrderByType() Obtain Configures the method for sorting returned results.
 - ASC: ascending order.
 - DESC: descending order.
 * @method void setOrderByType(string $OrderByType) Set Configures the method for sorting returned results.
 - ASC: ascending order.
 - DESC: descending order.
 * @method array getProjectIds() Obtain Project ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and select Project Management in the account information drop-down menu at the top right corner to query projects.
 * @method void setProjectIds(array $ProjectIds) Set Project ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and select Project Management in the account information drop-down menu at the top right corner to query projects.
 * @method string getSearchKey() Obtain Specifies the keyword for search. Specific instance IDs, instance names, or private IP addresses are supported.
 * @method void setSearchKey(string $SearchKey) Set Specifies the keyword for search. Specific instance IDs, instance names, or private IP addresses are supported.
 * @method array getTags() Obtain Tag information, including the tag key and tag value.
 * @method void setTags(array $Tags) Set Tag information, including the tag key and tag value.
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceIds;

    /**
     * @var integer Specifies the instance type for querying. Valid values:
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: the query range includes the formal, read-only, and disaster recovery instances simultaneously.
     */
    public $InstanceType;

    /**
     * @var integer Specifies the cluster type of the instance to be queried. Valid values:
- 0: replica set instance.
- 1: sharded cluster instance.
- -1: replica set and sharded cluster instance.
     */
    public $ClusterType;

    /**
     * @var array Specifies the current status of the instance to be queried. Valid values:
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
     */
    public $Status;

    /**
     * @var string VPC ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the ID on the **VPC** page.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the subnet ID on the **VPC** page.
     */
    public $SubnetId;

    /**
     * @var integer Billing type. Valid value: 0 (pay-as-you-go)
     */
    public $PayMode;

    /**
     * @var integer Number of entries returned per request. The default value is 20, and the value range is (1, 100].
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Configures the field for sorting returned results. Currently, "ProjectId", "InstanceName", and "CreateTime" are supported for sorting.
     */
    public $OrderBy;

    /**
     * @var string Configures the method for sorting returned results.
 - ASC: ascending order.
 - DESC: descending order.
     */
    public $OrderByType;

    /**
     * @var array Project ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and select Project Management in the account information drop-down menu at the top right corner to query projects.
     */
    public $ProjectIds;

    /**
     * @var string Specifies the keyword for search. Specific instance IDs, instance names, or private IP addresses are supported.
     */
    public $SearchKey;

    /**
     * @var array Tag information, including the tag key and tag value.
     */
    public $Tags;

    /**
     * @param array $InstanceIds Instance ID list. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param integer $InstanceType Specifies the instance type for querying. Valid values:
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: the query range includes the formal, read-only, and disaster recovery instances simultaneously.
     * @param integer $ClusterType Specifies the cluster type of the instance to be queried. Valid values:
- 0: replica set instance.
- 1: sharded cluster instance.
- -1: replica set and sharded cluster instance.
     * @param array $Status Specifies the current status of the instance to be queried. Valid values:
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
     * @param string $VpcId VPC ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the ID on the **VPC** page.
     * @param string $SubnetId VPC subnet ID.
 - You do not need to specify this parameter for basic networks.
 - Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), click a VPC name in the instance list, and obtain the subnet ID on the **VPC** page.
     * @param integer $PayMode Billing type. Valid value: 0 (pay-as-you-go)
     * @param integer $Limit Number of entries returned per request. The default value is 20, and the value range is (1, 100].
     * @param integer $Offset Offset. Default value: `0`.
     * @param string $OrderBy Configures the field for sorting returned results. Currently, "ProjectId", "InstanceName", and "CreateTime" are supported for sorting.
     * @param string $OrderByType Configures the method for sorting returned results.
 - ASC: ascending order.
 - DESC: descending order.
     * @param array $ProjectIds Project ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and select Project Management in the account information drop-down menu at the top right corner to query projects.
     * @param string $SearchKey Specifies the keyword for search. Specific instance IDs, instance names, or private IP addresses are supported.
     * @param array $Tags Tag information, including the tag key and tag value.
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
