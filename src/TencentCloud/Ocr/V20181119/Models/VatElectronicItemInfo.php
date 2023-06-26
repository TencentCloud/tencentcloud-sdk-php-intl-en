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
 * Detailed items of an electronic invoice
 *
 * @method string getName() Obtain Item name
 * @method void setName(string $Name) Set Item name
 * @method string getQuantity() Obtain Quantity
 * @method void setQuantity(string $Quantity) Set Quantity
 * @method string getSpecification() Obtain Specification
 * @method void setSpecification(string $Specification) Set Specification
 * @method string getPrice() Obtain Unit price
 * @method void setPrice(string $Price) Set Unit price
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 * @method string getTaxRate() Obtain Tax rate
 * @method void setTaxRate(string $TaxRate) Set Tax rate
 * @method string getTax() Obtain Tax amount
 * @method void setTax(string $Tax) Set Tax amount
 * @method string getUnit() Obtain Unit
 * @method void setUnit(string $Unit) Set Unit
 * @method string getVehicleType() Obtain Vehicle type
 * @method void setVehicleType(string $VehicleType) Set Vehicle type
 * @method string getVehicleBrand() Obtain Vehicle No.
 * @method void setVehicleBrand(string $VehicleBrand) Set Vehicle No.
 * @method string getDeparturePlace() Obtain Departure place
 * @method void setDeparturePlace(string $DeparturePlace) Set Departure place
 * @method string getArrivalPlace() Obtain Destination
 * @method void setArrivalPlace(string $ArrivalPlace) Set Destination
 * @method string getTransportItemsName() Obtain Name of the transported goods. It is returned only for a goods transport service invoice.
 * @method void setTransportItemsName(string $TransportItemsName) Set Name of the transported goods. It is returned only for a goods transport service invoice.
 * @method string getPlaceOfBuildingService() Obtain Location of the construction service. It is returned only for a construction invoice.
 * @method void setPlaceOfBuildingService(string $PlaceOfBuildingService) Set Location of the construction service. It is returned only for a construction invoice.
 * @method string getBuildingName() Obtain Name of the construction project. It is returned only for a construction invoice.
 * @method void setBuildingName(string $BuildingName) Set Name of the construction project. It is returned only for a construction invoice.
 * @method string getEstateNumber() Obtain Property or real estate ownership certificate No. It is returned only for a real estate operation and leasing service invoice.
 * @method void setEstateNumber(string $EstateNumber) Set Property or real estate ownership certificate No. It is returned only for a real estate operation and leasing service invoice.
 * @method string getAreaUnit() Obtain Unit of area. It is returned only for a real estate operation and leasing service invoice.
 * @method void setAreaUnit(string $AreaUnit) Set Unit of area. It is returned only for a real estate operation and leasing service invoice.
 */
class VatElectronicItemInfo extends AbstractModel
{
    /**
     * @var string Item name
     */
    public $Name;

    /**
     * @var string Quantity
     */
    public $Quantity;

    /**
     * @var string Specification
     */
    public $Specification;

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
     * @var string Unit
     */
    public $Unit;

    /**
     * @var string Vehicle type
     */
    public $VehicleType;

    /**
     * @var string Vehicle No.
     */
    public $VehicleBrand;

    /**
     * @var string Departure place
     */
    public $DeparturePlace;

    /**
     * @var string Destination
     */
    public $ArrivalPlace;

    /**
     * @var string Name of the transported goods. It is returned only for a goods transport service invoice.
     */
    public $TransportItemsName;

    /**
     * @var string Location of the construction service. It is returned only for a construction invoice.
     */
    public $PlaceOfBuildingService;

    /**
     * @var string Name of the construction project. It is returned only for a construction invoice.
     */
    public $BuildingName;

    /**
     * @var string Property or real estate ownership certificate No. It is returned only for a real estate operation and leasing service invoice.
     */
    public $EstateNumber;

    /**
     * @var string Unit of area. It is returned only for a real estate operation and leasing service invoice.
     */
    public $AreaUnit;

    /**
     * @param string $Name Item name
     * @param string $Quantity Quantity
     * @param string $Specification Specification
     * @param string $Price Unit price
     * @param string $Total Amount
     * @param string $TaxRate Tax rate
     * @param string $Tax Tax amount
     * @param string $Unit Unit
     * @param string $VehicleType Vehicle type
     * @param string $VehicleBrand Vehicle No.
     * @param string $DeparturePlace Departure place
     * @param string $ArrivalPlace Destination
     * @param string $TransportItemsName Name of the transported goods. It is returned only for a goods transport service invoice.
     * @param string $PlaceOfBuildingService Location of the construction service. It is returned only for a construction invoice.
     * @param string $BuildingName Name of the construction project. It is returned only for a construction invoice.
     * @param string $EstateNumber Property or real estate ownership certificate No. It is returned only for a real estate operation and leasing service invoice.
     * @param string $AreaUnit Unit of area. It is returned only for a real estate operation and leasing service invoice.
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

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("VehicleBrand",$param) and $param["VehicleBrand"] !== null) {
            $this->VehicleBrand = $param["VehicleBrand"];
        }

        if (array_key_exists("DeparturePlace",$param) and $param["DeparturePlace"] !== null) {
            $this->DeparturePlace = $param["DeparturePlace"];
        }

        if (array_key_exists("ArrivalPlace",$param) and $param["ArrivalPlace"] !== null) {
            $this->ArrivalPlace = $param["ArrivalPlace"];
        }

        if (array_key_exists("TransportItemsName",$param) and $param["TransportItemsName"] !== null) {
            $this->TransportItemsName = $param["TransportItemsName"];
        }

        if (array_key_exists("PlaceOfBuildingService",$param) and $param["PlaceOfBuildingService"] !== null) {
            $this->PlaceOfBuildingService = $param["PlaceOfBuildingService"];
        }

        if (array_key_exists("BuildingName",$param) and $param["BuildingName"] !== null) {
            $this->BuildingName = $param["BuildingName"];
        }

        if (array_key_exists("EstateNumber",$param) and $param["EstateNumber"] !== null) {
            $this->EstateNumber = $param["EstateNumber"];
        }

        if (array_key_exists("AreaUnit",$param) and $param["AreaUnit"] !== null) {
            $this->AreaUnit = $param["AreaUnit"];
        }
    }
}
