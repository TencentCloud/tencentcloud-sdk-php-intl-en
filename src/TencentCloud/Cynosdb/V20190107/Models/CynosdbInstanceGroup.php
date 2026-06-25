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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getAppId() Obtain 
 * @method void setAppId(integer $AppId) Set 
 * @method string getClusterId() Obtain 
 * @method void setClusterId(string $ClusterId) Set 
 * @method string getCreatedTime() Obtain 
 * @method void setCreatedTime(string $CreatedTime) Set 
 * @method string getDeletedTime() Obtain 
 * @method void setDeletedTime(string $DeletedTime) Set 
 * @method string getInstanceGroupId() Obtain 
 * @method void setInstanceGroupId(string $InstanceGroupId) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getType() Obtain Type of the instance group (network). ha-ha group; ro - read-only group; proxy - proxy; singleRo - read-only instance exclusive.
 * @method void setType(string $Type) Set Type of the instance group (network). ha-ha group; ro - read-only group; proxy - proxy; singleRo - read-only instance exclusive.
 * @method string getUpdatedTime() Obtain 
 * @method void setUpdatedTime(string $UpdatedTime) Set 
 * @method string getVip() Obtain 
 * @method void setVip(string $Vip) Set 
 * @method integer getVport() Obtain 
 * @method void setVport(integer $Vport) Set 
 * @method string getWanDomain() Obtain 
 * @method void setWanDomain(string $WanDomain) Set 
 * @method string getWanIP() Obtain 
 * @method void setWanIP(string $WanIP) Set 
 * @method integer getWanPort() Obtain 
 * @method void setWanPort(integer $WanPort) Set 
 * @method string getWanStatus() Obtain 
 * @method void setWanStatus(string $WanStatus) Set 
 * @method array getInstanceSet() Obtain 
 * @method void setInstanceSet(array $InstanceSet) Set 
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getUniqSubnetId() Obtain Specifies the subnet ID.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Specifies the subnet ID.
 * @method OldAddrInfo getOldAddrInfo() Obtain Recycling IP information.
 * @method void setOldAddrInfo(OldAddrInfo $OldAddrInfo) Set Recycling IP information.
 * @method array getProcessingTasks() Obtain 
 * @method void setProcessingTasks(array $ProcessingTasks) Set 
 * @method array getTasks() Obtain 
 * @method void setTasks(array $Tasks) Set 
 * @method integer getNetServiceId() Obtain 
 * @method void setNetServiceId(integer $NetServiceId) Set 
 */
class CynosdbInstanceGroup extends AbstractModel
{
    /**
     * @var integer 
     */
    public $AppId;

    /**
     * @var string 
     */
    public $ClusterId;

    /**
     * @var string 
     */
    public $CreatedTime;

    /**
     * @var string 
     */
    public $DeletedTime;

    /**
     * @var string 
     */
    public $InstanceGroupId;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string Type of the instance group (network). ha-ha group; ro - read-only group; proxy - proxy; singleRo - read-only instance exclusive.
     */
    public $Type;

    /**
     * @var string 
     */
    public $UpdatedTime;

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
    public $WanDomain;

    /**
     * @var string 
     */
    public $WanIP;

    /**
     * @var integer 
     */
    public $WanPort;

    /**
     * @var string 
     */
    public $WanStatus;

    /**
     * @var array 
     */
    public $InstanceSet;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string Specifies the subnet ID.
     */
    public $UniqSubnetId;

    /**
     * @var OldAddrInfo Recycling IP information.
     */
    public $OldAddrInfo;

    /**
     * @var array 
     */
    public $ProcessingTasks;

    /**
     * @var array 
     */
    public $Tasks;

    /**
     * @var integer 
     */
    public $NetServiceId;

    /**
     * @param integer $AppId 
     * @param string $ClusterId 
     * @param string $CreatedTime 
     * @param string $DeletedTime 
     * @param string $InstanceGroupId 
     * @param string $Status 
     * @param string $Type Type of the instance group (network). ha-ha group; ro - read-only group; proxy - proxy; singleRo - read-only instance exclusive.
     * @param string $UpdatedTime 
     * @param string $Vip 
     * @param integer $Vport 
     * @param string $WanDomain 
     * @param string $WanIP 
     * @param integer $WanPort 
     * @param string $WanStatus 
     * @param array $InstanceSet 
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId Specifies the subnet ID.
     * @param OldAddrInfo $OldAddrInfo Recycling IP information.
     * @param array $ProcessingTasks 
     * @param array $Tasks 
     * @param integer $NetServiceId 
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DeletedTime",$param) and $param["DeletedTime"] !== null) {
            $this->DeletedTime = $param["DeletedTime"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new CynosdbInstance();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("OldAddrInfo",$param) and $param["OldAddrInfo"] !== null) {
            $this->OldAddrInfo = new OldAddrInfo();
            $this->OldAddrInfo->deserialize($param["OldAddrInfo"]);
        }

        if (array_key_exists("ProcessingTasks",$param) and $param["ProcessingTasks"] !== null) {
            $this->ProcessingTasks = $param["ProcessingTasks"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("NetServiceId",$param) and $param["NetServiceId"] !== null) {
            $this->NetServiceId = $param["NetServiceId"];
        }
    }
}
