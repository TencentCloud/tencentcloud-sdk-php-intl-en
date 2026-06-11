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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurchaseStateInfo response structure.
 *
 * @method integer getState() Obtain Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
 * @method void setState(integer $State) Set Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
 * @method integer getAllCoresCnt() Obtain 
 * @method void setAllCoresCnt(integer $AllCoresCnt) Set 
 * @method integer getCoresCnt() Obtain Total number of protected cores. It is the sum of the number of purchased cores, the number of free trial cores, and the number of elastic billing cores.
 * @method void setCoresCnt(integer $CoresCnt) Set Total number of protected cores. It is the sum of the number of purchased cores, the number of free trial cores, and the number of elastic billing cores.
 * @method integer getUndefendCoresCnt() Obtain 
 * @method void setUndefendCoresCnt(integer $UndefendCoresCnt) Set 
 * @method integer getAuthorizedCoresCnt() Obtain Number of purchased cores
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) Set Number of purchased cores
 * @method integer getGivenAuthorizedCoresCnt() Obtain Number of free trial cores for Pro Edition.
 * @method void setGivenAuthorizedCoresCnt(integer $GivenAuthorizedCoresCnt) Set Number of free trial cores for Pro Edition.
 * @method integer getCurrentFlexibleCoresCnt() Obtain 
 * @method void setCurrentFlexibleCoresCnt(integer $CurrentFlexibleCoresCnt) Set 
 * @method integer getImageCnt() Obtain Image count
 * @method void setImageCnt(integer $ImageCnt) Set Image count
 * @method integer getAuthorizedImageCnt() Obtain Number of licensed images
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) Set Number of licensed images
 * @method string getExpirationTime() Obtain Expiration time
 * @method void setExpirationTime(string $ExpirationTime) Set Expiration time
 * @method integer getPurchasedAuthorizedCnt() Obtain Number of purchased image licenses
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) Set Number of purchased image licenses
 * @method integer getAutomaticRenewal() Obtain 0 indicates the default status (it has not been set by the user, namely the initial status); 1 indicates automatic renewal; 2 indicates explicit non-automatic renewal (it has been set by the user).
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) Set 0 indicates the default status (it has not been set by the user, namely the initial status); 1 indicates automatic renewal; 2 indicates explicit non-automatic renewal (it has been set by the user).
 * @method integer getGivenAuthorizedCnt() Obtain Complimentary image licenses during the trial period may expire.
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) Set Complimentary image licenses during the trial period may expire.
 * @method string getBeginTime() Obtain Start time.
 * @method void setBeginTime(string $BeginTime) Set Start time.
 * @method string getSubState() Obtain Substatus (specific meaning depending on the State field)
Valid values when State is 4: ISOLATE, TERMINATED.
 * @method void setSubState(string $SubState) Set Substatus (specific meaning depending on the State field)
