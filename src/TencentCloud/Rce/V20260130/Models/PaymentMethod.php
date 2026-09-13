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
 * Payment method
 *
 * @method string getPaymentType() Obtain <p>Payment method</p><p>Enumeration value:</p><ul><li>cash</li><li>check</li><li>credit_card</li><li>debit_card</li><li>crypto_currency</li><li>digital_wallet</li><li>gift_card</li><li>points</li><li>in_app_purchase</li><li>electronic_fund_transfer</li><li>financing</li><li>invoice</li><li>prepaid_card</li><li>sepa_credit</li></ul>
 * @method void setPaymentType(string $PaymentType) Set <p>Payment method</p><p>Enumeration value:</p><ul><li>cash</li><li>check</li><li>credit_card</li><li>debit_card</li><li>crypto_currency</li><li>digital_wallet</li><li>gift_card</li><li>points</li><li>in_app_purchase</li><li>electronic_fund_transfer</li><li>financing</li><li>invoice</li><li>prepaid_card</li><li>sepa_credit</li></ul>
 * @method string getPaymentChannel() Obtain <p>The channel of the payment</p>
 * @method void setPaymentChannel(string $PaymentChannel) Set <p>The channel of the payment</p>
 * @method Card getCard() Obtain <p>The details of the card.Required while PaymentMethod is "credit_card","debit_card"</p>
 * @method void setCard(Card $Card) Set <p>The details of the card.Required while PaymentMethod is "credit_card","debit_card"</p>
 * @method boolean getSEPADirectDebitMandate() Obtain <p>SEPA direct debit mandate</p><p>Enumeration value:</p><ul><li>true: Yes</li><li>false: No</li></ul>
 * @method void setSEPADirectDebitMandate(boolean $SEPADirectDebitMandate) Set <p>SEPA direct debit mandate</p><p>Enumeration value:</p><ul><li>true: Yes</li><li>false: No</li></ul>
 * @method Wallet getDigitalWallet() Obtain <p>The details of the digital wallet when involved digital trade</p>
 * @method void setDigitalWallet(Wallet $DigitalWallet) Set <p>The details of the digital wallet when involved digital trade</p>
 */
class PaymentMethod extends AbstractModel
{
    /**
     * @var string <p>Payment method</p><p>Enumeration value:</p><ul><li>cash</li><li>check</li><li>credit_card</li><li>debit_card</li><li>crypto_currency</li><li>digital_wallet</li><li>gift_card</li><li>points</li><li>in_app_purchase</li><li>electronic_fund_transfer</li><li>financing</li><li>invoice</li><li>prepaid_card</li><li>sepa_credit</li></ul>
     */
    public $PaymentType;

    /**
     * @var string <p>The channel of the payment</p>
     */
    public $PaymentChannel;

    /**
     * @var Card <p>The details of the card.Required while PaymentMethod is "credit_card","debit_card"</p>
     */
    public $Card;

    /**
     * @var boolean <p>SEPA direct debit mandate</p><p>Enumeration value:</p><ul><li>true: Yes</li><li>false: No</li></ul>
     */
    public $SEPADirectDebitMandate;

    /**
     * @var Wallet <p>The details of the digital wallet when involved digital trade</p>
     */
    public $DigitalWallet;

    /**
     * @param string $PaymentType <p>Payment method</p><p>Enumeration value:</p><ul><li>cash</li><li>check</li><li>credit_card</li><li>debit_card</li><li>crypto_currency</li><li>digital_wallet</li><li>gift_card</li><li>points</li><li>in_app_purchase</li><li>electronic_fund_transfer</li><li>financing</li><li>invoice</li><li>prepaid_card</li><li>sepa_credit</li></ul>
     * @param string $PaymentChannel <p>The channel of the payment</p>
     * @param Card $Card <p>The details of the card.Required while PaymentMethod is "credit_card","debit_card"</p>
     * @param boolean $SEPADirectDebitMandate <p>SEPA direct debit mandate</p><p>Enumeration value:</p><ul><li>true: Yes</li><li>false: No</li></ul>
     * @param Wallet $DigitalWallet <p>The details of the digital wallet when involved digital trade</p>
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
        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("PaymentChannel",$param) and $param["PaymentChannel"] !== null) {
            $this->PaymentChannel = $param["PaymentChannel"];
        }

        if (array_key_exists("Card",$param) and $param["Card"] !== null) {
            $this->Card = new Card();
            $this->Card->deserialize($param["Card"]);
        }

        if (array_key_exists("SEPADirectDebitMandate",$param) and $param["SEPADirectDebitMandate"] !== null) {
            $this->SEPADirectDebitMandate = $param["SEPADirectDebitMandate"];
        }

        if (array_key_exists("DigitalWallet",$param) and $param["DigitalWallet"] !== null) {
            $this->DigitalWallet = new Wallet();
            $this->DigitalWallet->deserialize($param["DigitalWallet"]);
        }
    }
}
