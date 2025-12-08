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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes official cloud disk instance information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getDomain() Obtain Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEffectiveTime() Obtain Effective time.
 * @method void setEffectiveTime(string $EffectiveTime) Set Effective time.
 * @method string getExpireTime() Obtain Expiration time. if the instance is pay-as-you-go or permanently valid, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time. if the instance is pay-as-you-go or permanently valid, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUserLimit() Obtain Number of users. if the instance uses pay-as-you-go billing or has unlimited users, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserLimit(integer $UserLimit) Set Number of users. if the instance uses pay-as-you-go billing or has unlimited users, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageLimit() Obtain Storage capacity in Bytes. this field is of String type due to precision limitations of numeric types. this property is null for pay-as-you-go instances or instances with unlimited storage capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageLimit(string $StorageLimit) Set Storage capacity in Bytes. this field is of String type due to precision limitations of numeric types. this property is null for pay-as-you-go instances or instances with unlimited storage capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageLimitGB() Obtain Storage capacity in GB. if the instance uses pay-as-you-go billing or has unlimited storage capacity, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageLimitGB(integer $StorageLimitGB) Set Storage capacity in GB. if the instance uses pay-as-you-go billing or has unlimited storage capacity, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsolated() Obtain Is expired isolation.
 * @method void setIsolated(boolean $Isolated) Set Is expired isolation.
 * @method integer getAutoRenew() Obtain Renewal flag. 0: manual renewal; 1: automatic renewal; 2: non-renewal upon expiration.
 * @method void setAutoRenew(integer $AutoRenew) Set Renewal flag. 0: manual renewal; 1: automatic renewal; 2: non-renewal upon expiration.
 * @method string getSuperAdminAccount() Obtain Specifies the super administrator account. if no selection query is made for the instance-bound super administrator account or the current instance is not bound to a super administrator account, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperAdminAccount(string $SuperAdminAccount) Set Specifies the super administrator account. if no selection query is made for the instance-bound super administrator account or the current instance is not bound to a super administrator account, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucket() Obtain In selected bucket mode, shows bucket usage.
 * @method void setBucket(string $Bucket) Set In selected bucket mode, shows bucket usage.
 * @method string getLogBucket() Obtain Specifies the log bucket usage in selected mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogBucket(string $LogBucket) Set Specifies the log bucket usage in selected mode.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Effective time.
     */
    public $EffectiveTime;

    /**
     * @var string Expiration time. if the instance is pay-as-you-go or permanently valid, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var integer Number of users. if the instance uses pay-as-you-go billing or has unlimited users, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserLimit;

    /**
     * @var string Storage capacity in Bytes. this field is of String type due to precision limitations of numeric types. this property is null for pay-as-you-go instances or instances with unlimited storage capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageLimit;

    /**
     * @var integer Storage capacity in GB. if the instance uses pay-as-you-go billing or has unlimited storage capacity, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageLimitGB;

    /**
     * @var boolean Is expired isolation.
     */
    public $Isolated;

    /**
     * @var integer Renewal flag. 0: manual renewal; 1: automatic renewal; 2: non-renewal upon expiration.
     */
    public $AutoRenew;

    /**
     * @var string Specifies the super administrator account. if no selection query is made for the instance-bound super administrator account or the current instance is not bound to a super administrator account, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperAdminAccount;

    /**
     * @var string In selected bucket mode, shows bucket usage.
     */
    public $Bucket;

    /**
     * @var string Specifies the log bucket usage in selected mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogBucket;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Domain Dedicated domain name. if the instance has no dedicated domain name, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EffectiveTime Effective time.
     * @param string $ExpireTime Expiration time. if the instance is pay-as-you-go or permanently valid, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UserLimit Number of users. if the instance uses pay-as-you-go billing or has unlimited users, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageLimit Storage capacity in Bytes. this field is of String type due to precision limitations of numeric types. this property is null for pay-as-you-go instances or instances with unlimited storage capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageLimitGB Storage capacity in GB. if the instance uses pay-as-you-go billing or has unlimited storage capacity, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Isolated Is expired isolation.
     * @param integer $AutoRenew Renewal flag. 0: manual renewal; 1: automatic renewal; 2: non-renewal upon expiration.
     * @param string $SuperAdminAccount Specifies the super administrator account. if no selection query is made for the instance-bound super administrator account or the current instance is not bound to a super administrator account, this attribute is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Bucket In selected bucket mode, shows bucket usage.
     * @param string $LogBucket Specifies the log bucket usage in selected mode.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UserLimit",$param) and $param["UserLimit"] !== null) {
            $this->UserLimit = $param["UserLimit"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("StorageLimitGB",$param) and $param["StorageLimitGB"] !== null) {
            $this->StorageLimitGB = $param["StorageLimitGB"];
        }

        if (array_key_exists("Isolated",$param) and $param["Isolated"] !== null) {
            $this->Isolated = $param["Isolated"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SuperAdminAccount",$param) and $param["SuperAdminAccount"] !== null) {
            $this->SuperAdminAccount = $param["SuperAdminAccount"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("LogBucket",$param) and $param["LogBucket"] !== null) {
            $this->LogBucket = $param["LogBucket"];
        }
    }
}
