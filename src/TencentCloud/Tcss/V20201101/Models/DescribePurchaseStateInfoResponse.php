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
 * @method integer getState() Obtain <p>0: available for trial application and purchase; 1: purchase only (including failed trial review and expired trial); 2: trial active; 3: Pro Edition active; 4: Pro Edition expired</p>
 * @method void setState(integer $State) Set <p>0: available for trial application and purchase; 1: purchase only (including failed trial review and expired trial); 2: trial active; 3: Pro Edition active; 4: Pro Edition expired</p>
 * @method integer getAllCoresCnt() Obtain <p>Total resource cores = total protected cores + unprotected cores</p>
 * @method void setAllCoresCnt(integer $AllCoresCnt) Set <p>Total resource cores = total protected cores + unprotected cores</p>
 * @method integer getCoresCnt() Obtain <p>Total protected cores = purchased cores + trial granted cores + elastic billing cores</p>
 * @method void setCoresCnt(integer $CoresCnt) Set <p>Total protected cores = purchased cores + trial granted cores + elastic billing cores</p>
 * @method integer getUndefendCoresCnt() Obtain <p>Unprotected cores (number of resource cores with protection not enabled)</p>
 * @method void setUndefendCoresCnt(integer $UndefendCoresCnt) Set <p>Unprotected cores (number of resource cores with protection not enabled)</p>
 * @method integer getAuthorizedCoresCnt() Obtain <p>Number of purchased cores</p>
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) Set <p>Number of purchased cores</p>
 * @method integer getGivenAuthorizedCoresCnt() Obtain <p>Trial giveaway of Pro Edition cores</p>
 * @method void setGivenAuthorizedCoresCnt(integer $GivenAuthorizedCoresCnt) Set <p>Trial giveaway of Pro Edition cores</p>
 * @method integer getCurrentFlexibleCoresCnt() Obtain <p>Current number of elastic billing cores</p>
 * @method void setCurrentFlexibleCoresCnt(integer $CurrentFlexibleCoresCnt) Set <p>Current number of elastic billing cores</p>
 * @method integer getImageCnt() Obtain <p>Number of images.</p>
 * @method void setImageCnt(integer $ImageCnt) Set <p>Number of images.</p>
 * @method integer getAuthorizedImageCnt() Obtain <p>Number of licensed images</p>
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) Set <p>Number of licensed images</p>
 * @method string getExpirationTime() Obtain <p>Expiration time.</p>
 * @method void setExpirationTime(string $ExpirationTime) Set <p>Expiration time.</p>
 * @method integer getPurchasedAuthorizedCnt() Obtain <p>Number of purchased image licenses</p>
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) Set <p>Number of purchased image licenses</p>
 * @method integer getAutomaticRenewal() Obtain <p>0 indicates the default state (not set by the user, i.e., the initial state), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (set by the user).</p>
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) Set <p>0 indicates the default state (not set by the user, i.e., the initial state), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (set by the user).</p>
 * @method integer getGivenAuthorizedCnt() Obtain <p>Complimentary image licenses during the trial period may expire.</p>
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) Set <p>Complimentary image licenses during the trial period may expire.</p>
 * @method string getBeginTime() Obtain <p>Start time</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Start time</p>
 * @method string getSubState() Obtain <p>Sub-status (specific meaning depending on the State field)<br>When State is 4, valid values: ISOLATE (isolated) DESTROED (terminated)</p>
 * @method void setSubState(string $SubState) Set <p>Sub-status (specific meaning depending on the State field)<br>When State is 4, valid values: ISOLATE (isolated) DESTROED (terminated)</p>
 * @method string getInquireKey() Obtain <p>Billing key</p>
 * @method void setInquireKey(string $InquireKey) Set <p>Billing key</p>
 * @method string getDefendPolicy() Obtain <p>Protection policy</p>
 * @method void setDefendPolicy(string $DefendPolicy) Set <p>Protection policy</p>
 * @method integer getFlexibleCoresLimit() Obtain <p>Upper limit of elastic billing cores</p>
 * @method void setFlexibleCoresLimit(integer $FlexibleCoresLimit) Set <p>Upper limit of elastic billing cores</p>
 * @method integer getDefendClusterCoresCnt() Obtain <p>Number of cores in the protected cluster</p>
 * @method void setDefendClusterCoresCnt(integer $DefendClusterCoresCnt) Set <p>Number of cores in the protected cluster</p>
 * @method integer getDefendHostCoresCnt() Obtain <p>Protected host cores</p>
 * @method void setDefendHostCoresCnt(integer $DefendHostCoresCnt) Set <p>Protected host cores</p>
 * @method integer getTrialCoresCnt() Obtain <p>Number of cores of the Pro Edition for trial use</p>
 * @method void setTrialCoresCnt(integer $TrialCoresCnt) Set <p>Number of cores of the Pro Edition for trial use</p>
 * @method integer getNoContainerCoresCnt() Obtain <p>Number of machines with zero protection containers.</p>
 * @method void setNoContainerCoresCnt(integer $NoContainerCoresCnt) Set <p>Number of machines with zero protection containers.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribePurchaseStateInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>0: available for trial application and purchase; 1: purchase only (including failed trial review and expired trial); 2: trial active; 3: Pro Edition active; 4: Pro Edition expired</p>
     */
    public $State;

    /**
     * @var integer <p>Total resource cores = total protected cores + unprotected cores</p>
     */
    public $AllCoresCnt;

    /**
     * @var integer <p>Total protected cores = purchased cores + trial granted cores + elastic billing cores</p>
     */
    public $CoresCnt;

    /**
     * @var integer <p>Unprotected cores (number of resource cores with protection not enabled)</p>
     */
    public $UndefendCoresCnt;

    /**
     * @var integer <p>Number of purchased cores</p>
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer <p>Trial giveaway of Pro Edition cores</p>
     */
    public $GivenAuthorizedCoresCnt;

    /**
     * @var integer <p>Current number of elastic billing cores</p>
     */
    public $CurrentFlexibleCoresCnt;

    /**
     * @var integer <p>Number of images.</p>
     */
    public $ImageCnt;

    /**
     * @var integer <p>Number of licensed images</p>
     */
    public $AuthorizedImageCnt;

    /**
     * @var string <p>Expiration time.</p>
     */
    public $ExpirationTime;

    /**
     * @var integer <p>Number of purchased image licenses</p>
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var integer <p>0 indicates the default state (not set by the user, i.e., the initial state), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (set by the user).</p>
     */
    public $AutomaticRenewal;

    /**
     * @var integer <p>Complimentary image licenses during the trial period may expire.</p>
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string <p>Start time</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Sub-status (specific meaning depending on the State field)<br>When State is 4, valid values: ISOLATE (isolated) DESTROED (terminated)</p>
     */
    public $SubState;

    /**
     * @var string <p>Billing key</p>
     */
    public $InquireKey;

    /**
     * @var string <p>Protection policy</p>
     */
    public $DefendPolicy;

    /**
     * @var integer <p>Upper limit of elastic billing cores</p>
     */
    public $FlexibleCoresLimit;

    /**
     * @var integer <p>Number of cores in the protected cluster</p>
     */
    public $DefendClusterCoresCnt;

    /**
     * @var integer <p>Protected host cores</p>
     */
    public $DefendHostCoresCnt;

    /**
     * @var integer <p>Number of cores of the Pro Edition for trial use</p>
     */
    public $TrialCoresCnt;

    /**
     * @var integer <p>Number of machines with zero protection containers.</p>
     */
    public $NoContainerCoresCnt;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $State <p>0: available for trial application and purchase; 1: purchase only (including failed trial review and expired trial); 2: trial active; 3: Pro Edition active; 4: Pro Edition expired</p>
     * @param integer $AllCoresCnt <p>Total resource cores = total protected cores + unprotected cores</p>
     * @param integer $CoresCnt <p>Total protected cores = purchased cores + trial granted cores + elastic billing cores</p>
     * @param integer $UndefendCoresCnt <p>Unprotected cores (number of resource cores with protection not enabled)</p>
     * @param integer $AuthorizedCoresCnt <p>Number of purchased cores</p>
     * @param integer $GivenAuthorizedCoresCnt <p>Trial giveaway of Pro Edition cores</p>
     * @param integer $CurrentFlexibleCoresCnt <p>Current number of elastic billing cores</p>
     * @param integer $ImageCnt <p>Number of images.</p>
     * @param integer $AuthorizedImageCnt <p>Number of licensed images</p>
     * @param string $ExpirationTime <p>Expiration time.</p>
     * @param integer $PurchasedAuthorizedCnt <p>Number of purchased image licenses</p>
     * @param integer $AutomaticRenewal <p>0 indicates the default state (not set by the user, i.e., the initial state), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (set by the user).</p>
     * @param integer $GivenAuthorizedCnt <p>Complimentary image licenses during the trial period may expire.</p>
     * @param string $BeginTime <p>Start time</p>
     * @param string $SubState <p>Sub-status (specific meaning depending on the State field)<br>When State is 4, valid values: ISOLATE (isolated) DESTROED (terminated)</p>
     * @param string $InquireKey <p>Billing key</p>
     * @param string $DefendPolicy <p>Protection policy</p>
     * @param integer $FlexibleCoresLimit <p>Upper limit of elastic billing cores</p>
     * @param integer $DefendClusterCoresCnt <p>Number of cores in the protected cluster</p>
     * @param integer $DefendHostCoresCnt <p>Protected host cores</p>
     * @param integer $TrialCoresCnt <p>Number of cores of the Pro Edition for trial use</p>
     * @param integer $NoContainerCoresCnt <p>Number of machines with zero protection containers.</p>
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

        if (array_key_exists("NoContainerCoresCnt",$param) and $param["NoContainerCoresCnt"] !== null) {
            $this->NoContainerCoresCnt = $param["NoContainerCoresCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
