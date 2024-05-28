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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing filter criteria object
 *
 * @method integer getTimeRange() Obtain Only supports two values: 6 and 12.
 * @method void setTimeRange(integer $TimeRange) Set Only supports two values: 6 and 12.
 * @method string getBusinessCode() Obtain Product name code
 * @method void setBusinessCode(string $BusinessCode) Set Product name code
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getPayMode() Obtain Payment mode. Options include prePay and postPay.
 * @method void setPayMode(string $PayMode) Set Payment mode. Options include prePay and postPay.
 * @method string getResourceKeyword() Obtain Resource keyword
 * @method void setResourceKeyword(string $ResourceKeyword) Set Resource keyword
 * @method array getBusinessCodes() Obtain Product name code
 * @method void setBusinessCodes(array $BusinessCodes) Set Product name code
 * @method array getProductCodes() Obtain Subproduct name code
 * @method void setProductCodes(array $ProductCodes) Set Subproduct name code
 * @method array getRegionIds() Obtain Region ID
 * @method void setRegionIds(array $RegionIds) Set Region ID
 * @method array getProjectIds() Obtain Project ID
 * @method void setProjectIds(array $ProjectIds) Set Project ID
 * @method array getPayModes() Obtain Payment mode. Options include prePay and postPay.
 * @method void setPayModes(array $PayModes) Set Payment mode. Options include prePay and postPay.
 * @method array getActionTypes() Obtain Transaction type
 * @method void setActionTypes(array $ActionTypes) Set Transaction type
 * @method integer getHideFreeCost() Obtain Whether to hide zero-amount transactions
 * @method void setHideFreeCost(integer $HideFreeCost) Set Whether to hide zero-amount transactions
 * @method string getOrderByCost() Obtain Sorting rule. Options include desc and asc.
 * @method void setOrderByCost(string $OrderByCost) Set Sorting rule. Options include desc and asc.
 * @method array getBillIds() Obtain Transaction ID
 * @method void setBillIds(array $BillIds) Set Transaction ID
 * @method array getComponentCodes() Obtain Component code
 * @method void setComponentCodes(array $ComponentCodes) Set Component code
 * @method array getFileIds() Obtain File ID
 * @method void setFileIds(array $FileIds) Set File ID
 * @method array getFileTypes() Obtain File type
 * @method void setFileTypes(array $FileTypes) Set File type
 * @method array getStatus() Obtain Status
 * @method void setStatus(array $Status) Set Status
 */
class Conditions extends AbstractModel
{
    /**
     * @var integer Only supports two values: 6 and 12.
     */
    public $TimeRange;

    /**
     * @var string Product name code
     */
    public $BusinessCode;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Payment mode. Options include prePay and postPay.
     */
    public $PayMode;

    /**
     * @var string Resource keyword
     */
    public $ResourceKeyword;

    /**
     * @var array Product name code
     */
    public $BusinessCodes;

    /**
     * @var array Subproduct name code
     */
    public $ProductCodes;

    /**
     * @var array Region ID
     */
    public $RegionIds;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var array Payment mode. Options include prePay and postPay.
     */
    public $PayModes;

    /**
     * @var array Transaction type
     */
    public $ActionTypes;

    /**
     * @var integer Whether to hide zero-amount transactions
     */
    public $HideFreeCost;

    /**
     * @var string Sorting rule. Options include desc and asc.
     */
    public $OrderByCost;

    /**
     * @var array Transaction ID
     */
    public $BillIds;

    /**
     * @var array Component code
     */
    public $ComponentCodes;

    /**
     * @var array File ID
     */
    public $FileIds;

    /**
     * @var array File type
     */
    public $FileTypes;

    /**
     * @var array Status
     */
    public $Status;

    /**
     * @param integer $TimeRange Only supports two values: 6 and 12.
     * @param string $BusinessCode Product name code
     * @param integer $ProjectId Project ID
     * @param integer $RegionId Region ID
     * @param string $PayMode Payment mode. Options include prePay and postPay.
     * @param string $ResourceKeyword Resource keyword
     * @param array $BusinessCodes Product name code
     * @param array $ProductCodes Subproduct name code
     * @param array $RegionIds Region ID
     * @param array $ProjectIds Project ID
     * @param array $PayModes Payment mode. Options include prePay and postPay.
     * @param array $ActionTypes Transaction type
     * @param integer $HideFreeCost Whether to hide zero-amount transactions
     * @param string $OrderByCost Sorting rule. Options include desc and asc.
     * @param array $BillIds Transaction ID
     * @param array $ComponentCodes Component code
     * @param array $FileIds File ID
     * @param array $FileTypes File type
     * @param array $Status Status
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceKeyword",$param) and $param["ResourceKeyword"] !== null) {
            $this->ResourceKeyword = $param["ResourceKeyword"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("HideFreeCost",$param) and $param["HideFreeCost"] !== null) {
            $this->HideFreeCost = $param["HideFreeCost"];
        }

        if (array_key_exists("OrderByCost",$param) and $param["OrderByCost"] !== null) {
            $this->OrderByCost = $param["OrderByCost"];
        }

        if (array_key_exists("BillIds",$param) and $param["BillIds"] !== null) {
            $this->BillIds = $param["BillIds"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
