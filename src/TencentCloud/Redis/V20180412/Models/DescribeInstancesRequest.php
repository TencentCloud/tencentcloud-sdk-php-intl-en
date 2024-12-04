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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method integer getLimit() Obtain Number of instances returned per page. Default value: `20`. Maximum value: `1000`.
 * @method void setLimit(integer $Limit) Set Number of instances returned per page. Default value: `20`. Maximum value: `1000`.
 * @method integer getOffset() Obtain Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.


 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.


 * @method string getOrderBy() Obtain The instance list is sorted according to the following enumeration valid values:
- projectId: By project ID.- createtime: By the creation time of instances.- instancename: By the name of instances.- type: By the type of instances.- curDeadline: By the expiration time of instances.
 * @method void setOrderBy(string $OrderBy) Set The instance list is sorted according to the following enumeration valid values:
- projectId: By project ID.- createtime: By the creation time of instances.- instancename: By the name of instances.- type: By the type of instances.- curDeadline: By the expiration time of instances.
 * @method integer getOrderType() Obtain For instance sorting order, the default is descending order.
- 1: Descending order.
- 0: Ascending order.
 * @method void setOrderType(integer $OrderType) Set For instance sorting order, the default is descending order.
- 1: Descending order.
- 0: Ascending order.
 * @method array getVpcIds() Obtain Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
 * @method void setVpcIds(array $VpcIds) Set Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
 * @method array getSubnetIds() Obtain Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
 * @method void setSubnetIds(array $SubnetIds) Set Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
 * @method string getSearchKey() Obtain Setting keywords field for fuzzy query, only instance names support fuzzy query.
 * @method void setSearchKey(string $SearchKey) Set Setting keywords field for fuzzy query, only instance names support fuzzy query.
 * @method array getProjectIds() Obtain Array of project IDs
 * @method void setProjectIds(array $ProjectIds) Set Array of project IDs
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method array getUniqVpcIds() Obtain Array of VPC IDs such as vpc-sad23jfdfk. If this parameter is not passed in or or the array is empty, the classic network will be selected by default.
 * @method void setUniqVpcIds(array $UniqVpcIds) Set Array of VPC IDs such as vpc-sad23jfdfk. If this parameter is not passed in or or the array is empty, the classic network will be selected by default.
 * @method array getUniqSubnetIds() Obtain Array of VPC subnet IDs such as subnet-fdj24n34j2
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set Array of VPC subnet IDs such as subnet-fdj24n34j2
 * @method array getRegionIds() Obtain Array of region IDs (disused). The corresponding region can be queried through the common parameter `Region`.
 * @method void setRegionIds(array $RegionIds) Set Array of region IDs (disused). The corresponding region can be queried through the common parameter `Region`.
 * @method array getStatus() Obtain Instance status.
- 0: To be initialized.
- 1: In process.
- 2: Running.
- -2: Isolated.
- -3: Pending Delete.
 * @method void setStatus(array $Status) Set Instance status.
- 0: To be initialized.
- 1: In process.
- 2: Running.
- -2: Isolated.
- -3: Pending Delete.
 * @method integer getTypeVersion() Obtain Instance architecture version.
- 1: Single-node edition.
- 2: Master-replica edition.- 3: Cluster edition.
 * @method void setTypeVersion(integer $TypeVersion) Set Instance architecture version.
- 1: Single-node edition.
- 2: Master-replica edition.- 3: Cluster edition.
 * @method string getEngineName() Obtain Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
 * @method void setEngineName(string $EngineName) Set Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
 * @method array getAutoRenew() Obtain Renewal pattern.
- 0: Manual renewal.
- 1: Automatic renewal.
- 2: No renewal after expiry.
 * @method void setAutoRenew(array $AutoRenew) Set Renewal pattern.
- 0: Manual renewal.
- 1: Automatic renewal.
- 2: No renewal after expiry.
 * @method string getBillingMode() Obtain Billing mode. Only pay-as-you-go billing is supported.
 * @method void setBillingMode(string $BillingMode) Set Billing mode. Only pay-as-you-go billing is supported.
 * @method integer getType() Obtain Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method void setType(integer $Type) Set Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method array getSearchKeys() Obtain This parameter is of array type and supports the configuration of instance names, instance IDs, and IP addresses. Among these, the instance name is fuzzy matching while the instance ID and IP address are precise matching.
