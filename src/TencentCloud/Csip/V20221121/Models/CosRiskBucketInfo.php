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
 * Affected bucket information
 *
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method string getBucketName() Obtain Bucket name
 * @method void setBucketName(string $BucketName) Set Bucket name
 * @method string getBucketRegion() Obtain Bucket region.
 * @method void setBucketRegion(string $BucketRegion) Set Bucket region.
 * @method string getBucketMarker() Obtain Bucket remark information
 * @method void setBucketMarker(string $BucketMarker) Set Bucket remark information
 * @method string getBucketUin() Obtain Bucket uin
 * @method void setBucketUin(string $BucketUin) Set Bucket uin
 * @method string getBucketNickName() Obtain uin nickname
 * @method void setBucketNickName(string $BucketNickName) Set uin nickname
 * @method string getBucketMainNickName() Obtain uin root account nickname
 * @method void setBucketMainNickName(string $BucketMainNickName) Set uin root account nickname
 * @method integer getBucketIdentify() Obtain uin identity
 * @method void setBucketIdentify(integer $BucketIdentify) Set uin identity
 * @method integer getLastScanTimestamp() Obtain Risk detection time in Unix timestamp in milliseconds
 * @method void setLastScanTimestamp(integer $LastScanTimestamp) Set Risk detection time in Unix timestamp in milliseconds
 * @method integer getHandleStatus() Obtain Status Information
 * @method void setHandleStatus(integer $HandleStatus) Set Status Information
 * @method string getPolicyName() Obtain Risk name
 * @method void setPolicyName(string $PolicyName) Set Risk name
 * @method integer getPolicyType() Obtain Risk type
 * @method void setPolicyType(integer $PolicyType) Set Risk type
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getPolicyLevel() Obtain Policy level
 * @method void setPolicyLevel(integer $PolicyLevel) Set Policy level
 * @method string getPolicyDescription() Obtain Policy description
 * @method void setPolicyDescription(string $PolicyDescription) Set Policy description
 * @method string getBucketAccessWay() Obtain Access method
 * @method void setBucketAccessWay(string $BucketAccessWay) Set Access method
 * @method string getBucketTagInfo() Obtain Tag information.
 * @method void setBucketTagInfo(string $BucketTagInfo) Set Tag information.
 * @method integer getRiskId() Obtain Risk id
 * @method void setRiskId(integer $RiskId) Set Risk id
 * @method string getBucketRegionCode() Obtain cos region code value
 * @method void setBucketRegionCode(string $BucketRegionCode) Set cos region code value
 * @method integer getBucketMonitorStatus() Obtain Whether automatic monitoring is enabled. 0: disabled. 1: enabled.
 * @method void setBucketMonitorStatus(integer $BucketMonitorStatus) Set Whether automatic monitoring is enabled. 0: disabled. 1: enabled.
 */
class CosRiskBucketInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string Bucket name
     */
    public $BucketName;

    /**
     * @var string Bucket region.
     */
    public $BucketRegion;

    /**
     * @var string Bucket remark information
     */
    public $BucketMarker;

    /**
     * @var string Bucket uin
     */
    public $BucketUin;

    /**
     * @var string uin nickname
     */
    public $BucketNickName;

    /**
     * @var string uin root account nickname
     */
    public $BucketMainNickName;

    /**
     * @var integer uin identity
     */
    public $BucketIdentify;

    /**
     * @var integer Risk detection time in Unix timestamp in milliseconds
     */
    public $LastScanTimestamp;

    /**
     * @var integer Status Information
     */
    public $HandleStatus;

    /**
     * @var string Risk name
     */
    public $PolicyName;

    /**
     * @var integer Risk type
     */
    public $PolicyType;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Policy level
     */
    public $PolicyLevel;

    /**
     * @var string Policy description
     */
    public $PolicyDescription;

    /**
     * @var string Access method
     */
    public $BucketAccessWay;

    /**
     * @var string Tag information.
     */
    public $BucketTagInfo;

    /**
     * @var integer Risk id
     */
    public $RiskId;

    /**
     * @var string cos region code value
     */
    public $BucketRegionCode;

    /**
     * @var integer Whether automatic monitoring is enabled. 0: disabled. 1: enabled.
     */
    public $BucketMonitorStatus;

    /**
     * @param integer $AppId appid
     * @param string $BucketName Bucket name
     * @param string $BucketRegion Bucket region.
     * @param string $BucketMarker Bucket remark information
     * @param string $BucketUin Bucket uin
     * @param string $BucketNickName uin nickname
     * @param string $BucketMainNickName uin root account nickname
     * @param integer $BucketIdentify uin identity
     * @param integer $LastScanTimestamp Risk detection time in Unix timestamp in milliseconds
     * @param integer $HandleStatus Status Information
     * @param string $PolicyName Risk name
     * @param integer $PolicyType Risk type
     * @param integer $PolicyId Policy ID
     * @param integer $PolicyLevel Policy level
     * @param string $PolicyDescription Policy description
     * @param string $BucketAccessWay Access method
     * @param string $BucketTagInfo Tag information.
     * @param integer $RiskId Risk id
     * @param string $BucketRegionCode cos region code value
     * @param integer $BucketMonitorStatus Whether automatic monitoring is enabled. 0: disabled. 1: enabled.
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

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }

        if (array_key_exists("BucketUin",$param) and $param["BucketUin"] !== null) {
            $this->BucketUin = $param["BucketUin"];
        }

        if (array_key_exists("BucketNickName",$param) and $param["BucketNickName"] !== null) {
            $this->BucketNickName = $param["BucketNickName"];
        }

        if (array_key_exists("BucketMainNickName",$param) and $param["BucketMainNickName"] !== null) {
            $this->BucketMainNickName = $param["BucketMainNickName"];
        }

        if (array_key_exists("BucketIdentify",$param) and $param["BucketIdentify"] !== null) {
            $this->BucketIdentify = $param["BucketIdentify"];
        }

        if (array_key_exists("LastScanTimestamp",$param) and $param["LastScanTimestamp"] !== null) {
            $this->LastScanTimestamp = $param["LastScanTimestamp"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyLevel",$param) and $param["PolicyLevel"] !== null) {
            $this->PolicyLevel = $param["PolicyLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = $param["BucketAccessWay"];
        }

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMonitorStatus",$param) and $param["BucketMonitorStatus"] !== null) {
            $this->BucketMonitorStatus = $param["BucketMonitorStatus"];
        }
    }
}
