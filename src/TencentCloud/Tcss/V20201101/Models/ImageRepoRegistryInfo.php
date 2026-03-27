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
 * Container Security Image Repository List
 *
 * @method integer getRegistryId() Obtain Repository id
 * @method void setRegistryId(integer $RegistryId) Set Repository id
 * @method string getName() Obtain Repository Name
 * @method void setName(string $Name) Set Repository Name
 * @method string getRegistryType() Obtain Repository Type, list: harbor, tcr
 * @method void setRegistryType(string $RegistryType) Set Repository Type, list: harbor, tcr
 * @method string getUrl() Obtain Repository url
 * @method void setUrl(string $Url) Set Repository url
 * @method string getNetType() Obtain Network Type, list: public
 * @method void setNetType(string $NetType) Set Network Type, list: public
 * @method string getRegistryRegion() Obtain Region, list: default
 * @method void setRegistryRegion(string $RegistryRegion) Set Region, list: default
 * @method string getRegistryVersion() Obtain Repository Version
 * @method void setRegistryVersion(string $RegistryVersion) Set Repository Version
 * @method string getConnectMsg() Obtain Repository connection error message (to be deprecated, use ConnDetectException instead)
 * @method void setConnectMsg(string $ConnectMsg) Set Repository connection error message (to be deprecated, use ConnDetectException instead)
 * @method string getConnDetectType() Obtain Connectivity Detection Method
 * @method void setConnDetectType(string $ConnDetectType) Set Connectivity Detection Method
 * @method integer getConnDetectHostCount() Obtain Connectivity Detection Host Count
 * @method void setConnDetectHostCount(integer $ConnDetectHostCount) Set Connectivity Detection Host Count
 * @method array getConnDetectDetail() Obtain Connectivity Detection Details
 * @method void setConnDetectDetail(array $ConnDetectDetail) Set Connectivity Detection Details
 * @method string getInstanceID() Obtain instance_id in tcr
 * @method void setInstanceID(string $InstanceID) Set instance_id in tcr
 * @method string getLatestSyncTime() Obtain Latest Successful Synchronization Time
 * @method void setLatestSyncTime(string $LatestSyncTime) Set Latest Successful Synchronization Time
 * @method string getSyncStatus() Obtain Synchronization Status
 * @method void setSyncStatus(string $SyncStatus) Set Synchronization Status
 * @method string getSyncFailReason() Obtain Synchronization Failure Reason
 * @method void setSyncFailReason(string $SyncFailReason) Set Synchronization Failure Reason
 * @method string getSyncSolution() Obtain Synchronization Failure Solution
 * @method void setSyncSolution(string $SyncSolution) Set Synchronization Failure Solution
 * @method string getSyncMessage() Obtain Synchronization Failure Message
 * @method void setSyncMessage(string $SyncMessage) Set Synchronization Failure Message
 */
class ImageRepoRegistryInfo extends AbstractModel
{
    /**
     * @var integer Repository id
     */
    public $RegistryId;

    /**
     * @var string Repository Name
     */
    public $Name;

    /**
     * @var string Repository Type, list: harbor, tcr
     */
    public $RegistryType;

    /**
     * @var string Repository url
     */
    public $Url;

    /**
     * @var string Network Type, list: public
     */
    public $NetType;

    /**
     * @var string Region, list: default
     */
    public $RegistryRegion;

    /**
     * @var string Repository Version
     */
    public $RegistryVersion;

    /**
     * @var string Repository connection error message (to be deprecated, use ConnDetectException instead)
     */
    public $ConnectMsg;

    /**
     * @var string Connectivity Detection Method
     */
    public $ConnDetectType;

    /**
     * @var integer Connectivity Detection Host Count
     */
    public $ConnDetectHostCount;

    /**
     * @var array Connectivity Detection Details
     */
    public $ConnDetectDetail;

    /**
     * @var string instance_id in tcr
     */
    public $InstanceID;

    /**
     * @var string Latest Successful Synchronization Time
     */
    public $LatestSyncTime;

    /**
     * @var string Synchronization Status
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
     * @var string Synchronization Failure Message
     */
    public $SyncMessage;

    /**
     * @param integer $RegistryId Repository id
     * @param string $Name Repository Name
     * @param string $RegistryType Repository Type, list: harbor, tcr
     * @param string $Url Repository url
     * @param string $NetType Network Type, list: public
     * @param string $RegistryRegion Region, list: default
     * @param string $RegistryVersion Repository Version
     * @param string $ConnectMsg Repository connection error message (to be deprecated, use ConnDetectException instead)
     * @param string $ConnDetectType Connectivity Detection Method
     * @param integer $ConnDetectHostCount Connectivity Detection Host Count
     * @param array $ConnDetectDetail Connectivity Detection Details
     * @param string $InstanceID instance_id in tcr
     * @param string $LatestSyncTime Latest Successful Synchronization Time
     * @param string $SyncStatus Synchronization Status
     * @param string $SyncFailReason Synchronization Failure Reason
     * @param string $SyncSolution Synchronization Failure Solution
     * @param string $SyncMessage Synchronization Failure Message
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
    }
}
