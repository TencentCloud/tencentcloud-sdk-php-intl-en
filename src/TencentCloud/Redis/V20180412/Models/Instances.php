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
 * Instances in replication group
 *
 * @method integer getAppId() Obtain User App ID
 * @method void setAppId(integer $AppId) Set User App ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getRegionId() Obtain Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley)
 * @method void setRegionId(integer $RegionId) Set Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley)
 * @method integer getZoneId() Obtain Region ID
 * @method void setZoneId(integer $ZoneId) Set Region ID
 * @method integer getRedisReplicasNum() Obtain Number of replicas
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas
 * @method integer getRedisShardNum() Obtain Number of shards
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards
 * @method integer getRedisShardSize() Obtain Shard size
 * @method void setRedisShardSize(integer $RedisShardSize) Set Shard size
 * @method integer getDiskSize() Obtain Instance disk size
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Instance disk size
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEngine() Obtain Engine: Redis community edition, Tencent Cloud CKV
 * @method void setEngine(string $Engine) Set Engine: Redis community edition, Tencent Cloud CKV
 * @method string getRole() Obtain Instance role. Valid values: `rw` (read-write), `r`( read-only)
 * @method void setRole(string $Role) Set Instance role. Valid values: `rw` (read-write), `r`( read-only)
 * @method string getVip() Obtain Instance VIP
 * @method void setVip(string $Vip) Set Instance VIP
 * @method string getVip6() Obtain Internal parameter, which can be ignored.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Internal parameter, which can be ignored.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getVpcID() Obtain VPC ID, such as 75101
 * @method void setVpcID(integer $VpcID) Set VPC ID, such as 75101
 * @method integer getVPort() Obtain Instance Port
 * @method void setVPort(integer $VPort) Set Instance Port
 * @method integer getStatus() Obtain Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method void setStatus(integer $Status) Set Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
 * @method integer getGrocerySysId() Obtain Repository ID
 * @method void setGrocerySysId(integer $GrocerySysId) Set Repository ID
 * @method integer getProductType() Obtain Instance type. Valid values: `1` (Redis 2.8 memory edition in cluster architecture), `2` (Redis 2.8 memory edition in standard architecture), `3` (CKV 3.2 memory edition in standard architecture), `4` (CKV 3.2 memory edition in cluster architecture), `5` (Redis 2.8 memory edition in standalone architecture), `6` (Redis 4.0 memory edition in standard architecture), `7` (Redis 4.0 memory edition in cluster architecture), `8` (Redis 5.0 memory edition in standard architecture), `9` (Redis 5.0 memory edition in cluster architecture)
 * @method void setProductType(integer $ProductType) Set Instance type. Valid values: `1` (Redis 2.8 memory edition in cluster architecture), `2` (Redis 2.8 memory edition in standard architecture), `3` (CKV 3.2 memory edition in standard architecture), `4` (CKV 3.2 memory edition in cluster architecture), `5` (Redis 2.8 memory edition in standalone architecture), `6` (Redis 4.0 memory edition in standard architecture), `7` (Redis 4.0 memory edition in cluster architecture), `8` (Redis 5.0 memory edition in standard architecture), `9` (Redis 5.0 memory edition in cluster architecture)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class Instances extends AbstractModel
{
    /**
     * @var integer User App ID
     */
    public $AppId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley)
     */
    public $RegionId;

    /**
     * @var integer Region ID
     */
    public $ZoneId;

    /**
     * @var integer Number of replicas
     */
    public $RedisReplicasNum;

    /**
     * @var integer Number of shards
     */
    public $RedisShardNum;

    /**
     * @var integer Shard size
     */
    public $RedisShardSize;

    /**
     * @var integer Instance disk size
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Engine: Redis community edition, Tencent Cloud CKV
     */
    public $Engine;

    /**
     * @var string Instance role. Valid values: `rw` (read-write), `r`( read-only)
     */
    public $Role;

    /**
     * @var string Instance VIP
     */
    public $Vip;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var integer VPC ID, such as 75101
     */
    public $VpcID;

    /**
     * @var integer Instance Port
     */
    public $VPort;

    /**
     * @var integer Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     */
    public $Status;

    /**
     * @var integer Repository ID
     */
    public $GrocerySysId;

    /**
     * @var integer Instance type. Valid values: `1` (Redis 2.8 memory edition in cluster architecture), `2` (Redis 2.8 memory edition in standard architecture), `3` (CKV 3.2 memory edition in standard architecture), `4` (CKV 3.2 memory edition in cluster architecture), `5` (Redis 2.8 memory edition in standalone architecture), `6` (Redis 4.0 memory edition in standard architecture), `7` (Redis 4.0 memory edition in cluster architecture), `8` (Redis 5.0 memory edition in standard architecture), `9` (Redis 5.0 memory edition in cluster architecture)
     */
    public $ProductType;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param integer $AppId User App ID
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $RegionId Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley)
     * @param integer $ZoneId Region ID
     * @param integer $RedisReplicasNum Number of replicas
     * @param integer $RedisShardNum Number of shards
     * @param integer $RedisShardSize Shard size
     * @param integer $DiskSize Instance disk size
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Engine Engine: Redis community edition, Tencent Cloud CKV
     * @param string $Role Instance role. Valid values: `rw` (read-write), `r`( read-only)
     * @param string $Vip Instance VIP
     * @param string $Vip6 Internal parameter, which can be ignored.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $VpcID VPC ID, such as 75101
     * @param integer $VPort Instance Port
     * @param integer $Status Instance status. 0: to be initialized; 1: in process; 2: running; -2: isolated; -3: to be deleted
     * @param integer $GrocerySysId Repository ID
     * @param integer $ProductType Instance type. Valid values: `1` (Redis 2.8 memory edition in cluster architecture), `2` (Redis 2.8 memory edition in standard architecture), `3` (CKV 3.2 memory edition in standard architecture), `4` (CKV 3.2 memory edition in cluster architecture), `5` (Redis 2.8 memory edition in standalone architecture), `6` (Redis 4.0 memory edition in standard architecture), `7` (Redis 4.0 memory edition in cluster architecture), `8` (Redis 5.0 memory edition in standard architecture), `9` (Redis 5.0 memory edition in cluster architecture)
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisShardSize",$param) and $param["RedisShardSize"] !== null) {
            $this->RedisShardSize = $param["RedisShardSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GrocerySysId",$param) and $param["GrocerySysId"] !== null) {
            $this->GrocerySysId = $param["GrocerySysId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
