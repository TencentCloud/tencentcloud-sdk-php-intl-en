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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSAI usage information.
 *
 * @method integer getAdRequestSuccess() Obtain Number of successful ad requests.
 * @method void setAdRequestSuccess(integer $AdRequestSuccess) Set Number of successful ad requests.
 * @method integer getAdRequestFail() Obtain Number of failed ad requests.
 * @method void setAdRequestFail(integer $AdRequestFail) Set Number of failed ad requests.
 * @method integer getImpression() Obtain Exposure count.
 * @method void setImpression(integer $Impression) Set Exposure count.
 * @method float getMidFillRate() Obtain Fill factor for personalized ads.
 * @method void setMidFillRate(float $MidFillRate) Set Fill factor for personalized ads.
 * @method float getAdMarkerTime() Obtain Advertising tag time.
 * @method void setAdMarkerTime(float $AdMarkerTime) Set Advertising tag time.
 * @method float getReplacedTime() Obtain Personalization replacement time.
 * @method void setReplacedTime(float $ReplacedTime) Set Personalization replacement time.
 * @method float getPreReplaceRate() Obtain Ad replacement rate.
 * @method void setPreReplaceRate(float $PreReplaceRate) Set Ad replacement rate.
 * @method integer getPreReqNum() Obtain Number of pre-roll ad requests.
 * @method void setPreReqNum(integer $PreReqNum) Set Number of pre-roll ad requests.
 * @method integer getPreReplacedNum() Obtain Number of pre-roll ad replacements.
 * @method void setPreReplacedNum(integer $PreReplacedNum) Set Number of pre-roll ad replacements.
 * @method array getUsageDetails() Obtain Configures usage for each ad.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsageDetails(array $UsageDetails) Set Configures usage for each ad.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SSAIUsageInfo extends AbstractModel
{
    /**
     * @var integer Number of successful ad requests.
     */
    public $AdRequestSuccess;

    /**
     * @var integer Number of failed ad requests.
     */
    public $AdRequestFail;

    /**
     * @var integer Exposure count.
     */
    public $Impression;

    /**
     * @var float Fill factor for personalized ads.
     */
    public $MidFillRate;

    /**
     * @var float Advertising tag time.
     */
    public $AdMarkerTime;

    /**
     * @var float Personalization replacement time.
     */
    public $ReplacedTime;

    /**
     * @var float Ad replacement rate.
     */
    public $PreReplaceRate;

    /**
     * @var integer Number of pre-roll ad requests.
     */
    public $PreReqNum;

    /**
     * @var integer Number of pre-roll ad replacements.
     */
    public $PreReplacedNum;

    /**
     * @var array Configures usage for each ad.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsageDetails;

    /**
     * @param integer $AdRequestSuccess Number of successful ad requests.
     * @param integer $AdRequestFail Number of failed ad requests.
     * @param integer $Impression Exposure count.
     * @param float $MidFillRate Fill factor for personalized ads.
     * @param float $AdMarkerTime Advertising tag time.
     * @param float $ReplacedTime Personalization replacement time.
     * @param float $PreReplaceRate Ad replacement rate.
     * @param integer $PreReqNum Number of pre-roll ad requests.
     * @param integer $PreReplacedNum Number of pre-roll ad replacements.
     * @param array $UsageDetails Configures usage for each ad.
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
        if (array_key_exists("AdRequestSuccess",$param) and $param["AdRequestSuccess"] !== null) {
            $this->AdRequestSuccess = $param["AdRequestSuccess"];
        }

        if (array_key_exists("AdRequestFail",$param) and $param["AdRequestFail"] !== null) {
            $this->AdRequestFail = $param["AdRequestFail"];
        }

        if (array_key_exists("Impression",$param) and $param["Impression"] !== null) {
            $this->Impression = $param["Impression"];
        }

        if (array_key_exists("MidFillRate",$param) and $param["MidFillRate"] !== null) {
            $this->MidFillRate = $param["MidFillRate"];
        }

        if (array_key_exists("AdMarkerTime",$param) and $param["AdMarkerTime"] !== null) {
            $this->AdMarkerTime = $param["AdMarkerTime"];
        }

        if (array_key_exists("ReplacedTime",$param) and $param["ReplacedTime"] !== null) {
            $this->ReplacedTime = $param["ReplacedTime"];
        }

        if (array_key_exists("PreReplaceRate",$param) and $param["PreReplaceRate"] !== null) {
            $this->PreReplaceRate = $param["PreReplaceRate"];
        }

        if (array_key_exists("PreReqNum",$param) and $param["PreReqNum"] !== null) {
            $this->PreReqNum = $param["PreReqNum"];
        }

        if (array_key_exists("PreReplacedNum",$param) and $param["PreReplacedNum"] !== null) {
            $this->PreReplacedNum = $param["PreReplacedNum"];
        }

        if (array_key_exists("UsageDetails",$param) and $param["UsageDetails"] !== null) {
            $this->UsageDetails = [];
            foreach ($param["UsageDetails"] as $key => $value){
                $obj = new UsageDetail();
                $obj->deserialize($value);
                array_push($this->UsageDetails, $obj);
            }
        }
    }
}
