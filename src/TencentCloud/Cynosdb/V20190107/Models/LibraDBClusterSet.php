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
 * Cluster list information
 *
 * @method integer getAppId() Obtain User ID
 * @method void setAppId(integer $AppId) Set User ID
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getCynosVersion() Obtain cynos version
 * @method void setCynosVersion(string $CynosVersion) Set cynos version
 * @method string getCynosVersionTag() Obtain Version tag
 * @method void setCynosVersionTag(string $CynosVersionTag) Set Version tag
 * @method string getDbVersion() Obtain Database version.
 * @method void setDbVersion(string $DbVersion) Set Database version.
 * @method integer getInstanceNum() Obtain Instance count
 * @method void setInstanceNum(integer $InstanceNum) Set Instance count
 * @method string getIsFreeze() Obtain Whether to freeze
 * @method void setIsFreeze(string $IsFreeze) Set Whether to freeze
 * @method array getNetAddrs() Obtain Network address.
 * @method void setNetAddrs(array $NetAddrs) Set Network address.
 * @method integer getPayMode() Obtain Payment mode
 * @method void setPayMode(integer $PayMode) Set Payment mode
 * @method string getPeriodEndTime() Obtain Expiration time.

 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time.

 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method integer getRenewFlag() Obtain Auto-renewal flag. 1: Automatic renewal. 0: Non-renewal upon expiration.
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal flag. 1: Automatic renewal. 0: Non-renewal upon expiration.
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method string getStatusDesc() Obtain Status description.
 * @method void setStatusDesc(string $StatusDesc) Set Status description.
 * @method integer getStorage() Obtain Storage size in GB
 * @method void setStorage(integer $Storage) Set Storage size in GB
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method array getTasks() Obtain Task list
 * @method void setTasks(array $Tasks) Set Task list
 * @method string getUin() Obtain Account ID.
 * @method void setUin(string $Uin) Set Account ID.
 * @method string getVip() Obtain VIP address
 * @method void setVip(string $Vip) Set VIP address
 * @method string getVpcId() Obtain Unique ID of VPC
 * @method void setVpcId(string $VpcId) Set Unique ID of VPC
 * @method integer getVport() Obtain vport port
 * @method void setVport(integer $Vport) Set vport port
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getMasterZone() Obtain Primary AZ.
 * @method void setMasterZone(string $MasterZone) Set Primary AZ.
 * @method string getPhysicalZone() Obtain physical AZ
 * @method void setPhysicalZone(string $PhysicalZone) Set physical AZ
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 */
class LibraDBClusterSet extends AbstractModel
{
    /**
     * @var integer User ID
     */
    public $AppId;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string cynos version
     */
    public $CynosVersion;

    /**
     * @var string Version tag
     */
    public $CynosVersionTag;

    /**
     * @var string Database version.
     */
    public $DbVersion;

    /**
     * @var integer Instance count
     */
    public $InstanceNum;

    /**
     * @var string Whether to freeze
     */
    public $IsFreeze;

    /**
     * @var array Network address.
     */
    public $NetAddrs;

    /**
     * @var integer Payment mode
     */
    public $PayMode;

    /**
     * @var string Expiration time.

     */
    public $PeriodEndTime;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var integer Auto-renewal flag. 1: Automatic renewal. 0: Non-renewal upon expiration.
     */
    public $RenewFlag;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var string Status description.
     */
    public $StatusDesc;

    /**
     * @var integer Storage size in GB
     */
    public $Storage;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var array Task list
     */
    public $Tasks;

    /**
     * @var string Account ID.
     */
    public $Uin;

    /**
     * @var string VIP address
     */
    public $Vip;

    /**
     * @var string Unique ID of VPC
     */
    public $VpcId;

    /**
     * @var integer vport port
     */
    public $Vport;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Primary AZ.
     */
    public $MasterZone;

    /**
     * @var string physical AZ
     */
    public $PhysicalZone;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @param integer $AppId User ID
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $CreateTime Creation time.
     * @param string $CynosVersion cynos version
     * @param string $CynosVersionTag Version tag
     * @param string $DbVersion Database version.
     * @param integer $InstanceNum Instance count
     * @param string $IsFreeze Whether to freeze
     * @param array $NetAddrs Network address.
     * @param integer $PayMode Payment mode
     * @param string $PeriodEndTime Expiration time.

     * @param integer $ProjectID Project ID
     * @param string $Region Region.
     * @param integer $RenewFlag Auto-renewal flag. 1: Automatic renewal. 0: Non-renewal upon expiration.
     * @param string $Status Status.
     * @param string $StatusDesc Status description.
     * @param integer $Storage Storage size in GB
     * @param string $SubnetId Subnet ID.
     * @param array $Tasks Task list
     * @param string $Uin Account ID.
     * @param string $Vip VIP address
     * @param string $VpcId Unique ID of VPC
     * @param integer $Vport vport port
     * @param string $UpdateTime Update time
     * @param string $MasterZone Primary AZ.
     * @param string $PhysicalZone physical AZ
     * @param string $Zone Availability zone
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("NetAddrs",$param) and $param["NetAddrs"] !== null) {
            $this->NetAddrs = [];
            foreach ($param["NetAddrs"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrs, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
