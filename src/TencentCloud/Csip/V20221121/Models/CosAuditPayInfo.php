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
 * cos audit payment information
 *
 * @method integer getAppId() Obtain <p>APPID</p>
 * @method void setAppId(integer $AppId) Set <p>APPID</p>
 * @method integer getOrderStatus() Obtain <p>Order status. 0: Not purchased; 1: Normal; 2: Isolated; 3: Terminated; 6: In trial; 7: Expired</p>
 * @method void setOrderStatus(integer $OrderStatus) Set <p>Order status. 0: Not purchased; 1: Normal; 2: Isolated; 3: Terminated; 6: In trial; 7: Expired</p>
 * @method integer getBucketNum() Obtain <p>The number of purchased object storage entries</p>
 * @method void setBucketNum(integer $BucketNum) Set <p>The number of purchased object storage entries</p>
 * @method integer getPayMode() Obtain <p>Payment mode. 0: postpaid. 1: prepaid.</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode. 0: postpaid. 1: prepaid.</p>
 * @method integer getIsSelfBuy() Obtain <p>Whether to purchase separately. 1: purchase separately; 2: shared by other accounts</p>
 * @method void setIsSelfBuy(integer $IsSelfBuy) Set <p>Whether to purchase separately. 1: purchase separately; 2: shared by other accounts</p>
 * @method string getBeginTime() Obtain <p>Order start time.</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Order start time.</p>
 * @method string getEndTime() Obtain <p>Order expiration time</p>
 * @method void setEndTime(string $EndTime) Set <p>Order expiration time</p>
 * @method integer getAutoRenew() Obtain <p>0: not set by the user, 1: set to auto-renew by the user, 2: set not to auto-renew by the user</p>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>0: not set by the user, 1: set to auto-renew by the user, 2: set not to auto-renew by the user</p>
 * @method integer getTimeSpan() Obtain <p>Order duration</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Order duration</p>
 * @method string getTimeUnit() Obtain <p>Duration unit</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Duration unit</p>
 * @method string getResourceId() Obtain <p>Resource id</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource id</p>
 * @method string getBetaEndTime() Obtain <p>Open beta end time</p>
 * @method void setBetaEndTime(string $BetaEndTime) Set <p>Open beta end time</p>
 * @method string getTimeNow() Obtain <p>Current system time.</p>
 * @method void setTimeNow(string $TimeNow) Set <p>Current system time.</p>
 * @method integer getIsShareToOther() Obtain <p>Whether to share with other accounts. 1: yes; 2: no</p>
 * @method void setIsShareToOther(integer $IsShareToOther) Set <p>Whether to share with other accounts. 1: yes; 2: no</p>
 * @method string getUin() Obtain <p>uin</p>
 * @method void setUin(string $Uin) Set <p>uin</p>
 * @method string getNickName() Obtain <p>Nickname</p>
 * @method void setNickName(string $NickName) Set <p>Nickname</p>
 * @method array getBindBucket() Obtain <p>Shared bucketIdSet</p>
 * @method void setBindBucket(array $BindBucket) Set <p>Shared bucketIdSet</p>
 * @method array getSharedAppIdSet() Obtain <p>Shared appid</p>
 * @method void setSharedAppIdSet(array $SharedAppIdSet) Set <p>Shared appid</p>
 * @method integer getPostPayStatus() Obtain <p>Whether pay-as-you-go is enabled</p>
 * @method void setPostPayStatus(integer $PostPayStatus) Set <p>Whether pay-as-you-go is enabled</p>
 * @method integer getIsTestUser() Obtain <p>0: No trial use yet   1: Trial use completed</p>
 * @method void setIsTestUser(integer $IsTestUser) Set <p>0: No trial use yet   1: Trial use completed</p>
 * @method integer getAvailableBucketNum() Obtain <p>Remaining available quantity</p>
 * @method void setAvailableBucketNum(integer $AvailableBucketNum) Set <p>Remaining available quantity</p>
 * @method integer getMonitorBucketNum() Obtain <p>Number of buckets with monitoring on</p>
 * @method void setMonitorBucketNum(integer $MonitorBucketNum) Set <p>Number of buckets with monitoring on</p>
 * @method integer getTotalBucketNum() Obtain <p>Total number of buckets</p>
 * @method void setTotalBucketNum(integer $TotalBucketNum) Set <p>Total number of buckets</p>
 * @method array getPostProductStatusList() Obtain <p>Postpaid product switch state</p>
 * @method void setPostProductStatusList(array $PostProductStatusList) Set <p>Postpaid product switch state</p>
 * @method array getPostProductBuyStatusList() Obtain <p>Purchase status of postpaid products.</p>
 * @method void setPostProductBuyStatusList(array $PostProductBuyStatusList) Set <p>Purchase status of postpaid products.</p>
 * @method string getNewPostPayResourceId() Obtain <p>New postpaid resource ID</p>
 * @method void setNewPostPayResourceId(string $NewPostPayResourceId) Set <p>New postpaid resource ID</p>
 */
