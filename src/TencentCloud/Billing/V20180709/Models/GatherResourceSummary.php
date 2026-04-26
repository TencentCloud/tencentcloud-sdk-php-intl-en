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
 * Resource collection summary
 *
 * @method string getPayerUin() Obtain Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method string getOwnerUin() Obtain User UIN: Account ID of the actual resource user
 * @method void setOwnerUin(string $OwnerUin) Set User UIN: Account ID of the actual resource user
 * @method string getOperateUin() Obtain Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 * @method void setOperateUin(string $OperateUin) Set Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 * @method string getInstanceType() Obtain Instance type code
 * @method void setInstanceType(string $InstanceType) Set Instance type code
 * @method string getInstanceTypeName() Obtain Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
 * @method void setInstanceTypeName(string $InstanceTypeName) Set Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
 * @method string getResourceId() Obtain Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
 * @method void setResourceId(string $ResourceId) Set Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
 * @method string getResourceName() Obtain Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
 * @method void setResourceName(string $ResourceName) Set Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a cost allocation unit
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a cost allocation unit
 * @method string getTreeNodeUniqKeyName() Obtain Name of a cost allocation unit
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) Set Name of a cost allocation unit
 * @method integer getRuleId() Obtain Allocation rule ID hit by the resource
 * @method void setRuleId(integer $RuleId) Set Allocation rule ID hit by the resource
 * @method string getRuleName() Obtain Allocation rule name hit by the resource
 * @method void setRuleName(string $RuleName) Set Allocation rule name hit by the resource
 * @method string getBusinessCode() Obtain Product code
 * @method void setBusinessCode(string $BusinessCode) Set Product code
 * @method string getBusinessCodeName() Obtain Product name: Various cloud products purchased by users
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: Various cloud products purchased by users
 * @method string getItemCode() Obtain Component name code
 * @method void setItemCode(string $ItemCode) Set Component name code
 * @method string getItemCodeName() Obtain Component name: The specific component of a product or service purchased by the user
 * @method void setItemCodeName(string $ItemCodeName) Set Component name: The specific component of a product or service purchased by the user
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name: The region where the resource is located
 * @method void setRegionName(string $RegionName) Set Region name: The region where the resource is located
 * @method array getTag() Obtain Allocation tag: The resource-bound tag
 * @method void setTag(array $Tag) Set Allocation tag: The resource-bound tag
 * @method string getRealTotalCost() Obtain Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method void setRealTotalCost(string $RealTotalCost) Set Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method string getCashPayAmount() Obtain Cash account expenditure (CNY): The amount paid through the cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash account expenditure (CNY): The amount paid through the cash account
 * @method string getVoucherPayAmount() Obtain Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
 * @method string getIncentivePayAmount() Obtain Gift account expenditure (CNY): The amount paid using free credits
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Gift account expenditure (CNY): The amount paid using free credits
 * @method string getTransferPayAmount() Obtain Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method integer getAllocationType() Obtain Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation
1 - Collection
-1 - Unallocated
 * @method void setAllocationType(integer $AllocationType) Set Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation
