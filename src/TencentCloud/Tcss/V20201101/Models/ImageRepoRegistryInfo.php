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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getRegistryId() Obtain 
 * @method void setRegistryId(integer $RegistryId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getRegistryType() Obtain 
 * @method void setRegistryType(string $RegistryType) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method string getNetType() Obtain 
 * @method void setNetType(string $NetType) Set 
 * @method string getRegistryRegion() Obtain 
 * @method void setRegistryRegion(string $RegistryRegion) Set 
 * @method string getRegistryVersion() Obtain 
 * @method void setRegistryVersion(string $RegistryVersion) Set 
 * @method string getConnectMsg() Obtain 
 * @method void setConnectMsg(string $ConnectMsg) Set 
 * @method string getConnDetectType() Obtain 
 * @method void setConnDetectType(string $ConnDetectType) Set 
 * @method integer getConnDetectHostCount() Obtain 
 * @method void setConnDetectHostCount(integer $ConnDetectHostCount) Set 
 * @method array getConnDetectDetail() Obtain 
 * @method void setConnDetectDetail(array $ConnDetectDetail) Set 
 * @method string getInstanceID() Obtain 
 * @method void setInstanceID(string $InstanceID) Set 
 * @method string getLatestSyncTime() Obtain 
 * @method void setLatestSyncTime(string $LatestSyncTime) Set 
 * @method string getSyncStatus() Obtain 
 * @method void setSyncStatus(string $SyncStatus) Set 
 * @method string getSyncFailReason() Obtain 
 * @method void setSyncFailReason(string $SyncFailReason) Set 
 * @method string getSyncSolution() Obtain 
 * @method void setSyncSolution(string $SyncSolution) Set 
 * @method string getSyncMessage() Obtain 
 * @method void setSyncMessage(string $SyncMessage) Set 
 */
class ImageRepoRegistryInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $RegistryId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $RegistryType;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var string 
     */
    public $NetType;

    /**
     * @var string 
     */
    public $RegistryRegion;

    /**
     * @var string 
     */
    public $RegistryVersion;

    /**
     * @var string 
     */
    public $ConnectMsg;

    /**
     * @var string 
     */
    public $ConnDetectType;

    /**
     * @var integer 
     */
    public $ConnDetectHostCount;

    /**
     * @var array 
     */
    public $ConnDetectDetail;

    /**
     * @var string 
     */
    public $InstanceID;

    /**
     * @var string 
     */
    public $LatestSyncTime;

    /**
     * @var string 
     */
    public $SyncStatus;

    /**
     * @var string 
     */
    public $SyncFailReason;

    /**
     * @var string 
     */
    public $SyncSolution;

    /**
     * @var string 
     */
    public $SyncMessage;

    /**
     * @param integer $RegistryId 
     * @param string $Name 
     * @param string $RegistryType 
     * @param string $Url 
     * @param string $NetType 
     * @param string $RegistryRegion 
     * @param string $RegistryVersion 
     * @param string $ConnectMsg 
     * @param string $ConnDetectType 
     * @param integer $ConnDetectHostCount 
     * @param array $ConnDetectDetail 
     * @param string $InstanceID 
     * @param string $LatestSyncTime 
     * @param string $SyncStatus 
     * @param string $SyncFailReason 
     * @param string $SyncSolution 
     * @param string $SyncMessage 
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
