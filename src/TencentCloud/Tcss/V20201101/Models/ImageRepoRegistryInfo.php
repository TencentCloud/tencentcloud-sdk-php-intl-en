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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container security image repository list
 *
 * @method integer getRegistryId() Obtain Repository ID
 * @method void setRegistryId(integer $RegistryId) Set Repository ID
 * @method string getName() Obtain Repository Name
 * @method void setName(string $Name) Set Repository Name
 * @method string getRegistryType() Obtain Repository type, list: harbor, tcr
 * @method void setRegistryType(string $RegistryType) Set Repository type, list: harbor, tcr
 * @method string getUrl() Obtain Warehouse url
 * @method void setUrl(string $Url) Set Warehouse url
 * @method string getNetType() Obtain Network type, list: public
 * @method void setNetType(string $NetType) Set Network type, list: public
 * @method string getRegistryRegion() Obtain Region, list: default
 * @method void setRegistryRegion(string $RegistryRegion) Set Region, list: default
 * @method string getRegistryVersion() Obtain warehouse version
 * @method void setRegistryVersion(string $RegistryVersion) Set warehouse version
 * @method string getConnectMsg() Obtain Repository connection error message (to be deprecated). Use ConnDetectException.
 * @method void setConnectMsg(string $ConnectMsg) Set Repository connection error message (to be deprecated). Use ConnDetectException.
 * @method string getConnDetectType() Obtain Connectivity Check Method
 * @method void setConnDetectType(string $ConnDetectType) Set Connectivity Check Method
 * @method integer getConnDetectHostCount() Obtain Connectivity Check Host Count
 * @method void setConnDetectHostCount(integer $ConnDetectHostCount) Set Connectivity Check Host Count
 * @method array getConnDetectDetail() Obtain Connectivity Check Details
 * @method void setConnDetectDetail(array $ConnDetectDetail) Set Connectivity Check Details
 * @method string getInstanceID() Obtain Instance ID in TCR Scenario
 * @method void setInstanceID(string $InstanceID) Set Instance ID in TCR Scenario
 * @method string getLatestSyncTime() Obtain Most Recent Time for Successful Synchronization
 * @method void setLatestSyncTime(string $LatestSyncTime) Set Most Recent Time for Successful Synchronization
 * @method string getSyncStatus() Obtain Synchronization status
 * @method void setSyncStatus(string $SyncStatus) Set Synchronization status
 * @method string getSyncFailReason() Obtain Synchronization Failure Reason
 * @method void setSyncFailReason(string $SyncFailReason) Set Synchronization Failure Reason
 * @method string getSyncSolution() Obtain Synchronization Failure Solution
 * @method void setSyncSolution(string $SyncSolution) Set Synchronization Failure Solution
 * @method string getSyncMessage() Obtain Synchronization Failure Information
 * @method void setSyncMessage(string $SyncMessage) Set Synchronization Failure Information
 * @method integer getSyncMode() Obtain Synchronization method. 0: full synchronization; 1: incremental synchronization.	
 * @method void setSyncMode(integer $SyncMode) Set Synchronization method. 0: full synchronization; 1: incremental synchronization.	
 */
class ImageRepoRegistryInfo extends AbstractModel
{
    /**
     * @var integer Repository ID
     */
    public $RegistryId;

    /**
     * @var string Repository Name
     */
    public $Name;

    /**
     * @var string Repository type, list: harbor, tcr
     */
    public $RegistryType;

    /**
     * @var string Warehouse url
     */
    public $Url;

    /**
     * @var string Network type, list: public
     */
    public $NetType;

    /**
     * @var string Region, list: default
     */
    public $RegistryRegion;

    /**
     * @var string warehouse version
     */
    public $RegistryVersion;

    /**
     * @var string Repository connection error message (to be deprecated). Use ConnDetectException.
     */
    public $ConnectMsg;

    /**
     * @var string Connectivity Check Method
     */
    public $ConnDetectType;

    /**
     * @var integer Connectivity Check Host Count
     */
    public $ConnDetectHostCount;

    /**
     * @var array Connectivity Check Details
     */
    public $ConnDetectDetail;

    /**
     * @var string Instance ID in TCR Scenario
     */
    public $InstanceID;

    /**
     * @var string Most Recent Time for Successful Synchronization
     */
    public $LatestSyncTime;

    /**
     * @var string Synchronization status
     */
    public $SyncStatus;

    /**
     * @var string Synchronization Failure Reason
     */
    public $SyncFailReason;

    /**
     * @var string Synchronization Failure Solution
     */
    public $SyncSolution;

    /**
     * @var string Synchronization Failure Information
     */
    public $SyncMessage;

    /**
     * @var integer Synchronization method. 0: full synchronization; 1: incremental synchronization.	
     */
    public $SyncMode;

    /**
     * @param integer $RegistryId Repository ID
     * @param string $Name Repository Name
     * @param string $RegistryType Repository type, list: harbor, tcr
     * @param string $Url Warehouse url
     * @param string $NetType Network type, list: public
     * @param string $RegistryRegion Region, list: default
     * @param string $RegistryVersion warehouse version
     * @param string $ConnectMsg Repository connection error message (to be deprecated). Use ConnDetectException.
     * @param string $ConnDetectType Connectivity Check Method
     * @param integer $ConnDetectHostCount Connectivity Check Host Count
     * @param array $ConnDetectDetail Connectivity Check Details
     * @param string $InstanceID Instance ID in TCR Scenario
     * @param string $LatestSyncTime Most Recent Time for Successful Synchronization
     * @param string $SyncStatus Synchronization status
     * @param string $SyncFailReason Synchronization Failure Reason
     * @param string $SyncSolution Synchronization Failure Solution
     * @param string $SyncMessage Synchronization Failure Information
     * @param integer $SyncMode Synchronization method. 0: full synchronization; 1: incremental synchronization.	
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("ConnectMsg",$param) and $param["ConnectMsg"] !== null) {
            $this->ConnectMsg = $param["ConnectMsg"];
        }

        if (array_key_exists("ConnDetectType",$param) and $param["ConnDetectType"] !== null) {
            $this->ConnDetectType = $param["ConnDetectType"];
        }

        if (array_key_exists("ConnDetectHostCount",$param) and $param["ConnDetectHostCount"] !== null) {
            $this->ConnDetectHostCount = $param["ConnDetectHostCount"];
        }

        if (array_key_exists("ConnDetectDetail",$param) and $param["ConnDetectDetail"] !== null) {
            $this->ConnDetectDetail = [];
            foreach ($param["ConnDetectDetail"] as $key => $value){
                $obj = new RegistryConnDetectResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectDetail, $obj);
            }
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LatestSyncTime",$param) and $param["LatestSyncTime"] !== null) {
            $this->LatestSyncTime = $param["LatestSyncTime"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncFailReason",$param) and $param["SyncFailReason"] !== null) {
            $this->SyncFailReason = $param["SyncFailReason"];
        }

        if (array_key_exists("SyncSolution",$param) and $param["SyncSolution"] !== null) {
            $this->SyncSolution = $param["SyncSolution"];
        }

        if (array_key_exists("SyncMessage",$param) and $param["SyncMessage"] !== null) {
            $this->SyncMessage = $param["SyncMessage"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}
