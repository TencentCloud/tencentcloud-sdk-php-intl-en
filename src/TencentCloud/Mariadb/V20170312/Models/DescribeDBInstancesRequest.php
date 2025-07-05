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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain Queries by instance ID or IDs. Instance ID is in the format of `tdsql-ow728lmc`. Up to 100 instances can be queried in one request.
 * @method void setInstanceIds(array $InstanceIds) Set Queries by instance ID or IDs. Instance ID is in the format of `tdsql-ow728lmc`. Up to 100 instances can be queried in one request.
 * @method string getSearchName() Obtain Search field name. Valid values: instancename (search by instance name), vip (search by private IP), all (search by instance ID, instance name, and private IP).
 * @method void setSearchName(string $SearchName) Set Search field name. Valid values: instancename (search by instance name), vip (search by private IP), all (search by instance ID, instance name, and private IP).
 * @method string getSearchKey() Obtain Search keyword. Fuzzy search is supported. Multiple keywords should be separated by line breaks (`\n`).
 * @method void setSearchKey(string $SearchKey) Set Search keyword. Fuzzy search is supported. Multiple keywords should be separated by line breaks (`\n`).
 * @method array getProjectIds() Obtain Queries by project ID
 * @method void setProjectIds(array $ProjectIds) Set Queries by project ID
 * @method boolean getIsFilterVpc() Obtain Whether to search by VPC
 * @method void setIsFilterVpc(boolean $IsFilterVpc) Set Whether to search by VPC
 * @method string getVpcId() Obtain VPC ID, which is valid when `IsFilterVpc` is 1
 * @method void setVpcId(string $VpcId) Set VPC ID, which is valid when `IsFilterVpc` is 1
 * @method string getSubnetId() Obtain VPC subnet ID, which is valid when `IsFilterVpc` is 1
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID, which is valid when `IsFilterVpc` is 1
 * @method string getOrderBy() Obtain Sort by field. Valid values: projectId, createtime, instancename
 * @method void setOrderBy(string $OrderBy) Set Sort by field. Valid values: projectId, createtime, instancename
 * @method string getOrderByType() Obtain Sorting order. Valid values: desc, asc
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: desc, asc
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method array getOriginSerialIds() Obtain Queries by `OriginSerialId`
 * @method void setOriginSerialIds(array $OriginSerialIds) Set Queries by `OriginSerialId`
 * @method boolean getIsFilterExcluster() Obtain Identifies whether to use the `ExclusterType` field. false: no, true: yes
 * @method void setIsFilterExcluster(boolean $IsFilterExcluster) Set Identifies whether to use the `ExclusterType` field. false: no, true: yes
 * @method integer getExclusterType() Obtain Instance cluster type. 1: non-dedicated cluster, 2: dedicated cluster, 0: all
 * @method void setExclusterType(integer $ExclusterType) Set Instance cluster type. 1: non-dedicated cluster, 2: dedicated cluster, 0: all
 * @method array getExclusterIds() Obtain Filters instances by dedicated cluster ID in the format of `dbdc-4ih6uct9`
 * @method void setExclusterIds(array $ExclusterIds) Set Filters instances by dedicated cluster ID in the format of `dbdc-4ih6uct9`
 * @method array getTagKeys() Obtain Tag key used in queries
 * @method void setTagKeys(array $TagKeys) Set Tag key used in queries
 * @method string getFilterInstanceType() Obtain Instance types used in filtering. Valid values: 1 (dedicated instance), 2 (primary instance), 3 (disaster recovery instance). Multiple values should be separated by commas.
 * @method void setFilterInstanceType(string $FilterInstanceType) Set Instance types used in filtering. Valid values: 1 (dedicated instance), 2 (primary instance), 3 (disaster recovery instance). Multiple values should be separated by commas.
 * @method array getStatus() Obtain Use this filter to include instances in specific statuses
 * @method void setStatus(array $Status) Set Use this filter to include instances in specific statuses
 * @method array getExcludeStatus() Obtain Use this filter to exclude instances in specific statuses
 * @method void setExcludeStatus(array $ExcludeStatus) Set Use this filter to exclude instances in specific statuses
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Queries by instance ID or IDs. Instance ID is in the format of `tdsql-ow728lmc`. Up to 100 instances can be queried in one request.
     */
    public $InstanceIds;

    /**
     * @var string Search field name. Valid values: instancename (search by instance name), vip (search by private IP), all (search by instance ID, instance name, and private IP).
     */
    public $SearchName;

    /**
     * @var string Search keyword. Fuzzy search is supported. Multiple keywords should be separated by line breaks (`\n`).
     */
    public $SearchKey;

    /**
     * @var array Queries by project ID
     */
    public $ProjectIds;

    /**
     * @var boolean Whether to search by VPC
     */
    public $IsFilterVpc;

    /**
     * @var string VPC ID, which is valid when `IsFilterVpc` is 1
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID, which is valid when `IsFilterVpc` is 1
     */
    public $SubnetId;

    /**
     * @var string Sort by field. Valid values: projectId, createtime, instancename
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: desc, asc
     */
    public $OrderByType;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Queries by `OriginSerialId`
     */
    public $OriginSerialIds;

    /**
     * @var boolean Identifies whether to use the `ExclusterType` field. false: no, true: yes
     */
    public $IsFilterExcluster;

    /**
     * @var integer Instance cluster type. 1: non-dedicated cluster, 2: dedicated cluster, 0: all
     */
    public $ExclusterType;

    /**
     * @var array Filters instances by dedicated cluster ID in the format of `dbdc-4ih6uct9`
     */
    public $ExclusterIds;

    /**
     * @var array Tag key used in queries
     */
    public $TagKeys;

    /**
     * @var string Instance types used in filtering. Valid values: 1 (dedicated instance), 2 (primary instance), 3 (disaster recovery instance). Multiple values should be separated by commas.
     */
    public $FilterInstanceType;

    /**
     * @var array Use this filter to include instances in specific statuses
     */
    public $Status;

    /**
     * @var array Use this filter to exclude instances in specific statuses
     */
    public $ExcludeStatus;

    /**
     * @param array $InstanceIds Queries by instance ID or IDs. Instance ID is in the format of `tdsql-ow728lmc`. Up to 100 instances can be queried in one request.
     * @param string $SearchName Search field name. Valid values: instancename (search by instance name), vip (search by private IP), all (search by instance ID, instance name, and private IP).
     * @param string $SearchKey Search keyword. Fuzzy search is supported. Multiple keywords should be separated by line breaks (`\n`).
     * @param array $ProjectIds Queries by project ID
     * @param boolean $IsFilterVpc Whether to search by VPC
     * @param string $VpcId VPC ID, which is valid when `IsFilterVpc` is 1
     * @param string $SubnetId VPC subnet ID, which is valid when `IsFilterVpc` is 1
     * @param string $OrderBy Sort by field. Valid values: projectId, createtime, instancename
     * @param string $OrderByType Sorting order. Valid values: desc, asc
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
     * @param array $OriginSerialIds Queries by `OriginSerialId`
     * @param boolean $IsFilterExcluster Identifies whether to use the `ExclusterType` field. false: no, true: yes
     * @param integer $ExclusterType Instance cluster type. 1: non-dedicated cluster, 2: dedicated cluster, 0: all
     * @param array $ExclusterIds Filters instances by dedicated cluster ID in the format of `dbdc-4ih6uct9`
     * @param array $TagKeys Tag key used in queries
     * @param string $FilterInstanceType Instance types used in filtering. Valid values: 1 (dedicated instance), 2 (primary instance), 3 (disaster recovery instance). Multiple values should be separated by commas.
     * @param array $Status Use this filter to include instances in specific statuses
     * @param array $ExcludeStatus Use this filter to exclude instances in specific statuses
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

        if (array_key_exists("SearchName",$param) and $param["SearchName"] !== null) {
            $this->SearchName = $param["SearchName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("IsFilterVpc",$param) and $param["IsFilterVpc"] !== null) {
            $this->IsFilterVpc = $param["IsFilterVpc"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OriginSerialIds",$param) and $param["OriginSerialIds"] !== null) {
            $this->OriginSerialIds = $param["OriginSerialIds"];
        }

        if (array_key_exists("IsFilterExcluster",$param) and $param["IsFilterExcluster"] !== null) {
            $this->IsFilterExcluster = $param["IsFilterExcluster"];
        }

        if (array_key_exists("ExclusterType",$param) and $param["ExclusterType"] !== null) {
            $this->ExclusterType = $param["ExclusterType"];
        }

        if (array_key_exists("ExclusterIds",$param) and $param["ExclusterIds"] !== null) {
            $this->ExclusterIds = $param["ExclusterIds"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("FilterInstanceType",$param) and $param["FilterInstanceType"] !== null) {
            $this->FilterInstanceType = $param["FilterInstanceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExcludeStatus",$param) and $param["ExcludeStatus"] !== null) {
            $this->ExcludeStatus = $param["ExcludeStatus"];
        }
    }
}
