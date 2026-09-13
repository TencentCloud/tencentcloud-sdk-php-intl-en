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
 * Transaction event details
 *
 * @method string getTransactionId() Obtain <p>The unique ID of the transaction</p>
 * @method void setTransactionId(string $TransactionId) Set <p>The unique ID of the transaction</p>
 * @method array getOrderId() Obtain <p>The ID(s) of the order associated with the transaction</p>
 * @method void setOrderId(array $OrderId) Set <p>The ID(s) of the order associated with the transaction</p>
 * @method Amount getPaymentAmount() Obtain <p>The amount of the transaction</p>
 * @method void setPaymentAmount(Amount $PaymentAmount) Set <p>The amount of the transaction</p>
 * @method PaymentMethod getPaymentMethod() Obtain <p>The detail information of the payment method associated with the transaction</p>
 * @method void setPaymentMethod(PaymentMethod $PaymentMethod) Set <p>The detail information of the payment method associated with the transaction</p>
 * @method string getTransactionType() Obtain <p>Transaction type</p><p>Enumeration value:</p><ul><li>sale: One-time authorization and deduction (most common)</li><li>authorize: Authorization only (frozen amount)</li><li>capture: Execute deduction (after authorization)</li><li>void: Cancel pending authorization or deduction</li><li>refund: Refund (part or all)</li><li>deposit: Deposit to account</li><li>withdrawal: Withdrawal from account</li><li>transfer: Fund transfer between accounts</li><li>buy: Purchase asset (for example, crypto currency)</li><li>sell: Sell asset</li><li>send: Send fund/asset (for example, cross-wallet transfer)</li><li>receive: Receive fund/asset</li></ul><p>Default value: sale</p>
 * @method void setTransactionType(string $TransactionType) Set <p>Transaction type</p><p>Enumeration value:</p><ul><li>sale: One-time authorization and deduction (most common)</li><li>authorize: Authorization only (frozen amount)</li><li>capture: Execute deduction (after authorization)</li><li>void: Cancel pending authorization or deduction</li><li>refund: Refund (part or all)</li><li>deposit: Deposit to account</li><li>withdrawal: Withdrawal from account</li><li>transfer: Fund transfer between accounts</li><li>buy: Purchase asset (for example, crypto currency)</li><li>sell: Sell asset</li><li>send: Send fund/asset (for example, cross-wallet transfer)</li><li>receive: Receive fund/asset</li></ul><p>Default value: sale</p>
 * @method Billing getBilling() Obtain <p>Bill information</p>
 * @method void setBilling(Billing $Billing) Set <p>Bill information</p>
 * @method Delivery getDelivery() Obtain <p>Delivery information</p>
 * @method void setDelivery(Delivery $Delivery) Set <p>Delivery information</p>
 * @method Merchant getMerchant() Obtain <p>Merchant information</p>
 * @method void setMerchant(Merchant $Merchant) Set <p>Merchant information</p>
 * @method PaymentResult getPaymentResult() Obtain <p>Payment result</p>
 * @method void setPaymentResult(PaymentResult $PaymentResult) Set <p>Payment result</p>
 * @method string getTransferRecipientUserId() Obtain <p>The ID of the recipent in transfer transaction</p>
 * @method void setTransferRecipientUserId(string $TransferRecipientUserId) Set <p>The ID of the recipent in transfer transaction</p>
 * @method Address getTransferSentAddress() Obtain <p>The address of the sender in transfer transaction</p>
 * @method void setTransferSentAddress(Address $TransferSentAddress) Set <p>The address of the sender in transfer transaction</p>
 * @method Address getTransferReceivedAddress() Obtain <p>Physical address of the recipient, applicable to the transfer transaction type.</p>
 * @method void setTransferReceivedAddress(Address $TransferReceivedAddress) Set <p>Physical address of the recipient, applicable to the transfer transaction type.</p>
 * @method array getDigitalOrders() Obtain <p>The digital order(s) associated with the transaction</p>
 * @method void setDigitalOrders(array $DigitalOrders) Set <p>The digital order(s) associated with the transaction</p>
 * @method Wallet getReceiverWallet() Obtain <p>Wallet to receive crypto currency</p>
 * @method void setReceiverWallet(Wallet $ReceiverWallet) Set <p>Wallet to receive crypto currency</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class TransactionEvent extends AbstractModel
{
    /**
     * @var string <p>The unique ID of the transaction</p>
     */
    public $TransactionId;

    /**
     * @var array <p>The ID(s) of the order associated with the transaction</p>
     */
    public $OrderId;

    /**
     * @var Amount <p>The amount of the transaction</p>
     */
    public $PaymentAmount;

    /**
     * @var PaymentMethod <p>The detail information of the payment method associated with the transaction</p>
     */
    public $PaymentMethod;

    /**
     * @var string <p>Transaction type</p><p>Enumeration value:</p><ul><li>sale: One-time authorization and deduction (most common)</li><li>authorize: Authorization only (frozen amount)</li><li>capture: Execute deduction (after authorization)</li><li>void: Cancel pending authorization or deduction</li><li>refund: Refund (part or all)</li><li>deposit: Deposit to account</li><li>withdrawal: Withdrawal from account</li><li>transfer: Fund transfer between accounts</li><li>buy: Purchase asset (for example, crypto currency)</li><li>sell: Sell asset</li><li>send: Send fund/asset (for example, cross-wallet transfer)</li><li>receive: Receive fund/asset</li></ul><p>Default value: sale</p>
     */
    public $TransactionType;

    /**
     * @var Billing <p>Bill information</p>
     */
    public $Billing;

    /**
     * @var Delivery <p>Delivery information</p>
     */
    public $Delivery;

    /**
     * @var Merchant <p>Merchant information</p>
     */
    public $Merchant;

    /**
     * @var PaymentResult <p>Payment result</p>
     */
    public $PaymentResult;

    /**
     * @var string <p>The ID of the recipent in transfer transaction</p>
     */
    public $TransferRecipientUserId;

    /**
     * @var Address <p>The address of the sender in transfer transaction</p>
     */
    public $TransferSentAddress;

    /**
     * @var Address <p>Physical address of the recipient, applicable to the transfer transaction type.</p>
     */
    public $TransferReceivedAddress;

    /**
     * @var array <p>The digital order(s) associated with the transaction</p>
     */
    public $DigitalOrders;

    /**
     * @var Wallet <p>Wallet to receive crypto currency</p>
     */
    public $ReceiverWallet;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $TransactionId <p>The unique ID of the transaction</p>
     * @param array $OrderId <p>The ID(s) of the order associated with the transaction</p>
     * @param Amount $PaymentAmount <p>The amount of the transaction</p>
     * @param PaymentMethod $PaymentMethod <p>The detail information of the payment method associated with the transaction</p>
     * @param string $TransactionType <p>Transaction type</p><p>Enumeration value:</p><ul><li>sale: One-time authorization and deduction (most common)</li><li>authorize: Authorization only (frozen amount)</li><li>capture: Execute deduction (after authorization)</li><li>void: Cancel pending authorization or deduction</li><li>refund: Refund (part or all)</li><li>deposit: Deposit to account</li><li>withdrawal: Withdrawal from account</li><li>transfer: Fund transfer between accounts</li><li>buy: Purchase asset (for example, crypto currency)</li><li>sell: Sell asset</li><li>send: Send fund/asset (for example, cross-wallet transfer)</li><li>receive: Receive fund/asset</li></ul><p>Default value: sale</p>
     * @param Billing $Billing <p>Bill information</p>
     * @param Delivery $Delivery <p>Delivery information</p>
     * @param Merchant $Merchant <p>Merchant information</p>
     * @param PaymentResult $PaymentResult <p>Payment result</p>
     * @param string $TransferRecipientUserId <p>The ID of the recipent in transfer transaction</p>
     * @param Address $TransferSentAddress <p>The address of the sender in transfer transaction</p>
     * @param Address $TransferReceivedAddress <p>Physical address of the recipient, applicable to the transfer transaction type.</p>
     * @param array $DigitalOrders <p>The digital order(s) associated with the transaction</p>
     * @param Wallet $ReceiverWallet <p>Wallet to receive crypto currency</p>
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

        if (array_key_exists("PaymentAmount",$param) and $param["PaymentAmount"] !== null) {
            $this->PaymentAmount = new Amount();
            $this->PaymentAmount->deserialize($param["PaymentAmount"]);
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = new PaymentMethod();
            $this->PaymentMethod->deserialize($param["PaymentMethod"]);
        }

        if (array_key_exists("TransactionType",$param) and $param["TransactionType"] !== null) {
            $this->TransactionType = $param["TransactionType"];
        }

        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new Billing();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("Delivery",$param) and $param["Delivery"] !== null) {
            $this->Delivery = new Delivery();
            $this->Delivery->deserialize($param["Delivery"]);
        }

        if (array_key_exists("Merchant",$param) and $param["Merchant"] !== null) {
            $this->Merchant = new Merchant();
            $this->Merchant->deserialize($param["Merchant"]);
        }

        if (array_key_exists("PaymentResult",$param) and $param["PaymentResult"] !== null) {
            $this->PaymentResult = new PaymentResult();
            $this->PaymentResult->deserialize($param["PaymentResult"]);
        }

        if (array_key_exists("TransferRecipientUserId",$param) and $param["TransferRecipientUserId"] !== null) {
            $this->TransferRecipientUserId = $param["TransferRecipientUserId"];
        }

        if (array_key_exists("TransferSentAddress",$param) and $param["TransferSentAddress"] !== null) {
            $this->TransferSentAddress = new Address();
            $this->TransferSentAddress->deserialize($param["TransferSentAddress"]);
        }

        if (array_key_exists("TransferReceivedAddress",$param) and $param["TransferReceivedAddress"] !== null) {
            $this->TransferReceivedAddress = new Address();
            $this->TransferReceivedAddress->deserialize($param["TransferReceivedAddress"]);
        }

        if (array_key_exists("DigitalOrders",$param) and $param["DigitalOrders"] !== null) {
            $this->DigitalOrders = [];
            foreach ($param["DigitalOrders"] as $key => $value){
                $obj = new DigitalOrder();
                $obj->deserialize($value);
                array_push($this->DigitalOrders, $obj);
            }
        }

        if (array_key_exists("ReceiverWallet",$param) and $param["ReceiverWallet"] !== null) {
            $this->ReceiverWallet = new Wallet();
            $this->ReceiverWallet->deserialize($param["ReceiverWallet"]);
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