Valid values when State is 4: ISOLATE, TERMINATED.
 * @method string getInquireKey() Obtain Billing key.
 * @method void setInquireKey(string $InquireKey) Set Billing key.
 * @method string getDefendPolicy() Obtain 
 * @method void setDefendPolicy(string $DefendPolicy) Set 
 * @method integer getFlexibleCoresLimit() Obtain 
 * @method void setFlexibleCoresLimit(integer $FlexibleCoresLimit) Set 
 * @method integer getDefendClusterCoresCnt() Obtain 
 * @method void setDefendClusterCoresCnt(integer $DefendClusterCoresCnt) Set 
 * @method integer getDefendHostCoresCnt() Obtain 
 * @method void setDefendHostCoresCnt(integer $DefendHostCoresCnt) Set 
 * @method integer getTrialCoresCnt() Obtain Number of trial cores for Pro Edition.
 * @method void setTrialCoresCnt(integer $TrialCoresCnt) Set Number of trial cores for Pro Edition.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribePurchaseStateInfoResponse extends AbstractModel
{
    /**
     * @var integer Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
     */
    public $State;

    /**
     * @var integer 
     */
    public $AllCoresCnt;

    /**
     * @var integer Total number of protected cores. It is the sum of the number of purchased cores, the number of free trial cores, and the number of elastic billing cores.
     */
    public $CoresCnt;

    /**
     * @var integer 
     */
    public $UndefendCoresCnt;

    /**
     * @var integer Number of purchased cores
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer Number of free trial cores for Pro Edition.
     */
    public $GivenAuthorizedCoresCnt;

    /**
     * @var integer 
     */
    public $CurrentFlexibleCoresCnt;

    /**
     * @var integer Image count
     */
    public $ImageCnt;

    /**
     * @var integer Number of licensed images
     */
    public $AuthorizedImageCnt;

    /**
     * @var string Expiration time
     */
    public $ExpirationTime;

    /**
     * @var integer Number of purchased image licenses
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var integer 0 indicates the default status (it has not been set by the user, namely the initial status); 1 indicates automatic renewal; 2 indicates explicit non-automatic renewal (it has been set by the user).
     */
    public $AutomaticRenewal;

    /**
     * @var integer Complimentary image licenses during the trial period may expire.
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string Start time.
     */
    public $BeginTime;

    /**
     * @var string Substatus (specific meaning depending on the State field)
Valid values when State is 4: ISOLATE, TERMINATED.
     */
    public $SubState;

    /**
     * @var string Billing key.
     */
    public $InquireKey;

    /**
     * @var string 
     */
    public $DefendPolicy;

    /**
     * @var integer 
     */
    public $FlexibleCoresLimit;

    /**
     * @var integer 
     */
    public $DefendClusterCoresCnt;

    /**
     * @var integer 
     */
    public $DefendHostCoresCnt;

    /**
     * @var integer Number of trial cores for Pro Edition.
     */
    public $TrialCoresCnt;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $State Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
     * @param integer $AllCoresCnt 
     * @param integer $CoresCnt Total number of protected cores. It is the sum of the number of purchased cores, the number of free trial cores, and the number of elastic billing cores.
     * @param integer $UndefendCoresCnt 
     * @param integer $AuthorizedCoresCnt Number of purchased cores
     * @param integer $GivenAuthorizedCoresCnt Number of free trial cores for Pro Edition.
     * @param integer $CurrentFlexibleCoresCnt 
     * @param integer $ImageCnt Image count
     * @param integer $AuthorizedImageCnt Number of licensed images
     * @param string $ExpirationTime Expiration time
     * @param integer $PurchasedAuthorizedCnt Number of purchased image licenses
     * @param integer $AutomaticRenewal 0 indicates the default status (it has not been set by the user, namely the initial status); 1 indicates automatic renewal; 2 indicates explicit non-automatic renewal (it has been set by the user).
     * @param integer $GivenAuthorizedCnt Complimentary image licenses during the trial period may expire.
     * @param string $BeginTime Start time.
     * @param string $SubState Substatus (specific meaning depending on the State field)
Valid values when State is 4: ISOLATE, TERMINATED.
     * @param string $InquireKey Billing key.
     * @param string $DefendPolicy 
     * @param integer $FlexibleCoresLimit 
     * @param integer $DefendClusterCoresCnt 
     * @param integer $DefendHostCoresCnt 
     * @param integer $TrialCoresCnt Number of trial cores for Pro Edition.
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllCoresCnt",$param) and $param["AllCoresCnt"] !== null) {
            $this->AllCoresCnt = $param["AllCoresCnt"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("UndefendCoresCnt",$param) and $param["UndefendCoresCnt"] !== null) {
            $this->UndefendCoresCnt = $param["UndefendCoresCnt"];
        }

        if (array_key_exists("AuthorizedCoresCnt",$param) and $param["AuthorizedCoresCnt"] !== null) {
            $this->AuthorizedCoresCnt = $param["AuthorizedCoresCnt"];
        }

        if (array_key_exists("GivenAuthorizedCoresCnt",$param) and $param["GivenAuthorizedCoresCnt"] !== null) {
            $this->GivenAuthorizedCoresCnt = $param["GivenAuthorizedCoresCnt"];
        }

        if (array_key_exists("CurrentFlexibleCoresCnt",$param) and $param["CurrentFlexibleCoresCnt"] !== null) {
            $this->CurrentFlexibleCoresCnt = $param["CurrentFlexibleCoresCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("AuthorizedImageCnt",$param) and $param["AuthorizedImageCnt"] !== null) {
            $this->AuthorizedImageCnt = $param["AuthorizedImageCnt"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("PurchasedAuthorizedCnt",$param) and $param["PurchasedAuthorizedCnt"] !== null) {
            $this->PurchasedAuthorizedCnt = $param["PurchasedAuthorizedCnt"];
        }

        if (array_key_exists("AutomaticRenewal",$param) and $param["AutomaticRenewal"] !== null) {
            $this->AutomaticRenewal = $param["AutomaticRenewal"];
        }

        if (array_key_exists("GivenAuthorizedCnt",$param) and $param["GivenAuthorizedCnt"] !== null) {
            $this->GivenAuthorizedCnt = $param["GivenAuthorizedCnt"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("SubState",$param) and $param["SubState"] !== null) {
            $this->SubState = $param["SubState"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("DefendPolicy",$param) and $param["DefendPolicy"] !== null) {
            $this->DefendPolicy = $param["DefendPolicy"];
        }

        if (array_key_exists("FlexibleCoresLimit",$param) and $param["FlexibleCoresLimit"] !== null) {
            $this->FlexibleCoresLimit = $param["FlexibleCoresLimit"];
        }

        if (array_key_exists("DefendClusterCoresCnt",$param) and $param["DefendClusterCoresCnt"] !== null) {
            $this->DefendClusterCoresCnt = $param["DefendClusterCoresCnt"];
        }

        if (array_key_exists("DefendHostCoresCnt",$param) and $param["DefendHostCoresCnt"] !== null) {
            $this->DefendHostCoresCnt = $param["DefendHostCoresCnt"];
        }

        if (array_key_exists("TrialCoresCnt",$param) and $param["TrialCoresCnt"] !== null) {
            $this->TrialCoresCnt = $param["TrialCoresCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
