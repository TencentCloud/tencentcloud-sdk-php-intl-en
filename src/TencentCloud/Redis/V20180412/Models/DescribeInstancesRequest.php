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
 * @method integer getLimit() Obtain Size of the instance list. If no value is specified for this parameter, it will be 20 by default. If the specified value is greater than the `DescribeInstancesPageLimit` configuration item in the specific configuration file `etc/conf/component.properties` (which is 1,000 by default if the configuration cannot be read), then the configuration item shall prevail.
 * @method void setLimit(integer $Limit) Set Size of the instance list. If no value is specified for this parameter, it will be 20 by default. If the specified value is greater than the `DescribeInstancesPageLimit` configuration item in the specific configuration file `etc/conf/component.properties` (which is 1,000 by default if the configuration cannot be read), then the configuration item shall prevail.
 * @method integer getOffset() Obtain Offset, which is an integral multiple of `Limit`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integral multiple of `Limit`.
 * @method string getInstanceId() Obtain Instance ID, such as crs-6ubhgouj
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as crs-6ubhgouj
 * @method string getOrderBy() Obtain Enumerated values: projectId, createtime, instancename, type, curDeadline
 * @method void setOrderBy(string $OrderBy) Set Enumerated values: projectId, createtime, instancename, type, curDeadline
 * @method integer getOrderType() Obtain 1: reverse; 0: sequential; reverse by default
 * @method void setOrderType(integer $OrderType) Set 1: reverse; 0: sequential; reverse by default
 * @method array getVpcIds() Obtain Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
 * @method void setVpcIds(array $VpcIds) Set Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
 * @method array getSubnetIds() Obtain Array of subnet IDs such as 56854. The array subscript starts from 0.
 * @method void setSubnetIds(array $SubnetIds) Set Array of subnet IDs such as 56854. The array subscript starts from 0.
 * @method array getProjectIds() Obtain Array of project IDs. The array subscript starts from 0.
 * @method void setProjectIds(array $ProjectIds) Set Array of project IDs. The array subscript starts from 0.
 * @method string getSearchKey() Obtain ID of the instance to be searched for.
 * @method void setSearchKey(string $SearchKey) Set ID of the instance to be searched for.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method array getUniqVpcIds() Obtain Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
 * @method void setUniqVpcIds(array $UniqVpcIds) Set Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
 * @method array getUniqSubnetIds() Obtain Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0.
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0.
 * @method array getRegionIds() Obtain Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`.
 * @method void setRegionIds(array $RegionIds) Set Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`.
 * @method array getStatus() Obtain Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method void setStatus(array $Status) Set Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method integer getTypeVersion() Obtain Type edition. 1: Standalone Edition; 2: Master-Replica Edition; 3: Cluster Edition
 * @method void setTypeVersion(integer $TypeVersion) Set Type edition. 1: Standalone Edition; 2: Master-Replica Edition; 3: Cluster Edition
 * @method string getEngineName() Obtain Engine information: Redis-2.8, Redis-4.0, CKV
 * @method void setEngineName(string $EngineName) Set Engine information: Redis-2.8, Redis-4.0, CKV
 * @method array getAutoRenew() Obtain Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method void setAutoRenew(array $AutoRenew) Set Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method string getBillingMode() Obtain Billing mode. postpaid: pay-as-you-go; prepaid: monthly subscription
 * @method void setBillingMode(string $BillingMode) Set Billing mode. postpaid: pay-as-you-go; prepaid: monthly subscription
 * @method integer getType() Obtain Instance type. 1: legacy Redis Cluster Edition, 2: Redis 2.8 Master-Replica Edition, 3: CKV Master-Replica Edition, 4: CKV Cluster Edition, 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Replica Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Replica Edition, 9: Redis 5.0 Cluster Edition
 * @method void setType(integer $Type) Set Instance type. 1: legacy Redis Cluster Edition, 2: Redis 2.8 Master-Replica Edition, 3: CKV Master-Replica Edition, 4: CKV Cluster Edition, 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Replica Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Replica Edition, 9: Redis 5.0 Cluster Edition
 * @method array getSearchKeys() Obtain Search keywords, which can be instance ID, instance name, or complete IP.
 * @method void setSearchKeys(array $SearchKeys) Set Search keywords, which can be instance ID, instance name, or complete IP.
 * @method array getTypeList() Obtain Internal parameter, which can be ignored.
 * @method void setTypeList(array $TypeList) Set Internal parameter, which can be ignored.
 * @method string getMonitorVersion() Obtain Internal parameter, which can be ignored.
 * @method void setMonitorVersion(string $MonitorVersion) Set Internal parameter, which can be ignored.
 * @method array getInstanceTags() Obtain Filters resources by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setInstanceTags(array $InstanceTags) Set Filters resources by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method array getTagKeys() Obtain Filters resources by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 * @method void setTagKeys(array $TagKeys) Set Filters resources by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer Size of the instance list. If no value is specified for this parameter, it will be 20 by default. If the specified value is greater than the `DescribeInstancesPageLimit` configuration item in the specific configuration file `etc/conf/component.properties` (which is 1,000 by default if the configuration cannot be read), then the configuration item shall prevail.
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`.
     */
    public $Offset;

    /**
     * @var string Instance ID, such as crs-6ubhgouj
     */
    public $InstanceId;

    /**
     * @var string Enumerated values: projectId, createtime, instancename, type, curDeadline
     */
    public $OrderBy;

    /**
     * @var integer 1: reverse; 0: sequential; reverse by default
     */
    public $OrderType;

    /**
     * @var array Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
     */
    public $VpcIds;

    /**
     * @var array Array of subnet IDs such as 56854. The array subscript starts from 0.
     */
    public $SubnetIds;

    /**
     * @var array Array of project IDs. The array subscript starts from 0.
     */
    public $ProjectIds;

    /**
     * @var string ID of the instance to be searched for.
     */
    public $SearchKey;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var array Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
     */
    public $UniqVpcIds;

    /**
     * @var array Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0.
     */
    public $UniqSubnetIds;

    /**
     * @var array Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`.
     */
    public $RegionIds;

    /**
     * @var array Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     */
    public $Status;

    /**
     * @var integer Type edition. 1: Standalone Edition; 2: Master-Replica Edition; 3: Cluster Edition
     */
    public $TypeVersion;

    /**
     * @var string Engine information: Redis-2.8, Redis-4.0, CKV
     */
    public $EngineName;

    /**
     * @var array Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     */
    public $AutoRenew;

    /**
     * @var string Billing mode. postpaid: pay-as-you-go; prepaid: monthly subscription
     */
    public $BillingMode;

    /**
     * @var integer Instance type. 1: legacy Redis Cluster Edition, 2: Redis 2.8 Master-Replica Edition, 3: CKV Master-Replica Edition, 4: CKV Cluster Edition, 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Replica Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Replica Edition, 9: Redis 5.0 Cluster Edition
     */
    public $Type;

    /**
     * @var array Search keywords, which can be instance ID, instance name, or complete IP.
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
     * @var array Filters resources by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
     */
    public $InstanceTags;

    /**
     * @var array Filters resources by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
     */
    public $TagKeys;

    /**
     * @param integer $Limit Size of the instance list. If no value is specified for this parameter, it will be 20 by default. If the specified value is greater than the `DescribeInstancesPageLimit` configuration item in the specific configuration file `etc/conf/component.properties` (which is 1,000 by default if the configuration cannot be read), then the configuration item shall prevail.
     * @param integer $Offset Offset, which is an integral multiple of `Limit`.
     * @param string $InstanceId Instance ID, such as crs-6ubhgouj
     * @param string $OrderBy Enumerated values: projectId, createtime, instancename, type, curDeadline
     * @param integer $OrderType 1: reverse; 0: sequential; reverse by default
     * @param array $VpcIds Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
     * @param array $SubnetIds Array of subnet IDs such as 56854. The array subscript starts from 0.
     * @param array $ProjectIds Array of project IDs. The array subscript starts from 0.
     * @param string $SearchKey ID of the instance to be searched for.
     * @param string $InstanceName Instance name
     * @param array $UniqVpcIds Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the classic network will be selected by default
     * @param array $UniqSubnetIds Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0.
     * @param array $RegionIds Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`.
     * @param array $Status Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     * @param integer $TypeVersion Type edition. 1: Standalone Edition; 2: Master-Replica Edition; 3: Cluster Edition
     * @param string $EngineName Engine information: Redis-2.8, Redis-4.0, CKV
     * @param array $AutoRenew Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     * @param string $BillingMode Billing mode. postpaid: pay-as-you-go; prepaid: monthly subscription
     * @param integer $Type Instance type. 1: legacy Redis Cluster Edition, 2: Redis 2.8 Master-Replica Edition, 3: CKV Master-Replica Edition, 4: CKV Cluster Edition, 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Replica Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Replica Edition, 9: Redis 5.0 Cluster Edition
     * @param array $SearchKeys Search keywords, which can be instance ID, instance name, or complete IP.
     * @param array $TypeList Internal parameter, which can be ignored.
     * @param string $MonitorVersion Internal parameter, which can be ignored.
     * @param array $InstanceTags Filters resources by tag key and value. If this parameter is not specified or is an empty array, resources will not be filtered.
     * @param array $TagKeys Filters resources by tag key. If this parameter is not specified or is an empty array, resources will not be filtered.
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

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
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
    }
}
