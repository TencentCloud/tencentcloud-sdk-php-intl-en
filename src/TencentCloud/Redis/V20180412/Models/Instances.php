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
 * @method integer getAppId() Obtain User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method void setAppId(integer $AppId) Set User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getRegionId() Obtain Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley).</li></ul>
 * @method void setRegionId(integer $RegionId) Set Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley).</li></ul>
 * @method integer getZoneId() Obtain Region ID
 * @method void setZoneId(integer $ZoneId) Set Region ID
 * @method integer getRedisReplicasNum() Obtain Number of replicas
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas
 * @method integer getRedisShardNum() Obtain Number of shards
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards
 * @method integer getRedisShardSize() Obtain Shard memory size.
 * @method void setRedisShardSize(integer $RedisShardSize) Set Shard memory size.
 * @method integer getDiskSize() Obtain Instance disk size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Instance disk size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngine() Obtain Engine: Redis Community Edition, Tencent Cloud CKV.
 * @method void setEngine(string $Engine) Set Engine: Redis Community Edition, Tencent Cloud CKV.
 * @method string getRole() Obtain Read-write permission of the instance. <ul><li>`rw`: Read/Write. </li><li>`r`: Read-only. </li></ul>
 * @method void setRole(string $Role) Set Read-write permission of the instance. <ul><li>`rw`: Read/Write. </li><li>`r`: Read-only. </li></ul>
 * @method string getVip() Obtain Instance VIP
 * @method void setVip(string $Vip) Set Instance VIP
 * @method string getVip6() Obtain Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIPv6() Obtain Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6(string $IPv6) Set Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVpcID() Obtain VPC ID, such as `75101`.
 * @method void setVpcID(integer $VpcID) Set VPC ID, such as `75101`.
 * @method integer getVPort() Obtain Instance port
 * @method void setVPort(integer $VPort) Set Instance port
 * @method integer getStatus() Obtain Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method void setStatus(integer $Status) Set Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method integer getGrocerySysId() Obtain Repository ID
 * @method void setGrocerySysId(integer $GrocerySysId) Set Repository ID
 * @method integer getProductType() Obtain Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture)
- `5`: Redis 2.8 Memory Edition (Standalone)
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture)
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture)
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture)
 * @method void setProductType(integer $ProductType) Set Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture)
- `5`: Redis 2.8 Memory Edition (Standalone)
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture)
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture)
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture)
 * @method string getCreateTime() Obtain The time when the instance was added to the replication group.
 * @method void setCreateTime(string $CreateTime) Set The time when the instance was added to the replication group.
 * @method string getUpdateTime() Obtain The time when instances in the replication group were updated.
 * @method void setUpdateTime(string $UpdateTime) Set The time when instances in the replication group were updated.
 */
class Instances extends AbstractModel
{
    /**
     * @var integer User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
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
     * @var integer Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley).</li></ul>
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
     * @var integer Shard memory size.
     */
    public $RedisShardSize;

    /**
     * @var integer Instance disk size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Engine: Redis Community Edition, Tencent Cloud CKV.
     */
    public $Engine;

    /**
     * @var string Read-write permission of the instance. <ul><li>`rw`: Read/Write. </li><li>`r`: Read-only. </li></ul>
     */
    public $Role;

    /**
     * @var string Instance VIP
     */
    public $Vip;

    /**
     * @var string Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var string Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6;

    /**
     * @var integer VPC ID, such as `75101`.
     */
    public $VpcID;

    /**
     * @var integer Instance port
     */
    public $VPort;

    /**
     * @var integer Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     */
    public $Status;

    /**
     * @var integer Repository ID
     */
    public $GrocerySysId;

    /**
     * @var integer Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture)
- `5`: Redis 2.8 Memory Edition (Standalone)
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture)
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture)
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture)
     */
    public $ProductType;

    /**
     * @var string The time when the instance was added to the replication group.
     */
    public $CreateTime;

    /**
     * @var string The time when instances in the replication group were updated.
     */
    public $UpdateTime;

    /**
     * @param integer $AppId User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $RegionId Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley).</li></ul>
     * @param integer $ZoneId Region ID
     * @param integer $RedisReplicasNum Number of replicas
     * @param integer $RedisShardNum Number of shards
     * @param integer $RedisShardSize Shard memory size.
     * @param integer $DiskSize Instance disk size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Engine Engine: Redis Community Edition, Tencent Cloud CKV.
     * @param string $Role Read-write permission of the instance. <ul><li>`rw`: Read/Write. </li><li>`r`: Read-only. </li></ul>
     * @param string $Vip Instance VIP
     * @param string $Vip6 Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IPv6 Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VpcID VPC ID, such as `75101`.
     * @param integer $VPort Instance port
     * @param integer $Status Instance status. <ul><li>`0`: Uninitialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     * @param integer $GrocerySysId Repository ID
     * @param integer $ProductType Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture)
- `5`: Redis 2.8 Memory Edition (Standalone)
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture)
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture)
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture)
     * @param string $CreateTime The time when the instance was added to the replication group.
     * @param string $UpdateTime The time when instances in the replication group were updated.
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

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
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
