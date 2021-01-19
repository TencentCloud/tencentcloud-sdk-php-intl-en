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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics structure.
 *
 * @method string getSendDate() Obtain Date
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSendDate(string $SendDate) Set Date
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRequestCount() Obtain Number of email requests.
 * @method void setRequestCount(integer $RequestCount) Set Number of email requests.
 * @method integer getAcceptedCount() Obtain Number of email requests accepted by Tencent Cloud.
 * @method void setAcceptedCount(integer $AcceptedCount) Set Number of email requests accepted by Tencent Cloud.
 * @method integer getDeliveredCount() Obtain Number of delivered emails.
 * @method void setDeliveredCount(integer $DeliveredCount) Set Number of delivered emails.
 * @method integer getOpenedCount() Obtain Number of users (deduplicated) who opened emails.
 * @method void setOpenedCount(integer $OpenedCount) Set Number of users (deduplicated) who opened emails.
 * @method integer getClickedCount() Obtain Number of recipients who clicked on links in emails.
 * @method void setClickedCount(integer $ClickedCount) Set Number of recipients who clicked on links in emails.
 * @method integer getBounceCount() Obtain Number of bounced emails.
 * @method void setBounceCount(integer $BounceCount) Set Number of bounced emails.
 * @method integer getUnsubscribeCount() Obtain Number of users who canceled subscriptions.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnsubscribeCount(integer $UnsubscribeCount) Set Number of users who canceled subscriptions.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class Volume extends AbstractModel
{
    /**
     * @var string Date
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SendDate;

    /**
     * @var integer Number of email requests.
     */
    public $RequestCount;

    /**
     * @var integer Number of email requests accepted by Tencent Cloud.
     */
    public $AcceptedCount;

    /**
     * @var integer Number of delivered emails.
     */
    public $DeliveredCount;

    /**
     * @var integer Number of users (deduplicated) who opened emails.
     */
    public $OpenedCount;

    /**
     * @var integer Number of recipients who clicked on links in emails.
     */
    public $ClickedCount;

    /**
     * @var integer Number of bounced emails.
     */
    public $BounceCount;

    /**
     * @var integer Number of users who canceled subscriptions.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnsubscribeCount;

    /**
     * @param string $SendDate Date
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RequestCount Number of email requests.
     * @param integer $AcceptedCount Number of email requests accepted by Tencent Cloud.
     * @param integer $DeliveredCount Number of delivered emails.
     * @param integer $OpenedCount Number of users (deduplicated) who opened emails.
     * @param integer $ClickedCount Number of recipients who clicked on links in emails.
     * @param integer $BounceCount Number of bounced emails.
     * @param integer $UnsubscribeCount Number of users who canceled subscriptions.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SendDate",$param) and $param["SendDate"] !== null) {
            $this->SendDate = $param["SendDate"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("AcceptedCount",$param) and $param["AcceptedCount"] !== null) {
            $this->AcceptedCount = $param["AcceptedCount"];
        }

        if (array_key_exists("DeliveredCount",$param) and $param["DeliveredCount"] !== null) {
            $this->DeliveredCount = $param["DeliveredCount"];
        }

        if (array_key_exists("OpenedCount",$param) and $param["OpenedCount"] !== null) {
            $this->OpenedCount = $param["OpenedCount"];
        }

        if (array_key_exists("ClickedCount",$param) and $param["ClickedCount"] !== null) {
            $this->ClickedCount = $param["ClickedCount"];
        }

        if (array_key_exists("BounceCount",$param) and $param["BounceCount"] !== null) {
            $this->BounceCount = $param["BounceCount"];
        }

        if (array_key_exists("UnsubscribeCount",$param) and $param["UnsubscribeCount"] !== null) {
            $this->UnsubscribeCount = $param["UnsubscribeCount"];
        }
    }
}
