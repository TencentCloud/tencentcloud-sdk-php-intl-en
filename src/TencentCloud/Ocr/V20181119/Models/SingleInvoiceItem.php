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
 * Content of a single invoice/ticket among multiple types of invoices/tickets
 *
 * @method VatInvoiceInfo getVatSpecialInvoice() Obtain Special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatSpecialInvoice(VatInvoiceInfo $VatSpecialInvoice) Set Special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceInfo getVatCommonInvoice() Obtain General VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatCommonInvoice(VatInvoiceInfo $VatCommonInvoice) Set General VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceInfo getVatElectronicCommonInvoice() Obtain Electronic general VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicCommonInvoice(VatInvoiceInfo $VatElectronicCommonInvoice) Set Electronic general VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceInfo getVatElectronicSpecialInvoice() Obtain Electronic special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicSpecialInvoice(VatInvoiceInfo $VatElectronicSpecialInvoice) Set Electronic special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceInfo getVatElectronicInvoiceBlockchain() Obtain Blockchain electronic invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicInvoiceBlockchain(VatInvoiceInfo $VatElectronicInvoiceBlockchain) Set Blockchain electronic invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceInfo getVatElectronicInvoiceToll() Obtain Electronic general VAT invoice (toll)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicInvoiceToll(VatInvoiceInfo $VatElectronicInvoiceToll) Set Electronic general VAT invoice (toll)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatElectronicInfo getVatElectronicSpecialInvoiceFull() Obtain Electronic invoice (special)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicSpecialInvoiceFull(VatElectronicInfo $VatElectronicSpecialInvoiceFull) Set Electronic invoice (special)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatElectronicInfo getVatElectronicInvoiceFull() Obtain Electronic invoice (general)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatElectronicInvoiceFull(VatElectronicInfo $VatElectronicInvoiceFull) Set Electronic invoice (general)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachinePrintedInvoice getMachinePrintedInvoice() Obtain General machine-printed invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachinePrintedInvoice(MachinePrintedInvoice $MachinePrintedInvoice) Set General machine-printed invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BusInvoice getBusInvoice() Obtain Bus ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusInvoice(BusInvoice $BusInvoice) Set Bus ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ShippingInvoice getShippingInvoice() Obtain Ship ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShippingInvoice(ShippingInvoice $ShippingInvoice) Set Ship ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TollInvoice getTollInvoice() Obtain Toll receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTollInvoice(TollInvoice $TollInvoice) Set Toll receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OtherInvoice getOtherInvoice() Obtain Other invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOtherInvoice(OtherInvoice $OtherInvoice) Set Other invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MotorVehicleSaleInvoice getMotorVehicleSaleInvoice() Obtain Motor vehicle sales invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMotorVehicleSaleInvoice(MotorVehicleSaleInvoice $MotorVehicleSaleInvoice) Set Motor vehicle sales invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method UsedCarPurchaseInvoice getUsedCarPurchaseInvoice() Obtain Used car invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsedCarPurchaseInvoice(UsedCarPurchaseInvoice $UsedCarPurchaseInvoice) Set Used car invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VatInvoiceRoll getVatInvoiceRoll() Obtain General VAT invoice (roll)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVatInvoiceRoll(VatInvoiceRoll $VatInvoiceRoll) Set General VAT invoice (roll)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaxiTicket getTaxiTicket() Obtain Taxi receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaxiTicket(TaxiTicket $TaxiTicket) Set Taxi receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QuotaInvoice getQuotaInvoice() Obtain Quota invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuotaInvoice(QuotaInvoice $QuotaInvoice) Set Quota invoice
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AirTransport getAirTransport() Obtain Itinerary/Receipt of e-ticket for air transportation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAirTransport(AirTransport $AirTransport) Set Itinerary/Receipt of e-ticket for air transportation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NonTaxIncomeBill getNonTaxIncomeGeneralBill() Obtain Non-tax revenue general receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNonTaxIncomeGeneralBill(NonTaxIncomeBill $NonTaxIncomeGeneralBill) Set Non-tax revenue general receipt
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NonTaxIncomeBill getNonTaxIncomeElectronicBill() Obtain Non-tax revenue unified payment voucher
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNonTaxIncomeElectronicBill(NonTaxIncomeBill $NonTaxIncomeElectronicBill) Set Non-tax revenue unified payment voucher
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TrainTicket getTrainTicket() Obtain Train ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrainTicket(TrainTicket $TrainTicket) Set Train ticket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MedicalInvoice getMedicalOutpatientInvoice() Obtain 
 * @method void setMedicalOutpatientInvoice(MedicalInvoice $MedicalOutpatientInvoice) Set 
 * @method MedicalInvoice getMedicalHospitalizedInvoice() Obtain 
 * @method void setMedicalHospitalizedInvoice(MedicalInvoice $MedicalHospitalizedInvoice) Set 
 */
