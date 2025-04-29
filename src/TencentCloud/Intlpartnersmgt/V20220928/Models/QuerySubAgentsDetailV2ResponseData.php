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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Second-Level reseller information.
 *
 * @method integer getSubAgentUin() Obtain Second-level reseller UIN.
 * @method void setSubAgentUin(integer $SubAgentUin) Set Second-level reseller UIN.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getMobile() Obtain Mobile number.
 * @method void setMobile(string $Mobile) Set Mobile number.
 * @method string getEmail() Obtain Specifies the mailbox.
 * @method void setEmail(string $Email) Set Specifies the mailbox.
 * @method integer getCountOfCustomers() Obtain Number of secondary dealer sub-customers.
 * @method void setCountOfCustomers(integer $CountOfCustomers) Set Number of secondary dealer sub-customers.
 * @method string getBindTime() Obtain Binding time.
 * @method void setBindTime(string $BindTime) Set Binding time.
 * @method float getCredit() Obtain Credit limit pool of second-level reseller.
 * @method void setCredit(float $Credit) Set Credit limit pool of second-level reseller.
 * @method float getRemainingCredit() Obtain Value pool of unconsumed credit limit for second-level reseller.
 * @method void setRemainingCredit(float $RemainingCredit) Set Value pool of unconsumed credit limit for second-level reseller.
 * @method float getVoucher() Obtain Cash coupon quota pool for second-level reseller.
 * @method void setVoucher(float $Voucher) Set Cash coupon quota pool for second-level reseller.
 * @method float getRemainingVoucher() Obtain Balance of cash coupon quota pool for second-level reseller.
 * @method void setRemainingVoucher(float $RemainingVoucher) Set Balance of cash coupon quota pool for second-level reseller.
 */
class QuerySubAgentsDetailV2ResponseData extends AbstractModel
{
    /**
     * @var integer Second-level reseller UIN.
     */
    public $SubAgentUin;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Mobile number.
     */
    public $Mobile;

    /**
     * @var string Specifies the mailbox.
     */
    public $Email;

    /**
     * @var integer Number of secondary dealer sub-customers.
     */
    public $CountOfCustomers;

    /**
     * @var string Binding time.
     */
    public $BindTime;

    /**
     * @var float Credit limit pool of second-level reseller.
     */
    public $Credit;

    /**
     * @var float Value pool of unconsumed credit limit for second-level reseller.
     */
    public $RemainingCredit;

    /**
     * @var float Cash coupon quota pool for second-level reseller.
     */
    public $Voucher;

    /**
     * @var float Balance of cash coupon quota pool for second-level reseller.
     */
    public $RemainingVoucher;

    /**
     * @param integer $SubAgentUin Second-level reseller UIN.
     * @param string $Name Name
     * @param string $Remark Remarks
     * @param string $Mobile Mobile number.
     * @param string $Email Specifies the mailbox.
     * @param integer $CountOfCustomers Number of secondary dealer sub-customers.
     * @param string $BindTime Binding time.
     * @param float $Credit Credit limit pool of second-level reseller.
     * @param float $RemainingCredit Value pool of unconsumed credit limit for second-level reseller.
     * @param float $Voucher Cash coupon quota pool for second-level reseller.
     * @param float $RemainingVoucher Balance of cash coupon quota pool for second-level reseller.
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
        if (array_key_exists("SubAgentUin",$param) and $param["SubAgentUin"] !== null) {
            $this->SubAgentUin = $param["SubAgentUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CountOfCustomers",$param) and $param["CountOfCustomers"] !== null) {
            $this->CountOfCustomers = $param["CountOfCustomers"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("Voucher",$param) and $param["Voucher"] !== null) {
            $this->Voucher = $param["Voucher"];
        }

        if (array_key_exists("RemainingVoucher",$param) and $param["RemainingVoucher"] !== null) {
            $this->RemainingVoucher = $param["RemainingVoucher"];
        }
    }
}
