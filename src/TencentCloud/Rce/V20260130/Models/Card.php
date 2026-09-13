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
 * The details of the card
 *
 * @method string getCardBin() Obtain <p>Bank identification number.The first six or eight digits of the card number</p><p>Parameter format: Compliant with the ISO 13616-1 standard</p>
 * @method void setCardBin(string $CardBin) Set <p>Bank identification number.The first six or eight digits of the card number</p><p>Parameter format: Compliant with the ISO 13616-1 standard</p>
 * @method string getLastFourDigits() Obtain <p>The last four digits of the card number</p><p>Parameter format: Compliant with ISO 13616-1 standard</p>
 * @method void setLastFourDigits(string $LastFourDigits) Set <p>The last four digits of the card number</p><p>Parameter format: Compliant with ISO 13616-1 standard</p>
 * @method string getCountry() Obtain <p>The country where the card issued</p>
 * @method void setCountry(string $Country) Set <p>The country where the card issued</p>
 * @method string getBank() Obtain <p>The bank that issued card</p>
 * @method void setBank(string $Bank) Set <p>The bank that issued card</p>
 * @method string getType() Obtain <p>the type of the card</p><p>Enumeration value:</p><ul><li>credit: Credit card</li><li>debit: Debit card</li><li>charge: Charge card</li></ul>
 * @method void setType(string $Type) Set <p>the type of the card</p><p>Enumeration value:</p><ul><li>credit: Credit card</li><li>debit: Debit card</li><li>charge: Charge card</li></ul>
 * @method string getBrand() Obtain <p>The brand of the card</p>
 * @method void setBrand(string $Brand) Set <p>The brand of the card</p>
 * @method string getLevel() Obtain <p>The level of the card that the bank defined</p>
 * @method void setLevel(string $Level) Set <p>The level of the card that the bank defined</p>
 * @method string getHolderName() Obtain <p>The full name of the person who hold the card</p>
 * @method void setHolderName(string $HolderName) Set <p>The full name of the person who hold the card</p>
 * @method string getExpireTime() Obtain <p>The expiration date of the card</p><p>Parameter format: YYYY-MM-DD.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>The expiration date of the card</p><p>Parameter format: YYYY-MM-DD.</p>
 */
class Card extends AbstractModel
{
    /**
     * @var string <p>Bank identification number.The first six or eight digits of the card number</p><p>Parameter format: Compliant with the ISO 13616-1 standard</p>
     */
    public $CardBin;

    /**
     * @var string <p>The last four digits of the card number</p><p>Parameter format: Compliant with ISO 13616-1 standard</p>
     */
    public $LastFourDigits;

    /**
     * @var string <p>The country where the card issued</p>
     */
    public $Country;

    /**
     * @var string <p>The bank that issued card</p>
     */
    public $Bank;

    /**
     * @var string <p>the type of the card</p><p>Enumeration value:</p><ul><li>credit: Credit card</li><li>debit: Debit card</li><li>charge: Charge card</li></ul>
     */
    public $Type;

    /**
     * @var string <p>The brand of the card</p>
     */
    public $Brand;

    /**
     * @var string <p>The level of the card that the bank defined</p>
     */
    public $Level;

    /**
     * @var string <p>The full name of the person who hold the card</p>
     */
    public $HolderName;

    /**
     * @var string <p>The expiration date of the card</p><p>Parameter format: YYYY-MM-DD.</p>
     */
    public $ExpireTime;

    /**
     * @param string $CardBin <p>Bank identification number.The first six or eight digits of the card number</p><p>Parameter format: Compliant with the ISO 13616-1 standard</p>
     * @param string $LastFourDigits <p>The last four digits of the card number</p><p>Parameter format: Compliant with ISO 13616-1 standard</p>
     * @param string $Country <p>The country where the card issued</p>
     * @param string $Bank <p>The bank that issued card</p>
     * @param string $Type <p>the type of the card</p><p>Enumeration value:</p><ul><li>credit: Credit card</li><li>debit: Debit card</li><li>charge: Charge card</li></ul>
     * @param string $Brand <p>The brand of the card</p>
     * @param string $Level <p>The level of the card that the bank defined</p>
     * @param string $HolderName <p>The full name of the person who hold the card</p>
     * @param string $ExpireTime <p>The expiration date of the card</p><p>Parameter format: YYYY-MM-DD.</p>
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
        if (array_key_exists("CardBin",$param) and $param["CardBin"] !== null) {
            $this->CardBin = $param["CardBin"];
        }

        if (array_key_exists("LastFourDigits",$param) and $param["LastFourDigits"] !== null) {
            $this->LastFourDigits = $param["LastFourDigits"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Bank",$param) and $param["Bank"] !== null) {
            $this->Bank = $param["Bank"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HolderName",$param) and $param["HolderName"] !== null) {
            $this->HolderName = $param["HolderName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
