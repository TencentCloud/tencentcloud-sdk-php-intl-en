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
 * Object storage alarm info
 *
 * @method integer getAppId() Obtain appid

 * @method void setAppId(integer $AppId) Set appid

 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method integer getPolicyAbnormalType() Obtain Policy type. 0: Unknown rule category; 1: abnormal behavior; 2: excessive permissions; 3: resource enumeration; 4: anonymous access.

 * @method void setPolicyAbnormalType(integer $PolicyAbnormalType) Set Policy type. 0: Unknown rule category; 1: abnormal behavior; 2: excessive permissions; 3: resource enumeration; 4: anonymous access.

 * @method integer getPolicyRiskLevel() Obtain Risk level: 0: Normal, 1: Tip, 2: Low, 3: Middle, 4: High, 5: Critical
 * @method void setPolicyRiskLevel(integer $PolicyRiskLevel) Set Risk level: 0: Normal, 1: Tip, 2: Low, 3: Middle, 4: High, 5: Critical
 * @method string getPolicyDescription() Obtain Policy information description
 * @method void setPolicyDescription(string $PolicyDescription) Set Policy information description
 * @method string getBucketName() Obtain Bucket name
 * @method void setBucketName(string $BucketName) Set Bucket name
 * @method string getBucketRegion() Obtain Bucket region.
 * @method void setBucketRegion(string $BucketRegion) Set Bucket region.
 * @method string getBucketMarker() Obtain Bucket remarks.
 * @method void setBucketMarker(string $BucketMarker) Set Bucket remarks.
 * @method string getBucketTagInfo() Obtain Bucket tag information
 * @method void setBucketTagInfo(string $BucketTagInfo) Set Bucket tag information
 * @method string getBucketAccessWay() Obtain Bucket accessible property
 * @method void setBucketAccessWay(string $BucketAccessWay) Set Bucket accessible property
 * @method string getAccountUin() Obtain Account uin
 * @method void setAccountUin(string $AccountUin) Set Account uin
 * @method string getAccountNickName() Obtain Account nickname
 * @method void setAccountNickName(string $AccountNickName) Set Account nickname
 * @method integer getAccountIdentify() Obtain Identity of the associated account. 1 - Main account. 2 - Sub-account
 * @method void setAccountIdentify(integer $AccountIdentify) Set Identity of the associated account. 1 - Main account. 2 - Sub-account
 * @method string getAccountMainNickName() Obtain Nickname of the main account to which the sub-account belongs
 * @method void setAccountMainNickName(string $AccountMainNickName) Set Nickname of the main account to which the sub-account belongs
 * @method integer getAlarmTimestamp() Obtain Alarm timestamp in Unix time in milliseconds
 * @method void setAlarmTimestamp(integer $AlarmTimestamp) Set Alarm timestamp in Unix time in milliseconds
 * @method integer getHandleStatus() Obtain Handling status. 0: unprocessed. 1: tag disposal. 2: marked as ignored.
 * @method void setHandleStatus(integer $HandleStatus) Set Handling status. 0: unprocessed. 1: tag disposal. 2: marked as ignored.
 * @method integer getAlarmId() Obtain Alarm object id
 * @method void setAlarmId(integer $AlarmId) Set Alarm object id
 * @method string getBucketRegionCode() Obtain Bucket region code value
 * @method void setBucketRegionCode(string $BucketRegionCode) Set Bucket region code value
 * @method array getCategoryDetails() Obtain Data identification and categorization details
 * @method void setCategoryDetails(array $CategoryDetails) Set Data identification and categorization details
 */
class CosAlarmInfo extends AbstractModel
{
    /**
     * @var integer appid

     */
    public $AppId;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var integer Policy type. 0: Unknown rule category; 1: abnormal behavior; 2: excessive permissions; 3: resource enumeration; 4: anonymous access.

     */
    public $PolicyAbnormalType;

