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
 * @method string getInstanceName() 获取Instance name
 * @method void setInstanceName(string $InstanceName) 设置Instance name
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method integer getAppid() 获取User's Appid
 * @method void setAppid(integer $Appid) 设置User's Appid
 * @method integer getProjectId() 获取Project ID
 * @method void setProjectId(integer $ProjectId) 设置Project ID
 * @method integer getRegionId() 获取Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong, China; 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
 * @method void setRegionId(integer $RegionId) 设置Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong, China; 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
 * @method integer getZoneId() 获取Region ID
 * @method void setZoneId(integer $ZoneId) 设置Region ID
 * @method integer getVpcId() 获取VPC ID, such as 75101
 * @method void setVpcId(integer $VpcId) 设置VPC ID, such as 75101
 * @method integer getSubnetId() 获取VPC subnet ID, such as 46315
 * @method void setSubnetId(integer $SubnetId) 设置VPC subnet ID, such as 46315
 * @method integer getStatus() 获取Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
 * @method void setStatus(integer $Status) 设置Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
 * @method string getWanIp() 获取Instance VIP
 * @method void setWanIp(string $WanIp) 设置Instance VIP
 * @method integer getPort() 获取Port number of an instance
 * @method void setPort(integer $Port) 设置Port number of an instance
 * @method string getCreatetime() 获取Instance creation time
 * @method void setCreatetime(string $Createtime) 设置Instance creation time
 * @method float getSize() 获取Instance capacity in MB
 * @method void setSize(float $Size) 设置Instance capacity in MB
 * @method float getSizeUsed() 获取This field has been disused
 * @method void setSizeUsed(float $SizeUsed) 设置This field has been disused
 * @method integer getType() 获取Instance type. 1: Redis 2.8 cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition (Redis 3.2); 4: CKV cluster edition (Redis 3.2); 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
 * @method void setType(integer $Type) 设置Instance type. 1: Redis 2.8 cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition (Redis 3.2); 4: CKV cluster edition (Redis 3.2); 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
 * @method integer getAutoRenewFlag() 获取Whether to set the auto-renewal flag for an instance. 1: auto-renewal set; 0: auto-renewal not set
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置Whether to set the auto-renewal flag for an instance. 1: auto-renewal set; 0: auto-renewal not set
 * @method string getDeadlineTime() 获取Instance expiration time
 * @method void setDeadlineTime(string $DeadlineTime) 设置Instance expiration time
 * @method string getEngine() 获取Engine: Redis community edition, Tencent Cloud CKV
 * @method void setEngine(string $Engine) 设置Engine: Redis community edition, Tencent Cloud CKV
 * @method string getProductType() 获取Product type: Redis 2.8 cluster edition, Redis 2.8 master-slave edition, Redis 3.2 master-slave edition (CKV master-slave edition), Redis 3.2 cluster edition (CKV cluster edition), Redis 2.8 standalone edition, Redis 4.0 cluster edition
 * @method void setProductType(string $ProductType) 设置Product type: Redis 2.8 cluster edition, Redis 2.8 master-slave edition, Redis 3.2 master-slave edition (CKV master-slave edition), Redis 3.2 cluster edition (CKV cluster edition), Redis 2.8 standalone edition, Redis 4.0 cluster edition
 * @method string getUniqVpcId() 获取VPC ID, such as vpc-fk33jsf43kgv
 * @method void setUniqVpcId(string $UniqVpcId) 设置VPC ID, such as vpc-fk33jsf43kgv
 * @method string getUniqSubnetId() 获取VPC subnet ID, such as subnet-fd3j6l35mm0
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置VPC subnet ID, such as subnet-fd3j6l35mm0
 * @method integer getBillingMode() 获取Billing method. 0: pay-as-you-go; 1: monthly subscription
 * @method void setBillingMode(integer $BillingMode) 设置Billing method. 0: pay-as-you-go; 1: monthly subscription
 * @method string getInstanceTitle() 获取Description of an instance status, such as "instance running"
 * @method void setInstanceTitle(string $InstanceTitle) 设置Description of an instance status, such as "instance running"
 * @method string getOfflineTime() 获取Scheduled deactivation time
 * @method void setOfflineTime(string $OfflineTime) 设置Scheduled deactivation time
 * @method integer getSubStatus() 获取Sub-status returned for an instance in process
 * @method void setSubStatus(integer $SubStatus) 设置Sub-status returned for an instance in process
 * @method array getTags() 获取Anti-affinity tag
 * @method void setTags(array $Tags) 设置Anti-affinity tag
 * @method array getInstanceNode() 获取Instance node information
 * @method void setInstanceNode(array $InstanceNode) 设置Instance node information
 * @method integer getRedisShardSize() 获取Shard size
 * @method void setRedisShardSize(integer $RedisShardSize) 设置Shard size
 * @method integer getRedisShardNum() 获取Number of shards
 * @method void setRedisShardNum(integer $RedisShardNum) 设置Number of shards
 * @method integer getRedisReplicasNum() 获取Number of replicas
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置Number of replicas
 * @method integer getPriceId() 获取Billing ID
 * @method void setPriceId(integer $PriceId) 设置Billing ID
 * @method string getCloseTime() 获取Isolation time
 * @method void setCloseTime(string $CloseTime) 设置Isolation time
 * @method integer getSlaveReadWeight() 获取Read weight of a slave node
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) 设置Read weight of a slave node
 * @method array getInstanceTags() 获取Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTags(array $InstanceTags) 设置Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() 获取Project name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) 设置Project name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getNoAuth() 获取Whether an instance is password-free. true: yes; false: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoAuth(boolean $NoAuth) 设置Whether an instance is password-free. true: yes; false: no
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *List of instance details
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer User's Appid
     */
    public $Appid;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong, China; 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
     */
    public $RegionId;

    /**
     * @var integer Region ID
     */
    public $ZoneId;

    /**
     * @var integer VPC ID, such as 75101
     */
    public $VpcId;

    /**
     * @var integer VPC subnet ID, such as 46315
     */
    public $SubnetId;

    /**
     * @var integer Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
     */
    public $Status;

    /**
     * @var string Instance VIP
     */
    public $WanIp;

    /**
     * @var integer Port number of an instance
     */
    public $Port;

    /**
     * @var string Instance creation time
     */
    public $Createtime;

    /**
     * @var float Instance capacity in MB
     */
    public $Size;

    /**
     * @var float This field has been disused
     */
    public $SizeUsed;

    /**
     * @var integer Instance type. 1: Redis 2.8 cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition (Redis 3.2); 4: CKV cluster edition (Redis 3.2); 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
     */
    public $Type;

    /**
     * @var integer Whether to set the auto-renewal flag for an instance. 1: auto-renewal set; 0: auto-renewal not set
     */
    public $AutoRenewFlag;

    /**
     * @var string Instance expiration time
     */
    public $DeadlineTime;

    /**
     * @var string Engine: Redis community edition, Tencent Cloud CKV
     */
    public $Engine;

    /**
     * @var string Product type: Redis 2.8 cluster edition, Redis 2.8 master-slave edition, Redis 3.2 master-slave edition (CKV master-slave edition), Redis 3.2 cluster edition (CKV cluster edition), Redis 2.8 standalone edition, Redis 4.0 cluster edition
     */
    public $ProductType;

    /**
     * @var string VPC ID, such as vpc-fk33jsf43kgv
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID, such as subnet-fd3j6l35mm0
     */
    public $UniqSubnetId;

    /**
     * @var integer Billing method. 0: pay-as-you-go; 1: monthly subscription
     */
    public $BillingMode;

    /**
     * @var string Description of an instance status, such as "instance running"
     */
    public $InstanceTitle;

    /**
     * @var string Scheduled deactivation time
     */
    public $OfflineTime;

    /**
     * @var integer Sub-status returned for an instance in process
     */
    public $SubStatus;

    /**
     * @var array Anti-affinity tag
     */
    public $Tags;

    /**
     * @var array Instance node information
     */
    public $InstanceNode;

    /**
     * @var integer Shard size
     */
    public $RedisShardSize;

    /**
     * @var integer Number of shards
     */
    public $RedisShardNum;

    /**
     * @var integer Number of replicas
     */
    public $RedisReplicasNum;

    /**
     * @var integer Billing ID
     */
    public $PriceId;

    /**
     * @var string Isolation time
     */
    public $CloseTime;

    /**
     * @var integer Read weight of a slave node
     */
    public $SlaveReadWeight;

    /**
     * @var array Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTags;

    /**
     * @var string Project name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var boolean Whether an instance is password-free. true: yes; false: no
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoAuth;
    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $Appid User's Appid
     * @param integer $ProjectId Project ID
     * @param integer $RegionId Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong, China; 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
     * @param integer $ZoneId Region ID
     * @param integer $VpcId VPC ID, such as 75101
     * @param integer $SubnetId VPC subnet ID, such as 46315
     * @param integer $Status Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
     * @param string $WanIp Instance VIP
     * @param integer $Port Port number of an instance
     * @param string $Createtime Instance creation time
     * @param float $Size Instance capacity in MB
     * @param float $SizeUsed This field has been disused
     * @param integer $Type Instance type. 1: Redis 2.8 cluster edition; 2: Redis 2.8 master-slave edition; 3: CKV master-slave edition (Redis 3.2); 4: CKV cluster edition (Redis 3.2); 5: Redis 2.8 standalone edition; 6: Redis 4.0 master-slave edition; 7: Redis 4.0 cluster edition
     * @param integer $AutoRenewFlag Whether to set the auto-renewal flag for an instance. 1: auto-renewal set; 0: auto-renewal not set
     * @param string $DeadlineTime Instance expiration time
     * @param string $Engine Engine: Redis community edition, Tencent Cloud CKV
     * @param string $ProductType Product type: Redis 2.8 cluster edition, Redis 2.8 master-slave edition, Redis 3.2 master-slave edition (CKV master-slave edition), Redis 3.2 cluster edition (CKV cluster edition), Redis 2.8 standalone edition, Redis 4.0 cluster edition
     * @param string $UniqVpcId VPC ID, such as vpc-fk33jsf43kgv
     * @param string $UniqSubnetId VPC subnet ID, such as subnet-fd3j6l35mm0
     * @param integer $BillingMode Billing method. 0: pay-as-you-go; 1: monthly subscription
     * @param string $InstanceTitle Description of an instance status, such as "instance running"
     * @param string $OfflineTime Scheduled deactivation time
     * @param integer $SubStatus Sub-status returned for an instance in process
     * @param array $Tags Anti-affinity tag
     * @param array $InstanceNode Instance node information
     * @param integer $RedisShardSize Shard size
     * @param integer $RedisShardNum Number of shards
     * @param integer $RedisReplicasNum Number of replicas
     * @param integer $PriceId Billing ID
     * @param string $CloseTime Isolation time
     * @param integer $SlaveReadWeight Read weight of a slave node
     * @param array $InstanceTags Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $NoAuth Whether an instance is password-free. true: yes; false: no
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeUsed",$param) and $param["SizeUsed"] !== null) {
            $this->SizeUsed = $param["SizeUsed"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("InstanceTitle",$param) and $param["InstanceTitle"] !== null) {
            $this->InstanceTitle = $param["InstanceTitle"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("InstanceNode",$param) and $param["InstanceNode"] !== null) {
            $this->InstanceNode = [];
            foreach ($param["InstanceNode"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->InstanceNode, $obj);
            }
        }

        if (array_key_exists("RedisShardSize",$param) and $param["RedisShardSize"] !== null) {
            $this->RedisShardSize = $param["RedisShardSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("PriceId",$param) and $param["PriceId"] !== null) {
            $this->PriceId = $param["PriceId"];
        }

        if (array_key_exists("CloseTime",$param) and $param["CloseTime"] !== null) {
            $this->CloseTime = $param["CloseTime"];
        }

        if (array_key_exists("SlaveReadWeight",$param) and $param["SlaveReadWeight"] !== null) {
            $this->SlaveReadWeight = $param["SlaveReadWeight"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }
    }
}
