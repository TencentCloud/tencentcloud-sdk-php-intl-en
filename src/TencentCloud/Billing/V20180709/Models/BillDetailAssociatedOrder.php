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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the document associated with bill details
 *
 * @method string getPrepayPurchase() Obtain Purchase order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepayPurchase(string $PrepayPurchase) Set Purchase order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrepayRenew() Obtain Renewal order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepayRenew(string $PrepayRenew) Set Renewal order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrepayModifyUp() Obtain Upgrade order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepayModifyUp(string $PrepayModifyUp) Set Upgrade order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReverseOrder() Obtain Write-off order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReverseOrder(string $ReverseOrder) Set Write-off order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewOrder() Obtain The order after discount.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewOrder(string $NewOrder) Set The order after discount.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginal() Obtain The original order before discount.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginal(string $Original) Set The original order before discount.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BillDetailAssociatedOrder extends AbstractModel
{
    /**
     * @var string Purchase order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepayPurchase;

    /**
     * @var string Renewal order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepayRenew;

    /**
     * @var string Upgrade order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepayModifyUp;

    /**
     * @var string Write-off order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReverseOrder;

    /**
     * @var string The order after discount.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewOrder;

    /**
     * @var string The original order before discount.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Original;

    /**
     * @param string $PrepayPurchase Purchase order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrepayRenew Renewal order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrepayModifyUp Upgrade order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReverseOrder Write-off order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewOrder The order after discount.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Original The original order before discount.
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
        if (array_key_exists("PrepayPurchase",$param) and $param["PrepayPurchase"] !== null) {
            $this->PrepayPurchase = $param["PrepayPurchase"];
        }

        if (array_key_exists("PrepayRenew",$param) and $param["PrepayRenew"] !== null) {
            $this->PrepayRenew = $param["PrepayRenew"];
        }

        if (array_key_exists("PrepayModifyUp",$param) and $param["PrepayModifyUp"] !== null) {
            $this->PrepayModifyUp = $param["PrepayModifyUp"];
        }

        if (array_key_exists("ReverseOrder",$param) and $param["ReverseOrder"] !== null) {
            $this->ReverseOrder = $param["ReverseOrder"];
        }

        if (array_key_exists("NewOrder",$param) and $param["NewOrder"] !== null) {
            $this->NewOrder = $param["NewOrder"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
