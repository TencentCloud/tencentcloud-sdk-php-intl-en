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
 * Bill details
 *
 * @method string getBusinessCodeName() Obtain Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method string getProductCodeName() Obtain Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM Standard S1.
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM Standard S1.
 * @method string getPayModeName() Obtain Billing mode, which can be monthly subscription or pay-as-you-go.
 * @method void setPayModeName(string $PayModeName) Set Billing mode, which can be monthly subscription or pay-as-you-go.
 * @method string getProjectName() Obtain Project name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
 * @method void setProjectName(string $ProjectName) Set Project name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
 * @method string getRegionName() Obtain Region: The region to which a resource belongs, such as South China (Guangzhou).
 * @method void setRegionName(string $RegionName) Set Region: The region to which a resource belongs, such as South China (Guangzhou).
 * @method string getZoneName() Obtain Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
 * @method void setZoneName(string $ZoneName) Set Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
 * @method string getResourceId() Obtain Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.
 * @method void setResourceId(string $ResourceId) Set Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.
 * @method string getResourceName() Obtain Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
 * @method void setResourceName(string $ResourceName) Set Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
 * @method string getActionTypeName() Obtain Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
 * @method string getOrderId() Obtain Order ID: The order number for a monthly subscription purchase
 * @method void setOrderId(string $OrderId) Set Order ID: The order number for a monthly subscription purchase
 * @method string getBillId() Obtain Transaction ID: The bill number for a deducted payment
 * @method void setBillId(string $BillId) Set Transaction ID: The bill number for a deducted payment
 * @method string getPayTime() Obtain Transaction time: The time at which a payment was deducted
 * @method void setPayTime(string $PayTime) Set Transaction time: The time at which a payment was deducted
 * @method string getFeeBeginTime() Obtain Usage start time: The time at which product or service usage starts
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Usage start time: The time at which product or service usage starts
 * @method string getFeeEndTime() Obtain Usage end time: The time at which product or service usage ends
 * @method void setFeeEndTime(string $FeeEndTime) Set Usage end time: The time at which product or service usage ends
 * @method array getComponentSet() Obtain Component list
 * @method void setComponentSet(array $ComponentSet) Set Component list
 * @method string getPayerUin() Obtain Payer account ID: The account ID of the payer, which is the unique identifier of a Tencent Cloud user.
 * @method void setPayerUin(string $PayerUin) Set Payer account ID: The account ID of the payer, which is the unique identifier of a Tencent Cloud user.
 * @method string getOwnerUin() Obtain Owner account ID: The account ID of the actual resource user
 * @method void setOwnerUin(string $OwnerUin) Set Owner account ID: The account ID of the actual resource user
 * @method string getOperateUin() Obtain Operator account ID: The account or role ID of the operator who purchases or activates a resource
 * @method void setOperateUin(string $OperateUin) Set Operator account ID: The account or role ID of the operator who purchases or activates a resource
 * @method array getTags() Obtain Tag information. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessCode() Obtain Product code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCode(string $BusinessCode) Set Product code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductCode() Obtain Subproduct code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductCode(string $ProductCode) Set Subproduct code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionType() Obtain Transaction type code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(string $ActionType) Set Transaction type code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionId() Obtain Region ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(string $RegionId) Set Region ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method array getPriceInfo() Obtain Price attribute: A set of attributes which will determine the price of a component, apart from unit price and usage duration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceInfo(array $PriceInfo) Set Price attribute: A set of attributes which will determine the price of a component, apart from unit price and usage duration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BillDetailAssociatedOrder getAssociatedOrder() Obtain Associated transaction document ID: The ID of the document associated with a transaction, such as a write-off order, the original order showing a deduction error during first settlement, a restructured order, or the original purchase order corresponding to a refund order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedOrder(BillDetailAssociatedOrder $AssociatedOrder) Set Associated transaction document ID: The ID of the document associated with a transaction, such as a write-off order, the original order showing a deduction error during first settlement, a restructured order, or the original purchase order corresponding to a refund order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormula() Obtain Calculation formula: The detailed calculation formula for a specific transaction type, such as refund or configuration change.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormula(string $Formula) Set Calculation formula: The detailed calculation formula for a specific transaction type, such as refund or configuration change.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormulaUrl() Obtain Billing rules: Official website links for detailed billing rules of each product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormulaUrl(string $FormulaUrl) Set Billing rules: Official website links for detailed billing rules of each product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillDay() Obtain Billing dayNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillDay(string $BillDay) Set Billing dayNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillMonth() Obtain Billing monthNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillMonth(string $BillMonth) Set Billing monthNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain Billing record IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Billing record IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionType() Obtain Domestic and international codesNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionType(string $RegionType) Set Domestic and international codesNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionTypeName() Obtain Domestic and International: The region type to which the resource belongs (domestic, international)Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionTypeName(string $RegionTypeName) Set Domestic and International: The region type to which the resource belongs (domestic, international)Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReserveDetail() Obtain Note attributes (instance configuration): Other note information, such as the reserved instance, the reserved instance type, the transaction type, and the region information on both ends of the CCN product.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReserveDetail(string $ReserveDetail) Set Note attributes (instance configuration): Other note information, such as the reserved instance, the reserved instance type, the transaction type, and the region information on both ends of the CCN product.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscountObject() Obtain the discount object for the current consumption item, such as official website discount, user discount, and event discount.
 * @method void setDiscountObject(string $DiscountObject) Set the discount object for the current consumption item, such as official website discount, user discount, and event discount.
 * @method string getDiscountType() Obtain the discount type for the current consumption item, such as discount and contract price.

 * @method void setDiscountType(string $DiscountType) Set the discount type for the current consumption item, such as discount and contract price.

 * @method string getDiscountContent() Obtain supplementary description of the discount type, such as 0.2.
 * @method void setDiscountContent(string $DiscountContent) Set supplementary description of the discount type, such as 0.2.
 */