class CosAuditPayInfo extends AbstractModel
{
    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var integer <p>Order status. 0: Not purchased; 1: Normal; 2: Isolated; 3: Terminated; 6: In trial; 7: Expired</p>
     */
    public $OrderStatus;

    /**
     * @var integer <p>The number of purchased object storage entries</p>
     */
    public $BucketNum;

    /**
     * @var integer <p>Payment mode. 0: postpaid. 1: prepaid.</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Whether to purchase separately. 1: purchase separately; 2: shared by other accounts</p>
     */
    public $IsSelfBuy;

    /**
     * @var string <p>Order start time.</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Order expiration time</p>
     */
    public $EndTime;

    /**
     * @var integer <p>0: not set by the user, 1: set to auto-renew by the user, 2: set not to auto-renew by the user</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>Order duration</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Duration unit</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>Resource id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Open beta end time</p>
     */
    public $BetaEndTime;

    /**
     * @var string <p>Current system time.</p>
     */
    public $TimeNow;

    /**
     * @var integer <p>Whether to share with other accounts. 1: yes; 2: no</p>
     */
    public $IsShareToOther;

    /**
     * @var string <p>uin</p>
     */
    public $Uin;

    /**
     * @var string <p>Nickname</p>
     */
    public $NickName;

    /**
     * @var array <p>Shared bucketIdSet</p>
     */
    public $BindBucket;

    /**
     * @var array <p>Shared appid</p>
     */
    public $SharedAppIdSet;

    /**
     * @var integer <p>Whether pay-as-you-go is enabled</p>
     */
    public $PostPayStatus;

    /**
     * @var integer <p>0: No trial use yet   1: Trial use completed</p>
     */
    public $IsTestUser;

    /**
     * @var integer <p>Remaining available quantity</p>
     */
    public $AvailableBucketNum;

    /**
     * @var integer <p>Number of buckets with monitoring on</p>
     */
    public $MonitorBucketNum;

    /**
     * @var integer <p>Total number of buckets</p>
     */
    public $TotalBucketNum;

    /**
     * @var array <p>Postpaid product switch state</p>
     */
    public $PostProductStatusList;

    /**
     * @var array <p>Purchase status of postpaid products.</p>
     */
    public $PostProductBuyStatusList;

    /**
     * @var string <p>New postpaid resource ID</p>
     */
    public $NewPostPayResourceId;

