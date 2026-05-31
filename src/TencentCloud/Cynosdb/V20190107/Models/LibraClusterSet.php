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
 * libra cluster information
 *
 * @method integer getAppId() Obtain User ID
 * @method void setAppId(integer $AppId) Set User ID
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getDbVersion() Obtain Database version.
 * @method void setDbVersion(string $DbVersion) Set Database version.
 * @method array getInstanceSet() Obtain instance information
 * @method void setInstanceSet(array $InstanceSet) Set instance information
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
 * @method integer getStorage() Obtain Storage size
 * @method void setStorage(integer $Storage) Set Storage size
 * @method integer getUsedStorage() Obtain Used Capacity
 * @method void setUsedStorage(integer $UsedStorage) Set Used Capacity
 * @method string getVip() Obtain VIP address
 * @method void setVip(string $Vip) Set VIP address
 * @method integer getVport() Obtain vport port
 * @method void setVport(integer $Vport) Set vport port
 */
class LibraClusterSet extends AbstractModel
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
     * @var string Database version.
     */
    public $DbVersion;

    /**
     * @var array instance information
     */
    public $InstanceSet;

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
     * @var integer Storage size
     */
    public $Storage;

    /**
     * @var integer Used Capacity
     */
    public $UsedStorage;

    /**
     * @var string VIP address
     */
    public $Vip;

    /**
     * @var integer vport port
     */
    public $Vport;

    /**
     * @param integer $AppId User ID
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $CreateTime Creation time.
     * @param string $DbVersion Database version.
     * @param array $InstanceSet instance information
     * @param integer $PayMode Payment mode
     * @param string $PeriodEndTime Expiration time.
     * @param integer $ProjectID Project ID
     * @param string $Region Region.
     * @param integer $RenewFlag Auto-renewal flag. 1: Automatic renewal. 0: Non-renewal upon expiration.
     * @param string $Status Status.
     * @param string $StatusDesc Status description.
     * @param integer $Storage Storage size
     * @param integer $UsedStorage Used Capacity
     * @param string $Vip VIP address
     * @param integer $Vport vport port
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

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new LibraInstanceSet();
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

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
