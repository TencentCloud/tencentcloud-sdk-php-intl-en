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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read-Only Group Object
 *
 * @method string getReadOnlyGroupId() Obtain Read-Only Group ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set Read-Only Group ID
 * @method string getReadOnlyGroupName() Obtain Read-Only Group Name
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set Read-Only Group Name
 * @method string getRegionId() Obtain Region ID of the Read-Only Group, same as the Primary Instance
 * @method void setRegionId(string $RegionId) Set Region ID of the Read-Only Group, same as the Primary Instance
 * @method string getZoneId() Obtain Read-Only Group's AZ ID, same as the Primary Instance
 * @method void setZoneId(string $ZoneId) Set Read-Only Group's AZ ID, same as the Primary Instance
 * @method integer getIsOfflineDelay() Obtain Whether to enable the timeout culling feature; 0 - disabled, 1 - enabled
 * @method void setIsOfflineDelay(integer $IsOfflineDelay) Set Whether to enable the timeout culling feature; 0 - disabled, 1 - enabled
 * @method integer getReadOnlyMaxDelayTime() Obtain Timeout threshold used after enabling the timeout culling feature
 * @method void setReadOnlyMaxDelayTime(integer $ReadOnlyMaxDelayTime) Set Timeout threshold used after enabling the timeout culling feature
 * @method integer getMinReadOnlyInGroup() Obtain Minimum number of read-only replicas retained in the read-only group after enabling the timeout culling feature
 * @method void setMinReadOnlyInGroup(integer $MinReadOnlyInGroup) Set Minimum number of read-only replicas retained in the read-only group after enabling the timeout culling feature
 * @method string getVip() Obtain Read-Only Group vip
 * @method void setVip(string $Vip) Set Read-Only Group vip
 * @method integer getVport() Obtain Read-Only Group vport
 * @method void setVport(integer $Vport) Set Read-Only Group vport
 * @method string getVpcId() Obtain Read-Only Group VPC ID
 * @method void setVpcId(string $VpcId) Set Read-Only Group VPC ID
 * @method string getSubnetId() Obtain Read-Only Group VPC Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Read-Only Group VPC Subnet ID
 * @method integer getStatus() Obtain Read-Only Group Status: 1-Running, 5-Creating
 * @method void setStatus(integer $Status) Set Read-Only Group Status: 1-Running, 5-Creating
 * @method string getMasterInstanceId() Obtain Primary instance ID, in the form of mssql-sgeshe3th
 * @method void setMasterInstanceId(string $MasterInstanceId) Set Primary instance ID, in the form of mssql-sgeshe3th
 * @method array getReadOnlyInstanceSet() Obtain Read-Only Instance Replica Set
 * @method void setReadOnlyInstanceSet(array $ReadOnlyInstanceSet) Set Read-Only Instance Replica Set
 * @method string getDnsPodDomain() Obtain RO group's public network address domain name
 * @method void setDnsPodDomain(string $DnsPodDomain) Set RO group's public network address domain name
 * @method integer getTgwWanVPort() Obtain RO group's public network address port
 * @method void setTgwWanVPort(integer $TgwWanVPort) Set RO group's public network address port
 */
class ReadOnlyGroup extends AbstractModel
{
    /**
     * @var string Read-Only Group ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Read-Only Group Name
     */
    public $ReadOnlyGroupName;

    /**
     * @var string Region ID of the Read-Only Group, same as the Primary Instance
     */
    public $RegionId;

    /**
     * @var string Read-Only Group's AZ ID, same as the Primary Instance
     */
    public $ZoneId;

    /**
     * @var integer Whether to enable the timeout culling feature; 0 - disabled, 1 - enabled
     */
    public $IsOfflineDelay;

    /**
     * @var integer Timeout threshold used after enabling the timeout culling feature
     */
    public $ReadOnlyMaxDelayTime;

    /**
     * @var integer Minimum number of read-only replicas retained in the read-only group after enabling the timeout culling feature
     */
    public $MinReadOnlyInGroup;

    /**
     * @var string Read-Only Group vip
     */
    public $Vip;

    /**
     * @var integer Read-Only Group vport
     */
    public $Vport;

    /**
     * @var string Read-Only Group VPC ID
     */
    public $VpcId;

    /**
     * @var string Read-Only Group VPC Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Read-Only Group Status: 1-Running, 5-Creating
     */
    public $Status;

    /**
     * @var string Primary instance ID, in the form of mssql-sgeshe3th
     */
    public $MasterInstanceId;

    /**
     * @var array Read-Only Instance Replica Set
     */
    public $ReadOnlyInstanceSet;

    /**
     * @var string RO group's public network address domain name
     */
    public $DnsPodDomain;

    /**
     * @var integer RO group's public network address port
     */
    public $TgwWanVPort;

    /**
     * @param string $ReadOnlyGroupId Read-Only Group ID
     * @param string $ReadOnlyGroupName Read-Only Group Name
     * @param string $RegionId Region ID of the Read-Only Group, same as the Primary Instance
     * @param string $ZoneId Read-Only Group's AZ ID, same as the Primary Instance
     * @param integer $IsOfflineDelay Whether to enable the timeout culling feature; 0 - disabled, 1 - enabled
     * @param integer $ReadOnlyMaxDelayTime Timeout threshold used after enabling the timeout culling feature
     * @param integer $MinReadOnlyInGroup Minimum number of read-only replicas retained in the read-only group after enabling the timeout culling feature
     * @param string $Vip Read-Only Group vip
     * @param integer $Vport Read-Only Group vport
     * @param string $VpcId Read-Only Group VPC ID
     * @param string $SubnetId Read-Only Group VPC Subnet ID
     * @param integer $Status Read-Only Group Status: 1-Running, 5-Creating
     * @param string $MasterInstanceId Primary instance ID, in the form of mssql-sgeshe3th
     * @param array $ReadOnlyInstanceSet Read-Only Instance Replica Set
     * @param string $DnsPodDomain RO group's public network address domain name
     * @param integer $TgwWanVPort RO group's public network address port
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("IsOfflineDelay",$param) and $param["IsOfflineDelay"] !== null) {
            $this->IsOfflineDelay = $param["IsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyMaxDelayTime",$param) and $param["ReadOnlyMaxDelayTime"] !== null) {
            $this->ReadOnlyMaxDelayTime = $param["ReadOnlyMaxDelayTime"];
        }

        if (array_key_exists("MinReadOnlyInGroup",$param) and $param["MinReadOnlyInGroup"] !== null) {
            $this->MinReadOnlyInGroup = $param["MinReadOnlyInGroup"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
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

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("ReadOnlyInstanceSet",$param) and $param["ReadOnlyInstanceSet"] !== null) {
            $this->ReadOnlyInstanceSet = [];
            foreach ($param["ReadOnlyInstanceSet"] as $key => $value){
                $obj = new ReadOnlyInstance();
                $obj->deserialize($value);
                array_push($this->ReadOnlyInstanceSet, $obj);
            }
        }

        if (array_key_exists("DnsPodDomain",$param) and $param["DnsPodDomain"] !== null) {
            $this->DnsPodDomain = $param["DnsPodDomain"];
        }

        if (array_key_exists("TgwWanVPort",$param) and $param["TgwWanVPort"] !== null) {
            $this->TgwWanVPort = $param["TgwWanVPort"];
        }
    }
}
