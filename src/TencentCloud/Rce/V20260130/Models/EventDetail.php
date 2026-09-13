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
 * Event details
 *
 * @method LoginEvent getLogin() Obtain <p>Login</p>
 * @method void setLogin(LoginEvent $Login) Set <p>Login</p>
 * @method RegisterEvent getRegister() Obtain <p>Registration</p>
 * @method void setRegister(RegisterEvent $Register) Set <p>Registration</p>
 * @method CreateOrderEvent getCreateOrder() Obtain <p>Create an order</p>
 * @method void setCreateOrder(CreateOrderEvent $CreateOrder) Set <p>Create an order</p>
 * @method TransactionEvent getTransaction() Obtain <p>Transaction</p>
 * @method void setTransaction(TransactionEvent $Transaction) Set <p>Transaction</p>
 * @method SMSEvent getSms() Obtain <p>SMS</p>
 * @method void setSms(SMSEvent $Sms) Set <p>SMS</p>
 * @method ChargeBackEvent getChargeBack() Obtain <p>Chargeback</p>
 * @method void setChargeBack(ChargeBackEvent $ChargeBack) Set <p>Chargeback</p>
 * @method LogoutEvent getLogout() Obtain <p>Logout</p>
 * @method void setLogout(LogoutEvent $Logout) Set <p>Logout</p>
 * @method ModifyAccountEvent getModifyAccount() Obtain <p>Modify account</p>
 * @method void setModifyAccount(ModifyAccountEvent $ModifyAccount) Set <p>Modify account</p>
 * @method ModifyPasswordEvent getModifyPassword() Obtain <p>Modify password</p>
 * @method void setModifyPassword(ModifyPasswordEvent $ModifyPassword) Set <p>Modify password</p>
 * @method SecurityVerificationEvent getSecurityVerification() Obtain <p>Security verification</p>
 * @method void setSecurityVerification(SecurityVerificationEvent $SecurityVerification) Set <p>Security verification</p>
 * @method AddPromotionEvent getAddPromotion() Obtain <p>Participate in promotion activities</p>
 * @method void setAddPromotion(AddPromotionEvent $AddPromotion) Set <p>Participate in promotion activities</p>
 * @method RedeemEvent getRedeem() Obtain <p>Redeem a prize</p>
 * @method void setRedeem(RedeemEvent $Redeem) Set <p>Redeem a prize</p>
 * @method WithdrawEvent getWithdraw() Obtain <p>Withdrawal</p>
 * @method void setWithdraw(WithdrawEvent $Withdraw) Set <p>Withdrawal</p>
 * @method CustEvent getCustEvent() Obtain <p>Custom event</p>
 * @method void setCustEvent(CustEvent $CustEvent) Set <p>Custom event</p>
 * @method ScanCodeEvent getScanCode() Obtain <p>Scan the QR code</p>
 * @method void setScanCode(ScanCodeEvent $ScanCode) Set <p>Scan the QR code</p>
 * @method LuckyDrawEvent getLuckyDraw() Obtain <p>Lucky draw</p>
 * @method void setLuckyDraw(LuckyDrawEvent $LuckyDraw) Set <p>Lucky draw</p>
 * @method TaskEvent getTask() Obtain <p>Perform a task</p>
 * @method void setTask(TaskEvent $Task) Set <p>Perform a task</p>
 * @method InvitationEvent getInvitation() Obtain <p>Invitation</p>
 * @method void setInvitation(InvitationEvent $Invitation) Set <p>Invitation</p>
 * @method ClaimRedPacketEvent getClaimRedPacket() Obtain <p>Receive a red packet</p>
 * @method void setClaimRedPacket(ClaimRedPacketEvent $ClaimRedPacket) Set <p>Receive a red packet</p>
 * @method BrowseEvent getBrowse() Obtain <p>Browse</p>
 * @method void setBrowse(BrowseEvent $Browse) Set <p>Browse</p>
 */
class EventDetail extends AbstractModel
{
    /**
     * @var LoginEvent <p>Login</p>
     */
    public $Login;

    /**
     * @var RegisterEvent <p>Registration</p>
     */
    public $Register;

    /**
     * @var CreateOrderEvent <p>Create an order</p>
     */
    public $CreateOrder;

    /**
     * @var TransactionEvent <p>Transaction</p>
     */
    public $Transaction;

    /**
     * @var SMSEvent <p>SMS</p>
     */
    public $Sms;

    /**
     * @var ChargeBackEvent <p>Chargeback</p>
     */
    public $ChargeBack;

    /**
     * @var LogoutEvent <p>Logout</p>
     */
    public $Logout;

    /**
     * @var ModifyAccountEvent <p>Modify account</p>
     */
    public $ModifyAccount;

    /**
     * @var ModifyPasswordEvent <p>Modify password</p>
     */
    public $ModifyPassword;

    /**
     * @var SecurityVerificationEvent <p>Security verification</p>
     */
    public $SecurityVerification;

    /**
     * @var AddPromotionEvent <p>Participate in promotion activities</p>
     */
    public $AddPromotion;

    /**
     * @var RedeemEvent <p>Redeem a prize</p>
     */
    public $Redeem;

    /**
     * @var WithdrawEvent <p>Withdrawal</p>
     */
    public $Withdraw;

    /**
     * @var CustEvent <p>Custom event</p>
     */
    public $CustEvent;

    /**
     * @var ScanCodeEvent <p>Scan the QR code</p>
     */
    public $ScanCode;

    /**
     * @var LuckyDrawEvent <p>Lucky draw</p>
     */
    public $LuckyDraw;

    /**
     * @var TaskEvent <p>Perform a task</p>
     */
    public $Task;

    /**
     * @var InvitationEvent <p>Invitation</p>
     */
    public $Invitation;

