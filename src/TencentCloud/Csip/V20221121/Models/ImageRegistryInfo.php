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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image repository information.
 *
 * @method integer getRegistryId() Obtain <p>Repository id</p>
 * @method void setRegistryId(integer $RegistryId) Set <p>Repository id</p>
 * @method string getName() Obtain <p>Repository name.</p>
 * @method void setName(string $Name) Set <p>Repository name.</p>
 * @method string getRegistryType() Obtain <p>Repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Repository type</p>
 * @method string getUrl() Obtain <p>Warehouse url</p>
 * @method void setUrl(string $Url) Set <p>Warehouse url</p>
 * @method string getNetType() Obtain <p>Network connection type</p>
 * @method void setNetType(string $NetType) Set <p>Network connection type</p>
 * @method string getRegistryRegion() Obtain <p>Repository region</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>Repository region</p>
 * @method string getRegistryVersion() Obtain <p>Warehouse version</p>
 * @method void setRegistryVersion(string $RegistryVersion) Set <p>Warehouse version</p>
 * @method string getInstanceID() Obtain <p>Repository instance id.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Repository instance id.</p>
 * @method string getLatestSyncTime() Obtain <p>Last sync time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestSyncTime(string $LatestSyncTime) Set <p>Last sync time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getSyncSolution() Obtain <p>Solution to synchronization failure</p>
 * @method void setSyncSolution(string $SyncSolution) Set <p>Solution to synchronization failure</p>
 * @method integer getSyncMode() Obtain <p>Synchronization method</p>
 * @method void setSyncMode(integer $SyncMode) Set <p>Synchronization method</p>
 * @method array getConnDetectDetail() Obtain <p>Connection check description</p>
 * @method void setConnDetectDetail(array $ConnDetectDetail) Set <p>Connection check description</p>
 * @method string getConnDetectType() Obtain <p>Connection type</p>
 * @method void setConnDetectType(string $ConnDetectType) Set <p>Connection type</p>
 * @method string getOwnerAccountName() Obtain <p>Account name of the repository</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Account name of the repository</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the repository</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the repository</p>
 * @method string getOwnerUin() Obtain <p>Account uin associated with the repository</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Account uin associated with the repository</p>
 * @method string getSyncStatus() Obtain <p>Synchronization status</p><p>Enumeration values:</p><ul><li>doing: Syncing</li><li>success: Synchronization successful</li><li>failed: Synchronization failed</li></ul>
 * @method void setSyncStatus(string $SyncStatus) Set <p>Synchronization status</p><p>Enumeration values:</p><ul><li>doing: Syncing</li><li>success: Synchronization successful</li><li>failed: Synchronization failed</li></ul>
 * @method string getSyncFailReason() Obtain <p>Reason for synchronization failure.</p>
 * @method void setSyncFailReason(string $SyncFailReason) Set <p>Reason for synchronization failure.</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information.</p>
 * @method string getUserName() Obtain <p>Mirror warehouse username</p>
 * @method void setUserName(string $UserName) Set <p>Mirror warehouse username</p>
 */
class ImageRegistryInfo extends AbstractModel
{
    /**
     * @var integer <p>Repository id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Repository name.</p>
     */
    public $Name;

    /**
     * @var string <p>Repository type</p>
     */
    public $RegistryType;

    /**
     * @var string <p>Warehouse url</p>
     */
    public $Url;

    /**
     * @var string <p>Network connection type</p>
     */
    public $NetType;

    /**
     * @var string <p>Repository region</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>Warehouse version</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>Repository instance id.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Last sync time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestSyncTime;

    /**
     * @var string <p>Solution to synchronization failure</p>
     */
    public $SyncSolution;

    /**
     * @var integer <p>Synchronization method</p>
     */
    public $SyncMode;

    /**
     * @var array <p>Connection check description</p>
     */
    public $ConnDetectDetail;

    /**
     * @var string <p>Connection type</p>
     */
    public $ConnDetectType;

    /**
     * @var string <p>Account name of the repository</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the repository</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Account uin associated with the repository</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Synchronization status</p><p>Enumeration values:</p><ul><li>doing: Syncing</li><li>success: Synchronization successful</li><li>failed: Synchronization failed</li></ul>
     */
    public $SyncStatus;

    /**
     * @var string <p>Reason for synchronization failure.</p>
     */
    public $SyncFailReason;

    /**
     * @var RegionInfo <p>Region information.</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>Mirror warehouse username</p>
     */
    public $UserName;

    /**
     * @param integer $RegistryId <p>Repository id</p>
     * @param string $Name <p>Repository name.</p>
     * @param string $RegistryType <p>Repository type</p>
     * @param string $Url <p>Warehouse url</p>
     * @param string $NetType <p>Network connection type</p>
     * @param string $RegistryRegion <p>Repository region</p>
     * @param string $RegistryVersion <p>Warehouse version</p>
     * @param string $InstanceID <p>Repository instance id.</p>
     * @param string $LatestSyncTime <p>Last sync time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $SyncSolution <p>Solution to synchronization failure</p>
     * @param integer $SyncMode <p>Synchronization method</p>
     * @param array $ConnDetectDetail <p>Connection check description</p>
     * @param string $ConnDetectType <p>Connection type</p>
     * @param string $OwnerAccountName <p>Account name of the repository</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the repository</p>
     * @param string $OwnerUin <p>Account uin associated with the repository</p>
     * @param string $SyncStatus <p>Synchronization status</p><p>Enumeration values:</p><ul><li>doing: Syncing</li><li>success: Synchronization successful</li><li>failed: Synchronization failed</li></ul>
     * @param string $SyncFailReason <p>Reason for synchronization failure.</p>
     * @param RegionInfo $RegionInfo <p>Region information.</p>
     * @param string $UserName <p>Mirror warehouse username</p>
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LatestSyncTime",$param) and $param["LatestSyncTime"] !== null) {
            $this->LatestSyncTime = $param["LatestSyncTime"];
        }

        if (array_key_exists("SyncSolution",$param) and $param["SyncSolution"] !== null) {
            $this->SyncSolution = $param["SyncSolution"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("ConnDetectDetail",$param) and $param["ConnDetectDetail"] !== null) {
            $this->ConnDetectDetail = [];
            foreach ($param["ConnDetectDetail"] as $key => $value){
                $obj = new RegistryConnDetectResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectDetail, $obj);
            }
        }

        if (array_key_exists("ConnDetectType",$param) and $param["ConnDetectType"] !== null) {
            $this->ConnDetectType = $param["ConnDetectType"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncFailReason",$param) and $param["SyncFailReason"] !== null) {
            $this->SyncFailReason = $param["SyncFailReason"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
