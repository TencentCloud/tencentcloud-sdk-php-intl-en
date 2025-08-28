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
 * 
 *
 * @method string getReadOnlyGroupId() Obtain 
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set 
 * @method string getReadOnlyGroupName() Obtain 
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set 
 * @method string getRegionId() Obtain 
 * @method void setRegionId(string $RegionId) Set 
 * @method string getZoneId() Obtain 
 * @method void setZoneId(string $ZoneId) Set 
 * @method integer getIsOfflineDelay() Obtain 
 * @method void setIsOfflineDelay(integer $IsOfflineDelay) Set 
 * @method integer getReadOnlyMaxDelayTime() Obtain 
 * @method void setReadOnlyMaxDelayTime(integer $ReadOnlyMaxDelayTime) Set 
 * @method integer getMinReadOnlyInGroup() Obtain 
 * @method void setMinReadOnlyInGroup(integer $MinReadOnlyInGroup) Set 
 * @method string getVip() Obtain 
 * @method void setVip(string $Vip) Set 
 * @method integer getVport() Obtain 
 * @method void setVport(integer $Vport) Set 
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getMasterInstanceId() Obtain 
 * @method void setMasterInstanceId(string $MasterInstanceId) Set 
 * @method array getReadOnlyInstanceSet() Obtain 
 * @method void setReadOnlyInstanceSet(array $ReadOnlyInstanceSet) Set 
 * @method string getDnsPodDomain() Obtain RO group's public network address domain name
 * @method void setDnsPodDomain(string $DnsPodDomain) Set RO group's public network address domain name
 * @method integer getTgwWanVPort() Obtain RO group's public network address port
 * @method void setTgwWanVPort(integer $TgwWanVPort) Set RO group's public network address port
 */
class ReadOnlyGroup extends AbstractModel
{
    /**
     * @var string 
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 
     */
    public $ReadOnlyGroupName;

    /**
     * @var string 
     */
    public $RegionId;

    /**
     * @var string 
     */
    public $ZoneId;

    /**
     * @var integer 
     */
    public $IsOfflineDelay;

    /**
     * @var integer 
     */
    public $ReadOnlyMaxDelayTime;

    /**
     * @var integer 
     */
    public $MinReadOnlyInGroup;

    /**
     * @var string 
     */
    public $Vip;

    /**
     * @var integer 
     */
    public $Vport;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string 
     */
    public $MasterInstanceId;

    /**
     * @var array 
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
     * @param string $ReadOnlyGroupId 
     * @param string $ReadOnlyGroupName 
     * @param string $RegionId 
     * @param string $ZoneId 
     * @param integer $IsOfflineDelay 
     * @param integer $ReadOnlyMaxDelayTime 
     * @param integer $MinReadOnlyInGroup 
     * @param string $Vip 
     * @param integer $Vport 
     * @param string $VpcId 
     * @param string $SubnetId 
     * @param integer $Status 
     * @param string $MasterInstanceId 
     * @param array $ReadOnlyInstanceSet 
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
