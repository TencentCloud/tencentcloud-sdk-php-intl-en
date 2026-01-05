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
 * Ad insertion configuration and SSAI usage detail by advertisement type dimension.
 *
 * @method string getUniqId() Obtain Ad insertion configuration uniq_id.
 * @method void setUniqId(string $UniqId) Set Ad insertion configuration uniq_id.
 * @method string getChannelId() Obtain Ad insertion configuration id.
 * @method void setChannelId(string $ChannelId) Set Ad insertion configuration id.
 * @method string getChannelName() Obtain Ad insertion configuration name.
 * @method void setChannelName(string $ChannelName) Set Ad insertion configuration name.
 * @method string getAdType() Obtain Ad type.
 * @method void setAdType(string $AdType) Set Ad type.
 * @method integer getAdRequestSuccess() Obtain Number of successful ad requests.
 * @method void setAdRequestSuccess(integer $AdRequestSuccess) Set Number of successful ad requests.
 * @method integer getAdRequestFail() Obtain Number of failed ad requests.
 * @method void setAdRequestFail(integer $AdRequestFail) Set Number of failed ad requests.
 * @method integer getImpression() Obtain Number of ad exposures.
 * @method void setImpression(integer $Impression) Set Number of ad exposures.
 * @method integer getStart() Obtain Number of ad playbacks started.
 * @method void setStart(integer $Start) Set Number of ad playbacks started.
 * @method integer getFirstQuarter() Obtain Ad plays at 1/4 point.
 * @method void setFirstQuarter(integer $FirstQuarter) Set Ad plays at 1/4 point.
 * @method integer getMidpoint() Obtain Ad plays at 1/2 point.
 * @method void setMidpoint(integer $Midpoint) Set Ad plays at 1/2 point.
 * @method integer getThirdQuarter() Obtain Ad plays at 3/4 point.
 * @method void setThirdQuarter(integer $ThirdQuarter) Set Ad plays at 3/4 point.
 * @method integer getComplete() Obtain Number of ad playbacks completed.
 * @method void setComplete(integer $Complete) Set Number of ad playbacks completed.
 * @method float getAdMarkerTime() Obtain Advertising tag time.
 * @method void setAdMarkerTime(float $AdMarkerTime) Set Advertising tag time.
 * @method float getReplacedTime() Obtain Personalization replacement time.
 * @method void setReplacedTime(float $ReplacedTime) Set Personalization replacement time.
 * @method float getMidFillRate() Obtain Fill factor for personalized ads.
 * @method void setMidFillRate(float $MidFillRate) Set Fill factor for personalized ads.
 * @method integer getPreReqNum() Obtain Number of pre-roll ad requests.
 * @method void setPreReqNum(integer $PreReqNum) Set Number of pre-roll ad requests.
 * @method integer getPreReplacedNum() Obtain Number of pre-roll ad replacements.
 * @method void setPreReplacedNum(integer $PreReplacedNum) Set Number of pre-roll ad replacements.
 * @method float getPreReplaceRate() Obtain Ad replacement rate.
 * @method void setPreReplaceRate(float $PreReplaceRate) Set Ad replacement rate.
 * @method integer getADMarkerFound() Obtain Number of ad tags found in the list
 * @method void setADMarkerFound(integer $ADMarkerFound) Set Number of ad tags found in the list
 * @method integer getMakeAdsRequest() Obtain Request advertising frequency from ADS
 * @method void setMakeAdsRequest(integer $MakeAdsRequest) Set Request advertising frequency from ADS
 * @method integer getVASTResponse() Obtain Received VAST returns from ADS
 * @method void setVASTResponse(integer $VASTResponse) Set Received VAST returns from ADS
 * @method integer getFilledAvail() Obtain Successfully filled the ad count
 * @method void setFilledAvail(integer $FilledAvail) Set Successfully filled the ad count
 * @method integer getWarningNoAd() Obtain The number of issues encountered during ad replacement execution
 * @method void setWarningNoAd(integer $WarningNoAd) Set The number of issues encountered during ad replacement execution
 * @method integer getErrorAdsTimeout() Obtain The number of timeouts returned by ADS
 * @method void setErrorAdsTimeout(integer $ErrorAdsTimeout) Set The number of timeouts returned by ADS
 * @method integer getEmptyVASTResponse() Obtain The number of empty VAST responses returned by ADS
 * @method void setEmptyVASTResponse(integer $EmptyVASTResponse) Set The number of empty VAST responses returned by ADS
 * @method integer getEmptyVMAPResponse() Obtain The number of empty VMAP responses returned by ADS
 * @method void setEmptyVMAPResponse(integer $EmptyVMAPResponse) Set The number of empty VMAP responses returned by ADS
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var string Ad insertion configuration uniq_id.
     */
    public $UniqId;

    /**
     * @var string Ad insertion configuration id.
     */
    public $ChannelId;

    /**
     * @var string Ad insertion configuration name.
     */
    public $ChannelName;

    /**
     * @var string Ad type.
     */
    public $AdType;

    /**
     * @var integer Number of successful ad requests.
     */
    public $AdRequestSuccess;

    /**
     * @var integer Number of failed ad requests.
     */
    public $AdRequestFail;

    /**
     * @var integer Number of ad exposures.
     */
    public $Impression;

    /**
     * @var integer Number of ad playbacks started.
     */
    public $Start;

    /**
     * @var integer Ad plays at 1/4 point.
     */
    public $FirstQuarter;

    /**
     * @var integer Ad plays at 1/2 point.
     */
    public $Midpoint;

    /**
     * @var integer Ad plays at 3/4 point.
     */
    public $ThirdQuarter;

    /**
     * @var integer Number of ad playbacks completed.
     */
    public $Complete;

    /**
     * @var float Advertising tag time.
     * @deprecated
     */
    public $AdMarkerTime;

    /**
     * @var float Personalization replacement time.
     * @deprecated
     */
    public $ReplacedTime;

    /**
     * @var float Fill factor for personalized ads.
     * @deprecated
     */
    public $MidFillRate;

    /**
     * @var integer Number of pre-roll ad requests.
     * @deprecated
     */
    public $PreReqNum;

    /**
     * @var integer Number of pre-roll ad replacements.
     * @deprecated
     */
    public $PreReplacedNum;

    /**
     * @var float Ad replacement rate.
     * @deprecated
     */
    public $PreReplaceRate;

    /**
     * @var integer Number of ad tags found in the list
     */
    public $ADMarkerFound;

    /**
     * @var integer Request advertising frequency from ADS
     */
    public $MakeAdsRequest;

    /**
     * @var integer Received VAST returns from ADS
     */
    public $VASTResponse;

    /**
     * @var integer Successfully filled the ad count
     */
    public $FilledAvail;

    /**
     * @var integer The number of issues encountered during ad replacement execution
     */
    public $WarningNoAd;

    /**
     * @var integer The number of timeouts returned by ADS
     */
    public $ErrorAdsTimeout;

    /**
     * @var integer The number of empty VAST responses returned by ADS
     */
    public $EmptyVASTResponse;

    /**
     * @var integer The number of empty VMAP responses returned by ADS
     */
    public $EmptyVMAPResponse;

    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param string $UniqId Ad insertion configuration uniq_id.
     * @param string $ChannelId Ad insertion configuration id.
     * @param string $ChannelName Ad insertion configuration name.
     * @param string $AdType Ad type.
     * @param integer $AdRequestSuccess Number of successful ad requests.
     * @param integer $AdRequestFail Number of failed ad requests.
     * @param integer $Impression Number of ad exposures.
     * @param integer $Start Number of ad playbacks started.
     * @param integer $FirstQuarter Ad plays at 1/4 point.
     * @param integer $Midpoint Ad plays at 1/2 point.
     * @param integer $ThirdQuarter Ad plays at 3/4 point.
     * @param integer $Complete Number of ad playbacks completed.
     * @param float $AdMarkerTime Advertising tag time.
     * @param float $ReplacedTime Personalization replacement time.
     * @param float $MidFillRate Fill factor for personalized ads.
     * @param integer $PreReqNum Number of pre-roll ad requests.
     * @param integer $PreReplacedNum Number of pre-roll ad replacements.
     * @param float $PreReplaceRate Ad replacement rate.
     * @param integer $ADMarkerFound Number of ad tags found in the list
     * @param integer $MakeAdsRequest Request advertising frequency from ADS
     * @param integer $VASTResponse Received VAST returns from ADS
     * @param integer $FilledAvail Successfully filled the ad count
     * @param integer $WarningNoAd The number of issues encountered during ad replacement execution
     * @param integer $ErrorAdsTimeout The number of timeouts returned by ADS
     * @param integer $EmptyVASTResponse The number of empty VAST responses returned by ADS
     * @param integer $EmptyVMAPResponse The number of empty VMAP responses returned by ADS
     * @param string $Date Date
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("AdType",$param) and $param["AdType"] !== null) {
            $this->AdType = $param["AdType"];
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

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("FirstQuarter",$param) and $param["FirstQuarter"] !== null) {
            $this->FirstQuarter = $param["FirstQuarter"];
        }

        if (array_key_exists("Midpoint",$param) and $param["Midpoint"] !== null) {
            $this->Midpoint = $param["Midpoint"];
        }

        if (array_key_exists("ThirdQuarter",$param) and $param["ThirdQuarter"] !== null) {
            $this->ThirdQuarter = $param["ThirdQuarter"];
        }

        if (array_key_exists("Complete",$param) and $param["Complete"] !== null) {
            $this->Complete = $param["Complete"];
        }

        if (array_key_exists("AdMarkerTime",$param) and $param["AdMarkerTime"] !== null) {
            $this->AdMarkerTime = $param["AdMarkerTime"];
        }

        if (array_key_exists("ReplacedTime",$param) and $param["ReplacedTime"] !== null) {
            $this->ReplacedTime = $param["ReplacedTime"];
        }

        if (array_key_exists("MidFillRate",$param) and $param["MidFillRate"] !== null) {
            $this->MidFillRate = $param["MidFillRate"];
        }

        if (array_key_exists("PreReqNum",$param) and $param["PreReqNum"] !== null) {
            $this->PreReqNum = $param["PreReqNum"];
        }

        if (array_key_exists("PreReplacedNum",$param) and $param["PreReplacedNum"] !== null) {
            $this->PreReplacedNum = $param["PreReplacedNum"];
        }

        if (array_key_exists("PreReplaceRate",$param) and $param["PreReplaceRate"] !== null) {
            $this->PreReplaceRate = $param["PreReplaceRate"];
        }

        if (array_key_exists("ADMarkerFound",$param) and $param["ADMarkerFound"] !== null) {
            $this->ADMarkerFound = $param["ADMarkerFound"];
        }

        if (array_key_exists("MakeAdsRequest",$param) and $param["MakeAdsRequest"] !== null) {
            $this->MakeAdsRequest = $param["MakeAdsRequest"];
        }

        if (array_key_exists("VASTResponse",$param) and $param["VASTResponse"] !== null) {
            $this->VASTResponse = $param["VASTResponse"];
        }

        if (array_key_exists("FilledAvail",$param) and $param["FilledAvail"] !== null) {
            $this->FilledAvail = $param["FilledAvail"];
        }

        if (array_key_exists("WarningNoAd",$param) and $param["WarningNoAd"] !== null) {
            $this->WarningNoAd = $param["WarningNoAd"];
        }

        if (array_key_exists("ErrorAdsTimeout",$param) and $param["ErrorAdsTimeout"] !== null) {
            $this->ErrorAdsTimeout = $param["ErrorAdsTimeout"];
        }

        if (array_key_exists("EmptyVASTResponse",$param) and $param["EmptyVASTResponse"] !== null) {
            $this->EmptyVASTResponse = $param["EmptyVASTResponse"];
        }

        if (array_key_exists("EmptyVMAPResponse",$param) and $param["EmptyVMAPResponse"] !== null) {
            $this->EmptyVMAPResponse = $param["EmptyVMAPResponse"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
