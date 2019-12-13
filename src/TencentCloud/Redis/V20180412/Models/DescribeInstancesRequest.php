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
 * @method integer getLimit() 获取Instance list size. Default value: 20
 * @method void setLimit(integer $Limit) 设置Instance list size. Default value: 20
 * @method integer getOffset() 获取Offset, which is an integral multiple of `Limit`
 * @method void setOffset(integer $Offset) 设置Offset, which is an integral multiple of `Limit`
 * @method string getInstanceId() 获取Instance ID, such as crs-6ubhgouj
 * @method void setInstanceId(string $InstanceId) 设置Instance ID, such as crs-6ubhgouj
 * @method string getOrderBy() 获取Enumerated values: projectId, createtime, instancename, type, curDeadline
 * @method void setOrderBy(string $OrderBy) 设置Enumerated values: projectId, createtime, instancename, type, curDeadline
 * @method integer getOrderType() 获取1: reverse; 0: sequential; reverse by default
 * @method void setOrderType(integer $OrderType) 设置1: reverse; 0: sequential; reverse by default
 * @method array getVpcIds() 获取Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
 * @method void setVpcIds(array $VpcIds) 设置Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
 * @method array getSubnetIds() 获取Array of subnet IDs such as 56854. The array subscript starts from 0
 * @method void setSubnetIds(array $SubnetIds) 设置Array of subnet IDs such as 56854. The array subscript starts from 0
 * @method array getProjectIds() 获取Array of project IDs. The array subscript starts from 0
 * @method void setProjectIds(array $ProjectIds) 设置Array of project IDs. The array subscript starts from 0
 * @method string getSearchKey() 获取ID of the instance to be searched for.
 * @method void setSearchKey(string $SearchKey) 设置ID of the instance to be searched for.
 * @method string getInstanceName() 获取Instance name
 * @method void setInstanceName(string $InstanceName) 设置Instance name
 * @method array getUniqVpcIds() 获取Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
 * @method array getUniqSubnetIds() 获取Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0
 * @method array getRegionIds() 获取Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`
 * @method void setRegionIds(array $RegionIds) 设置Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`
 * @method array getStatus() 获取Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method void setStatus(array $Status) 设置Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method integer getTypeVersion() 获取Type edition. 1: standalone edition; 2: master-slave edition; 3: cluster edition
 * @method void setTypeVersion(integer $TypeVersion) 设置Type edition. 1: standalone edition; 2: master-slave edition; 3: cluster edition
 * @method string getEngineName() 获取Engine information: Redis-2.8, Redis-4.0, CKV
 * @method void setEngineName(string $EngineName) 设置Engine information: Redis-2.8, Redis-4.0, CKV
 * @method array getAutoRenew() 获取Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method void setAutoRenew(array $AutoRenew) 设置Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method string getBillingMode() 获取Billing method. postpaid: pay-as-you-go; prepaid: monthly subscription
 * @method void setBillingMode(string $BillingMode) 设置Billing method. postpaid: pay-as-you-go; prepaid: monthly subscription
 * @method integer getType() 获取Instance type. 1: legacy Redis cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
 * @method void setType(integer $Type) 设置Instance type. 1: legacy Redis cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
 * @method array getSearchKeys() 获取Search keywords, which can be instance ID, instance name, or complete IP
 * @method void setSearchKeys(array $SearchKeys) 设置Search keywords, which can be instance ID, instance name, or complete IP
 */

/**
 *DescribeInstances request structure.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer Instance list size. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`
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
     * @var array Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
     */
    public $VpcIds;

    /**
     * @var array Array of subnet IDs such as 56854. The array subscript starts from 0
     */
    public $SubnetIds;

    /**
     * @var array Array of project IDs. The array subscript starts from 0
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
     * @var array Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
     */
    public $UniqVpcIds;

    /**
     * @var array Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0
     */
    public $UniqSubnetIds;

    /**
     * @var array Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`
     */
    public $RegionIds;

    /**
     * @var array Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     */
    public $Status;

    /**
     * @var integer Type edition. 1: standalone edition; 2: master-slave edition; 3: cluster edition
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
     * @var string Billing method. postpaid: pay-as-you-go; prepaid: monthly subscription
     */
    public $BillingMode;

    /**
     * @var integer Instance type. 1: legacy Redis cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
     */
    public $Type;

    /**
     * @var array Search keywords, which can be instance ID, instance name, or complete IP
     */
    public $SearchKeys;
    /**
     * @param integer $Limit Instance list size. Default value: 20
     * @param integer $Offset Offset, which is an integral multiple of `Limit`
     * @param string $InstanceId Instance ID, such as crs-6ubhgouj
     * @param string $OrderBy Enumerated values: projectId, createtime, instancename, type, curDeadline
     * @param integer $OrderType 1: reverse; 0: sequential; reverse by default
     * @param array $VpcIds Array of VPC IDs such as 47525. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
     * @param array $SubnetIds Array of subnet IDs such as 56854. The array subscript starts from 0
     * @param array $ProjectIds Array of project IDs. The array subscript starts from 0
     * @param string $SearchKey ID of the instance to be searched for.
     * @param string $InstanceName Instance name
     * @param array $UniqVpcIds Array of VPC IDs such as vpc-sad23jfdfk. The array subscript starts from 0. If this parameter is not passed in, the basic network will be selected by default
     * @param array $UniqSubnetIds Array of subnet IDs such as subnet-fdj24n34j2. The array subscript starts from 0
     * @param array $RegionIds Region ID, which has already been disused. The corresponding region can be queried through the common parameter `Region`
     * @param array $Status Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     * @param integer $TypeVersion Type edition. 1: standalone edition; 2: master-slave edition; 3: cluster edition
     * @param string $EngineName Engine information: Redis-2.8, Redis-4.0, CKV
     * @param array $AutoRenew Renewal mode. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     * @param string $BillingMode Billing method. postpaid: pay-as-you-go; prepaid: monthly subscription
     * @param integer $Type Instance type. 1: legacy Redis cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
     * @param array $SearchKeys Search keywords, which can be instance ID, instance name, or complete IP
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
