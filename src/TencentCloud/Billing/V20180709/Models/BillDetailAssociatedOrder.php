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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the document associated with bill details
 *
 * @method string getPrepayPurchase() Obtain Newly purchased order
 * @method void setPrepayPurchase(string $PrepayPurchase) Set Newly purchased order
 * @method string getPrepayRenew() Obtain Renewal order
 * @method void setPrepayRenew(string $PrepayRenew) Set Renewal order
 * @method string getPrepayModifyUp() Obtain Configuration upgrade order
 * @method void setPrepayModifyUp(string $PrepayModifyUp) Set Configuration upgrade order
 * @method string getReverseOrder() Obtain Write-off order
 * @method void setReverseOrder(string $ReverseOrder) Set Write-off order
 * @method string getNewOrder() Obtain Order after discount adjustment
 * @method void setNewOrder(string $NewOrder) Set Order after discount adjustment
 * @method string getOriginal() Obtain Order before discount adjustment
 * @method void setOriginal(string $Original) Set Order before discount adjustment
 */
class BillDetailAssociatedOrder extends AbstractModel
{
    /**
     * @var string Newly purchased order
     */
    public $PrepayPurchase;

    /**
     * @var string Renewal order
     */
    public $PrepayRenew;

    /**
     * @var string Configuration upgrade order
     */
    public $PrepayModifyUp;

    /**
     * @var string Write-off order
     */
    public $ReverseOrder;

    /**
     * @var string Order after discount adjustment
     */
    public $NewOrder;

    /**
     * @var string Order before discount adjustment
     */
    public $Original;

    /**
     * @param string $PrepayPurchase Newly purchased order
     * @param string $PrepayRenew Renewal order
     * @param string $PrepayModifyUp Configuration upgrade order
     * @param string $ReverseOrder Write-off order
     * @param string $NewOrder Order after discount adjustment
     * @param string $Original Order before discount adjustment
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
