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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus response structure.
 *
 * @method boolean getServiceEnabled() Obtain <p>Whether the KMS service is enabled. true means enabled</p>
 * @method void setServiceEnabled(boolean $ServiceEnabled) Set <p>Whether the KMS service is enabled. true means enabled</p>
 * @method integer getInvalidType() Obtain <p>Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release</p>
 * @method void setInvalidType(integer $InvalidType) Set <p>Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release</p>
 * @method integer getUserLevel() Obtain <p>0-Standard Edition, 1-Flagship Edition</p>
 * @method void setUserLevel(integer $UserLevel) Set <p>0-Standard Edition, 1-Flagship Edition</p>
 * @method integer getProExpireTime() Obtain <p>Expiry time of the flagship edition (Epoch Unix Timestamp).</p>
 * @method void setProExpireTime(integer $ProExpireTime) Set <p>Expiry time of the flagship edition (Epoch Unix Timestamp).</p>
 * @method integer getProRenewFlag() Obtain <p>Whether the flagship edition is automatically renewed: 0-no auto-renewal, 1-auto-renewal</p>
 * @method void setProRenewFlag(integer $ProRenewFlag) Set <p>Whether the flagship edition is automatically renewed: 0-no auto-renewal, 1-auto-renewal</p>
 * @method string getProResourceId() Obtain <p>Unique identifier of the flagship edition purchase record. If the flagship edition is not activated, the return value is empty.</p>
 * @method void setProResourceId(string $ProResourceId) Set <p>Unique identifier of the flagship edition purchase record. If the flagship edition is not activated, the return value is empty.</p>
 * @method boolean getExclusiveVSMEnabled() Obtain <p>Whether to enable managed by KMS</p>
 * @method void setExclusiveVSMEnabled(boolean $ExclusiveVSMEnabled) Set <p>Whether to enable managed by KMS</p>
 * @method boolean getExclusiveHSMEnabled() Obtain <p>Whether to enable KMS exclusive edition</p>
 * @method void setExclusiveHSMEnabled(boolean $ExclusiveHSMEnabled) Set <p>Whether to enable KMS exclusive edition</p>
 * @method string getSubscriptionInfo() Obtain <p>KMS subscription information.</p>
 * @method void setSubscriptionInfo(string $SubscriptionInfo) Set <p>KMS subscription information.</p>
 * @method integer getCmkUserCount() Obtain <p>Return the usage quantity of KMS user secret key</p>
 * @method void setCmkUserCount(integer $CmkUserCount) Set <p>Return the usage quantity of KMS user secret key</p>
 * @method integer getCmkLimit() Obtain <p>Return the specification quantity of KMS user secret keys</p>
 * @method void setCmkLimit(integer $CmkLimit) Set <p>Return the specification quantity of KMS user secret keys</p>
 * @method array getExclusiveHSMList() Obtain <p>Return the dedicated cluster group</p>
 * @method void setExclusiveHSMList(array $ExclusiveHSMList) Set <p>Return the dedicated cluster group</p>
 * @method boolean getIsAllowedDataKeyHosted() Obtain <p>Indicates whether data key management is supported. 1: supported. 0: not supported.</p>
 * @method void setIsAllowedDataKeyHosted(boolean $IsAllowedDataKeyHosted) Set <p>Indicates whether data key management is supported. 1: supported. 0: not supported.</p>
 * @method integer getDataKeyLimit() Obtain <p>Valid when IsAllowedDataKeyHosted is 1. Purchase quota of the data key</p>
 * @method void setDataKeyLimit(integer $DataKeyLimit) Set <p>Valid when IsAllowedDataKeyHosted is 1. Purchase quota of the data key</p>
 * @method integer getFreeDataKeyLimit() Obtain <p>Valid at that time when IsAllowedDataKeyHosted is 1. Data key free quota.</p>
 * @method void setFreeDataKeyLimit(integer $FreeDataKeyLimit) Set <p>Valid at that time when IsAllowedDataKeyHosted is 1. Data key free quota.</p>
 * @method integer getDataKeyUsedCount() Obtain <p>Valid when IsAllowedDataKeyHosted is 1. Number of used data keys.</p>
 * @method void setDataKeyUsedCount(integer $DataKeyUsedCount) Set <p>Valid when IsAllowedDataKeyHosted is 1. Number of used data keys.</p>
 * @method array getSyncTaskList() Obtain <p>Target region info of the sync task</p>
 * @method void setSyncTaskList(array $SyncTaskList) Set <p>Target region info of the sync task</p>
 * @method boolean getIsAllowedSync() Obtain <p>Whether sync task is supported. true: supported, false: unsupported.</p>
 * @method void setIsAllowedSync(boolean $IsAllowedSync) Set <p>Whether sync task is supported. true: supported, false: unsupported.</p>
 * @method integer getQpsLimit() Obtain <p>QPS in the region</p>
 * @method void setQpsLimit(integer $QpsLimit) Set <p>QPS in the region</p>
 * @method integer getQpsTotalLimit() Obtain <p>Total QPS value</p>
 * @method void setQpsTotalLimit(integer $QpsTotalLimit) Set <p>Total QPS value</p>
 * @method array getRegionsQps() Obtain <p>QPS in the region</p>
 * @method void setRegionsQps(array $RegionsQps) Set <p>QPS in the region</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean <p>Whether the KMS service is enabled. true means enabled</p>
     */
    public $ServiceEnabled;

    /**
     * @var integer <p>Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release</p>
     */
    public $InvalidType;

    /**
     * @var integer <p>0-Standard Edition, 1-Flagship Edition</p>
     */
    public $UserLevel;

    /**
     * @var integer <p>Expiry time of the flagship edition (Epoch Unix Timestamp).</p>
     */
    public $ProExpireTime;

    /**
     * @var integer <p>Whether the flagship edition is automatically renewed: 0-no auto-renewal, 1-auto-renewal</p>
     */
    public $ProRenewFlag;

    /**
     * @var string <p>Unique identifier of the flagship edition purchase record. If the flagship edition is not activated, the return value is empty.</p>
     */
    public $ProResourceId;

    /**
     * @var boolean <p>Whether to enable managed by KMS</p>
     */
    public $ExclusiveVSMEnabled;

    /**
     * @var boolean <p>Whether to enable KMS exclusive edition</p>
     */
    public $ExclusiveHSMEnabled;

    /**
     * @var string <p>KMS subscription information.</p>
     */
    public $SubscriptionInfo;

    /**
     * @var integer <p>Return the usage quantity of KMS user secret key</p>
     */
    public $CmkUserCount;

    /**
     * @var integer <p>Return the specification quantity of KMS user secret keys</p>
     */
    public $CmkLimit;

    /**
     * @var array <p>Return the dedicated cluster group</p>
     */
    public $ExclusiveHSMList;

    /**
     * @var boolean <p>Indicates whether data key management is supported. 1: supported. 0: not supported.</p>
     */
    public $IsAllowedDataKeyHosted;

    /**
     * @var integer <p>Valid when IsAllowedDataKeyHosted is 1. Purchase quota of the data key</p>
     */
    public $DataKeyLimit;

    /**
     * @var integer <p>Valid at that time when IsAllowedDataKeyHosted is 1. Data key free quota.</p>
     */
    public $FreeDataKeyLimit;

    /**
     * @var integer <p>Valid when IsAllowedDataKeyHosted is 1. Number of used data keys.</p>
     */
    public $DataKeyUsedCount;

    /**
     * @var array <p>Target region info of the sync task</p>
     */
    public $SyncTaskList;

    /**
     * @var boolean <p>Whether sync task is supported. true: supported, false: unsupported.</p>
     */
    public $IsAllowedSync;

    /**
     * @var integer <p>QPS in the region</p>
     */
    public $QpsLimit;

    /**
     * @var integer <p>Total QPS value</p>
     */
    public $QpsTotalLimit;

    /**
     * @var array <p>QPS in the region</p>
     */
    public $RegionsQps;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled <p>Whether the KMS service is enabled. true means enabled</p>
     * @param integer $InvalidType <p>Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release</p>
     * @param integer $UserLevel <p>0-Standard Edition, 1-Flagship Edition</p>
     * @param integer $ProExpireTime <p>Expiry time of the flagship edition (Epoch Unix Timestamp).</p>
     * @param integer $ProRenewFlag <p>Whether the flagship edition is automatically renewed: 0-no auto-renewal, 1-auto-renewal</p>
     * @param string $ProResourceId <p>Unique identifier of the flagship edition purchase record. If the flagship edition is not activated, the return value is empty.</p>
     * @param boolean $ExclusiveVSMEnabled <p>Whether to enable managed by KMS</p>
     * @param boolean $ExclusiveHSMEnabled <p>Whether to enable KMS exclusive edition</p>
     * @param string $SubscriptionInfo <p>KMS subscription information.</p>
     * @param integer $CmkUserCount <p>Return the usage quantity of KMS user secret key</p>
     * @param integer $CmkLimit <p>Return the specification quantity of KMS user secret keys</p>
     * @param array $ExclusiveHSMList <p>Return the dedicated cluster group</p>
     * @param boolean $IsAllowedDataKeyHosted <p>Indicates whether data key management is supported. 1: supported. 0: not supported.</p>
     * @param integer $DataKeyLimit <p>Valid when IsAllowedDataKeyHosted is 1. Purchase quota of the data key</p>
     * @param integer $FreeDataKeyLimit <p>Valid at that time when IsAllowedDataKeyHosted is 1. Data key free quota.</p>
     * @param integer $DataKeyUsedCount <p>Valid when IsAllowedDataKeyHosted is 1. Number of used data keys.</p>
     * @param array $SyncTaskList <p>Target region info of the sync task</p>
     * @param boolean $IsAllowedSync <p>Whether sync task is supported. true: supported, false: unsupported.</p>
     * @param integer $QpsLimit <p>QPS in the region</p>
     * @param integer $QpsTotalLimit <p>Total QPS value</p>
     * @param array $RegionsQps <p>QPS in the region</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("UserLevel",$param) and $param["UserLevel"] !== null) {
            $this->UserLevel = $param["UserLevel"];
        }

        if (array_key_exists("ProExpireTime",$param) and $param["ProExpireTime"] !== null) {
            $this->ProExpireTime = $param["ProExpireTime"];
        }

        if (array_key_exists("ProRenewFlag",$param) and $param["ProRenewFlag"] !== null) {
            $this->ProRenewFlag = $param["ProRenewFlag"];
        }

        if (array_key_exists("ProResourceId",$param) and $param["ProResourceId"] !== null) {
            $this->ProResourceId = $param["ProResourceId"];
        }

        if (array_key_exists("ExclusiveVSMEnabled",$param) and $param["ExclusiveVSMEnabled"] !== null) {
            $this->ExclusiveVSMEnabled = $param["ExclusiveVSMEnabled"];
        }

        if (array_key_exists("ExclusiveHSMEnabled",$param) and $param["ExclusiveHSMEnabled"] !== null) {
            $this->ExclusiveHSMEnabled = $param["ExclusiveHSMEnabled"];
        }

        if (array_key_exists("SubscriptionInfo",$param) and $param["SubscriptionInfo"] !== null) {
            $this->SubscriptionInfo = $param["SubscriptionInfo"];
        }

        if (array_key_exists("CmkUserCount",$param) and $param["CmkUserCount"] !== null) {
            $this->CmkUserCount = $param["CmkUserCount"];
        }

        if (array_key_exists("CmkLimit",$param) and $param["CmkLimit"] !== null) {
            $this->CmkLimit = $param["CmkLimit"];
        }

        if (array_key_exists("ExclusiveHSMList",$param) and $param["ExclusiveHSMList"] !== null) {
            $this->ExclusiveHSMList = [];
            foreach ($param["ExclusiveHSMList"] as $key => $value){
                $obj = new ExclusiveHSM();
                $obj->deserialize($value);
                array_push($this->ExclusiveHSMList, $obj);
            }
        }

        if (array_key_exists("IsAllowedDataKeyHosted",$param) and $param["IsAllowedDataKeyHosted"] !== null) {
            $this->IsAllowedDataKeyHosted = $param["IsAllowedDataKeyHosted"];
        }

        if (array_key_exists("DataKeyLimit",$param) and $param["DataKeyLimit"] !== null) {
            $this->DataKeyLimit = $param["DataKeyLimit"];
        }

        if (array_key_exists("FreeDataKeyLimit",$param) and $param["FreeDataKeyLimit"] !== null) {
            $this->FreeDataKeyLimit = $param["FreeDataKeyLimit"];
        }

        if (array_key_exists("DataKeyUsedCount",$param) and $param["DataKeyUsedCount"] !== null) {
            $this->DataKeyUsedCount = $param["DataKeyUsedCount"];
        }

        if (array_key_exists("SyncTaskList",$param) and $param["SyncTaskList"] !== null) {
            $this->SyncTaskList = [];
            foreach ($param["SyncTaskList"] as $key => $value){
                $obj = new DestinationSyncConfig();
                $obj->deserialize($value);
                array_push($this->SyncTaskList, $obj);
            }
        }

        if (array_key_exists("IsAllowedSync",$param) and $param["IsAllowedSync"] !== null) {
            $this->IsAllowedSync = $param["IsAllowedSync"];
        }

        if (array_key_exists("QpsLimit",$param) and $param["QpsLimit"] !== null) {
            $this->QpsLimit = $param["QpsLimit"];
        }

        if (array_key_exists("QpsTotalLimit",$param) and $param["QpsTotalLimit"] !== null) {
            $this->QpsTotalLimit = $param["QpsTotalLimit"];
        }

        if (array_key_exists("RegionsQps",$param) and $param["RegionsQps"] !== null) {
            $this->RegionsQps = [];
            foreach ($param["RegionsQps"] as $key => $value){
                $obj = new RegionQps();
                $obj->deserialize($value);
                array_push($this->RegionsQps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
