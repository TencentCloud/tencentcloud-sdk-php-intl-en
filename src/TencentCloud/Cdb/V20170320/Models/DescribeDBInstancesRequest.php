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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getInstanceTypes() Obtain Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only).
 * @method void setInstanceTypes(array $InstanceTypes) Set Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only).
 * @method array getVips() Obtain Private IP address of the instance.
 * @method void setVips(array $Vips) Set Private IP address of the instance.
 * @method array getStatus() Obtain Instance status. Valid values: <br>`0` (creating) <br>`1` (running) <br>`4` (isolating) <br>`5` (isolated; the instance can be restored and started in the recycle bin)
 * @method void setStatus(array $Status) Set Instance status. Valid values: <br>`0` (creating) <br>`1` (running) <br>`4` (isolating) <br>`5` (isolated; the instance can be restored and started in the recycle bin)
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
 * @method string getSecurityGroupId() Obtain Security group ID. When it is used as a filter, the `WithSecurityGroup` parameter should be set to 1.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID. When it is used as a filter, the `WithSecurityGroup` parameter should be set to 1.
 * @method array getPayTypes() Obtain Billing method. Value range: 0 (monthly subscribed), 1 (hourly).
 * @method void setPayTypes(array $PayTypes) Set Billing method. Value range: 0 (monthly subscribed), 1 (hourly).
 * @method array getInstanceNames() Obtain Instance name.
 * @method void setInstanceNames(array $InstanceNames) Set Instance name.
 * @method array getTaskStatus() Obtain Instance task status. Valid values: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - enabling secondary instance access <br>4 - enabling public network access <br>5 - batch operation in progress <br>6 - rolling back <br>7 - disabling public network access <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built database <br>13 - dropping tables <br>14 - Disaster recovery instance creating sync task <br>15 - waiting for switch <br>16 - switching <br>17 - upgrade and switch completed <br>19 - parameter settings to be executed
 * @method void setTaskStatus(array $TaskStatus) Set Instance task status. Valid values: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - enabling secondary instance access <br>4 - enabling public network access <br>5 - batch operation in progress <br>6 - rolling back <br>7 - disabling public network access <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built database <br>13 - dropping tables <br>14 - Disaster recovery instance creating sync task <br>15 - waiting for switch <br>16 - switching <br>17 - upgrade and switch completed <br>19 - parameter settings to be executed
 * @method array getEngineVersions() Obtain Version of the instance database engine. Value range: 5.1, 5.5, 5.6, 5.7.
 * @method void setEngineVersions(array $EngineVersions) Set Version of the instance database engine. Value range: 5.1, 5.5, 5.6, 5.7.
 * @method array getVpcIds() Obtain VPC ID.
 * @method void setVpcIds(array $VpcIds) Set VPC ID.
 * @method array getZoneIds() Obtain AZ ID.
 * @method void setZoneIds(array $ZoneIds) Set AZ ID.
 * @method array getSubnetIds() Obtain Subnet ID.
 * @method void setSubnetIds(array $SubnetIds) Set Subnet ID.
 * @method array getCdbErrors() Obtain Whether to lock disk write. Valid values: `0`(unlock), `1`(lock). Default value: 0.
 * @method void setCdbErrors(array $CdbErrors) Set Whether to lock disk write. Valid values: `0`(unlock), `1`(lock). Default value: 0.
 * @method string getOrderBy() Obtain Sort by field of the returned result set. Currently, supported values include "InstanceId", "InstanceName", "CreateTime", and "DeadlineTime".
 * @method void setOrderBy(string $OrderBy) Set Sort by field of the returned result set. Currently, supported values include "InstanceId", "InstanceName", "CreateTime", and "DeadlineTime".
 * @method string getOrderDirection() Obtain Sorting method of the returned result set. Currently, "ASC" or "DESC" is supported.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting method of the returned result set. Currently, "ASC" or "DESC" is supported.
 * @method integer getWithSecurityGroup() Obtain Whether security group ID is used as a filter
 * @method void setWithSecurityGroup(integer $WithSecurityGroup) Set Whether security group ID is used as a filter
 * @method integer getWithExCluster() Obtain Whether dedicated cluster details are included. Value range: 0 (not included), 1 (included)
 * @method void setWithExCluster(integer $WithExCluster) Set Whether dedicated cluster details are included. Value range: 0 (not included), 1 (included)
 * @method string getExClusterId() Obtain Exclusive cluster ID.
 * @method void setExClusterId(string $ExClusterId) Set Exclusive cluster ID.
 * @method array getInstanceIds() Obtain Instance ID.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID.
 * @method integer getInitFlag() Obtain Initialization flag. Value range: 0 (not initialized), 1 (initialized).
 * @method void setInitFlag(integer $InitFlag) Set Initialization flag. Value range: 0 (not initialized), 1 (initialized).
 * @method integer getWithDr() Obtain Whether instances corresponding to the disaster recovery relationship are included. Valid values: 0 (not included), 1 (included). Default value: 1. If a primary instance is pulled, the data of the disaster recovery relationship will be in the `DrInfo` field. If a disaster recovery instance is pulled, the data of the disaster recovery relationship will be in the `MasterInfo` field. The disaster recovery relationship contains only partial basic data. To get the detailed data, you need to call an API to pull it.
 * @method void setWithDr(integer $WithDr) Set Whether instances corresponding to the disaster recovery relationship are included. Valid values: 0 (not included), 1 (included). Default value: 1. If a primary instance is pulled, the data of the disaster recovery relationship will be in the `DrInfo` field. If a disaster recovery instance is pulled, the data of the disaster recovery relationship will be in the `MasterInfo` field. The disaster recovery relationship contains only partial basic data. To get the detailed data, you need to call an API to pull it.
 * @method integer getWithRo() Obtain Whether read-only instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
 * @method void setWithRo(integer $WithRo) Set Whether read-only instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
 * @method integer getWithMaster() Obtain Whether primary instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
 * @method void setWithMaster(integer $WithMaster) Set Whether primary instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
 * @method array getDeployGroupIds() Obtain Placement group ID list.
 * @method void setDeployGroupIds(array $DeployGroupIds) Set Placement group ID list.
 * @method array getTagKeysForSearch() Obtain Whether to use the tag key as a filter condition
 * @method void setTagKeysForSearch(array $TagKeysForSearch) Set Whether to use the tag key as a filter condition
 * @method array getCageIds() Obtain Financial cage IDs.
 * @method void setCageIds(array $CageIds) Set Financial cage IDs.
 * @method array getTagValues() Obtain Tag value
 * @method void setTagValues(array $TagValues) Set Tag value
 * @method array getUniqueVpcIds() Obtain VPC character vpcId
 * @method void setUniqueVpcIds(array $UniqueVpcIds) Set VPC character vpcId
 * @method array getUniqSubnetIds() Obtain VPC character subnetId
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set VPC character subnetId
 * @method array getTags() Obtain Tag key value
 * @method void setTags(array $Tags) Set Tag key value
 * @method array getProxyVips() Obtain Database proxy IP
 * @method void setProxyVips(array $ProxyVips) Set Database proxy IP
 * @method array getProxyIds() Obtain Database proxy ID
 * @method void setProxyIds(array $ProxyIds) Set Database proxy ID
 * @method array getEngineTypes() Obtain Database engine type
 * @method void setEngineTypes(array $EngineTypes) Set Database engine type
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only).
     */
    public $InstanceTypes;

    /**
     * @var array Private IP address of the instance.
     */
    public $Vips;

    /**
     * @var array Instance status. Valid values: <br>`0` (creating) <br>`1` (running) <br>`4` (isolating) <br>`5` (isolated; the instance can be restored and started in the recycle bin)
     */
    public $Status;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
     */
    public $Limit;

    /**
     * @var string Security group ID. When it is used as a filter, the `WithSecurityGroup` parameter should be set to 1.
     */
    public $SecurityGroupId;

    /**
     * @var array Billing method. Value range: 0 (monthly subscribed), 1 (hourly).
     */
    public $PayTypes;

    /**
     * @var array Instance name.
     */
    public $InstanceNames;

    /**
     * @var array Instance task status. Valid values: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - enabling secondary instance access <br>4 - enabling public network access <br>5 - batch operation in progress <br>6 - rolling back <br>7 - disabling public network access <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built database <br>13 - dropping tables <br>14 - Disaster recovery instance creating sync task <br>15 - waiting for switch <br>16 - switching <br>17 - upgrade and switch completed <br>19 - parameter settings to be executed
     */
    public $TaskStatus;

    /**
     * @var array Version of the instance database engine. Value range: 5.1, 5.5, 5.6, 5.7.
     */
    public $EngineVersions;

    /**
     * @var array VPC ID.
     */
    public $VpcIds;

    /**
     * @var array AZ ID.
     */
    public $ZoneIds;

    /**
     * @var array Subnet ID.
     */
    public $SubnetIds;

    /**
     * @var array Whether to lock disk write. Valid values: `0`(unlock), `1`(lock). Default value: 0.
     */
    public $CdbErrors;

    /**
     * @var string Sort by field of the returned result set. Currently, supported values include "InstanceId", "InstanceName", "CreateTime", and "DeadlineTime".
     */
    public $OrderBy;

    /**
     * @var string Sorting method of the returned result set. Currently, "ASC" or "DESC" is supported.
     */
    public $OrderDirection;

    /**
     * @var integer Whether security group ID is used as a filter
     */
    public $WithSecurityGroup;

    /**
     * @var integer Whether dedicated cluster details are included. Value range: 0 (not included), 1 (included)
     */
    public $WithExCluster;

    /**
     * @var string Exclusive cluster ID.
     */
    public $ExClusterId;

    /**
     * @var array Instance ID.
     */
    public $InstanceIds;

    /**
     * @var integer Initialization flag. Value range: 0 (not initialized), 1 (initialized).
     */
    public $InitFlag;

    /**
     * @var integer Whether instances corresponding to the disaster recovery relationship are included. Valid values: 0 (not included), 1 (included). Default value: 1. If a primary instance is pulled, the data of the disaster recovery relationship will be in the `DrInfo` field. If a disaster recovery instance is pulled, the data of the disaster recovery relationship will be in the `MasterInfo` field. The disaster recovery relationship contains only partial basic data. To get the detailed data, you need to call an API to pull it.
     */
    public $WithDr;

    /**
     * @var integer Whether read-only instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
     */
    public $WithRo;

    /**
     * @var integer Whether primary instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
     */
    public $WithMaster;

    /**
     * @var array Placement group ID list.
     */
    public $DeployGroupIds;

    /**
     * @var array Whether to use the tag key as a filter condition
     */
    public $TagKeysForSearch;

    /**
     * @var array Financial cage IDs.
     */
    public $CageIds;

    /**
     * @var array Tag value
     */
    public $TagValues;

    /**
     * @var array VPC character vpcId
     */
    public $UniqueVpcIds;

    /**
     * @var array VPC character subnetId
     */
    public $UniqSubnetIds;

    /**
     * @var array Tag key value
     */
    public $Tags;

    /**
     * @var array Database proxy IP
     */
    public $ProxyVips;

    /**
     * @var array Database proxy ID
     */
    public $ProxyIds;

    /**
     * @var array Database engine type
     */
    public $EngineTypes;

    /**
     * @param integer $ProjectId Project ID.
     * @param array $InstanceTypes Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only).
     * @param array $Vips Private IP address of the instance.
     * @param array $Status Instance status. Valid values: <br>`0` (creating) <br>`1` (running) <br>`4` (isolating) <br>`5` (isolated; the instance can be restored and started in the recycle bin)
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
     * @param string $SecurityGroupId Security group ID. When it is used as a filter, the `WithSecurityGroup` parameter should be set to 1.
     * @param array $PayTypes Billing method. Value range: 0 (monthly subscribed), 1 (hourly).
     * @param array $InstanceNames Instance name.
     * @param array $TaskStatus Instance task status. Valid values: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - enabling secondary instance access <br>4 - enabling public network access <br>5 - batch operation in progress <br>6 - rolling back <br>7 - disabling public network access <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built database <br>13 - dropping tables <br>14 - Disaster recovery instance creating sync task <br>15 - waiting for switch <br>16 - switching <br>17 - upgrade and switch completed <br>19 - parameter settings to be executed
     * @param array $EngineVersions Version of the instance database engine. Value range: 5.1, 5.5, 5.6, 5.7.
     * @param array $VpcIds VPC ID.
     * @param array $ZoneIds AZ ID.
     * @param array $SubnetIds Subnet ID.
     * @param array $CdbErrors Whether to lock disk write. Valid values: `0`(unlock), `1`(lock). Default value: 0.
     * @param string $OrderBy Sort by field of the returned result set. Currently, supported values include "InstanceId", "InstanceName", "CreateTime", and "DeadlineTime".
     * @param string $OrderDirection Sorting method of the returned result set. Currently, "ASC" or "DESC" is supported.
     * @param integer $WithSecurityGroup Whether security group ID is used as a filter
     * @param integer $WithExCluster Whether dedicated cluster details are included. Value range: 0 (not included), 1 (included)
     * @param string $ExClusterId Exclusive cluster ID.
     * @param array $InstanceIds Instance ID.
     * @param integer $InitFlag Initialization flag. Value range: 0 (not initialized), 1 (initialized).
     * @param integer $WithDr Whether instances corresponding to the disaster recovery relationship are included. Valid values: 0 (not included), 1 (included). Default value: 1. If a primary instance is pulled, the data of the disaster recovery relationship will be in the `DrInfo` field. If a disaster recovery instance is pulled, the data of the disaster recovery relationship will be in the `MasterInfo` field. The disaster recovery relationship contains only partial basic data. To get the detailed data, you need to call an API to pull it.
     * @param integer $WithRo Whether read-only instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
     * @param integer $WithMaster Whether primary instances are included. Valid values: 0 (not included), 1 (included). Default value: 1.
     * @param array $DeployGroupIds Placement group ID list.
     * @param array $TagKeysForSearch Whether to use the tag key as a filter condition
     * @param array $CageIds Financial cage IDs.
     * @param array $TagValues Tag value
     * @param array $UniqueVpcIds VPC character vpcId
     * @param array $UniqSubnetIds VPC character subnetId
     * @param array $Tags Tag key value
     * @param array $ProxyVips Database proxy IP
     * @param array $ProxyIds Database proxy ID
     * @param array $EngineTypes Database engine type
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("PayTypes",$param) and $param["PayTypes"] !== null) {
            $this->PayTypes = $param["PayTypes"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("CdbErrors",$param) and $param["CdbErrors"] !== null) {
            $this->CdbErrors = $param["CdbErrors"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("WithSecurityGroup",$param) and $param["WithSecurityGroup"] !== null) {
            $this->WithSecurityGroup = $param["WithSecurityGroup"];
        }

        if (array_key_exists("WithExCluster",$param) and $param["WithExCluster"] !== null) {
            $this->WithExCluster = $param["WithExCluster"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("WithDr",$param) and $param["WithDr"] !== null) {
            $this->WithDr = $param["WithDr"];
        }

        if (array_key_exists("WithRo",$param) and $param["WithRo"] !== null) {
            $this->WithRo = $param["WithRo"];
        }

        if (array_key_exists("WithMaster",$param) and $param["WithMaster"] !== null) {
            $this->WithMaster = $param["WithMaster"];
        }

        if (array_key_exists("DeployGroupIds",$param) and $param["DeployGroupIds"] !== null) {
            $this->DeployGroupIds = $param["DeployGroupIds"];
        }

        if (array_key_exists("TagKeysForSearch",$param) and $param["TagKeysForSearch"] !== null) {
            $this->TagKeysForSearch = $param["TagKeysForSearch"];
        }

        if (array_key_exists("CageIds",$param) and $param["CageIds"] !== null) {
            $this->CageIds = $param["CageIds"];
        }

        if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
            $this->TagValues = $param["TagValues"];
        }

        if (array_key_exists("UniqueVpcIds",$param) and $param["UniqueVpcIds"] !== null) {
            $this->UniqueVpcIds = $param["UniqueVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProxyVips",$param) and $param["ProxyVips"] !== null) {
            $this->ProxyVips = $param["ProxyVips"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }
    }
}