class SingleInvoiceItem extends AbstractModel
{
    /**
     * @var VatInvoiceInfo Special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatSpecialInvoice;

    /**
     * @var VatInvoiceInfo General VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatCommonInvoice;

    /**
     * @var VatInvoiceInfo Electronic general VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicCommonInvoice;

    /**
     * @var VatInvoiceInfo Electronic special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicSpecialInvoice;

    /**
     * @var VatInvoiceInfo Blockchain electronic invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicInvoiceBlockchain;

    /**
     * @var VatInvoiceInfo Electronic general VAT invoice (toll)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicInvoiceToll;

    /**
     * @var VatElectronicInfo Electronic invoice (special)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicSpecialInvoiceFull;

    /**
     * @var VatElectronicInfo Electronic invoice (general)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatElectronicInvoiceFull;

    /**
     * @var MachinePrintedInvoice General machine-printed invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachinePrintedInvoice;

    /**
     * @var BusInvoice Bus ticket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusInvoice;

    /**
     * @var ShippingInvoice Ship ticket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShippingInvoice;

    /**
     * @var TollInvoice Toll receipt
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TollInvoice;

    /**
     * @var OtherInvoice Other invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OtherInvoice;

    /**
     * @var MotorVehicleSaleInvoice Motor vehicle sales invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MotorVehicleSaleInvoice;

    /**
     * @var UsedCarPurchaseInvoice Used car invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsedCarPurchaseInvoice;

    /**
     * @var VatInvoiceRoll General VAT invoice (roll)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VatInvoiceRoll;

    /**
     * @var TaxiTicket Taxi receipt
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaxiTicket;

    /**
     * @var QuotaInvoice Quota invoice
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QuotaInvoice;

    /**
     * @var AirTransport Itinerary/Receipt of e-ticket for air transportation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AirTransport;

    /**
     * @var NonTaxIncomeBill Non-tax revenue general receipt
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NonTaxIncomeGeneralBill;

    /**
     * @var NonTaxIncomeBill Non-tax revenue unified payment voucher
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NonTaxIncomeElectronicBill;

    /**
     * @var TrainTicket Train ticket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrainTicket;

    /**
     * @var MedicalInvoice 
     */
    public $MedicalOutpatientInvoice;

    /**
     * @var MedicalInvoice 
     */
    public $MedicalHospitalizedInvoice;

