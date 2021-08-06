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
 * Cluster information
 *
 * @method string getStatus() Obtain Cluster status
 * @method void setStatus(string $Status) Set Cluster status
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getDbVersion() Obtain Database version
 * @method void setDbVersion(string $DbVersion) Set Database version
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getInstanceNum() Obtain Number of instances
 * @method void setInstanceNum(integer $InstanceNum) Set Number of instances
 * @method string getUin() Obtain User `uin`
 * @method void setUin(string $Uin) Set User `uin`
 * @method string getDbType() Obtain Engine type
 * @method void setDbType(string $DbType) Set Engine type
 * @method integer getAppId() Obtain User `appid`
 * @method void setAppId(integer $AppId) Set User `appid`
 * @method string getStatusDesc() Obtain Cluster status description
 * @method void setStatusDesc(string $StatusDesc) Set Cluster status description
 * @method string getCreateTime() Obtain Cluster creation time
 * @method void setCreateTime(string $CreateTime) Set Cluster creation time
 * @method integer getPayMode() Obtain Billing mode. 0: pay-as-you-go; 1: monthly subscription
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: pay-as-you-go; 1: monthly subscription
 * @method string getPeriodEndTime() Obtain End time
 * @method void setPeriodEndTime(string $PeriodEndTime) Set End time
 * @method string getVip() Obtain Cluster read-write VIP
 * @method void setVip(string $Vip) Set Cluster read-write VIP
 * @method integer getVport() Obtain Cluster read-write vport
 * @method void setVport(integer $Vport) Set Cluster read-write vport
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getCynosVersion() Obtain TDSQL-C kernel version
 * @method void setCynosVersion(string $CynosVersion) Set TDSQL-C kernel version
 * @method integer getStorageLimit() Obtain Storage capacity
 * @method void setStorageLimit(integer $StorageLimit) Set Storage capacity
 * @method integer getRenewFlag() Obtain Renewal flag
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag
 * @method string getProcessingTask() Obtain Task in progress
 * @method void setProcessingTask(string $ProcessingTask) Set Task in progress
 * @method array getTasks() Obtain Array of tasks in cluster
 * @method void setTasks(array $Tasks) Set Array of tasks in cluster
 * @method array getResourceTags() Obtain Array of tags bound to cluster
 * @method void setResourceTags(array $ResourceTags) Set Array of tags bound to cluster
 * @method string getDbMode() Obtain Database type (`NORMAL` or `SERVERLESS`)
 * @method void setDbMode(string $DbMode) Set Database type (`NORMAL` or `SERVERLESS`)
 * @method string getServerlessStatus() Obtain Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
pause
 * @method void setServerlessStatus(string $ServerlessStatus) Set Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
pause
 * @method integer getStorage() Obtain Prepaid cluster storage
 * @method void setStorage(integer $Storage) Set Prepaid cluster storage
 * @method string getStorageId() Obtain Cluster storage ID used in prepaid storage modification
 * @method void setStorageId(string $StorageId) Set Cluster storage ID used in prepaid storage modification
 * @method integer getStoragePayMode() Obtain Billing mode of cluster storage. Valid values: `0` (postpaid), `1` (prepaid)
 * @method void setStoragePayMode(integer $StoragePayMode) Set Billing mode of cluster storage. Valid values: `0` (postpaid), `1` (prepaid)
 * @method integer getMinStorageSize() Obtain The minimum storage corresponding to the compute specifications of the cluster
 * @method void setMinStorageSize(integer $MinStorageSize) Set The minimum storage corresponding to the compute specifications of the cluster
 * @method integer getMaxStorageSize() Obtain The maximum storage corresponding to the compute specifications of the cluster
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set The maximum storage corresponding to the compute specifications of the cluster
 */
class CynosdbCluster extends AbstractModel
{
    /**
     * @var string Cluster status
     */
    public $Status;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Database version
     */
    public $DbVersion;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of instances
     */
    public $InstanceNum;

    /**
     * @var string User `uin`
     */
    public $Uin;

    /**
     * @var string Engine type
     */
    public $DbType;

    /**
     * @var integer User `appid`
     */
    public $AppId;

    /**
     * @var string Cluster status description
     */
    public $StatusDesc;

    /**
     * @var string Cluster creation time
     */
    public $CreateTime;

    /**
     * @var integer Billing mode. 0: pay-as-you-go; 1: monthly subscription
     */
    public $PayMode;

    /**
     * @var string End time
     */
    public $PeriodEndTime;

    /**
     * @var string Cluster read-write VIP
     */
    public $Vip;

    /**
     * @var integer Cluster read-write vport
     */
    public $Vport;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string TDSQL-C kernel version
     */
    public $CynosVersion;

    /**
     * @var integer Storage capacity
     */
    public $StorageLimit;

    /**
     * @var integer Renewal flag
     */
    public $RenewFlag;

    /**
     * @var string Task in progress
     */
    public $ProcessingTask;

    /**
     * @var array Array of tasks in cluster
     */
    public $Tasks;

    /**
     * @var array Array of tags bound to cluster
     */
    public $ResourceTags;

    /**
     * @var string Database type (`NORMAL` or `SERVERLESS`)
     */
    public $DbMode;

    /**
     * @var string Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
pause
     */
    public $ServerlessStatus;

    /**
     * @var integer Prepaid cluster storage
     */
    public $Storage;

    /**
     * @var string Cluster storage ID used in prepaid storage modification
     */
    public $StorageId;

    /**
     * @var integer Billing mode of cluster storage. Valid values: `0` (postpaid), `1` (prepaid)
     */
    public $StoragePayMode;

    /**
     * @var integer The minimum storage corresponding to the compute specifications of the cluster
     */
    public $MinStorageSize;

    /**
     * @var integer The maximum storage corresponding to the compute specifications of the cluster
     */
    public $MaxStorageSize;

    /**
     * @param string $Status Cluster status
     * @param string $UpdateTime Update time
     * @param string $Zone AZ
     * @param string $ClusterName Cluster name
     * @param string $Region Region
     * @param string $DbVersion Database version
     * @param string $ClusterId Cluster ID
     * @param integer $InstanceNum Number of instances
     * @param string $Uin User `uin`
     * @param string $DbType Engine type
     * @param integer $AppId User `appid`
     * @param string $StatusDesc Cluster status description
     * @param string $CreateTime Cluster creation time
     * @param integer $PayMode Billing mode. 0: pay-as-you-go; 1: monthly subscription
     * @param string $PeriodEndTime End time
     * @param string $Vip Cluster read-write VIP
     * @param integer $Vport Cluster read-write vport
     * @param integer $ProjectID Project ID
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $CynosVersion TDSQL-C kernel version
     * @param integer $StorageLimit Storage capacity
     * @param integer $RenewFlag Renewal flag
     * @param string $ProcessingTask Task in progress
     * @param array $Tasks Array of tasks in cluster
     * @param array $ResourceTags Array of tags bound to cluster
     * @param string $DbMode Database type (`NORMAL` or `SERVERLESS`)
     * @param string $ServerlessStatus Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
pause
     * @param integer $Storage Prepaid cluster storage
     * @param string $StorageId Cluster storage ID used in prepaid storage modification
     * @param integer $StoragePayMode Billing mode of cluster storage. Valid values: `0` (postpaid), `1` (prepaid)
     * @param integer $MinStorageSize The minimum storage corresponding to the compute specifications of the cluster
     * @param integer $MaxStorageSize The maximum storage corresponding to the compute specifications of the cluster
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }
    }
}
