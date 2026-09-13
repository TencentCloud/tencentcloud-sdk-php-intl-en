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
 * Withdraw event details
 *
 * @method Amount getAmount() Obtain <p>The amount of the withdraw</p>
 * @method void setAmount(Amount $Amount) Set <p>The amount of the withdraw</p>
 * @method string getMethod() Obtain <p>The method of the withdraw</p><p>Enumeration value:</p><ul><li>card: bank card</li><li>wallet: digital wallet</li></ul>
 * @method void setMethod(string $Method) Set <p>The method of the withdraw</p><p>Enumeration value:</p><ul><li>card: bank card</li><li>wallet: digital wallet</li></ul>
 * @method Card getCard() Obtain <p>The detail information of the card withdrawn to.Required while the withdraw method is card</p>
 * @method void setCard(Card $Card) Set <p>The detail information of the card withdrawn to.Required while the withdraw method is card</p>
 * @method Wallet getWallet() Obtain <p>The detail information of the wallet withdrawn to.Required while the withdraw method is wallet</p>
 * @method void setWallet(Wallet $Wallet) Set <p>The detail information of the wallet withdrawn to.Required while the withdraw method is wallet</p>
 * @method Result getResult() Obtain <p>Withdraw result</p>
 * @method void setResult(Result $Result) Set <p>Withdraw result</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class WithdrawEvent extends AbstractModel
{
    /**
     * @var Amount <p>The amount of the withdraw</p>
     */
    public $Amount;

    /**
     * @var string <p>The method of the withdraw</p><p>Enumeration value:</p><ul><li>card: bank card</li><li>wallet: digital wallet</li></ul>
     */
    public $Method;

    /**
     * @var Card <p>The detail information of the card withdrawn to.Required while the withdraw method is card</p>
     */
    public $Card;

    /**
     * @var Wallet <p>The detail information of the wallet withdrawn to.Required while the withdraw method is wallet</p>
     */
    public $Wallet;

    /**
     * @var Result <p>Withdraw result</p>
     */
    public $Result;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param Amount $Amount <p>The amount of the withdraw</p>
     * @param string $Method <p>The method of the withdraw</p><p>Enumeration value:</p><ul><li>card: bank card</li><li>wallet: digital wallet</li></ul>
     * @param Card $Card <p>The detail information of the card withdrawn to.Required while the withdraw method is card</p>
     * @param Wallet $Wallet <p>The detail information of the wallet withdrawn to.Required while the withdraw method is wallet</p>
     * @param Result $Result <p>Withdraw result</p>
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
        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = new Amount();
            $this->Amount->deserialize($param["Amount"]);
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Card",$param) and $param["Card"] !== null) {
            $this->Card = new Card();
            $this->Card->deserialize($param["Card"]);
        }

        if (array_key_exists("Wallet",$param) and $param["Wallet"] !== null) {
            $this->Wallet = new Wallet();
            $this->Wallet->deserialize($param["Wallet"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new Result();
            $this->Result->deserialize($param["Result"]);
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
