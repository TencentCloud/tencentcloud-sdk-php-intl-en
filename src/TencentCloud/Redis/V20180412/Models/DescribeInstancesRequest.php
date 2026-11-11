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
 * DescribeInstances request structure.
 *
 * @method integer getLimit() Obtain <p>Number of instances output per page. Default parameter value: 20. Maximum value: 1000.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of instances output per page. Default parameter value: 20. Maximum value: 1000.</p>
 * @method integer getOffset() Obtain <p>Pagination offset, which is an integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, which is an integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method string getInstanceId() Obtain <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getOrderBy() Obtain <p>Instance list sorting criteria. Enumeration values are as follows:</p><ul><li>projectId: by project ID.</li><li>createtime: sort by instance creation time.</li><li>instancename: by instance name sorting.</li><li>type: by instance type.</li><li>curDeadline: by instance expiration time.</li></ul>
 * @method void setOrderBy(string $OrderBy) Set <p>Instance list sorting criteria. Enumeration values are as follows:</p><ul><li>projectId: by project ID.</li><li>createtime: sort by instance creation time.</li><li>instancename: by instance name sorting.</li><li>type: by instance type.</li><li>curDeadline: by instance expiration time.</li></ul>
 * @method integer getOrderType() Obtain <p>Instance sorting order, with a default value of reverse sorting.</p><ul><li>1: Reverse order.</li><li>0: Sequential order.</li></ul>
 * @method void setOrderType(integer $OrderType) Set <p>Instance sorting order, with a default value of reverse sorting.</p><ul><li>1: Reverse order.</li><li>0: Sequential order.</li></ul>
 * @method array getVpcIds() Obtain <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default. For example: 47525. This parameter is temporarily reserved and can be ignored. Set the VPC ID array according to the format of the UniqVpcIds parameter.</p>
 * @method void setVpcIds(array $VpcIds) Set <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default. For example: 47525. This parameter is temporarily reserved and can be ignored. Set the VPC ID array according to the format of the UniqVpcIds parameter.</p>
 * @method array getSubnetIds() Obtain <p>Array of subnet IDs belonging to the private network, for example: 56854. This parameter is temporarily reserved and can be ignored. Set the private network subnet ID array according to the format of the UniqSubnetIds parameter.</p>
 * @method void setSubnetIds(array $SubnetIds) Set <p>Array of subnet IDs belonging to the private network, for example: 56854. This parameter is temporarily reserved and can be ignored. Set the private network subnet ID array according to the format of the UniqSubnetIds parameter.</p>
 * @method string getSearchKey() Obtain <p>Set the key field for fuzzy query. Only instance names support fuzzy query.</p>
 * @method void setSearchKey(string $SearchKey) Set <p>Set the key field for fuzzy query. Only instance names support fuzzy query.</p>
 * @method array getProjectIds() Obtain <p>Array of project IDs.</p>
 * @method void setProjectIds(array $ProjectIds) Set <p>Array of project IDs.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method array getUniqVpcIds() Obtain <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default, for example: vpc-sad23jfdfk.</p>
 * @method void setUniqVpcIds(array $UniqVpcIds) Set <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default, for example: vpc-sad23jfdfk.</p>
 * @method array getUniqSubnetIds() Obtain <p>Subnet ID array belonging to the private network, for example: subnet-fdj24n34j2.</p>
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set <p>Subnet ID array belonging to the private network, for example: subnet-fdj24n34j2.</p>
 * @method array getRegionIds() Obtain <p>Region ID array. This parameter has been deprecated. Use the common parameter Region to query the corresponding region.</p>
 * @method void setRegionIds(array $RegionIds) Set <p>Region ID array. This parameter has been deprecated. Use the common parameter Region to query the corresponding region.</p>
 * @method array getStatus() Obtain <p>Instance status.</p><ul><li>0: pending initialization.</li><li>1: in process.</li><li>2: running.</li><li>-2: isolated.</li><li>-3: pending deletion.</li></ul>
 * @method void setStatus(array $Status) Set <p>Instance status.</p><ul><li>0: pending initialization.</li><li>1: in process.</li><li>2: running.</li><li>-2: isolated.</li><li>-3: pending deletion.</li></ul>
 * @method integer getTypeVersion() Obtain <p>Instance architecture version.</p><ul><li>1: standalone edition.</li><li>2: primary/secondary edition.</li><li>3: cluster version.</li></ul>
 * @method void setTypeVersion(integer $TypeVersion) Set <p>Instance architecture version.</p><ul><li>1: standalone edition.</li><li>2: primary/secondary edition.</li><li>3: cluster version.</li></ul>
 * @method string getEngineName() Obtain <p>Storage engine info. It can be set to Redis-2.8, Redis-4.0, Redis-5.0, Redis-6.0, or CKV.</p>
 * @method void setEngineName(string $EngineName) Set <p>Storage engine info. It can be set to Redis-2.8, Redis-4.0, Redis-5.0, Redis-6.0, or CKV.</p>
 * @method array getAutoRenew() Obtain <p>Renewal mode.</p><ul><li>0: Manual renewal.</li><li>1: Automatic renewal.</li><li>2: No renewal after expiry.</li></ul>
 * @method void setAutoRenew(array $AutoRenew) Set <p>Renewal mode.</p><ul><li>0: Manual renewal.</li><li>1: Automatic renewal.</li><li>2: No renewal after expiry.</li></ul>
 * @method string getBillingMode() Obtain <p>Billing mode.</p><ul><li>postpaid: pay-as-you-go billing.</li><li>prepaid: annual/monthly subscription.</li></ul>
 * @method void setBillingMode(string $BillingMode) Set <p>Billing mode.</p><ul><li>postpaid: pay-as-you-go billing.</li><li>prepaid: annual/monthly subscription.</li></ul>
 * @method integer getType() Obtain <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
 * @method void setType(integer $Type) Set <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
 * @method array getSearchKeys() Obtain <p>This parameter is an array type and supports configuring instance name, instance ID, and IP address. Among them, instance name uses fuzzy matching, while instance ID and IP address use exact matching.</p><ul><li>Each element in the array uses union for match query.</li><li>If <strong>InstanceId</strong> and <strong>SearchKeys</strong> are configured concurrently, their intersection is used for matching query.</li></ul>
 * @method void setSearchKeys(array $SearchKeys) Set <p>This parameter is an array type and supports configuring instance name, instance ID, and IP address. Among them, instance name uses fuzzy matching, while instance ID and IP address use exact matching.</p><ul><li>Each element in the array uses union for match query.</li><li>If <strong>InstanceId</strong> and <strong>SearchKeys</strong> are configured concurrently, their intersection is used for matching query.</li></ul>
 * @method array getTypeList() Obtain <p>Internal parameter, which can be ignored.</p>
 * @method void setTypeList(array $TypeList) Set <p>Internal parameter, which can be ignored.</p>
 * @method string getMonitorVersion() Obtain <p>Internal parameter, which can be ignored.</p>
 * @method void setMonitorVersion(string $MonitorVersion) Set <p>Internal parameter, which can be ignored.</p>
 * @method array getInstanceTags() Obtain <p>Filter resources by tag Key and Value. If this parameter is not configured or the array is set to empty, no tag-based filtering is applied.</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Filter resources by tag Key and Value. If this parameter is not configured or the array is set to empty, no tag-based filtering is applied.</p>
 * @method array getTagKeys() Obtain <p>Filter resources by tag Key. If this parameter is not configured or the array is set to empty, no filtering by tag Key is performed.</p>
 * @method void setTagKeys(array $TagKeys) Set <p>Filter resources by tag Key. If this parameter is not configured or the array is set to empty, no filtering by tag Key is performed.</p>
 * @method array getProductVersions() Obtain <p>Deployment type of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.</p><p>Enumeration values:</p><ul><li>local: Common I.</li><li>localv2: Common II.</li><li>cdc: Dedicated cluster.</li></ul>
 * @method void setProductVersions(array $ProductVersions) Set <p>Deployment type of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.</p><p>Enumeration values:</p><ul><li>local: Common I.</li><li>localv2: Common II.</li><li>cdc: Dedicated cluster.</li></ul>
 * @method array getInstanceIds() Obtain <p>Batch query the specified instance IDs. The returned results are mainly limited by Limit.</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Batch query the specified instance IDs. The returned results are mainly limited by Limit.</p>
 * @method string getAzMode() Obtain <p>Availability zone mode.</p><ul><li>singleaz: single availability zone.</li><li>multiaz: multi-availability zone.</li></ul>
 * @method void setAzMode(string $AzMode) Set <p>Availability zone mode.</p><ul><li>singleaz: single availability zone.</li><li>multiaz: multi-availability zone.</li></ul>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of instances output per page. Default parameter value: 20. Maximum value: 1000.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset, which is an integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     */
    public $Offset;

    /**
     * @var string <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance list sorting criteria. Enumeration values are as follows:</p><ul><li>projectId: by project ID.</li><li>createtime: sort by instance creation time.</li><li>instancename: by instance name sorting.</li><li>type: by instance type.</li><li>curDeadline: by instance expiration time.</li></ul>
     */
    public $OrderBy;

    /**
     * @var integer <p>Instance sorting order, with a default value of reverse sorting.</p><ul><li>1: Reverse order.</li><li>0: Sequential order.</li></ul>
     */
    public $OrderType;

    /**
     * @var array <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default. For example: 47525. This parameter is temporarily reserved and can be ignored. Set the VPC ID array according to the format of the UniqVpcIds parameter.</p>
     */
    public $VpcIds;

    /**
     * @var array <p>Array of subnet IDs belonging to the private network, for example: 56854. This parameter is temporarily reserved and can be ignored. Set the private network subnet ID array according to the format of the UniqSubnetIds parameter.</p>
     */
    public $SubnetIds;

    /**
     * @var string <p>Set the key field for fuzzy query. Only instance names support fuzzy query.</p>
     */
    public $SearchKey;

    /**
     * @var array <p>Array of project IDs.</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var array <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default, for example: vpc-sad23jfdfk.</p>
     */
    public $UniqVpcIds;

    /**
     * @var array <p>Subnet ID array belonging to the private network, for example: subnet-fdj24n34j2.</p>
     */
    public $UniqSubnetIds;

    /**
     * @var array <p>Region ID array. This parameter has been deprecated. Use the common parameter Region to query the corresponding region.</p>
     */
    public $RegionIds;

    /**
     * @var array <p>Instance status.</p><ul><li>0: pending initialization.</li><li>1: in process.</li><li>2: running.</li><li>-2: isolated.</li><li>-3: pending deletion.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Instance architecture version.</p><ul><li>1: standalone edition.</li><li>2: primary/secondary edition.</li><li>3: cluster version.</li></ul>
     */
    public $TypeVersion;

    /**
     * @var string <p>Storage engine info. It can be set to Redis-2.8, Redis-4.0, Redis-5.0, Redis-6.0, or CKV.</p>
     */
    public $EngineName;

    /**
     * @var array <p>Renewal mode.</p><ul><li>0: Manual renewal.</li><li>1: Automatic renewal.</li><li>2: No renewal after expiry.</li></ul>
     */
    public $AutoRenew;

    /**
     * @var string <p>Billing mode.</p><ul><li>postpaid: pay-as-you-go billing.</li><li>prepaid: annual/monthly subscription.</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
     */
    public $Type;

    /**
     * @var array <p>This parameter is an array type and supports configuring instance name, instance ID, and IP address. Among them, instance name uses fuzzy matching, while instance ID and IP address use exact matching.</p><ul><li>Each element in the array uses union for match query.</li><li>If <strong>InstanceId</strong> and <strong>SearchKeys</strong> are configured concurrently, their intersection is used for matching query.</li></ul>
     */
    public $SearchKeys;

    /**
     * @var array <p>Internal parameter, which can be ignored.</p>
     */
    public $TypeList;

    /**
     * @var string <p>Internal parameter, which can be ignored.</p>
     */
    public $MonitorVersion;

    /**
     * @var array <p>Filter resources by tag Key and Value. If this parameter is not configured or the array is set to empty, no tag-based filtering is applied.</p>
     */
    public $InstanceTags;

    /**
     * @var array <p>Filter resources by tag Key. If this parameter is not configured or the array is set to empty, no filtering by tag Key is performed.</p>
     */
    public $TagKeys;

    /**
     * @var array <p>Deployment type of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.</p><p>Enumeration values:</p><ul><li>local: Common I.</li><li>localv2: Common II.</li><li>cdc: Dedicated cluster.</li></ul>
     */
    public $ProductVersions;

    /**
     * @var array <p>Batch query the specified instance IDs. The returned results are mainly limited by Limit.</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>Availability zone mode.</p><ul><li>singleaz: single availability zone.</li><li>multiaz: multi-availability zone.</li></ul>
     */
    public $AzMode;

    /**
     * @param integer $Limit <p>Number of instances output per page. Default parameter value: 20. Maximum value: 1000.</p>
     * @param integer $Offset <p>Pagination offset, which is an integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     * @param string $InstanceId <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $OrderBy <p>Instance list sorting criteria. Enumeration values are as follows:</p><ul><li>projectId: by project ID.</li><li>createtime: sort by instance creation time.</li><li>instancename: by instance name sorting.</li><li>type: by instance type.</li><li>curDeadline: by instance expiration time.</li></ul>
     * @param integer $OrderType <p>Instance sorting order, with a default value of reverse sorting.</p><ul><li>1: Reverse order.</li><li>0: Sequential order.</li></ul>
     * @param array $VpcIds <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default. For example: 47525. This parameter is temporarily reserved and can be ignored. Set the VPC ID array according to the format of the UniqVpcIds parameter.</p>
     * @param array $SubnetIds <p>Array of subnet IDs belonging to the private network, for example: 56854. This parameter is temporarily reserved and can be ignored. Set the private network subnet ID array according to the format of the UniqSubnetIds parameter.</p>
     * @param string $SearchKey <p>Set the key field for fuzzy query. Only instance names support fuzzy query.</p>
     * @param array $ProjectIds <p>Array of project IDs.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param array $UniqVpcIds <p>VPC ID array. If this parameter is not configured or the array is empty, the basic network is selected by default, for example: vpc-sad23jfdfk.</p>
     * @param array $UniqSubnetIds <p>Subnet ID array belonging to the private network, for example: subnet-fdj24n34j2.</p>
     * @param array $RegionIds <p>Region ID array. This parameter has been deprecated. Use the common parameter Region to query the corresponding region.</p>
     * @param array $Status <p>Instance status.</p><ul><li>0: pending initialization.</li><li>1: in process.</li><li>2: running.</li><li>-2: isolated.</li><li>-3: pending deletion.</li></ul>
     * @param integer $TypeVersion <p>Instance architecture version.</p><ul><li>1: standalone edition.</li><li>2: primary/secondary edition.</li><li>3: cluster version.</li></ul>
     * @param string $EngineName <p>Storage engine info. It can be set to Redis-2.8, Redis-4.0, Redis-5.0, Redis-6.0, or CKV.</p>
     * @param array $AutoRenew <p>Renewal mode.</p><ul><li>0: Manual renewal.</li><li>1: Automatic renewal.</li><li>2: No renewal after expiry.</li></ul>
     * @param string $BillingMode <p>Billing mode.</p><ul><li>postpaid: pay-as-you-go billing.</li><li>prepaid: annual/monthly subscription.</li></ul>
     * @param integer $Type <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
     * @param array $SearchKeys <p>This parameter is an array type and supports configuring instance name, instance ID, and IP address. Among them, instance name uses fuzzy matching, while instance ID and IP address use exact matching.</p><ul><li>Each element in the array uses union for match query.</li><li>If <strong>InstanceId</strong> and <strong>SearchKeys</strong> are configured concurrently, their intersection is used for matching query.</li></ul>
     * @param array $TypeList <p>Internal parameter, which can be ignored.</p>
     * @param string $MonitorVersion <p>Internal parameter, which can be ignored.</p>
     * @param array $InstanceTags <p>Filter resources by tag Key and Value. If this parameter is not configured or the array is set to empty, no tag-based filtering is applied.</p>
     * @param array $TagKeys <p>Filter resources by tag Key. If this parameter is not configured or the array is set to empty, no filtering by tag Key is performed.</p>
     * @param array $ProductVersions <p>Deployment type of the instance. If this parameter is not configured or the array is set to empty, instances will not be filtered based on this parameter by default.</p><p>Enumeration values:</p><ul><li>local: Common I.</li><li>localv2: Common II.</li><li>cdc: Dedicated cluster.</li></ul>
     * @param array $InstanceIds <p>Batch query the specified instance IDs. The returned results are mainly limited by Limit.</p>
     * @param string $AzMode <p>Availability zone mode.</p><ul><li>singleaz: single availability zone.</li><li>multiaz: multi-availability zone.</li></ul>
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
