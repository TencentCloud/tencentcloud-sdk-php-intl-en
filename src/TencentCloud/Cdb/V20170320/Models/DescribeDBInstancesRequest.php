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
 * DescribeDBInstances request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getInstanceTypes() Obtain <p>Instance type. Valid values: 1 - Primary instance, 2 - Disaster recovery instance, 3 - Read-only instance.</p>
 * @method void setInstanceTypes(array $InstanceTypes) Set <p>Instance type. Valid values: 1 - Primary instance, 2 - Disaster recovery instance, 3 - Read-only instance.</p>
 * @method array getVips() Obtain <p>Private IP address of the instance.</p>
 * @method void setVips(array $Vips) Set <p>Private IP address of the instance.</p>
 * @method array getStatus() Obtain <p>Instance status. Valid values:<br>0 - Creating<br>1 - Running<br>4 - Isolation operation in progress<br>5 - Isolated (can be restored from the Recycle Bin)</p>
 * @method void setStatus(array $Status) Set <p>Instance status. Valid values:<br>0 - Creating<br>1 - Running<br>4 - Isolation operation in progress<br>5 - Isolated (can be restored from the Recycle Bin)</p>
 * @method integer getOffset() Obtain <p>Offset. Default value is 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value is 0.</p>
 * @method integer getLimit() Obtain <p>Number of items returned per request. Default value: 20. Maximum value: 2000.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items returned per request. Default value: 20. Maximum value: 2000.</p>
 * @method string getSecurityGroupId() Obtain <p>Security group ID. When using security group ID as the filter condition, the WithSecurityGroup parameter needs to be specified as 1.</p>
 * @method void setSecurityGroupId(string $SecurityGroupId) Set <p>Security group ID. When using security group ID as the filter condition, the WithSecurityGroup parameter needs to be specified as 1.</p>
 * @method array getPayTypes() Obtain <p>Payment type. Valid values: 0 - yearly/monthly subscription; 1 - bill by hour.</p>
 * @method void setPayTypes(array $PayTypes) Set <p>Payment type. Valid values: 0 - yearly/monthly subscription; 1 - bill by hour.</p>
 * @method array getInstanceNames() Obtain <p>Instance name.</p>
 * @method void setInstanceNames(array $InstanceNames) Set <p>Instance name.</p>
 * @method array getTaskStatus() Obtain <p>Instance task status, possible values:<br>0 - No tasks<br>1 - Upgrading<br>2 - Data import in progress<br>3 - Enabling Slave<br>4 - Enabling public network access<br>5 - Batch operation in progress<br>6 - Rolling back<br>7 - Disabling public network access<br>8 - Password change in progress<br>9 - Renaming instance<br>10 - Restarting<br>12 - Self-built migration in progress<br>13 - Deleting database table<br>14 - Disaster recovery instance creation sync in progress<br>15 - Upgrade pending switch<br>16 - Upgrade and switch in progress<br>17 - Switch completed<br>19 - Parameter setting pending execution<br>34 - Node in-place upgrade to be executed</p>
 * @method void setTaskStatus(array $TaskStatus) Set <p>Instance task status, possible values:<br>0 - No tasks<br>1 - Upgrading<br>2 - Data import in progress<br>3 - Enabling Slave<br>4 - Enabling public network access<br>5 - Batch operation in progress<br>6 - Rolling back<br>7 - Disabling public network access<br>8 - Password change in progress<br>9 - Renaming instance<br>10 - Restarting<br>12 - Self-built migration in progress<br>13 - Deleting database table<br>14 - Disaster recovery instance creation sync in progress<br>15 - Upgrade pending switch<br>16 - Upgrade and switch in progress<br>17 - Switch completed<br>19 - Parameter setting pending execution<br>34 - Node in-place upgrade to be executed</p>
 * @method array getEngineVersions() Obtain <p>Database engine version of the instance. Possible values: 5.1, 5.5, 5.6, and 5.7.</p>
 * @method void setEngineVersions(array $EngineVersions) Set <p>Database engine version of the instance. Possible values: 5.1, 5.5, 5.6, and 5.7.</p>
 * @method array getVpcIds() Obtain <p>VPC ID.</p>
 * @method void setVpcIds(array $VpcIds) Set <p>VPC ID.</p>
 * @method array getZoneIds() Obtain <p>Availability zone ID.</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>Availability zone ID.</p>
 * @method array getSubnetIds() Obtain <p>Subnet ID.</p>
 * @method void setSubnetIds(array $SubnetIds) Set <p>Subnet ID.</p>
 * @method array getCdbErrors() Obtain <p>Whether to set the lock flag. Available values: 0 - not lock, 1 - lock. Default is 0.</p>
 * @method void setCdbErrors(array $CdbErrors) Set <p>Whether to set the lock flag. Available values: 0 - not lock, 1 - lock. Default is 0.</p>
 * @method string getOrderBy() Obtain <p>Sorting field of the returned result set. Currently supports: "instanceId", "instanceName", "createTime", and "deadlineTime".</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field of the returned result set. Currently supports: "instanceId", "instanceName", "createTime", and "deadlineTime".</p>
 * @method string getOrderDirection() Obtain <p>Sorting method of the returned result set. Valid values: "ASC" - ascending order; "DESC" - descending order. The default is "DESC".</p>
 * @method void setOrderDirection(string $OrderDirection) Set <p>Sorting method of the returned result set. Valid values: "ASC" - ascending order; "DESC" - descending order. The default is "DESC".</p>
 * @method integer getWithSecurityGroup() Obtain <p>Whether to use security group ID as the filter condition.<br>Description: 0 indicates no, 1 indicates yes.</p>
 * @method void setWithSecurityGroup(integer $WithSecurityGroup) Set <p>Whether to use security group ID as the filter condition.<br>Description: 0 indicates no, 1 indicates yes.</p>
 * @method integer getWithExCluster() Obtain <p>Whether the exclusive cluster detail is included. Value range: 0 - not contained, 1 - contained.</p>
 * @method void setWithExCluster(integer $WithExCluster) Set <p>Whether the exclusive cluster detail is included. Value range: 0 - not contained, 1 - contained.</p>
 * @method string getExClusterId() Obtain <p>Dedicated cluster ID.</p>
 * @method void setExClusterId(string $ExClusterId) Set <p>Dedicated cluster ID.</p>
 * @method array getInstanceIds() Obtain <p>Instance ID.</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Instance ID.</p>
 * @method integer getInitFlag() Obtain <p>Initialization flag. Valid values: 0 - uninitialized, 1 - initialized.</p>
 * @method void setInitFlag(integer $InitFlag) Set <p>Initialization flag. Valid values: 0 - uninitialized, 1 - initialized.</p>
 * @method integer getWithDr() Obtain <p>Whether the corresponding instance in the disaster recovery relationship is included. Valid values: 0 - excluding, 1 - included. Default value: 1. If pulling the primary instance, the data of the disaster recovery relationship is in the DrInfo field. If pulling the disaster recovery instance, the data of the disaster recovery relationship is in the MasterInfo field. The disaster recovery relationship only contains partial basic data. Detailed data must be pulled manually via the interface.</p>
 * @method void setWithDr(integer $WithDr) Set <p>Whether the corresponding instance in the disaster recovery relationship is included. Valid values: 0 - excluding, 1 - included. Default value: 1. If pulling the primary instance, the data of the disaster recovery relationship is in the DrInfo field. If pulling the disaster recovery instance, the data of the disaster recovery relationship is in the MasterInfo field. The disaster recovery relationship only contains partial basic data. Detailed data must be pulled manually via the interface.</p>
 * @method integer getWithRo() Obtain <p>Whether it contains read-only instances. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
 * @method void setWithRo(integer $WithRo) Set <p>Whether it contains read-only instances. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
 * @method integer getWithMaster() Obtain <p>Whether the primary instance is included. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
 * @method void setWithMaster(integer $WithMaster) Set <p>Whether the primary instance is included. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
 * @method array getDeployGroupIds() Obtain <p>Placement group ID list.</p>
 * @method void setDeployGroupIds(array $DeployGroupIds) Set <p>Placement group ID list.</p>
 * @method array getTagKeysForSearch() Obtain <p>Filter by tag key.</p>
 * @method void setTagKeysForSearch(array $TagKeysForSearch) Set <p>Filter by tag key.</p>
 * @method array getCageIds() Obtain <p>Financial Enclosure ID.</p>
 * @method void setCageIds(array $CageIds) Set <p>Financial Enclosure ID.</p>
 * @method array getTagValues() Obtain <p>Tag value</p>
 * @method void setTagValues(array $TagValues) Set <p>Tag value</p>
 * @method array getUniqueVpcIds() Obtain <p>Character type VPC ID</p>
 * @method void setUniqueVpcIds(array $UniqueVpcIds) Set <p>Character type VPC ID</p>
 * @method array getUniqSubnetIds() Obtain <p>VPC character type subnetId</p>
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set <p>VPC character type subnetId</p>
 * @method array getTags() Obtain <p>Tag key value<br>Please note, tags of the instance being created are unable to query.</p>
 * @method void setTags(array $Tags) Set <p>Tag key value<br>Please note, tags of the instance being created are unable to query.</p>
 * @method array getProxyVips() Obtain <p>Database proxy IP.</p>
 * @method void setProxyVips(array $ProxyVips) Set <p>Database proxy IP.</p>
 * @method array getProxyIds() Obtain <p>Database proxy ID.</p>
 * @method void setProxyIds(array $ProxyIds) Set <p>Database proxy ID.</p>
 * @method array getEngineTypes() Obtain <p>Database engine type. Valid values: InnoDB, RocksDB.</p>
 * @method void setEngineTypes(array $EngineTypes) Set <p>Database engine type. Valid values: InnoDB, RocksDB.</p>
 * @method boolean getQueryClusterInfo() Obtain <p>Whether to obtain the Cluster Edition instance node information. Valid values: true or false. The default value is false.</p>
 * @method void setQueryClusterInfo(boolean $QueryClusterInfo) Set <p>Whether to obtain the Cluster Edition instance node information. Valid values: true or false. The default value is false.</p>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array <p>Instance type. Valid values: 1 - Primary instance, 2 - Disaster recovery instance, 3 - Read-only instance.</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>Private IP address of the instance.</p>
     */
    public $Vips;

    /**
     * @var array <p>Instance status. Valid values:<br>0 - Creating<br>1 - Running<br>4 - Isolation operation in progress<br>5 - Isolated (can be restored from the Recycle Bin)</p>
     */
    public $Status;

    /**
     * @var integer <p>Offset. Default value is 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items returned per request. Default value: 20. Maximum value: 2000.</p>
     */
    public $Limit;

    /**
     * @var string <p>Security group ID. When using security group ID as the filter condition, the WithSecurityGroup parameter needs to be specified as 1.</p>
     */
    public $SecurityGroupId;

    /**
     * @var array <p>Payment type. Valid values: 0 - yearly/monthly subscription; 1 - bill by hour.</p>
     */
    public $PayTypes;

    /**
     * @var array <p>Instance name.</p>
     */
    public $InstanceNames;

    /**
     * @var array <p>Instance task status, possible values:<br>0 - No tasks<br>1 - Upgrading<br>2 - Data import in progress<br>3 - Enabling Slave<br>4 - Enabling public network access<br>5 - Batch operation in progress<br>6 - Rolling back<br>7 - Disabling public network access<br>8 - Password change in progress<br>9 - Renaming instance<br>10 - Restarting<br>12 - Self-built migration in progress<br>13 - Deleting database table<br>14 - Disaster recovery instance creation sync in progress<br>15 - Upgrade pending switch<br>16 - Upgrade and switch in progress<br>17 - Switch completed<br>19 - Parameter setting pending execution<br>34 - Node in-place upgrade to be executed</p>
     */
    public $TaskStatus;

    /**
     * @var array <p>Database engine version of the instance. Possible values: 5.1, 5.5, 5.6, and 5.7.</p>
     */
    public $EngineVersions;

    /**
     * @var array <p>VPC ID.</p>
     */
    public $VpcIds;

    /**
     * @var array <p>Availability zone ID.</p>
     */
    public $ZoneIds;

    /**
     * @var array <p>Subnet ID.</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>Whether to set the lock flag. Available values: 0 - not lock, 1 - lock. Default is 0.</p>
     */
    public $CdbErrors;

    /**
     * @var string <p>Sorting field of the returned result set. Currently supports: "instanceId", "instanceName", "createTime", and "deadlineTime".</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting method of the returned result set. Valid values: "ASC" - ascending order; "DESC" - descending order. The default is "DESC".</p>
     */
    public $OrderDirection;

    /**
     * @var integer <p>Whether to use security group ID as the filter condition.<br>Description: 0 indicates no, 1 indicates yes.</p>
     */
    public $WithSecurityGroup;

    /**
     * @var integer <p>Whether the exclusive cluster detail is included. Value range: 0 - not contained, 1 - contained.</p>
     */
    public $WithExCluster;

    /**
     * @var string <p>Dedicated cluster ID.</p>
     */
    public $ExClusterId;

    /**
     * @var array <p>Instance ID.</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>Initialization flag. Valid values: 0 - uninitialized, 1 - initialized.</p>
     */
    public $InitFlag;

    /**
     * @var integer <p>Whether the corresponding instance in the disaster recovery relationship is included. Valid values: 0 - excluding, 1 - included. Default value: 1. If pulling the primary instance, the data of the disaster recovery relationship is in the DrInfo field. If pulling the disaster recovery instance, the data of the disaster recovery relationship is in the MasterInfo field. The disaster recovery relationship only contains partial basic data. Detailed data must be pulled manually via the interface.</p>
     */
    public $WithDr;

    /**
     * @var integer <p>Whether it contains read-only instances. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
     */
    public $WithRo;

    /**
     * @var integer <p>Whether the primary instance is included. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
     */
    public $WithMaster;

    /**
     * @var array <p>Placement group ID list.</p>
     */
    public $DeployGroupIds;

    /**
     * @var array <p>Filter by tag key.</p>
     */
    public $TagKeysForSearch;

    /**
     * @var array <p>Financial Enclosure ID.</p>
     */
    public $CageIds;

    /**
     * @var array <p>Tag value</p>
     */
    public $TagValues;

    /**
     * @var array <p>Character type VPC ID</p>
     */
    public $UniqueVpcIds;

    /**
     * @var array <p>VPC character type subnetId</p>
     */
    public $UniqSubnetIds;

    /**
     * @var array <p>Tag key value<br>Please note, tags of the instance being created are unable to query.</p>
     */
    public $Tags;

    /**
     * @var array <p>Database proxy IP.</p>
     */
    public $ProxyVips;

    /**
     * @var array <p>Database proxy ID.</p>
     */
    public $ProxyIds;

    /**
     * @var array <p>Database engine type. Valid values: InnoDB, RocksDB.</p>
     */
    public $EngineTypes;

    /**
     * @var boolean <p>Whether to obtain the Cluster Edition instance node information. Valid values: true or false. The default value is false.</p>
     */
    public $QueryClusterInfo;

    /**
     * @param integer $ProjectId Project ID.
     * @param array $InstanceTypes <p>Instance type. Valid values: 1 - Primary instance, 2 - Disaster recovery instance, 3 - Read-only instance.</p>
     * @param array $Vips <p>Private IP address of the instance.</p>
     * @param array $Status <p>Instance status. Valid values:<br>0 - Creating<br>1 - Running<br>4 - Isolation operation in progress<br>5 - Isolated (can be restored from the Recycle Bin)</p>
     * @param integer $Offset <p>Offset. Default value is 0.</p>
     * @param integer $Limit <p>Number of items returned per request. Default value: 20. Maximum value: 2000.</p>
     * @param string $SecurityGroupId <p>Security group ID. When using security group ID as the filter condition, the WithSecurityGroup parameter needs to be specified as 1.</p>
     * @param array $PayTypes <p>Payment type. Valid values: 0 - yearly/monthly subscription; 1 - bill by hour.</p>
     * @param array $InstanceNames <p>Instance name.</p>
     * @param array $TaskStatus <p>Instance task status, possible values:<br>0 - No tasks<br>1 - Upgrading<br>2 - Data import in progress<br>3 - Enabling Slave<br>4 - Enabling public network access<br>5 - Batch operation in progress<br>6 - Rolling back<br>7 - Disabling public network access<br>8 - Password change in progress<br>9 - Renaming instance<br>10 - Restarting<br>12 - Self-built migration in progress<br>13 - Deleting database table<br>14 - Disaster recovery instance creation sync in progress<br>15 - Upgrade pending switch<br>16 - Upgrade and switch in progress<br>17 - Switch completed<br>19 - Parameter setting pending execution<br>34 - Node in-place upgrade to be executed</p>
     * @param array $EngineVersions <p>Database engine version of the instance. Possible values: 5.1, 5.5, 5.6, and 5.7.</p>
     * @param array $VpcIds <p>VPC ID.</p>
     * @param array $ZoneIds <p>Availability zone ID.</p>
     * @param array $SubnetIds <p>Subnet ID.</p>
     * @param array $CdbErrors <p>Whether to set the lock flag. Available values: 0 - not lock, 1 - lock. Default is 0.</p>
     * @param string $OrderBy <p>Sorting field of the returned result set. Currently supports: "instanceId", "instanceName", "createTime", and "deadlineTime".</p>
     * @param string $OrderDirection <p>Sorting method of the returned result set. Valid values: "ASC" - ascending order; "DESC" - descending order. The default is "DESC".</p>
     * @param integer $WithSecurityGroup <p>Whether to use security group ID as the filter condition.<br>Description: 0 indicates no, 1 indicates yes.</p>
     * @param integer $WithExCluster <p>Whether the exclusive cluster detail is included. Value range: 0 - not contained, 1 - contained.</p>
     * @param string $ExClusterId <p>Dedicated cluster ID.</p>
     * @param array $InstanceIds <p>Instance ID.</p>
     * @param integer $InitFlag <p>Initialization flag. Valid values: 0 - uninitialized, 1 - initialized.</p>
     * @param integer $WithDr <p>Whether the corresponding instance in the disaster recovery relationship is included. Valid values: 0 - excluding, 1 - included. Default value: 1. If pulling the primary instance, the data of the disaster recovery relationship is in the DrInfo field. If pulling the disaster recovery instance, the data of the disaster recovery relationship is in the MasterInfo field. The disaster recovery relationship only contains partial basic data. Detailed data must be pulled manually via the interface.</p>
     * @param integer $WithRo <p>Whether it contains read-only instances. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
     * @param integer $WithMaster <p>Whether the primary instance is included. Valid values: 0 - does not include, 1 - includes. Default value is 1.</p>
     * @param array $DeployGroupIds <p>Placement group ID list.</p>
     * @param array $TagKeysForSearch <p>Filter by tag key.</p>
     * @param array $CageIds <p>Financial Enclosure ID.</p>
     * @param array $TagValues <p>Tag value</p>
     * @param array $UniqueVpcIds <p>Character type VPC ID</p>
     * @param array $UniqSubnetIds <p>VPC character type subnetId</p>
     * @param array $Tags <p>Tag key value<br>Please note, tags of the instance being created are unable to query.</p>
     * @param array $ProxyVips <p>Database proxy IP.</p>
     * @param array $ProxyIds <p>Database proxy ID.</p>
     * @param array $EngineTypes <p>Database engine type. Valid values: InnoDB, RocksDB.</p>
     * @param boolean $QueryClusterInfo <p>Whether to obtain the Cluster Edition instance node information. Valid values: true or false. The default value is false.</p>
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

        if (array_key_exists("QueryClusterInfo",$param) and $param["QueryClusterInfo"] !== null) {
            $this->QueryClusterInfo = $param["QueryClusterInfo"];
        }
    }
}
