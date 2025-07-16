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
 * @method boolean getServiceEnabled() Obtain Whether the KMS service has been activated. true: activated
 * @method void setServiceEnabled(boolean $ServiceEnabled) Set Whether the KMS service has been activated. true: activated
 * @method integer getInvalidType() Obtain Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release.
 * @method void setInvalidType(integer $InvalidType) Set Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release.
 * @method integer getUserLevel() Obtain 0: Basic Edition, 1: Ultimate Edition
 * @method void setUserLevel(integer $UserLevel) Set 0: Basic Edition, 1: Ultimate Edition
 * @method integer getProExpireTime() Obtain Specifies the expiry time (Epoch Unix Timestamp) of the flagship edition.
 * @method void setProExpireTime(integer $ProExpireTime) Set Specifies the expiry time (Epoch Unix Timestamp) of the flagship edition.
 * @method integer getProRenewFlag() Obtain Specifies whether the flagship edition is automatically renewed: 0 - no automatic renewal, 1 - automatic renewal.
 * @method void setProRenewFlag(integer $ProRenewFlag) Set Specifies whether the flagship edition is automatically renewed: 0 - no automatic renewal, 1 - automatic renewal.
 * @method string getProResourceId() Obtain Flagship edition purchase record unique identifier. if not activated, the return value is empty.
 * @method void setProResourceId(string $ProResourceId) Set Flagship edition purchase record unique identifier. if not activated, the return value is empty.
 * @method boolean getExclusiveVSMEnabled() Obtain Whether to enable the KMS-managed version.
 * @method void setExclusiveVSMEnabled(boolean $ExclusiveVSMEnabled) Set Whether to enable the KMS-managed version.
 * @method boolean getExclusiveHSMEnabled() Obtain Whether to enable the exclusive edition of KMS.
 * @method void setExclusiveHSMEnabled(boolean $ExclusiveHSMEnabled) Set Whether to enable the exclusive edition of KMS.
 * @method string getSubscriptionInfo() Obtain Specifies the KMS subscription information.
 * @method void setSubscriptionInfo(string $SubscriptionInfo) Set Specifies the KMS subscription information.
 * @method integer getCmkUserCount() Obtain Returns the amount of KMS user secret keys used.
 * @method void setCmkUserCount(integer $CmkUserCount) Set Returns the amount of KMS user secret keys used.
 * @method integer getCmkLimit() Obtain Returns the specification quantity of KMS user secret keys.
 * @method void setCmkLimit(integer $CmkLimit) Set Returns the specification quantity of KMS user secret keys.
 * @method array getExclusiveHSMList() Obtain Return dedicated cluster group.
 * @method void setExclusiveHSMList(array $ExclusiveHSMList) Set Return dedicated cluster group.
 * @method boolean getIsAllowedDataKeyHosted() Obtain Whether data key management is supported. valid values: 1 (supported), 0 (unsupported).
 * @method void setIsAllowedDataKeyHosted(boolean $IsAllowedDataKeyHosted) Set Whether data key management is supported. valid values: 1 (supported), 0 (unsupported).
 * @method integer getDataKeyLimit() Obtain Valid when IsAllowedDataKeyHosted is 1. specifies the purchase quota for data keys.
 * @method void setDataKeyLimit(integer $DataKeyLimit) Set Valid when IsAllowedDataKeyHosted is 1. specifies the purchase quota for data keys.
 * @method integer getFreeDataKeyLimit() Obtain Valid when IsAllowedDataKeyHosted is 1. data key free quota.
 * @method void setFreeDataKeyLimit(integer $FreeDataKeyLimit) Set Valid when IsAllowedDataKeyHosted is 1. data key free quota.
 * @method integer getDataKeyUsedCount() Obtain Valid at that time when IsAllowedDataKeyHosted is 1. specifies the number of keys used.
 * @method void setDataKeyUsedCount(integer $DataKeyUsedCount) Set Valid at that time when IsAllowedDataKeyHosted is 1. specifies the number of keys used.
 * @method array getSyncTaskList() Obtain Specifies the target region of the sync task.
 * @method void setSyncTaskList(array $SyncTaskList) Set Specifies the target region of the sync task.
 * @method boolean getIsAllowedSync() Obtain Whether synchronization task is supported. true: supported; false: unsupported.
 * @method void setIsAllowedSync(boolean $IsAllowedSync) Set Whether synchronization task is supported. true: supported; false: unsupported.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean Whether the KMS service has been activated. true: activated
     */
    public $ServiceEnabled;

    /**
     * @var integer Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release.
     */
    public $InvalidType;

    /**
     * @var integer 0: Basic Edition, 1: Ultimate Edition
     */
    public $UserLevel;

    /**
     * @var integer Specifies the expiry time (Epoch Unix Timestamp) of the flagship edition.
     */
    public $ProExpireTime;

    /**
     * @var integer Specifies whether the flagship edition is automatically renewed: 0 - no automatic renewal, 1 - automatic renewal.
     */
    public $ProRenewFlag;

    /**
     * @var string Flagship edition purchase record unique identifier. if not activated, the return value is empty.
     */
    public $ProResourceId;

    /**
     * @var boolean Whether to enable the KMS-managed version.
     */
    public $ExclusiveVSMEnabled;

    /**
     * @var boolean Whether to enable the exclusive edition of KMS.
     */
    public $ExclusiveHSMEnabled;

    /**
     * @var string Specifies the KMS subscription information.
     */
    public $SubscriptionInfo;

    /**
     * @var integer Returns the amount of KMS user secret keys used.
     */
    public $CmkUserCount;

    /**
     * @var integer Returns the specification quantity of KMS user secret keys.
     */
    public $CmkLimit;

    /**
     * @var array Return dedicated cluster group.
     */
    public $ExclusiveHSMList;

    /**
     * @var boolean Whether data key management is supported. valid values: 1 (supported), 0 (unsupported).
     */
    public $IsAllowedDataKeyHosted;

    /**
     * @var integer Valid when IsAllowedDataKeyHosted is 1. specifies the purchase quota for data keys.
     */
    public $DataKeyLimit;

    /**
     * @var integer Valid when IsAllowedDataKeyHosted is 1. data key free quota.
     */
    public $FreeDataKeyLimit;

    /**
     * @var integer Valid at that time when IsAllowedDataKeyHosted is 1. specifies the number of keys used.
     */
    public $DataKeyUsedCount;

    /**
     * @var array Specifies the target region of the sync task.
     */
    public $SyncTaskList;

    /**
     * @var boolean Whether synchronization task is supported. true: supported; false: unsupported.
     */
    public $IsAllowedSync;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled Whether the KMS service has been activated. true: activated
     * @param integer $InvalidType Service unavailability type: 0-not purchased, 1-normal, 2-service suspended due to overdue payments, 3-resource release.
     * @param integer $UserLevel 0: Basic Edition, 1: Ultimate Edition
     * @param integer $ProExpireTime Specifies the expiry time (Epoch Unix Timestamp) of the flagship edition.
     * @param integer $ProRenewFlag Specifies whether the flagship edition is automatically renewed: 0 - no automatic renewal, 1 - automatic renewal.
     * @param string $ProResourceId Flagship edition purchase record unique identifier. if not activated, the return value is empty.
     * @param boolean $ExclusiveVSMEnabled Whether to enable the KMS-managed version.
     * @param boolean $ExclusiveHSMEnabled Whether to enable the exclusive edition of KMS.
     * @param string $SubscriptionInfo Specifies the KMS subscription information.
     * @param integer $CmkUserCount Returns the amount of KMS user secret keys used.
     * @param integer $CmkLimit Returns the specification quantity of KMS user secret keys.
     * @param array $ExclusiveHSMList Return dedicated cluster group.
     * @param boolean $IsAllowedDataKeyHosted Whether data key management is supported. valid values: 1 (supported), 0 (unsupported).
     * @param integer $DataKeyLimit Valid when IsAllowedDataKeyHosted is 1. specifies the purchase quota for data keys.
     * @param integer $FreeDataKeyLimit Valid when IsAllowedDataKeyHosted is 1. data key free quota.
     * @param integer $DataKeyUsedCount Valid at that time when IsAllowedDataKeyHosted is 1. specifies the number of keys used.
     * @param array $SyncTaskList Specifies the target region of the sync task.
     * @param boolean $IsAllowedSync Whether synchronization task is supported. true: supported; false: unsupported.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
