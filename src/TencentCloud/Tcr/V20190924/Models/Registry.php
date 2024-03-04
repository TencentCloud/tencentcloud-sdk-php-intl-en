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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information structure
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getRegistryName() Obtain Instance name
 * @method void setRegistryName(string $RegistryName) Set Instance name
 * @method string getRegistryType() Obtain Instance specification
 * @method void setRegistryType(string $RegistryType) Set Instance specification
 * @method string getStatus() Obtain Instance status
 * @method void setStatus(string $Status) Set Instance status
 * @method string getPublicDomain() Obtain Public access URL of the instance
 * @method void setPublicDomain(string $PublicDomain) Set Public access URL of the instance
 * @method string getCreatedAt() Obtain Instance creation time
 * @method void setCreatedAt(string $CreatedAt) Set Instance creation time
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method boolean getEnableAnonymous() Obtain Whether to enable anonymity
 * @method void setEnableAnonymous(boolean $EnableAnonymous) Set Whether to enable anonymity
 * @method integer getTokenValidTime() Obtain Token validity period
 * @method void setTokenValidTime(integer $TokenValidTime) Set Token validity period
 * @method string getInternalEndpoint() Obtain Internal access address of the instance
 * @method void setInternalEndpoint(string $InternalEndpoint) Set Internal access address of the instance
 * @method TagSpecification getTagSpecification() Obtain Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpiredAt() Obtain Instance expiration time (for prepayment)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredAt(string $ExpiredAt) Set Instance expiration time (for prepayment)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMod() Obtain Instance billing mode. Valid values: 0: Postpayment; 1: Prepayment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMod(integer $PayMod) Set Instance billing mode. Valid values: 0: Postpayment; 1: Prepayment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Prepayment renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Prepayment renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeletionProtection() Obtain Whether to enable instance deletion protection. false indicates it is not enabled.
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether to enable instance deletion protection. false indicates it is not enabled.
 */
class Registry extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Instance name
     */
    public $RegistryName;

    /**
     * @var string Instance specification
     */
    public $RegistryType;

    /**
     * @var string Instance status
     */
    public $Status;

    /**
     * @var string Public access URL of the instance
     */
    public $PublicDomain;

    /**
     * @var string Instance creation time
     */
    public $CreatedAt;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var boolean Whether to enable anonymity
     */
    public $EnableAnonymous;

    /**
     * @var integer Token validity period
     */
    public $TokenValidTime;

    /**
     * @var string Internal access address of the instance
     */
    public $InternalEndpoint;

    /**
     * @var TagSpecification Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @var string Instance expiration time (for prepayment)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiredAt;

    /**
     * @var integer Instance billing mode. Valid values: 0: Postpayment; 1: Prepayment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMod;

    /**
     * @var integer Prepayment renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var boolean Whether to enable instance deletion protection. false indicates it is not enabled.
     */
    public $DeletionProtection;

    /**
     * @param string $RegistryId Instance ID
     * @param string $RegistryName Instance name
     * @param string $RegistryType Instance specification
     * @param string $Status Instance status
     * @param string $PublicDomain Public access URL of the instance
     * @param string $CreatedAt Instance creation time
     * @param string $RegionName Region name
     * @param integer $RegionId Region ID
     * @param boolean $EnableAnonymous Whether to enable anonymity
     * @param integer $TokenValidTime Token validity period
     * @param string $InternalEndpoint Internal access address of the instance
     * @param TagSpecification $TagSpecification Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpiredAt Instance expiration time (for prepayment)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMod Instance billing mode. Valid values: 0: Postpayment; 1: Prepayment.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Prepayment renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DeletionProtection Whether to enable instance deletion protection. false indicates it is not enabled.
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

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("EnableAnonymous",$param) and $param["EnableAnonymous"] !== null) {
            $this->EnableAnonymous = $param["EnableAnonymous"];
        }

        if (array_key_exists("TokenValidTime",$param) and $param["TokenValidTime"] !== null) {
            $this->TokenValidTime = $param["TokenValidTime"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("PayMod",$param) and $param["PayMod"] !== null) {
            $this->PayMod = $param["PayMod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