    /**
     * @param integer $AppId <p>APPID</p>
     * @param integer $OrderStatus <p>Order status. 0: Not purchased; 1: Normal; 2: Isolated; 3: Terminated; 6: In trial; 7: Expired</p>
     * @param integer $BucketNum <p>The number of purchased object storage entries</p>
     * @param integer $PayMode <p>Payment mode. 0: postpaid. 1: prepaid.</p>
     * @param integer $IsSelfBuy <p>Whether to purchase separately. 1: purchase separately; 2: shared by other accounts</p>
     * @param string $BeginTime <p>Order start time.</p>
     * @param string $EndTime <p>Order expiration time</p>
     * @param integer $AutoRenew <p>0: not set by the user, 1: set to auto-renew by the user, 2: set not to auto-renew by the user</p>
     * @param integer $TimeSpan <p>Order duration</p>
     * @param string $TimeUnit <p>Duration unit</p>
     * @param string $ResourceId <p>Resource id</p>
     * @param string $BetaEndTime <p>Open beta end time</p>
     * @param string $TimeNow <p>Current system time.</p>
     * @param integer $IsShareToOther <p>Whether to share with other accounts. 1: yes; 2: no</p>
     * @param string $Uin <p>uin</p>
     * @param string $NickName <p>Nickname</p>
     * @param array $BindBucket <p>Shared bucketIdSet</p>
     * @param array $SharedAppIdSet <p>Shared appid</p>
     * @param integer $PostPayStatus <p>Whether pay-as-you-go is enabled</p>
     * @param integer $IsTestUser <p>0: No trial use yet   1: Trial use completed</p>
     * @param integer $AvailableBucketNum <p>Remaining available quantity</p>
     * @param integer $MonitorBucketNum <p>Number of buckets with monitoring on</p>
     * @param integer $TotalBucketNum <p>Total number of buckets</p>
     * @param array $PostProductStatusList <p>Postpaid product switch state</p>
     * @param array $PostProductBuyStatusList <p>Purchase status of postpaid products.</p>
     * @param string $NewPostPayResourceId <p>New postpaid resource ID</p>
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

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("BucketNum",$param) and $param["BucketNum"] !== null) {
            $this->BucketNum = $param["BucketNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BetaEndTime",$param) and $param["BetaEndTime"] !== null) {
            $this->BetaEndTime = $param["BetaEndTime"];
        }

        if (array_key_exists("TimeNow",$param) and $param["TimeNow"] !== null) {
            $this->TimeNow = $param["TimeNow"];
        }

        if (array_key_exists("IsShareToOther",$param) and $param["IsShareToOther"] !== null) {
            $this->IsShareToOther = $param["IsShareToOther"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("BindBucket",$param) and $param["BindBucket"] !== null) {
            $this->BindBucket = [];
            foreach ($param["BindBucket"] as $key => $value){
                $obj = new CosBucketId();
                $obj->deserialize($value);
                array_push($this->BindBucket, $obj);
            }
        }

        if (array_key_exists("SharedAppIdSet",$param) and $param["SharedAppIdSet"] !== null) {
            $this->SharedAppIdSet = $param["SharedAppIdSet"];
        }

        if (array_key_exists("PostPayStatus",$param) and $param["PostPayStatus"] !== null) {
            $this->PostPayStatus = $param["PostPayStatus"];
        }

        if (array_key_exists("IsTestUser",$param) and $param["IsTestUser"] !== null) {
            $this->IsTestUser = $param["IsTestUser"];
        }

        if (array_key_exists("AvailableBucketNum",$param) and $param["AvailableBucketNum"] !== null) {
            $this->AvailableBucketNum = $param["AvailableBucketNum"];
        }

        if (array_key_exists("MonitorBucketNum",$param) and $param["MonitorBucketNum"] !== null) {
            $this->MonitorBucketNum = $param["MonitorBucketNum"];
        }

        if (array_key_exists("TotalBucketNum",$param) and $param["TotalBucketNum"] !== null) {
            $this->TotalBucketNum = $param["TotalBucketNum"];
        }

        if (array_key_exists("PostProductStatusList",$param) and $param["PostProductStatusList"] !== null) {
            $this->PostProductStatusList = $param["PostProductStatusList"];
        }

        if (array_key_exists("PostProductBuyStatusList",$param) and $param["PostProductBuyStatusList"] !== null) {
            $this->PostProductBuyStatusList = $param["PostProductBuyStatusList"];
        }

        if (array_key_exists("NewPostPayResourceId",$param) and $param["NewPostPayResourceId"] !== null) {
            $this->NewPostPayResourceId = $param["NewPostPayResourceId"];
        }
    }
}
