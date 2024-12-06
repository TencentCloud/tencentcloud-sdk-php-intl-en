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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurchaseStateInfo response structure.
 *
 * @method integer getState() Obtain Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
 * @method void setState(integer $State) Set Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
 * @method integer getCoresCnt() Obtain Total number of cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoresCnt(integer $CoresCnt) Set Total number of cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuthorizedCoresCnt() Obtain Number of purchased cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) Set Number of purchased cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getImageCnt() Obtain Number of images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageCnt(integer $ImageCnt) Set Number of images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuthorizedImageCnt() Obtain Number of licensed images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) Set Number of licensed images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPurchasedAuthorizedCnt() Obtain Number of purchased image licenses
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) Set Number of purchased image licenses
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationTime() Obtain Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationTime(string $ExpirationTime) Set Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutomaticRenewal() Obtain Valid values: `0` (initial status, which is the default value and not set by the user); `1` (auto-renewal); `2` (no auto-renewal, which is specified by the user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) Set Valid values: `0` (initial status, which is the default value and not set by the user); `1` (auto-renewal); `2` (no auto-renewal, which is specified by the user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGivenAuthorizedCnt() Obtain Number of free image licenses during the trial, which may expire.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) Set Number of free image licenses during the trial, which may expire.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(string $BeginTime) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubState() Obtain Sub-status, the meaning of which is subject to the `State` field.
Valid values when `State` is `4`: `ISOLATE` (isolated); `DESTROED` (terminated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubState(string $SubState) Set Sub-status, the meaning of which is subject to the `State` field.
Valid values when `State` is `4`: `ISOLATE` (isolated); `DESTROED` (terminated).
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Total number of cores
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoresCnt;

    /**
     * @var integer Number of purchased cores
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer Number of images
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageCnt;

    /**
     * @var integer Number of licensed images
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizedImageCnt;

    /**
     * @var integer Number of purchased image licenses
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var string Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationTime;

    /**
     * @var integer Valid values: `0` (initial status, which is the default value and not set by the user); `1` (auto-renewal); `2` (no auto-renewal, which is specified by the user).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutomaticRenewal;

    /**
     * @var integer Number of free image licenses during the trial, which may expire.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var string Sub-status, the meaning of which is subject to the `State` field.
Valid values when `State` is `4`: `ISOLATE` (isolated); `DESTROED` (terminated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubState;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $State Valid values: `0` (available for trial and purchase); `1` (available for purchase only after failed trial review or trial expiration); `2` (trial effective); `3` (Pro Edition effective); `4` (Pro Edition expired).
     * @param integer $CoresCnt Total number of cores
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuthorizedCoresCnt Number of purchased cores
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ImageCnt Number of images
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuthorizedImageCnt Number of licensed images
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PurchasedAuthorizedCnt Number of purchased image licenses
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationTime Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutomaticRenewal Valid values: `0` (initial status, which is the default value and not set by the user); `1` (auto-renewal); `2` (no auto-renewal, which is specified by the user).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GivenAuthorizedCnt Number of free image licenses during the trial, which may expire.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubState Sub-status, the meaning of which is subject to the `State` field.
Valid values when `State` is `4`: `ISOLATE` (isolated); `DESTROED` (terminated).
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("AuthorizedCoresCnt",$param) and $param["AuthorizedCoresCnt"] !== null) {
            $this->AuthorizedCoresCnt = $param["AuthorizedCoresCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("AuthorizedImageCnt",$param) and $param["AuthorizedImageCnt"] !== null) {
            $this->AuthorizedImageCnt = $param["AuthorizedImageCnt"];
        }

        if (array_key_exists("PurchasedAuthorizedCnt",$param) and $param["PurchasedAuthorizedCnt"] !== null) {
            $this->PurchasedAuthorizedCnt = $param["PurchasedAuthorizedCnt"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
