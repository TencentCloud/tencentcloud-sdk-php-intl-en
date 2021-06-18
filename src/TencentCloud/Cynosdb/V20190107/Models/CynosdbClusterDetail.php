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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster details
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getStatusDesc() Obtain Status description
 * @method void setStatusDesc(string $StatusDesc) Set Status description
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method string getVpcId() Obtain Unique VPC ID
 * @method void setVpcId(string $VpcId) Set Unique VPC ID
 * @method string getSubnetName() Obtain Subnet name
 * @method void setSubnetName(string $SubnetName) Set Subnet name
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getCharset() Obtain Character set
 * @method void setCharset(string $Charset) Set Character set
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getDbType() Obtain Database type
 * @method void setDbType(string $DbType) Set Database type
 * @method string getDbVersion() Obtain Database version
 * @method void setDbVersion(string $DbVersion) Set Database version
 * @method integer getUsedStorage() Obtain Used capacity
 * @method void setUsedStorage(integer $UsedStorage) Set Used capacity
 * @method array getRoAddr() Obtain vport for read/write separation
 * @method void setRoAddr(array $RoAddr) Set vport for read/write separation
 * @method array getInstanceSet() Obtain Instance information
 * @method void setInstanceSet(array $InstanceSet) Set Instance information
 * @method integer getPayMode() Obtain Billing mode
 * @method void setPayMode(integer $PayMode) Set Billing mode
 * @method string getPeriodEndTime() Obtain Expiration time
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time
 * @method string getVip() Obtain VIP
 * @method void setVip(string $Vip) Set VIP
 * @method integer getVport() Obtain vport
 * @method void setVport(integer $Vport) Set vport
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method array getResourceTags() Obtain Array of tags bound to instance
 * @method void setResourceTags(array $ResourceTags) Set Array of tags bound to instance
 * @method string getServerlessStatus() Obtain Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
 * @method void setServerlessStatus(string $ServerlessStatus) Set Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
 */
class CynosdbClusterDetail extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Status description
     */
    public $StatusDesc;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var string Unique VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet name
     */
    public $SubnetName;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Character set
     */
    public $Charset;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Database type
     */
    public $DbType;

    /**
     * @var string Database version
     */
    public $DbVersion;

    /**
     * @var integer Used capacity
     */
    public $UsedStorage;

    /**
     * @var array vport for read/write separation
     */
    public $RoAddr;

    /**
     * @var array Instance information
     */
    public $InstanceSet;

    /**
     * @var integer Billing mode
     */
    public $PayMode;

    /**
     * @var string Expiration time
     */
    public $PeriodEndTime;

    /**
     * @var string VIP
     */
    public $Vip;

    /**
     * @var integer vport
     */
    public $Vport;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var array Array of tags bound to instance
     */
    public $ResourceTags;

    /**
     * @var string Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
     */
    public $ServerlessStatus;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Region Region
     * @param string $Status Status
     * @param string $StatusDesc Status description
     * @param string $VpcName VPC name
     * @param string $VpcId Unique VPC ID
     * @param string $SubnetName Subnet name
     * @param string $SubnetId Subnet ID
     * @param string $Charset Character set
     * @param string $CreateTime Creation time
     * @param string $DbType Database type
     * @param string $DbVersion Database version
     * @param integer $UsedStorage Used capacity
     * @param array $RoAddr vport for read/write separation
     * @param array $InstanceSet Instance information
     * @param integer $PayMode Billing mode
     * @param string $PeriodEndTime Expiration time
     * @param string $Vip VIP
     * @param integer $Vport vport
     * @param integer $ProjectID Project ID
     * @param string $Zone AZ
     * @param array $ResourceTags Array of tags bound to instance
     * @param string $ServerlessStatus Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new Addr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new ClusterInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }
    }
}