- Each element in the array is used for a union-based matching query.- When both **InstanceId** and **SearchKeys** are configured simultaneously, their intersection will be used for the matching query.
 * @method void setSearchKeys(array $SearchKeys) Set This parameter is of array type and supports the configuration of instance names, instance IDs, and IP addresses. Among these, the instance name is fuzzy matching while the instance ID and IP address are precise matching.
- Each element in the array is used for a union-based matching query.- When both **InstanceId** and **SearchKeys** are configured simultaneously, their intersection will be used for the matching query.
 * @method array getTypeList() Obtain Internal parameter, which can be ignored.
 * @method void setTypeList(array $TypeList) Set Internal parameter, which can be ignored.
 * @method string getMonitorVersion() Obtain Internal parameter, which can be ignored.
 * @method void setMonitorVersion(string $MonitorVersion) Set Internal parameter, which can be ignored.
 * @method array getInstanceTags() Obtain Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setInstanceTags(array $InstanceTags) Set Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method array getTagKeys() Obtain Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setTagKeys(array $TagKeys) Set Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method array getProductVersions() Obtain The product version of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.
- local: local Disk Edition.- cdc: Cluster dedicated edition.

 * @method void setProductVersions(array $ProductVersions) Set The product version of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.
- local: local Disk Edition.- cdc: Cluster dedicated edition.

 * @method array getInstanceIds() Obtain Batch query of the specified instances ID. The number of results returned is based on `Limit`.
 * @method void setInstanceIds(array $InstanceIds) Set Batch query of the specified instances ID. The number of results returned is based on `Limit`.
 * @method string getAzMode() Obtain Availability zone mode.
- singleaz: Single availability zone.- multiaz: Multiple availability zones.
 * @method void setAzMode(string $AzMode) Set Availability zone mode.