1 - Collection
-1 - Unallocated
 * @method AllocationTreeNode getBelongTreeNodeUniqKey() Obtain Information of the current allocation unit
 * @method void setBelongTreeNodeUniqKey(AllocationTreeNode $BelongTreeNodeUniqKey) Set Information of the current allocation unit
 * @method AllocationRule getBelongRule() Obtain Information on allocation rules hit by the current resource
 * @method void setBelongRule(AllocationRule $BelongRule) Set Information on allocation rules hit by the current resource
 * @method array getOtherTreeNodeUniqKeys() Obtain Information on other allocation units
 * @method void setOtherTreeNodeUniqKeys(array $OtherTreeNodeUniqKeys) Set Information on other allocation units
 * @method array getOtherRules() Obtain Information on other hit rules
 * @method void setOtherRules(array $OtherRules) Set Information on other hit rules
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 * @method void setProjectName(string $ProjectName) Set Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getProductCodeName() Obtain Subproduct name: Product subdivision type purchased by the user
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: Product subdivision type purchased by the user
 * @method string getPayMode() Obtain Billing mode code
 * @method void setPayMode(string $PayMode) Set Billing mode code
 * @method string getPayModeName() Obtain Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
 * @method void setPayModeName(string $PayModeName) Set Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
 * @method string getActionType() Obtain Transaction type code
 * @method void setActionType(string $ActionType) Set Transaction type code
 * @method string getActionTypeName() Obtain Transaction type: Detailed transaction type
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type: Detailed transaction type
 * @method string getSplitItemId() Obtain Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitItemId(string $SplitItemId) Set Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSplitItemName() Obtain Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitItemName(string $SplitItemName) Set Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GatherResourceSummary extends AbstractModel
{
    /**
     * @var string Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     */
    public $PayerUin;

    /**
     * @var string User UIN: Account ID of the actual resource user
     */
    public $OwnerUin;

    /**
     * @var string Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
     */
    public $OperateUin;

    /**
     * @var string Instance type code
     */
    public $InstanceType;

    /**
     * @var string Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
     */
    public $InstanceTypeName;

    /**
     * @var string Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
     */
    public $ResourceId;

    /**
     * @var string Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
     */
    public $ResourceName;

    /**
     * @var string Unique identifier of a cost allocation unit
     */
    public $TreeNodeUniqKey;

    /**
     * @var string Name of a cost allocation unit
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var integer Allocation rule ID hit by the resource
     */
    public $RuleId;

    /**
     * @var string Allocation rule name hit by the resource
     */
    public $RuleName;

    /**
     * @var string Product code
     */
    public $BusinessCode;

    /**
     * @var string Product name: Various cloud products purchased by users
     */
    public $BusinessCodeName;

    /**
     * @var string Component name code
     */
    public $ItemCode;

    /**
     * @var string Component name: The specific component of a product or service purchased by the user
     */
    public $ItemCodeName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Region name: The region where the resource is located
     */
    public $RegionName;

    /**
     * @var array Allocation tag: The resource-bound tag
     */
    public $Tag;

    /**
     * @var string Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     */
    public $RealTotalCost;

    /**
     * @var string Cash account expenditure (CNY): The amount paid through the cash account
     */
    public $CashPayAmount;

    /**
     * @var string Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
     */
    public $VoucherPayAmount;

    /**
     * @var string Gift account expenditure (CNY): The amount paid using free credits
     */
    public $IncentivePayAmount;

    /**
     * @var string Royalty account expenditure (CNY): The amount paid through the royalty account
     */
    public $TransferPayAmount;

    /**
     * @var integer Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation
1 - Collection
-1 - Unallocated
     */
    public $AllocationType;

    /**
     * @var AllocationTreeNode Information of the current allocation unit
     */
    public $BelongTreeNodeUniqKey;

    /**
     * @var AllocationRule Information on allocation rules hit by the current resource
     */
    public $BelongRule;

    /**
     * @var array Information on other allocation units
     */
    public $OtherTreeNodeUniqKeys;

    /**
     * @var array Information on other hit rules
     */
    public $OtherRules;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
     */
    public $ProjectName;

    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Subproduct name: Product subdivision type purchased by the user
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode code
     */
    public $PayMode;

    /**
     * @var string Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
     */
    public $PayModeName;

    /**
     * @var string Transaction type code
     */
    public $ActionType;

    /**
     * @var string Transaction type: Detailed transaction type
     */
    public $ActionTypeName;

    /**
     * @var string Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SplitItemId;

    /**
     * @var string Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SplitItemName;

    /**
     * @param string $PayerUin Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     * @param string $OwnerUin User UIN: Account ID of the actual resource user
     * @param string $OperateUin Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
     * @param string $InstanceType Instance type code
     * @param string $InstanceTypeName Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
     * @param string $ResourceId Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
     * @param string $ResourceName Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
     * @param string $TreeNodeUniqKey Unique identifier of a cost allocation unit
     * @param string $TreeNodeUniqKeyName Name of a cost allocation unit
     * @param integer $RuleId Allocation rule ID hit by the resource
     * @param string $RuleName Allocation rule name hit by the resource
     * @param string $BusinessCode Product code
     * @param string $BusinessCodeName Product name: Various cloud products purchased by users
     * @param string $ItemCode Component name code
     * @param string $ItemCodeName Component name: The specific component of a product or service purchased by the user
     * @param integer $RegionId Region ID
     * @param string $RegionName Region name: The region where the resource is located
     * @param array $Tag Allocation tag: The resource-bound tag
     * @param string $RealTotalCost Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     * @param string $CashPayAmount Cash account expenditure (CNY): The amount paid through the cash account
     * @param string $VoucherPayAmount Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
     * @param string $IncentivePayAmount Gift account expenditure (CNY): The amount paid using free credits
     * @param string $TransferPayAmount Royalty account expenditure (CNY): The amount paid through the royalty account
     * @param integer $AllocationType Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation
1 - Collection
-1 - Unallocated
     * @param AllocationTreeNode $BelongTreeNodeUniqKey Information of the current allocation unit
     * @param AllocationRule $BelongRule Information on allocation rules hit by the current resource
     * @param array $OtherTreeNodeUniqKeys Information on other allocation units
     * @param array $OtherRules Information on other hit rules
     * @param integer $ProjectId Project ID
     * @param string $ProjectName Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
     * @param string $ProductCode Subproduct code
     * @param string $ProductCodeName Subproduct name: Product subdivision type purchased by the user
     * @param string $PayMode Billing mode code
     * @param string $PayModeName Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
     * @param string $ActionType Transaction type code
     * @param string $ActionTypeName Transaction type: Detailed transaction type
     * @param string $SplitItemId Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SplitItemName Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceTypeName",$param) and $param["InstanceTypeName"] !== null) {
            $this->InstanceTypeName = $param["InstanceTypeName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new BillTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }

        if (array_key_exists("BelongTreeNodeUniqKey",$param) and $param["BelongTreeNodeUniqKey"] !== null) {
            $this->BelongTreeNodeUniqKey = new AllocationTreeNode();
            $this->BelongTreeNodeUniqKey->deserialize($param["BelongTreeNodeUniqKey"]);
        }

        if (array_key_exists("BelongRule",$param) and $param["BelongRule"] !== null) {
            $this->BelongRule = new AllocationRule();
            $this->BelongRule->deserialize($param["BelongRule"]);
        }

        if (array_key_exists("OtherTreeNodeUniqKeys",$param) and $param["OtherTreeNodeUniqKeys"] !== null) {
            $this->OtherTreeNodeUniqKeys = [];
            foreach ($param["OtherTreeNodeUniqKeys"] as $key => $value){
                $obj = new AllocationTreeNode();
                $obj->deserialize($value);
                array_push($this->OtherTreeNodeUniqKeys, $obj);
            }
        }

        if (array_key_exists("OtherRules",$param) and $param["OtherRules"] !== null) {
            $this->OtherRules = [];
            foreach ($param["OtherRules"] as $key => $value){
                $obj = new AllocationRule();
                $obj->deserialize($value);
                array_push($this->OtherRules, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("SplitItemId",$param) and $param["SplitItemId"] !== null) {
            $this->SplitItemId = $param["SplitItemId"];
        }

        if (array_key_exists("SplitItemName",$param) and $param["SplitItemName"] !== null) {
            $this->SplitItemName = $param["SplitItemName"];
        }
    }
}
