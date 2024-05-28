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
 * Consumption details data type
 *
 * @method string getPayerUin() Obtain Payer UIN
 * @method void setPayerUin(string $PayerUin) Set Payer UIN
 * @method string getBusinessCodeName() Obtain Product name
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name
 * @method string getProductCodeName() Obtain Subproduct name
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name
 * @method string getPayModeName() Obtain Billing mode name
 * @method void setPayModeName(string $PayModeName) Set Billing mode name
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getRegionName() Obtain Region Name
 * @method void setRegionName(string $RegionName) Set Region Name
 * @method string getZoneName() Obtain Zone name
 * @method void setZoneName(string $ZoneName) Set Zone name
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getActionTypeName() Obtain Type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionTypeName(string $ActionTypeName) Set Type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrderId() Obtain Order ID
 * @method void setOrderId(string $OrderId) Set Order ID
 * @method string getBillId() Obtain Transaction ID
 * @method void setBillId(string $BillId) Set Transaction ID
 * @method string getFeeBeginTime() Obtain Start time of fees
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Start time of fees
 * @method string getFeeEndTime() Obtain End time of fees
 * @method void setFeeEndTime(string $FeeEndTime) Set End time of fees
 * @method array getComponentSet() Obtain Component details
 * @method void setComponentSet(array $ComponentSet) Set Component details
 * @method string getProductCode() Obtain Subproduct name code
 * @method void setProductCode(string $ProductCode) Set Subproduct name code
 */
class CostDetail extends AbstractModel
{
    /**
     * @var string Payer UIN
     */
    public $PayerUin;

    /**
     * @var string Product name
     */
    public $BusinessCodeName;

    /**
     * @var string Subproduct name
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode name
     */
    public $PayModeName;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var string Region Name
     */
    public $RegionName;

    /**
     * @var string Zone name
     */
    public $ZoneName;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource name
     */
    public $ResourceName;

    /**
     * @var string Type nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionTypeName;

    /**
     * @var string Order ID
     */
    public $OrderId;

    /**
     * @var string Transaction ID
     */
    public $BillId;

    /**
     * @var string Start time of fees
     */
    public $FeeBeginTime;

    /**
     * @var string End time of fees
     */
    public $FeeEndTime;

    /**
     * @var array Component details
     */
    public $ComponentSet;

    /**
     * @var string Subproduct name code
     */
    public $ProductCode;

    /**
     * @param string $PayerUin Payer UIN
     * @param string $BusinessCodeName Product name
     * @param string $ProductCodeName Subproduct name
     * @param string $PayModeName Billing mode name
     * @param string $ProjectName Project name
     * @param string $RegionName Region Name
     * @param string $ZoneName Zone name
     * @param string $ResourceId Resource ID
     * @param string $ResourceName Resource name
     * @param string $ActionTypeName Type nameNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrderId Order ID
     * @param string $BillId Transaction ID
     * @param string $FeeBeginTime Start time of fees
     * @param string $FeeEndTime End time of fees
     * @param array $ComponentSet Component details
     * @param string $ProductCode Subproduct name code
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

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new CostComponentSet();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }
    }
}
