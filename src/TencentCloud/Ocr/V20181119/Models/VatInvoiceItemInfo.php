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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about VAT invoice items
 *
 * @method string getName() Obtain Item name
 * @method void setName(string $Name) Set Item name
 * @method string getSpecification() Obtain Specification
 * @method void setSpecification(string $Specification) Set Specification
 * @method string getUnit() Obtain Unit
 * @method void setUnit(string $Unit) Set Unit
 * @method string getQuantity() Obtain Quantity
 * @method void setQuantity(string $Quantity) Set Quantity
 * @method string getPrice() Obtain Unit price
 * @method void setPrice(string $Price) Set Unit price
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 * @method string getTaxRate() Obtain Tax rate
 * @method void setTaxRate(string $TaxRate) Set Tax rate
 * @method string getTax() Obtain Tax amount
 * @method void setTax(string $Tax) Set Tax amount
 * @method string getDateStart() Obtain Start date
 * @method void setDateStart(string $DateStart) Set Start date
 * @method string getDateEnd() Obtain End date
 * @method void setDateEnd(string $DateEnd) Set End date
 * @method string getLicensePlate() Obtain License plate number
 * @method void setLicensePlate(string $LicensePlate) Set License plate number
 * @method string getVehicleType() Obtain Vehicle type
 * @method void setVehicleType(string $VehicleType) Set Vehicle type
 */
class VatInvoiceItemInfo extends AbstractModel
{
    /**
     * @var string Item name
     */
    public $Name;

    /**
     * @var string Specification
     */
    public $Specification;

    /**
     * @var string Unit
     */
    public $Unit;

    /**
     * @var string Quantity
     */
    public $Quantity;

    /**
     * @var string Unit price
     */
    public $Price;

    /**
     * @var string Amount
     */
    public $Total;

    /**
     * @var string Tax rate
     */
    public $TaxRate;

    /**
     * @var string Tax amount
     */
    public $Tax;

    /**
     * @var string Start date
     */
    public $DateStart;

    /**
     * @var string End date
     */
    public $DateEnd;

    /**
     * @var string License plate number
     */
    public $LicensePlate;

    /**
     * @var string Vehicle type
     */
    public $VehicleType;

    /**
     * @param string $Name Item name
     * @param string $Specification Specification
     * @param string $Unit Unit
     * @param string $Quantity Quantity
     * @param string $Price Unit price
     * @param string $Total Amount
     * @param string $TaxRate Tax rate
     * @param string $Tax Tax amount
     * @param string $DateStart Start date
     * @param string $DateEnd End date
     * @param string $LicensePlate License plate number
     * @param string $VehicleType Vehicle type
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("DateStart",$param) and $param["DateStart"] !== null) {
            $this->DateStart = $param["DateStart"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }
    }
}
