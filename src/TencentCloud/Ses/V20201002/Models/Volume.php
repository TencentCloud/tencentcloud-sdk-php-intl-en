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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics structure.
 *
 * @method string getSendDate() Obtain <p>Date</p>
 * @method void setSendDate(string $SendDate) Set <p>Date</p>
 * @method integer getRequestCount() Obtain <p>Request quantity by email</p>
 * @method void setRequestCount(integer $RequestCount) Set <p>Request quantity by email</p>
 * @method integer getAcceptedCount() Obtain <p>Tencent Cloud pass count</p>
 * @method void setAcceptedCount(integer $AcceptedCount) Set <p>Tencent Cloud pass count</p>
 * @method integer getDeliveredCount() Obtain <p>Delivery quantity</p>
 * @method void setDeliveredCount(integer $DeliveredCount) Set <p>Delivery quantity</p>
 * @method integer getOpenedCount() Obtain <p>Total number of times emails were opened</p>
 * @method void setOpenedCount(integer $OpenedCount) Set <p>Total number of times emails were opened</p>
 * @method integer getClickedCount() Obtain <p>Number of users who clicked the link in the mail</p>
 * @method void setClickedCount(integer $ClickedCount) Set <p>Number of users who clicked the link in the mail</p>
 * @method integer getBounceCount() Obtain <p>Bounced count</p>
 * @method void setBounceCount(integer $BounceCount) Set <p>Bounced count</p>
 * @method integer getUnsubscribeCount() Obtain <p>Number of users for unsubscription</p>
 * @method void setUnsubscribeCount(integer $UnsubscribeCount) Set <p>Number of users for unsubscription</p>
 */
class Volume extends AbstractModel
{
    /**
     * @var string <p>Date</p>
     */
    public $SendDate;

    /**
     * @var integer <p>Request quantity by email</p>
     */
    public $RequestCount;

    /**
     * @var integer <p>Tencent Cloud pass count</p>
     */
    public $AcceptedCount;

    /**
     * @var integer <p>Delivery quantity</p>
     */
    public $DeliveredCount;

    /**
     * @var integer <p>Total number of times emails were opened</p>
     */
    public $OpenedCount;

    /**
     * @var integer <p>Number of users who clicked the link in the mail</p>
     */
    public $ClickedCount;

    /**
     * @var integer <p>Bounced count</p>
     */
    public $BounceCount;

    /**
     * @var integer <p>Number of users for unsubscription</p>
     */
    public $UnsubscribeCount;

    /**
     * @param string $SendDate <p>Date</p>
     * @param integer $RequestCount <p>Request quantity by email</p>
     * @param integer $AcceptedCount <p>Tencent Cloud pass count</p>
     * @param integer $DeliveredCount <p>Delivery quantity</p>
     * @param integer $OpenedCount <p>Total number of times emails were opened</p>
     * @param integer $ClickedCount <p>Number of users who clicked the link in the mail</p>
     * @param integer $BounceCount <p>Bounced count</p>
     * @param integer $UnsubscribeCount <p>Number of users for unsubscription</p>
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
