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
 * Budget management custom fee range parameter
 *
 * @method array getBusiness() Obtain <p>Product.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusiness(array $Business) Set <p>Product.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayMode() Obtain <p>Billing mode</p><p>Enumeration value:</p><ul><li>prePay: Monthly Subscription</li><li>postPay: Pay-As-You-Go</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(array $PayMode) Set <p>Billing mode</p><p>Enumeration value:</p><ul><li>prePay: Monthly Subscription</li><li>postPay: Pay-As-You-Go</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProductCodes() Obtain <p>Subproduct</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductCodes(array $ProductCodes) Set <p>Subproduct</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getComponentCodes() Obtain <p>Component code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentCodes(array $ComponentCodes) Set <p>Component code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain <p>Region.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set <p>Region.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRegionIds() Obtain <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionIds(array $RegionIds) Set <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProjectIds() Obtain <p>Project</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectIds(array $ProjectIds) Set <p>Project</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActionTypes() Obtain <p>Transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionTypes(array $ActionTypes) Set <p>Transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConsumptionTypes() Obtain <p>Consumption type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumptionTypes(array $ConsumptionTypes) Set <p>Consumption type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain <p>Tag.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set <p>Tag.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayerUins() Obtain <p>Leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerUins(array $PayerUins) Set <p>Leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOwnerUins() Obtain <p>Primary user Uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUins(array $OwnerUins) Set <p>Primary user Uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTreeNodeUniqKeys() Obtain <p>Unique key of the leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) Set <p>Unique key of the leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetConditionsForm extends AbstractModel
{
    /**
     * @var array <p>Product.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @var array <p>Billing mode</p><p>Enumeration value:</p><ul><li>prePay: Monthly Subscription</li><li>postPay: Pay-As-You-Go</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var array <p>Subproduct</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductCodes;

    /**
     * @var array <p>Component code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentCodes;

    /**
     * @var array <p>Region.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var array <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionIds;

    /**
     * @var array <p>Project</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectIds;

    /**
     * @var array <p>Transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionTypes;

    /**
     * @var array <p>Consumption type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumptionTypes;

    /**
     * @var array <p>Tag.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array <p>Leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerUins;

    /**
     * @var array <p>Primary user Uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUins;

    /**
     * @var array <p>Unique key of the leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TreeNodeUniqKeys;

    /**
     * @param array $Business <p>Product.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayMode <p>Billing mode</p><p>Enumeration value:</p><ul><li>prePay: Monthly Subscription</li><li>postPay: Pay-As-You-Go</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProductCodes <p>Subproduct</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ComponentCodes <p>Component code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds <p>Region.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RegionIds <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProjectIds <p>Project</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ActionTypes <p>Transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConsumptionTypes <p>Consumption type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags <p>Tag.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayerUins <p>Leaf-level cost allocation unit</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OwnerUins <p>Primary user Uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TreeNodeUniqKeys <p>Unique key of the leaf-level cost allocation unit</p>
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("ConsumptionTypes",$param) and $param["ConsumptionTypes"] !== null) {
            $this->ConsumptionTypes = $param["ConsumptionTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagsForm();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PayerUins",$param) and $param["PayerUins"] !== null) {
            $this->PayerUins = $param["PayerUins"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }
    }
}