class BillDetail extends AbstractModel
{
    /**
     * @var string Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     */
    public $BusinessCodeName;

    /**
     * @var string Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM Standard S1.
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode, which can be monthly subscription or pay-as-you-go.
     */
    public $PayModeName;

    /**
     * @var string Project name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
     */
    public $ProjectName;

    /**
     * @var string Region: The region to which a resource belongs, such as South China (Guangzhou).
     */
    public $RegionName;

    /**
     * @var string Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
     */
    public $ZoneName;

    /**
     * @var string Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.
     */
    public $ResourceId;

    /**
     * @var string Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
     */
    public $ResourceName;

    /**
     * @var string Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
     */
    public $ActionTypeName;

    /**
     * @var string Order ID: The order number for a monthly subscription purchase
     */
    public $OrderId;

    /**
     * @var string Transaction ID: The bill number for a deducted payment
     */
    public $BillId;

    /**
     * @var string Transaction time: The time at which a payment was deducted
     */
    public $PayTime;

    /**
     * @var string Usage start time: The time at which product or service usage starts
     */
    public $FeeBeginTime;

    /**
     * @var string Usage end time: The time at which product or service usage ends
     */
    public $FeeEndTime;

    /**
     * @var array Component list
     */
    public $ComponentSet;

    /**
     * @var string Payer account ID: The account ID of the payer, which is the unique identifier of a Tencent Cloud user.
     */
    public $PayerUin;

    /**
     * @var string Owner account ID: The account ID of the actual resource user
     */
    public $OwnerUin;

    /**
     * @var string Operator account ID: The account or role ID of the operator who purchases or activates a resource
     */
    public $OperateUin;

    /**
     * @var array Tag information. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Product code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCode;

    /**
     * @var string Subproduct code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductCode;

    /**
     * @var string Transaction type code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var string Region ID. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array Price attribute: A set of attributes which will determine the price of a component, apart from unit price and usage duration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceInfo;

    /**
     * @var BillDetailAssociatedOrder Associated transaction document ID: The ID of the document associated with a transaction, such as a write-off order, the original order showing a deduction error during first settlement, a restructured order, or the original purchase order corresponding to a refund order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedOrder;

    /**
     * @var string Calculation formula: The detailed calculation formula for a specific transaction type, such as refund or configuration change.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Formula;

    /**
     * @var string Billing rules: Official website links for detailed billing rules of each product.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormulaUrl;

    /**
     * @var string Billing dayNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillDay;

    /**
     * @var string Billing monthNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillMonth;

    /**
     * @var string Billing record IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Domestic and international codesNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionType;

    /**
     * @var string Domestic and International: The region type to which the resource belongs (domestic, international)Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionTypeName;

    /**
     * @var string Note attributes (instance configuration): Other note information, such as the reserved instance, the reserved instance type, the transaction type, and the region information on both ends of the CCN product.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReserveDetail;

    /**
     * @var string the discount object for the current consumption item, such as official website discount, user discount, and event discount.
     */
    public $DiscountObject;

