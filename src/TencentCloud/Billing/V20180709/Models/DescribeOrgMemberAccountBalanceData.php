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
 * DescribeOrgMemberAccountBalanceData
 *
 * @method string getMemberUin() Obtain <p>Member account Uin</p>
 * @method void setMemberUin(string $MemberUin) Set <p>Member account Uin</p>
 * @method string getMemberName() Obtain <p>Member name</p>
 * @method void setMemberName(string $MemberName) Set <p>Member name</p>
 * @method boolean getIsCreditAccount() Obtain <p>Whether it is a credit account</p>
 * @method void setIsCreditAccount(boolean $IsCreditAccount) Set <p>Whether it is a credit account</p>
 * @method float getRealBalance() Obtain <p>Current actual available balance</p><p>Unit: cent</p>
 * @method void setRealBalance(float $RealBalance) Set <p>Current actual available balance</p><p>Unit: cent</p>
 * @method float getCashAccountBalance() Obtain <p>Cash account balance</p><p>Unit: cent</p>
 * @method void setCashAccountBalance(float $CashAccountBalance) Set <p>Cash account balance</p><p>Unit: cent</p>
 * @method float getCreditAmount() Obtain <p>Credit limit</p><p>Unit: cent</p><p>Credit limit = Basic credit limit + Temporary credit limit</p>
 * @method void setCreditAmount(float $CreditAmount) Set <p>Credit limit</p><p>Unit: cent</p><p>Credit limit = Basic credit limit + Temporary credit limit</p>
 * @method float getTempCredit() Obtain <p>Temporary credit limit</p><p>Unit: cent</p>
 * @method void setTempCredit(float $TempCredit) Set <p>Temporary credit limit</p><p>Unit: cent</p>
 * @method float getBasicCreditAmount() Obtain <p>Basic credit limit</p><p>Unit: cent</p>
 * @method void setBasicCreditAmount(float $BasicCreditAmount) Set <p>Basic credit limit</p><p>Unit: cent</p>
 * @method float getOweAmount() Obtain <p>Overdue payments</p><p>Unit: cent</p>
 * @method void setOweAmount(float $OweAmount) Set <p>Overdue payments</p><p>Unit: cent</p>
 */
class DescribeOrgMemberAccountBalanceData extends AbstractModel
{
    /**
     * @var string <p>Member account Uin</p>
     */
    public $MemberUin;

    /**
     * @var string <p>Member name</p>
     */
    public $MemberName;

    /**
     * @var boolean <p>Whether it is a credit account</p>
     */
    public $IsCreditAccount;

    /**
     * @var float <p>Current actual available balance</p><p>Unit: cent</p>
     */
    public $RealBalance;

    /**
     * @var float <p>Cash account balance</p><p>Unit: cent</p>
     */
    public $CashAccountBalance;

    /**
     * @var float <p>Credit limit</p><p>Unit: cent</p><p>Credit limit = Basic credit limit + Temporary credit limit</p>
     */
    public $CreditAmount;

    /**
     * @var float <p>Temporary credit limit</p><p>Unit: cent</p>
     */
    public $TempCredit;

    /**
     * @var float <p>Basic credit limit</p><p>Unit: cent</p>
     */
    public $BasicCreditAmount;

    /**
     * @var float <p>Overdue payments</p><p>Unit: cent</p>
     */
    public $OweAmount;

    /**
     * @param string $MemberUin <p>Member account Uin</p>
     * @param string $MemberName <p>Member name</p>
     * @param boolean $IsCreditAccount <p>Whether it is a credit account</p>
     * @param float $RealBalance <p>Current actual available balance</p><p>Unit: cent</p>
     * @param float $CashAccountBalance <p>Cash account balance</p><p>Unit: cent</p>
     * @param float $CreditAmount <p>Credit limit</p><p>Unit: cent</p><p>Credit limit = Basic credit limit + Temporary credit limit</p>
     * @param float $TempCredit <p>Temporary credit limit</p><p>Unit: cent</p>
     * @param float $BasicCreditAmount <p>Basic credit limit</p><p>Unit: cent</p>
     * @param float $OweAmount <p>Overdue payments</p><p>Unit: cent</p>
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("IsCreditAccount",$param) and $param["IsCreditAccount"] !== null) {
            $this->IsCreditAccount = $param["IsCreditAccount"];
        }

        if (array_key_exists("RealBalance",$param) and $param["RealBalance"] !== null) {
            $this->RealBalance = $param["RealBalance"];
        }

        if (array_key_exists("CashAccountBalance",$param) and $param["CashAccountBalance"] !== null) {
            $this->CashAccountBalance = $param["CashAccountBalance"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("TempCredit",$param) and $param["TempCredit"] !== null) {
            $this->TempCredit = $param["TempCredit"];
        }

        if (array_key_exists("BasicCreditAmount",$param) and $param["BasicCreditAmount"] !== null) {
            $this->BasicCreditAmount = $param["BasicCreditAmount"];
        }

        if (array_key_exists("OweAmount",$param) and $param["OweAmount"] !== null) {
            $this->OweAmount = $param["OweAmount"];
        }
    }
}
