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
 * Risk list from the risk perspective
 *
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method integer getPolicyType() Obtain Policy classification
 * @method void setPolicyType(integer $PolicyType) Set Policy classification
 * @method integer getPolicyRiskLevel() Obtain Policy risk level
 * @method void setPolicyRiskLevel(integer $PolicyRiskLevel) Set Policy risk level
 * @method string getPolicyDescription() Obtain Policy description
 * @method void setPolicyDescription(string $PolicyDescription) Set Policy description
 * @method integer getHandleBucketCount() Obtain Number of buckets to be processed
 * @method void setHandleBucketCount(integer $HandleBucketCount) Set Number of buckets to be processed
 * @method integer getLastScanTimestamp() Obtain Most recent risk detection time in Unix timestamp in milliseconds
 * @method void setLastScanTimestamp(integer $LastScanTimestamp) Set Most recent risk detection time in Unix timestamp in milliseconds
 */
class CosRiskViewInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Policy classification
     */
    public $PolicyType;

    /**
     * @var integer Policy risk level
     */
    public $PolicyRiskLevel;

    /**
     * @var string Policy description
     */
    public $PolicyDescription;

    /**
     * @var integer Number of buckets to be processed
     */
    public $HandleBucketCount;

    /**
     * @var integer Most recent risk detection time in Unix timestamp in milliseconds
     */
    public $LastScanTimestamp;

    /**
     * @param integer $AppId appid
     * @param string $PolicyName Policy name.
     * @param string $PolicyId Policy ID
     * @param integer $PolicyType Policy classification
     * @param integer $PolicyRiskLevel Policy risk level
     * @param string $PolicyDescription Policy description
     * @param integer $HandleBucketCount Number of buckets to be processed
     * @param integer $LastScanTimestamp Most recent risk detection time in Unix timestamp in milliseconds
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyRiskLevel",$param) and $param["PolicyRiskLevel"] !== null) {
            $this->PolicyRiskLevel = $param["PolicyRiskLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("HandleBucketCount",$param) and $param["HandleBucketCount"] !== null) {
            $this->HandleBucketCount = $param["HandleBucketCount"];
        }

        if (array_key_exists("LastScanTimestamp",$param) and $param["LastScanTimestamp"] !== null) {
            $this->LastScanTimestamp = $param["LastScanTimestamp"];
        }
    }
}