    /**
     * @var ClaimRedPacketEvent <p>Receive a red packet</p>
     */
    public $ClaimRedPacket;

    /**
     * @var BrowseEvent <p>Browse</p>
     */
    public $Browse;

    /**
     * @param LoginEvent $Login <p>Login</p>
     * @param RegisterEvent $Register <p>Registration</p>
     * @param CreateOrderEvent $CreateOrder <p>Create an order</p>
     * @param TransactionEvent $Transaction <p>Transaction</p>
     * @param SMSEvent $Sms <p>SMS</p>
     * @param ChargeBackEvent $ChargeBack <p>Chargeback</p>
     * @param LogoutEvent $Logout <p>Logout</p>
     * @param ModifyAccountEvent $ModifyAccount <p>Modify account</p>
     * @param ModifyPasswordEvent $ModifyPassword <p>Modify password</p>
     * @param SecurityVerificationEvent $SecurityVerification <p>Security verification</p>
     * @param AddPromotionEvent $AddPromotion <p>Participate in promotion activities</p>
     * @param RedeemEvent $Redeem <p>Redeem a prize</p>
     * @param WithdrawEvent $Withdraw <p>Withdrawal</p>
     * @param CustEvent $CustEvent <p>Custom event</p>
     * @param ScanCodeEvent $ScanCode <p>Scan the QR code</p>
     * @param LuckyDrawEvent $LuckyDraw <p>Lucky draw</p>
     * @param TaskEvent $Task <p>Perform a task</p>
     * @param InvitationEvent $Invitation <p>Invitation</p>
     * @param ClaimRedPacketEvent $ClaimRedPacket <p>Receive a red packet</p>
     * @param BrowseEvent $Browse <p>Browse</p>
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
        if (array_key_exists("Login",$param) and $param["Login"] !== null) {
            $this->Login = new LoginEvent();
            $this->Login->deserialize($param["Login"]);
        }

        if (array_key_exists("Register",$param) and $param["Register"] !== null) {
            $this->Register = new RegisterEvent();
            $this->Register->deserialize($param["Register"]);
        }

        if (array_key_exists("CreateOrder",$param) and $param["CreateOrder"] !== null) {
            $this->CreateOrder = new CreateOrderEvent();
            $this->CreateOrder->deserialize($param["CreateOrder"]);
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = new TransactionEvent();
            $this->Transaction->deserialize($param["Transaction"]);
        }

        if (array_key_exists("Sms",$param) and $param["Sms"] !== null) {
            $this->Sms = new SMSEvent();
            $this->Sms->deserialize($param["Sms"]);
        }

        if (array_key_exists("ChargeBack",$param) and $param["ChargeBack"] !== null) {
            $this->ChargeBack = new ChargeBackEvent();
            $this->ChargeBack->deserialize($param["ChargeBack"]);
        }

        if (array_key_exists("Logout",$param) and $param["Logout"] !== null) {
            $this->Logout = new LogoutEvent();
            $this->Logout->deserialize($param["Logout"]);
        }

        if (array_key_exists("ModifyAccount",$param) and $param["ModifyAccount"] !== null) {
            $this->ModifyAccount = new ModifyAccountEvent();
            $this->ModifyAccount->deserialize($param["ModifyAccount"]);
        }

        if (array_key_exists("ModifyPassword",$param) and $param["ModifyPassword"] !== null) {
            $this->ModifyPassword = new ModifyPasswordEvent();
            $this->ModifyPassword->deserialize($param["ModifyPassword"]);
        }

        if (array_key_exists("SecurityVerification",$param) and $param["SecurityVerification"] !== null) {
            $this->SecurityVerification = new SecurityVerificationEvent();
            $this->SecurityVerification->deserialize($param["SecurityVerification"]);
        }

        if (array_key_exists("AddPromotion",$param) and $param["AddPromotion"] !== null) {
            $this->AddPromotion = new AddPromotionEvent();
            $this->AddPromotion->deserialize($param["AddPromotion"]);
        }

        if (array_key_exists("Redeem",$param) and $param["Redeem"] !== null) {
            $this->Redeem = new RedeemEvent();
            $this->Redeem->deserialize($param["Redeem"]);
        }

        if (array_key_exists("Withdraw",$param) and $param["Withdraw"] !== null) {
            $this->Withdraw = new WithdrawEvent();
            $this->Withdraw->deserialize($param["Withdraw"]);
        }

        if (array_key_exists("CustEvent",$param) and $param["CustEvent"] !== null) {
            $this->CustEvent = new CustEvent();
            $this->CustEvent->deserialize($param["CustEvent"]);
        }

        if (array_key_exists("ScanCode",$param) and $param["ScanCode"] !== null) {
            $this->ScanCode = new ScanCodeEvent();
            $this->ScanCode->deserialize($param["ScanCode"]);
        }

        if (array_key_exists("LuckyDraw",$param) and $param["LuckyDraw"] !== null) {
            $this->LuckyDraw = new LuckyDrawEvent();
            $this->LuckyDraw->deserialize($param["LuckyDraw"]);
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new TaskEvent();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("Invitation",$param) and $param["Invitation"] !== null) {
            $this->Invitation = new InvitationEvent();
            $this->Invitation->deserialize($param["Invitation"]);
        }

        if (array_key_exists("ClaimRedPacket",$param) and $param["ClaimRedPacket"] !== null) {
            $this->ClaimRedPacket = new ClaimRedPacketEvent();
            $this->ClaimRedPacket->deserialize($param["ClaimRedPacket"]);
        }

        if (array_key_exists("Browse",$param) and $param["Browse"] !== null) {
            $this->Browse = new BrowseEvent();
            $this->Browse->deserialize($param["Browse"]);
        }
    }
}
