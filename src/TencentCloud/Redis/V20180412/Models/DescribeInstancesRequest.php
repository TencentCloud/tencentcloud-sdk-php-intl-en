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


 * @method string getOrderBy() Obtain Instance list sorting criteria. The enumerated values are as listed below:  <ul><li>`projectId`:  Project ID.  </li><li>`createtime`:  Instance creation time.  </li><li>`instancename`:  Instance name.  </li><li>`type`:  Instance type. </li><li>`curDeadline`:  Instance expiration time. </li></ul>
 * @method void setOrderBy(string $OrderBy) Set Instance list sorting criteria. The enumerated values are as listed below:  <ul><li>`projectId`:  Project ID.  </li><li>`createtime`:  Instance creation time.  </li><li>`instancename`:  Instance name.  </li><li>`type`:  Instance type. </li><li>`curDeadline`:  Instance expiration time. </li></ul>
 * @method integer getOrderType() Obtain Instance sorting order. <ul><li>`1`: Descending. </li><li>`0`: Ascending. Default value: `1`.</li></ul>
 * @method void setOrderType(integer $OrderType) Set Instance sorting order. <ul><li>`1`: Descending. </li><li>`0`: Ascending. Default value: `1`.</li></ul>
 * @method array getVpcIds() Obtain Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
 * @method void setVpcIds(array $VpcIds) Set Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
 * @method array getSubnetIds() Obtain Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
 * @method void setSubnetIds(array $SubnetIds) Set Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
 * @method string getSearchKey() Obtain Keywords for fuzzy query. which can be used to fuzzy query an instance by its ID or name.
 * @method void setSearchKey(string $SearchKey) Set Keywords for fuzzy query. which can be used to fuzzy query an instance by its ID or name.
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
 * @method array getStatus() Obtain Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method void setStatus(array $Status) Set Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method integer getTypeVersion() Obtain Instance architecture. <ul><li>`1`: Standalone edition. </li><li>`2`: Master-replica edition. </li><li>`3`: Cluster edition. </li></ul>
 * @method void setTypeVersion(integer $TypeVersion) Set Instance architecture. <ul><li>`1`: Standalone edition. </li><li>`2`: Master-replica edition. </li><li>`3`: Cluster edition. </li></ul>
 * @method string getEngineName() Obtain Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
 * @method void setEngineName(string $EngineName) Set Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
 * @method array getAutoRenew() Obtain Renewal mode. Valid values:  <ul><li>`0`:  Manual renewal </li><li>`1`:  Auto-renewal </li><li>`2`:  No renewal upon expiration </ul>
 * @method void setAutoRenew(array $AutoRenew) Set Renewal mode. Valid values:  <ul><li>`0`:  Manual renewal </li><li>`1`:  Auto-renewal </li><li>`2`:  No renewal upon expiration </ul>
 * @method string getBillingMode() Obtain Billing mode. Only pay-as-you-go billing is supported.
 * @method void setBillingMode(string $BillingMode) Set Billing mode. Only pay-as-you-go billing is supported.
 * @method integer getType() Obtain Instance type. Valid values:  - `2`: Redis 2.8 Memory Edition (Standard Architecture). - `3`: CKV 3.2 Memory Edition (Standard Architecture). - `4`: CKV 3.2 Memory Edition (Cluster Architecture). - `5`: Redis 2.8 Memory Edition (Standalone). - `6`: Redis 4.0 Memory Edition (Standard Architecture). - `7`: Redis 4.0 Memory Edition (Cluster Architecture). - `8`: Redis 5.0 Memory Edition (Standard Architecture). - `9`: Redis 5.0 Memory Edition (Cluster Architecture). - `15`: Redis 6.2 Memory Edition (Standard Architecture). - `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method void setType(integer $Type) Set Instance type. Valid values:  - `2`: Redis 2.8 Memory Edition (Standard Architecture). - `3`: CKV 3.2 Memory Edition (Standard Architecture). - `4`: CKV 3.2 Memory Edition (Cluster Architecture). - `5`: Redis 2.8 Memory Edition (Standalone). - `6`: Redis 4.0 Memory Edition (Standard Architecture). - `7`: Redis 4.0 Memory Edition (Cluster Architecture). - `8`: Redis 5.0 Memory Edition (Standard Architecture). - `9`: Redis 5.0 Memory Edition (Cluster Architecture). - `15`: Redis 6.2 Memory Edition (Standard Architecture). - `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method array getSearchKeys() Obtain Array of the search keywords, which can query the instance by its ID, name, IP address.
 * @method void setSearchKeys(array $SearchKeys) Set Array of the search keywords, which can query the instance by its ID, name, IP address.
 * @method array getTypeList() Obtain Internal parameter, which can be ignored.
 * @method void setTypeList(array $TypeList) Set Internal parameter, which can be ignored.
 * @method string getMonitorVersion() Obtain Internal parameter, which can be ignored.
 * @method void setMonitorVersion(string $MonitorVersion) Set Internal parameter, which can be ignored.
 * @method array getInstanceTags() Obtain Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setInstanceTags(array $InstanceTags) Set Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method array getTagKeys() Obtain Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setTagKeys(array $TagKeys) Set Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method array getProductVersions() Obtain Instance product version.  If this parameter is not passed in or the array is empty, the instances will not be filtered based this parameter by default.  <ul><li>`local`:  Local disk edition.  </li><li>`cdc`:  Dedicated cluster edition.  </li></ul>
 * @method void setProductVersions(array $ProductVersions) Set Instance product version.  If this parameter is not passed in or the array is empty, the instances will not be filtered based this parameter by default.  <ul><li>`local`:  Local disk edition.  </li><li>`cdc`:  Dedicated cluster edition.  </li></ul>
 * @method array getInstanceIds() Obtain Batch query of the specified instances ID. The number of results returned is based on `Limit`.
 * @method void setInstanceIds(array $InstanceIds) Set Batch query of the specified instances ID. The number of results returned is based on `Limit`.
 * @method string getAzMode() Obtain AZ deployment mode. <ul><li>`singleaz`: Single-AZ. </li><li>`1`: Multi-AZ. </li></ul>
 * @method void setAzMode(string $AzMode) Set AZ deployment mode. <ul><li>`singleaz`: Single-AZ. </li><li>`1`: Multi-AZ. </li></ul>
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
     * @var string Instance list sorting criteria. The enumerated values are as listed below:  <ul><li>`projectId`:  Project ID.  </li><li>`createtime`:  Instance creation time.  </li><li>`instancename`:  Instance name.  </li><li>`type`:  Instance type. </li><li>`curDeadline`:  Instance expiration time. </li></ul>
     */
    public $OrderBy;

    /**
     * @var integer Instance sorting order. <ul><li>`1`: Descending. </li><li>`0`: Ascending. Default value: `1`.</li></ul>
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
     * @var string Keywords for fuzzy query. which can be used to fuzzy query an instance by its ID or name.
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
     * @var array Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     */
    public $Status;

    /**
     * @var integer Instance architecture. <ul><li>`1`: Standalone edition. </li><li>`2`: Master-replica edition. </li><li>`3`: Cluster edition. </li></ul>
     */
    public $TypeVersion;

    /**
     * @var string Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
     */
    public $EngineName;

    /**
     * @var array Renewal mode. Valid values:  <ul><li>`0`:  Manual renewal </li><li>`1`:  Auto-renewal </li><li>`2`:  No renewal upon expiration </ul>
     */
    public $AutoRenew;

    /**
     * @var string Billing mode. Only pay-as-you-go billing is supported.
     */
    public $BillingMode;

    /**
     * @var integer Instance type. Valid values:  - `2`: Redis 2.8 Memory Edition (Standard Architecture). - `3`: CKV 3.2 Memory Edition (Standard Architecture). - `4`: CKV 3.2 Memory Edition (Cluster Architecture). - `5`: Redis 2.8 Memory Edition (Standalone). - `6`: Redis 4.0 Memory Edition (Standard Architecture). - `7`: Redis 4.0 Memory Edition (Cluster Architecture). - `8`: Redis 5.0 Memory Edition (Standard Architecture). - `9`: Redis 5.0 Memory Edition (Cluster Architecture). - `15`: Redis 6.2 Memory Edition (Standard Architecture). - `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     */
    public $Type;

    /**
     * @var array Array of the search keywords, which can query the instance by its ID, name, IP address.
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
     * @var array Instance product version.  If this parameter is not passed in or the array is empty, the instances will not be filtered based this parameter by default.  <ul><li>`local`:  Local disk edition.  </li><li>`cdc`:  Dedicated cluster edition.  </li></ul>
     */
    public $ProductVersions;

    /**
     * @var array Batch query of the specified instances ID. The number of results returned is based on `Limit`.
     */
    public $InstanceIds;

    /**
     * @var string AZ deployment mode. <ul><li>`singleaz`: Single-AZ. </li><li>`1`: Multi-AZ. </li></ul>
     */
    public $AzMode;

    /**
     * @param integer $Limit Number of instances returned per page. Default value: `20`. Maximum value: `1000`.
     * @param integer $Offset Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.


     * @param string $OrderBy Instance list sorting criteria. The enumerated values are as listed below:  <ul><li>`projectId`:  Project ID.  </li><li>`createtime`:  Instance creation time.  </li><li>`instancename`:  Instance name.  </li><li>`type`:  Instance type. </li><li>`curDeadline`:  Instance expiration time. </li></ul>
     * @param integer $OrderType Instance sorting order. <ul><li>`1`: Descending. </li><li>`0`: Ascending. Default value: `1`.</li></ul>
     * @param array $VpcIds Array of VPC IDs such as 47525. If this parameter is not passed in or the array is empty, the classic network will be selected by default. This parameter is retained and can be ignored. It is set based on `UniqVpcIds` parameter format.
     * @param array $SubnetIds Array of VPC subnet IDs such as 56854. This parameter is retained and can be ignored. It is set based on `UniqSubnetIds` parameter format.
     * @param string $SearchKey Keywords for fuzzy query. which can be used to fuzzy query an instance by its ID or name.
     * @param array $ProjectIds Array of project IDs
     * @param string $InstanceName Instance name
     * @param array $UniqVpcIds Array of VPC IDs such as vpc-sad23jfdfk. If this parameter is not passed in or or the array is empty, the classic network will be selected by default.
     * @param array $UniqSubnetIds Array of VPC subnet IDs such as subnet-fdj24n34j2
     * @param array $RegionIds Array of region IDs (disused). The corresponding region can be queried through the common parameter `Region`.
     * @param array $Status Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     * @param integer $TypeVersion Instance architecture. <ul><li>`1`: Standalone edition. </li><li>`2`: Master-replica edition. </li><li>`3`: Cluster edition. </li></ul>
     * @param string $EngineName Storage engine information. Valid values: `Redis-2.8`, `Redis-4.0`, `Redis-5.0`, `Redis-6.0` or `CKV`.
     * @param array $AutoRenew Renewal mode. Valid values:  <ul><li>`0`:  Manual renewal </li><li>`1`:  Auto-renewal </li><li>`2`:  No renewal upon expiration </ul>
     * @param string $BillingMode Billing mode. Only pay-as-you-go billing is supported.
     * @param integer $Type Instance type. Valid values:  - `2`: Redis 2.8 Memory Edition (Standard Architecture). - `3`: CKV 3.2 Memory Edition (Standard Architecture). - `4`: CKV 3.2 Memory Edition (Cluster Architecture). - `5`: Redis 2.8 Memory Edition (Standalone). - `6`: Redis 4.0 Memory Edition (Standard Architecture). - `7`: Redis 4.0 Memory Edition (Cluster Architecture). - `8`: Redis 5.0 Memory Edition (Standard Architecture). - `9`: Redis 5.0 Memory Edition (Cluster Architecture). - `15`: Redis 6.2 Memory Edition (Standard Architecture). - `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     * @param array $SearchKeys Array of the search keywords, which can query the instance by its ID, name, IP address.
     * @param array $TypeList Internal parameter, which can be ignored.
     * @param string $MonitorVersion Internal parameter, which can be ignored.
     * @param array $InstanceTags Resources filter by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
     * @param array $TagKeys Resources filter by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
     * @param array $ProductVersions Instance product version.  If this parameter is not passed in or the array is empty, the instances will not be filtered based this parameter by default.  <ul><li>`local`:  Local disk edition.  </li><li>`cdc`:  Dedicated cluster edition.  </li></ul>
     * @param array $InstanceIds Batch query of the specified instances ID. The number of results returned is based on `Limit`.
     * @param string $AzMode AZ deployment mode. <ul><li>`singleaz`: Single-AZ. </li><li>`1`: Multi-AZ. </li></ul>
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