    /**
     * @var integer Risk level: 0: Normal, 1: Tip, 2: Low, 3: Middle, 4: High, 5: Critical
     */
    public $PolicyRiskLevel;

    /**
     * @var string Policy information description
     */
    public $PolicyDescription;

    /**
     * @var string Bucket name
     */
    public $BucketName;

    /**
     * @var string Bucket region.
     */
    public $BucketRegion;

    /**
     * @var string Bucket remarks.
     */
    public $BucketMarker;

    /**
     * @var string Bucket tag information
     */
    public $BucketTagInfo;

    /**
     * @var string Bucket accessible property
     */
    public $BucketAccessWay;

    /**
     * @var string Account uin
     */
    public $AccountUin;

    /**
     * @var string Account nickname
     */
    public $AccountNickName;

    /**
     * @var integer Identity of the associated account. 1 - Main account. 2 - Sub-account
     */
    public $AccountIdentify;

    /**
     * @var string Nickname of the main account to which the sub-account belongs
     */
    public $AccountMainNickName;

    /**
     * @var integer Alarm timestamp in Unix time in milliseconds
     */
    public $AlarmTimestamp;

    /**
     * @var integer Handling status. 0: unprocessed. 1: tag disposal. 2: marked as ignored.
     */
    public $HandleStatus;

    /**
     * @var integer Alarm object id
     */
    public $AlarmId;

    /**
     * @var string Bucket region code value
     */
    public $BucketRegionCode;

    /**
     * @var array Data identification and categorization details
     */
    public $CategoryDetails;

    /**
     * @param integer $AppId appid

     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name.
     * @param integer $PolicyAbnormalType Policy type. 0: Unknown rule category; 1: abnormal behavior; 2: excessive permissions; 3: resource enumeration; 4: anonymous access.

     * @param integer $PolicyRiskLevel Risk level: 0: Normal, 1: Tip, 2: Low, 3: Middle, 4: High, 5: Critical
     * @param string $PolicyDescription Policy information description
     * @param string $BucketName Bucket name
     * @param string $BucketRegion Bucket region.
     * @param string $BucketMarker Bucket remarks.
     * @param string $BucketTagInfo Bucket tag information
     * @param string $BucketAccessWay Bucket accessible property
     * @param string $AccountUin Account uin
     * @param string $AccountNickName Account nickname
     * @param integer $AccountIdentify Identity of the associated account. 1 - Main account. 2 - Sub-account
     * @param string $AccountMainNickName Nickname of the main account to which the sub-account belongs
     * @param integer $AlarmTimestamp Alarm timestamp in Unix time in milliseconds
     * @param integer $HandleStatus Handling status. 0: unprocessed. 1: tag disposal. 2: marked as ignored.
     * @param integer $AlarmId Alarm object id
     * @param string $BucketRegionCode Bucket region code value
     * @param array $CategoryDetails Data identification and categorization details
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyAbnormalType",$param) and $param["PolicyAbnormalType"] !== null) {
            $this->PolicyAbnormalType = $param["PolicyAbnormalType"];
        }

        if (array_key_exists("PolicyRiskLevel",$param) and $param["PolicyRiskLevel"] !== null) {
            $this->PolicyRiskLevel = $param["PolicyRiskLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
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

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = $param["BucketAccessWay"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("AccountNickName",$param) and $param["AccountNickName"] !== null) {
            $this->AccountNickName = $param["AccountNickName"];
        }

        if (array_key_exists("AccountIdentify",$param) and $param["AccountIdentify"] !== null) {
            $this->AccountIdentify = $param["AccountIdentify"];
        }

        if (array_key_exists("AccountMainNickName",$param) and $param["AccountMainNickName"] !== null) {
            $this->AccountMainNickName = $param["AccountMainNickName"];
        }

        if (array_key_exists("AlarmTimestamp",$param) and $param["AlarmTimestamp"] !== null) {
            $this->AlarmTimestamp = $param["AlarmTimestamp"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }
    }
}