    /**
     * @var string the discount type for the current consumption item, such as discount and contract price.

     */
    public $DiscountType;

    /**
     * @var string supplementary description of the discount type, such as 0.2.
     */
    public $DiscountContent;

    /**
     * @param string $BusinessCodeName Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     * @param string $ProductCodeName Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM Standard S1.
     * @param string $PayModeName Billing mode, which can be monthly subscription or pay-as-you-go.
     * @param string $ProjectName Project name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
     * @param string $RegionName Region: The region to which a resource belongs, such as South China (Guangzhou).
     * @param string $ZoneName Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
     * @param string $ResourceId Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.
     * @param string $ResourceName Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
     * @param string $ActionTypeName Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
     * @param string $OrderId Order ID: The order number for a monthly subscription purchase
     * @param string $BillId Transaction ID: The bill number for a deducted payment
     * @param string $PayTime Transaction time: The time at which a payment was deducted
     * @param string $FeeBeginTime Usage start time: The time at which product or service usage starts
     * @param string $FeeEndTime Usage end time: The time at which product or service usage ends
     * @param array $ComponentSet Component list
     * @param string $PayerUin Payer account ID: The account ID of the payer, which is the unique identifier of a Tencent Cloud user.
     * @param string $OwnerUin Owner account ID: The account ID of the actual resource user
     * @param string $OperateUin Operator account ID: The account or role ID of the operator who purchases or activates a resource
     * @param array $Tags Tag information. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessCode Product code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductCode Subproduct code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionType Transaction type code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionId Region ID. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
     * @param array $PriceInfo Price attribute: A set of attributes which will determine the price of a component, apart from unit price and usage duration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BillDetailAssociatedOrder $AssociatedOrder Associated transaction document ID: The ID of the document associated with a transaction, such as a write-off order, the original order showing a deduction error during first settlement, a restructured order, or the original purchase order corresponding to a refund order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Formula Calculation formula: The detailed calculation formula for a specific transaction type, such as refund or configuration change.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormulaUrl Billing rules: Official website links for detailed billing rules of each product.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillDay Billing dayNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillMonth Billing monthNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id Billing record IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionType Domestic and international codesNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionTypeName Domestic and International: The region type to which the resource belongs (domestic, international)Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReserveDetail Note attributes (instance configuration): Other note information, such as the reserved instance, the reserved instance type, the transaction type, and the region information on both ends of the CCN product.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscountObject the discount object for the current consumption item, such as official website discount, user discount, and event discount.
     * @param string $DiscountType the discount type for the current consumption item, such as discount and contract price.

     * @param string $DiscountContent supplementary description of the discount type, such as 0.2.
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
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new BillDetailComponent();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PriceInfo",$param) and $param["PriceInfo"] !== null) {
            $this->PriceInfo = $param["PriceInfo"];
        }

        if (array_key_exists("AssociatedOrder",$param) and $param["AssociatedOrder"] !== null) {
            $this->AssociatedOrder = new BillDetailAssociatedOrder();
            $this->AssociatedOrder->deserialize($param["AssociatedOrder"]);
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("FormulaUrl",$param) and $param["FormulaUrl"] !== null) {
            $this->FormulaUrl = $param["FormulaUrl"];
        }

        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = $param["BillDay"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("ReserveDetail",$param) and $param["ReserveDetail"] !== null) {
            $this->ReserveDetail = $param["ReserveDetail"];
        }

        if (array_key_exists("DiscountObject",$param) and $param["DiscountObject"] !== null) {
            $this->DiscountObject = $param["DiscountObject"];
        }

        if (array_key_exists("DiscountType",$param) and $param["DiscountType"] !== null) {
            $this->DiscountType = $param["DiscountType"];
        }

        if (array_key_exists("DiscountContent",$param) and $param["DiscountContent"] !== null) {
            $this->DiscountContent = $param["DiscountContent"];
        }
    }
}