- singleaz: Single availability zone.- multiaz: Multiple availability zones.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer Number of instances returned per page. Default value: `20`. Maximum value: `1000`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     */
    public $Offset;

    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.


     */
    public $InstanceId;

    /**
     * @var string The instance list is sorted according to the following enumeration valid values:
- projectId: By project ID.- createtime: By the creation time of instances.- instancename: By the name of instances.- type: By the type of instances.- curDeadline: By the expiration time of instances.
     */
    public $OrderBy;

    /**
     * @var integer For instance sorting order, the default is descending order.
- 1: Descending order.
- 0: Ascending order.
     */
    public $OrderType;

    /**
     * @var array Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
     */
    public $VpcIds;

    /**
     * @var array Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
     */
    public $SubnetIds;

    /**
     * @var string Setting keywords field for fuzzy query, only instance names support fuzzy query.
     */
    public $SearchKey;

    /**
     * @var array Array of project IDs
     */
    public $ProjectIds;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var array Array of VPC IDs such as vpc-sad23jfdfk. If this parameter is not passed in or or the array is empty, the classic network will be selected by default.
     */
    public $UniqVpcIds;

    /**
     * @var array Array of VPC subnet IDs such as subnet-fdj24n34j2
     */
    public $UniqSubnetIds;

    /**
     * @var array Array of region IDs (disused). The corresponding region can be queried through the common parameter `Region`.
     */
    public $RegionIds;

    /**
     * @var array Instance status.
- 0: To be initialized.
- 1: In process.
- 2: Running.
- -2: Isolated.
- -3: Pending Delete.
     */
    public $Status;

    /**
     * @var integer Instance architecture version.
- 1: Single-node edition.
- 2: Master-replica edition.- 3: Cluster edition.
     */
    public $TypeVersion;

    /**
     * @var string Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
     */
    public $EngineName;

    /**
     * @var array Renewal pattern.
- 0: Manual renewal.
- 1: Automatic renewal.
- 2: No renewal after expiry.
     */
    public $AutoRenew;

    /**
     * @var string Billing mode. Only pay-as-you-go billing is supported.
     */
    public $BillingMode;

    /**
     * @var integer Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     */
    public $Type;

    /**
     * @var array This parameter is of array type and supports the configuration of instance names, instance IDs, and IP addresses. Among these, the instance name is fuzzy matching while the instance ID and IP address are precise matching.
- Each element in the array is used for a union-based matching query.- When both **InstanceId** and **SearchKeys** are configured simultaneously, their intersection will be used for the matching query.
     */
    public $SearchKeys;

    /**
     * @var array Internal parameter, which can be ignored.
     */
    public $TypeList;

    /**
     * @var string Internal parameter, which can be ignored.
     */
    public $MonitorVersion;

    /**
     * @var array Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
     */
    public $InstanceTags;

    /**
     * @var array Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
     */
    public $TagKeys;

    /**
     * @var array The product version of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.
- local: local Disk Edition.- cdc: Cluster dedicated edition.

     */
    public $ProductVersions;

    /**
     * @var array Batch query of the specified instances ID. The number of results returned is based on `Limit`.
     */
    public $InstanceIds;

    /**
     * @var string Availability zone mode.
- singleaz: Single availability zone.- multiaz: Multiple availability zones.
     */
    public $AzMode;

    /**
     * @param integer $Limit Number of instances returned per page. Default value: `20`. Maximum value: `1000`.
     * @param integer $Offset Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.


     * @param string $OrderBy The instance list is sorted according to the following enumeration valid values:
- projectId: By project ID.- createtime: By the creation time of instances.- instancename: By the name of instances.- type: By the type of instances.- curDeadline: By the expiration time of instances.
     * @param integer $OrderType For instance sorting order, the default is descending order.
- 1: Descending order.
- 0: Ascending order.
     * @param array $VpcIds Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
     * @param array $SubnetIds Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
     * @param string $SearchKey Setting keywords field for fuzzy query, only instance names support fuzzy query.
     * @param array $ProjectIds Array of project IDs
     * @param string $InstanceName Instance name
     * @param array $UniqVpcIds Array of VPC IDs such as vpc-sad23jfdfk. If this parameter is not passed in or or the array is empty, the classic network will be selected by default.
     * @param array $UniqSubnetIds Array of VPC subnet IDs such as subnet-fdj24n34j2
     * @param array $RegionIds Array of region IDs (disused). The corresponding region can be queried through the common parameter `Region`.
     * @param array $Status Instance status.
- 0: To be initialized.
- 1: In process.
- 2: Running.
- -2: Isolated.
- -3: Pending Delete.
     * @param integer $TypeVersion Instance architecture version.
- 1: Single-node edition.
- 2: Master-replica edition.- 3: Cluster edition.
     * @param string $EngineName Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
     * @param array $AutoRenew Renewal pattern.
- 0: Manual renewal.
- 1: Automatic renewal.
- 2: No renewal after expiry.
     * @param string $BillingMode Billing mode. Only pay-as-you-go billing is supported.
     * @param integer $Type Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     * @param array $SearchKeys This parameter is of array type and supports the configuration of instance names, instance IDs, and IP addresses. Among these, the instance name is fuzzy matching while the instance ID and IP address are precise matching.
- Each element in the array is used for a union-based matching query.- When both **InstanceId** and **SearchKeys** are configured simultaneously, their intersection will be used for the matching query.
     * @param array $TypeList Internal parameter, which can be ignored.
     * @param string $MonitorVersion Internal parameter, which can be ignored.
     * @param array $InstanceTags Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
     * @param array $TagKeys Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
     * @param array $ProductVersions The product version of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.
- local: local Disk Edition.- cdc: Cluster dedicated edition.

     * @param array $InstanceIds Batch query of the specified instances ID. The number of results returned is based on `Limit`.
     * @param string $AzMode Availability zone mode.
- singleaz: Single availability zone.- multiaz: Multiple availability zones.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TypeVersion",$param) and $param["TypeVersion"] !== null) {
            $this->TypeVersion = $param["TypeVersion"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("ProductVersions",$param) and $param["ProductVersions"] !== null) {
            $this->ProductVersions = $param["ProductVersions"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AzMode",$param) and $param["AzMode"] !== null) {
            $this->AzMode = $param["AzMode"];
        }
    }
}
