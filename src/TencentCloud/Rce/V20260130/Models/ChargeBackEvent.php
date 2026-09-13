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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChargeBack event details
 *
 * @method string getTransactionId() Obtain <p>The ID of the transaction</p>
 * @method void setTransactionId(string $TransactionId) Set <p>The ID of the transaction</p>
 * @method array getOrderId() Obtain <p>The ID(s) of the order associated with the transaction</p>
 * @method void setOrderId(array $OrderId) Set <p>The ID(s) of the order associated with the transaction</p>
 * @method string getChargeBackCode() Obtain <p>The code of the chargeback defined by the card organization, for example: 10.1, 13.1, 4870, 4871</p>
 * @method void setChargeBackCode(string $ChargeBackCode) Set <p>The code of the chargeback defined by the card organization, for example: 10.1, 13.1, 4870, 4871</p>
 * @method string getChargeBackReason() Obtain <p>The reason of the chargeback defined by the card organization, for example: non-receipt of goods, fraud</p>
 * @method void setChargeBackReason(string $ChargeBackReason) Set <p>The reason of the chargeback defined by the card organization, for example: non-receipt of goods, fraud</p>
 * @method string getChargeBackProcess() Obtain <p>The process of the chargeback defined by the card organization</p><p>Enumeration values:</p><ul><li>need_response: Merchant needs to respond</li><li>information_supplied: Merchant has provided information</li><li>chargeback_reversed: Chargeback has been canceled</li><li>chargeback_sustained: Chargeback has been established</li></ul>
 * @method void setChargeBackProcess(string $ChargeBackProcess) Set <p>The process of the chargeback defined by the card organization</p><p>Enumeration values:</p><ul><li>need_response: Merchant needs to respond</li><li>information_supplied: Merchant has provided information</li><li>chargeback_reversed: Chargeback has been canceled</li><li>chargeback_sustained: Chargeback has been established</li></ul>
 * @method Amount getChargeBackAmount() Obtain <p>The amount of the chargeback</p>
 * @method void setChargeBackAmount(Amount $ChargeBackAmount) Set <p>The amount of the chargeback</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class ChargeBackEvent extends AbstractModel
{
    /**
     * @var string <p>The ID of the transaction</p>
     */
    public $TransactionId;

    /**
     * @var array <p>The ID(s) of the order associated with the transaction</p>
     */
    public $OrderId;

    /**
     * @var string <p>The code of the chargeback defined by the card organization, for example: 10.1, 13.1, 4870, 4871</p>
     */
    public $ChargeBackCode;

    /**
     * @var string <p>The reason of the chargeback defined by the card organization, for example: non-receipt of goods, fraud</p>
     */
    public $ChargeBackReason;

    /**
     * @var string <p>The process of the chargeback defined by the card organization</p><p>Enumeration values:</p><ul><li>need_response: Merchant needs to respond</li><li>information_supplied: Merchant has provided information</li><li>chargeback_reversed: Chargeback has been canceled</li><li>chargeback_sustained: Chargeback has been established</li></ul>
     */
    public $ChargeBackProcess;

    /**
     * @var Amount <p>The amount of the chargeback</p>
     */
    public $ChargeBackAmount;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $TransactionId <p>The ID of the transaction</p>
     * @param array $OrderId <p>The ID(s) of the order associated with the transaction</p>
     * @param string $ChargeBackCode <p>The code of the chargeback defined by the card organization, for example: 10.1, 13.1, 4870, 4871</p>
     * @param string $ChargeBackReason <p>The reason of the chargeback defined by the card organization, for example: non-receipt of goods, fraud</p>
     * @param string $ChargeBackProcess <p>The process of the chargeback defined by the card organization</p><p>Enumeration values:</p><ul><li>need_response: Merchant needs to respond</li><li>information_supplied: Merchant has provided information</li><li>chargeback_reversed: Chargeback has been canceled</li><li>chargeback_sustained: Chargeback has been established</li></ul>
     * @param Amount $ChargeBackAmount <p>The amount of the chargeback</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ChargeBackCode",$param) and $param["ChargeBackCode"] !== null) {
            $this->ChargeBackCode = $param["ChargeBackCode"];
        }

        if (array_key_exists("ChargeBackReason",$param) and $param["ChargeBackReason"] !== null) {
            $this->ChargeBackReason = $param["ChargeBackReason"];
        }

        if (array_key_exists("ChargeBackProcess",$param) and $param["ChargeBackProcess"] !== null) {
            $this->ChargeBackProcess = $param["ChargeBackProcess"];
        }

        if (array_key_exists("ChargeBackAmount",$param) and $param["ChargeBackAmount"] !== null) {
            $this->ChargeBackAmount = new Amount();
            $this->ChargeBackAmount->deserialize($param["ChargeBackAmount"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
