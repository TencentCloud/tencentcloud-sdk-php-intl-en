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
 * Instance details
 *
 * @method string getUin() Obtain User `Uin`
 * @method void setUin(string $Uin) Set User `Uin`
 * @method integer getAppId() Obtain User `AppId`
 * @method void setAppId(integer $AppId) Set User `AppId`
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getStatus() Obtain Instance status
 * @method void setStatus(string $Status) Set Instance status
 * @method string getStatusDesc() Obtain Instance status description
 * @method void setStatusDesc(string $StatusDesc) Set Instance status description
 * @method string getServerlessStatus() Obtain Serverless instance status. Valid values:
resume
pause
 * @method void setServerlessStatus(string $ServerlessStatus) Set Serverless instance status. Valid values:
resume
pause
 * @method string getDbType() Obtain Database type
 * @method void setDbType(string $DbType) Set Database type
 * @method string getDbVersion() Obtain Database version
 * @method void setDbVersion(string $DbVersion) Set Database version
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory in GB
 * @method void setMemory(integer $Memory) Set Memory in GB
 * @method integer getStorage() Obtain Storage capacity in GB
 * @method void setStorage(integer $Storage) Set Storage capacity in GB
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getInstanceRole() Obtain Current instance role
 * @method void setInstanceRole(string $InstanceRole) Set Current instance role
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getPayMode() Obtain Billing mode
 * @method void setPayMode(integer $PayMode) Set Billing mode
 * @method string getPeriodEndTime() Obtain Instance expiration time
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Instance expiration time
 * @method integer getNetType() Obtain Network type
 * @method void setNetType(integer $NetType) Set Network type
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getVip() Obtain Private IP of instance
 * @method void setVip(string $Vip) Set Private IP of instance
 * @method integer getVport() Obtain Private port of instance
 * @method void setVport(integer $Vport) Set Private port of instance
 * @method string getWanDomain() Obtain Public domain name of instance
 * @method void setWanDomain(string $WanDomain) Set Public domain name of instance
 * @method string getCharset() Obtain Character set
 * @method void setCharset(string $Charset) Set Character set
 * @method string getCynosVersion() Obtain TDSQL-C kernel version
 * @method void setCynosVersion(string $CynosVersion) Set TDSQL-C kernel version
 * @method integer getRenewFlag() Obtain Renewal flag
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag
 * @method float getMinCpu() Obtain The minimum number of CPU cores for a serverless instance
 * @method void setMinCpu(float $MinCpu) Set The minimum number of CPU cores for a serverless instance
 * @method float getMaxCpu() Obtain The maximum number of CPU cores for a serverless instance
 * @method void setMaxCpu(float $MaxCpu) Set The maximum number of CPU cores for a serverless instance
 * @method string getDbMode() Obtain Db type: <li>NORMAL</li> <li>SERVERLESS</li>.
 * @method void setDbMode(string $DbMode) Set Db type: <li>NORMAL</li> <li>SERVERLESS</li>.
 */
class CynosdbInstanceDetail extends AbstractModel
{
    /**
     * @var string User `Uin`
     */
    public $Uin;

    /**
     * @var integer User `AppId`
     */
    public $AppId;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Instance status
     */
    public $Status;

    /**
     * @var string Instance status description
     */
    public $StatusDesc;

    /**
     * @var string Serverless instance status. Valid values:
resume
pause
     */
    public $ServerlessStatus;

    /**
     * @var string Database type
     */
    public $DbType;

    /**
     * @var string Database version
     */
    public $DbVersion;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory in GB
     */
    public $Memory;

    /**
     * @var integer Storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Current instance role
     */
    public $InstanceRole;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Billing mode
     */
    public $PayMode;

    /**
     * @var string Instance expiration time
     */
    public $PeriodEndTime;

    /**
     * @var integer Network type
     */
    public $NetType;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Private IP of instance
     */
    public $Vip;

    /**
     * @var integer Private port of instance
     */
    public $Vport;

    /**
     * @var string Public domain name of instance
     */
    public $WanDomain;

    /**
     * @var string Character set
     */
    public $Charset;

    /**
     * @var string TDSQL-C kernel version
     */
    public $CynosVersion;

    /**
     * @var integer Renewal flag
     */
    public $RenewFlag;

    /**
     * @var float The minimum number of CPU cores for a serverless instance
     */
    public $MinCpu;

    /**
     * @var float The maximum number of CPU cores for a serverless instance
     */
    public $MaxCpu;

    /**
     * @var string Db type: <li>NORMAL</li> <li>SERVERLESS</li>.
     */
    public $DbMode;

    /**
     * @param string $Uin User `Uin`
     * @param integer $AppId User `AppId`
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $ProjectId Project ID
     * @param string $Region Region
     * @param string $Zone AZ
     * @param string $Status Instance status
     * @param string $StatusDesc Instance status description
     * @param string $ServerlessStatus Serverless instance status. Valid values:
resume
pause
     * @param string $DbType Database type
     * @param string $DbVersion Database version
     * @param integer $Cpu Number of CPU cores
     * @param integer $Memory Memory in GB
     * @param integer $Storage Storage capacity in GB
     * @param string $InstanceType Instance type
     * @param string $InstanceRole Current instance role
     * @param string $UpdateTime Update time
     * @param string $CreateTime Creation time
     * @param integer $PayMode Billing mode
     * @param string $PeriodEndTime Instance expiration time
     * @param integer $NetType Network type
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $Vip Private IP of instance
     * @param integer $Vport Private port of instance
     * @param string $WanDomain Public domain name of instance
     * @param string $Charset Character set
     * @param string $CynosVersion TDSQL-C kernel version
     * @param integer $RenewFlag Renewal flag
     * @param float $MinCpu The minimum number of CPU cores for a serverless instance
     * @param float $MaxCpu The maximum number of CPU cores for a serverless instance
     * @param string $DbMode Db type: <li>NORMAL</li> <li>SERVERLESS</li>.
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
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

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }
    }
}