    /**
     * @param VatInvoiceInfo $VatSpecialInvoice Special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceInfo $VatCommonInvoice General VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceInfo $VatElectronicCommonInvoice Electronic general VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceInfo $VatElectronicSpecialInvoice Electronic special VAT invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceInfo $VatElectronicInvoiceBlockchain Blockchain electronic invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceInfo $VatElectronicInvoiceToll Electronic general VAT invoice (toll)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatElectronicInfo $VatElectronicSpecialInvoiceFull Electronic invoice (special)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatElectronicInfo $VatElectronicInvoiceFull Electronic invoice (general)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachinePrintedInvoice $MachinePrintedInvoice General machine-printed invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BusInvoice $BusInvoice Bus ticket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ShippingInvoice $ShippingInvoice Ship ticket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TollInvoice $TollInvoice Toll receipt
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OtherInvoice $OtherInvoice Other invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MotorVehicleSaleInvoice $MotorVehicleSaleInvoice Motor vehicle sales invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param UsedCarPurchaseInvoice $UsedCarPurchaseInvoice Used car invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VatInvoiceRoll $VatInvoiceRoll General VAT invoice (roll)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaxiTicket $TaxiTicket Taxi receipt
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QuotaInvoice $QuotaInvoice Quota invoice
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AirTransport $AirTransport Itinerary/Receipt of e-ticket for air transportation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NonTaxIncomeBill $NonTaxIncomeGeneralBill Non-tax revenue general receipt
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NonTaxIncomeBill $NonTaxIncomeElectronicBill Non-tax revenue unified payment voucher
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TrainTicket $TrainTicket Train ticket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MedicalInvoice $MedicalOutpatientInvoice 
     * @param MedicalInvoice $MedicalHospitalizedInvoice 
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
        if (array_key_exists("VatSpecialInvoice",$param) and $param["VatSpecialInvoice"] !== null) {
            $this->VatSpecialInvoice = new VatInvoiceInfo();
            $this->VatSpecialInvoice->deserialize($param["VatSpecialInvoice"]);
        }

        if (array_key_exists("VatCommonInvoice",$param) and $param["VatCommonInvoice"] !== null) {
            $this->VatCommonInvoice = new VatInvoiceInfo();
            $this->VatCommonInvoice->deserialize($param["VatCommonInvoice"]);
        }

        if (array_key_exists("VatElectronicCommonInvoice",$param) and $param["VatElectronicCommonInvoice"] !== null) {
            $this->VatElectronicCommonInvoice = new VatInvoiceInfo();
            $this->VatElectronicCommonInvoice->deserialize($param["VatElectronicCommonInvoice"]);
        }

        if (array_key_exists("VatElectronicSpecialInvoice",$param) and $param["VatElectronicSpecialInvoice"] !== null) {
            $this->VatElectronicSpecialInvoice = new VatInvoiceInfo();
            $this->VatElectronicSpecialInvoice->deserialize($param["VatElectronicSpecialInvoice"]);
        }

        if (array_key_exists("VatElectronicInvoiceBlockchain",$param) and $param["VatElectronicInvoiceBlockchain"] !== null) {
            $this->VatElectronicInvoiceBlockchain = new VatInvoiceInfo();
            $this->VatElectronicInvoiceBlockchain->deserialize($param["VatElectronicInvoiceBlockchain"]);
        }

        if (array_key_exists("VatElectronicInvoiceToll",$param) and $param["VatElectronicInvoiceToll"] !== null) {
            $this->VatElectronicInvoiceToll = new VatInvoiceInfo();
            $this->VatElectronicInvoiceToll->deserialize($param["VatElectronicInvoiceToll"]);
        }

        if (array_key_exists("VatElectronicSpecialInvoiceFull",$param) and $param["VatElectronicSpecialInvoiceFull"] !== null) {
            $this->VatElectronicSpecialInvoiceFull = new VatElectronicInfo();
            $this->VatElectronicSpecialInvoiceFull->deserialize($param["VatElectronicSpecialInvoiceFull"]);
        }

        if (array_key_exists("VatElectronicInvoiceFull",$param) and $param["VatElectronicInvoiceFull"] !== null) {
            $this->VatElectronicInvoiceFull = new VatElectronicInfo();
            $this->VatElectronicInvoiceFull->deserialize($param["VatElectronicInvoiceFull"]);
        }

        if (array_key_exists("MachinePrintedInvoice",$param) and $param["MachinePrintedInvoice"] !== null) {
            $this->MachinePrintedInvoice = new MachinePrintedInvoice();
            $this->MachinePrintedInvoice->deserialize($param["MachinePrintedInvoice"]);
        }

        if (array_key_exists("BusInvoice",$param) and $param["BusInvoice"] !== null) {
            $this->BusInvoice = new BusInvoice();
            $this->BusInvoice->deserialize($param["BusInvoice"]);
        }

        if (array_key_exists("ShippingInvoice",$param) and $param["ShippingInvoice"] !== null) {
            $this->ShippingInvoice = new ShippingInvoice();
            $this->ShippingInvoice->deserialize($param["ShippingInvoice"]);
        }

        if (array_key_exists("TollInvoice",$param) and $param["TollInvoice"] !== null) {
            $this->TollInvoice = new TollInvoice();
            $this->TollInvoice->deserialize($param["TollInvoice"]);
        }

        if (array_key_exists("OtherInvoice",$param) and $param["OtherInvoice"] !== null) {
            $this->OtherInvoice = new OtherInvoice();
            $this->OtherInvoice->deserialize($param["OtherInvoice"]);
        }

        if (array_key_exists("MotorVehicleSaleInvoice",$param) and $param["MotorVehicleSaleInvoice"] !== null) {
            $this->MotorVehicleSaleInvoice = new MotorVehicleSaleInvoice();
            $this->MotorVehicleSaleInvoice->deserialize($param["MotorVehicleSaleInvoice"]);
        }

        if (array_key_exists("UsedCarPurchaseInvoice",$param) and $param["UsedCarPurchaseInvoice"] !== null) {
            $this->UsedCarPurchaseInvoice = new UsedCarPurchaseInvoice();
            $this->UsedCarPurchaseInvoice->deserialize($param["UsedCarPurchaseInvoice"]);
        }

        if (array_key_exists("VatInvoiceRoll",$param) and $param["VatInvoiceRoll"] !== null) {
            $this->VatInvoiceRoll = new VatInvoiceRoll();
            $this->VatInvoiceRoll->deserialize($param["VatInvoiceRoll"]);
        }

        if (array_key_exists("TaxiTicket",$param) and $param["TaxiTicket"] !== null) {
            $this->TaxiTicket = new TaxiTicket();
            $this->TaxiTicket->deserialize($param["TaxiTicket"]);
        }

        if (array_key_exists("QuotaInvoice",$param) and $param["QuotaInvoice"] !== null) {
            $this->QuotaInvoice = new QuotaInvoice();
            $this->QuotaInvoice->deserialize($param["QuotaInvoice"]);
        }

        if (array_key_exists("AirTransport",$param) and $param["AirTransport"] !== null) {
            $this->AirTransport = new AirTransport();
            $this->AirTransport->deserialize($param["AirTransport"]);
        }

        if (array_key_exists("NonTaxIncomeGeneralBill",$param) and $param["NonTaxIncomeGeneralBill"] !== null) {
            $this->NonTaxIncomeGeneralBill = new NonTaxIncomeBill();
            $this->NonTaxIncomeGeneralBill->deserialize($param["NonTaxIncomeGeneralBill"]);
        }

        if (array_key_exists("NonTaxIncomeElectronicBill",$param) and $param["NonTaxIncomeElectronicBill"] !== null) {
            $this->NonTaxIncomeElectronicBill = new NonTaxIncomeBill();
            $this->NonTaxIncomeElectronicBill->deserialize($param["NonTaxIncomeElectronicBill"]);
        }

        if (array_key_exists("TrainTicket",$param) and $param["TrainTicket"] !== null) {
            $this->TrainTicket = new TrainTicket();
            $this->TrainTicket->deserialize($param["TrainTicket"]);
        }

        if (array_key_exists("MedicalOutpatientInvoice",$param) and $param["MedicalOutpatientInvoice"] !== null) {
            $this->MedicalOutpatientInvoice = new MedicalInvoice();
            $this->MedicalOutpatientInvoice->deserialize($param["MedicalOutpatientInvoice"]);
        }

        if (array_key_exists("MedicalHospitalizedInvoice",$param) and $param["MedicalHospitalizedInvoice"] !== null) {
            $this->MedicalHospitalizedInvoice = new MedicalInvoice();
            $this->MedicalHospitalizedInvoice->deserialize($param["MedicalHospitalizedInvoice"]);
        }
    }
}
