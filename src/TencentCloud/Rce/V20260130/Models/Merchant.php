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
 * The details of the merchant
 *
 * @method string getMerchantId() Obtain <p>The ID of the merchant</p>
 * @method void setMerchantId(string $MerchantId) Set <p>The ID of the merchant</p>
 * @method string getName() Obtain <p>The name of the merchant</p>
 * @method void setName(string $Name) Set <p>The name of the merchant</p>
 * @method string getRegisterTime() Obtain <p>Merchant registration time</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601</p>
 * @method void setRegisterTime(string $RegisterTime) Set <p>Merchant registration time</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601</p>
 * @method string getCategory() Obtain <p>Merchant category code</p><p>Parameter format: 4-digit No. compliant with ISO 18245</p>
 * @method void setCategory(string $Category) Set <p>Merchant category code</p><p>Parameter format: 4-digit No. compliant with ISO 18245</p>
 * @method string getPhone() Obtain <p>The phone number of the merchant</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
 * @method void setPhone(string $Phone) Set <p>The phone number of the merchant</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
 * @method string getEmail() Obtain <p>The email of the merchant</p>
 * @method void setEmail(string $Email) Set <p>The email of the merchant</p>
 * @method string getURL() Obtain <p>The url of the merchant shop on the website</p>
 * @method void setURL(string $URL) Set <p>The url of the merchant shop on the website</p>
 * @method Address getAddress() Obtain <p>The address of the merchant</p>
 * @method void setAddress(Address $Address) Set <p>The address of the merchant</p>
 * @method string getLevel() Obtain <p>The level of the merchant</p>
 * @method void setLevel(string $Level) Set <p>The level of the merchant</p>
 * @method string getBusinessType() Obtain <p>The type of the merchant</p><p>Enumeration value:</p><ul><li>person: Person</li><li>company: Company</li></ul>
 * @method void setBusinessType(string $BusinessType) Set <p>The type of the merchant</p><p>Enumeration value:</p><ul><li>person: Person</li><li>company: Company</li></ul>
 * @method integer getGoodsQuantity() Obtain <p>The volume of goods on sale of the merchant</p>
 * @method void setGoodsQuantity(integer $GoodsQuantity) Set <p>The volume of goods on sale of the merchant</p>
 * @method integer getHistoricSalesQuantity() Obtain <p>The historical sales volume of the merchant</p>
 * @method void setHistoricSalesQuantity(integer $HistoricSalesQuantity) Set <p>The historical sales volume of the merchant</p>
 * @method Amount getHistoricSalesAmount() Obtain <p>The historical sales amount of the merchant</p>
 * @method void setHistoricSalesAmount(Amount $HistoricSalesAmount) Set <p>The historical sales amount of the merchant</p>
 */
class Merchant extends AbstractModel
{
    /**
     * @var string <p>The ID of the merchant</p>
     */
    public $MerchantId;

    /**
     * @var string <p>The name of the merchant</p>
     */
    public $Name;

    /**
     * @var string <p>Merchant registration time</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601</p>
     */
    public $RegisterTime;

    /**
     * @var string <p>Merchant category code</p><p>Parameter format: 4-digit No. compliant with ISO 18245</p>
     */
    public $Category;

    /**
     * @var string <p>The phone number of the merchant</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
     */
    public $Phone;

    /**
     * @var string <p>The email of the merchant</p>
     */
    public $Email;

    /**
     * @var string <p>The url of the merchant shop on the website</p>
     */
    public $URL;

    /**
     * @var Address <p>The address of the merchant</p>
     */
    public $Address;

    /**
     * @var string <p>The level of the merchant</p>
     */
    public $Level;

    /**
     * @var string <p>The type of the merchant</p><p>Enumeration value:</p><ul><li>person: Person</li><li>company: Company</li></ul>
     */
    public $BusinessType;

    /**
     * @var integer <p>The volume of goods on sale of the merchant</p>
     */
    public $GoodsQuantity;

    /**
     * @var integer <p>The historical sales volume of the merchant</p>
     */
    public $HistoricSalesQuantity;

    /**
     * @var Amount <p>The historical sales amount of the merchant</p>
     */
    public $HistoricSalesAmount;

    /**
     * @param string $MerchantId <p>The ID of the merchant</p>
     * @param string $Name <p>The name of the merchant</p>
     * @param string $RegisterTime <p>Merchant registration time</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601</p>
     * @param string $Category <p>Merchant category code</p><p>Parameter format: 4-digit No. compliant with ISO 18245</p>
     * @param string $Phone <p>The phone number of the merchant</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
     * @param string $Email <p>The email of the merchant</p>
     * @param string $URL <p>The url of the merchant shop on the website</p>
     * @param Address $Address <p>The address of the merchant</p>
     * @param string $Level <p>The level of the merchant</p>
     * @param string $BusinessType <p>The type of the merchant</p><p>Enumeration value:</p><ul><li>person: Person</li><li>company: Company</li></ul>
     * @param integer $GoodsQuantity <p>The volume of goods on sale of the merchant</p>
     * @param integer $HistoricSalesQuantity <p>The historical sales volume of the merchant</p>
     * @param Amount $HistoricSalesAmount <p>The historical sales amount of the merchant</p>
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("GoodsQuantity",$param) and $param["GoodsQuantity"] !== null) {
            $this->GoodsQuantity = $param["GoodsQuantity"];
        }

        if (array_key_exists("HistoricSalesQuantity",$param) and $param["HistoricSalesQuantity"] !== null) {
            $this->HistoricSalesQuantity = $param["HistoricSalesQuantity"];
        }

        if (array_key_exists("HistoricSalesAmount",$param) and $param["HistoricSalesAmount"] !== null) {
            $this->HistoricSalesAmount = new Amount();
            $this->HistoricSalesAmount->deserialize($param["HistoricSalesAmount"]);
        }
    }
}
