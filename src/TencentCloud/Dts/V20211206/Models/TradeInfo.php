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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing status information
 *
 * @method string getDealName() Obtain Order number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealName(string $DealName) Set Order number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastDealName() Obtain Last order number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastDealName(string $LastDealName) Set Last order number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceClass() Obtain Instance specification. Valid values: `micro`, `small`, `medium`, `large`, `xlarge`, `2xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceClass(string $InstanceClass) Set Instance specification. Valid values: `micro`, `small`, `medium`, `large`, `xlarge`, `2xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTradeStatus() Obtain Task billing status. Valid values: `normal` (billed or to be billed); `resizing` (adjusting configuration); `reversing` (topping up, which is a short status); `isolating` (isolating, which is a short status); `isolated` (isolated); `offlining` (deleting); `offlined` (deleted); `notBilled` (not billed).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTradeStatus(string $TradeStatus) Set Task billing status. Valid values: `normal` (billed or to be billed); `resizing` (adjusting configuration); `reversing` (topping up, which is a short status); `isolating` (isolating, which is a short status); `isolated` (isolated); `offlining` (deleting); `offlined` (deleted); `notBilled` (not billed).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineTime() Obtain Deletion time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Deletion time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolateTime() Obtain Isolation time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineReason() Obtain The cause of deletion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineReason(string $OfflineReason) Set The cause of deletion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolateReason() Obtain The cause of isolation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateReason(string $IsolateReason) Set The cause of isolation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayType() Obtain Billing mode. Valid values: `postpay` (postpaid); `prepay` (prepaid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayType(string $PayType) Set Billing mode. Valid values: `postpay` (postpaid); `prepay` (prepaid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingType() Obtain Task billing type. Valid values: `billing` (billed); `notBilling` (free); `promotions` (in promotion).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingType(string $BillingType) Set Task billing type. Valid values: `billing` (billed); `notBilling` (free); `promotions` (in promotion).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TradeInfo extends AbstractModel
{
    /**
     * @var string Order number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealName;

    /**
     * @var string Last order number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastDealName;

    /**
     * @var string Instance specification. Valid values: `micro`, `small`, `medium`, `large`, `xlarge`, `2xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceClass;

    /**
     * @var string Task billing status. Valid values: `normal` (billed or to be billed); `resizing` (adjusting configuration); `reversing` (topping up, which is a short status); `isolating` (isolating, which is a short status); `isolated` (isolated); `offlining` (deleting); `offlined` (deleted); `notBilled` (not billed).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TradeStatus;

    /**
     * @var string Expiration time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Deletion time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineTime;

    /**
     * @var string Isolation time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateTime;

    /**
     * @var string The cause of deletion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineReason;

    /**
     * @var string The cause of isolation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateReason;

    /**
     * @var string Billing mode. Valid values: `postpay` (postpaid); `prepay` (prepaid).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayType;

    /**
     * @var string Task billing type. Valid values: `billing` (billed); `notBilling` (free); `promotions` (in promotion).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingType;

    /**
     * @param string $DealName Order number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastDealName Last order number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceClass Instance specification. Valid values: `micro`, `small`, `medium`, `large`, `xlarge`, `2xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TradeStatus Task billing status. Valid values: `normal` (billed or to be billed); `resizing` (adjusting configuration); `reversing` (topping up, which is a short status); `isolating` (isolating, which is a short status); `isolated` (isolated); `offlining` (deleting); `offlined` (deleted); `notBilled` (not billed).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineTime Deletion time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolateTime Isolation time in the format of "yyyy-mm-dd hh:mm:ss"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineReason The cause of deletion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolateReason The cause of isolation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayType Billing mode. Valid values: `postpay` (postpaid); `prepay` (prepaid).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingType Task billing type. Valid values: `billing` (billed); `notBilling` (free); `promotions` (in promotion).
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("LastDealName",$param) and $param["LastDealName"] !== null) {
            $this->LastDealName = $param["LastDealName"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("OfflineReason",$param) and $param["OfflineReason"] !== null) {
            $this->OfflineReason = $param["OfflineReason"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
