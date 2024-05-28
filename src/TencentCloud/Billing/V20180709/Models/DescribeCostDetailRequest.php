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
 * DescribeCostDetail request structure.
 *
 * @method integer getLimit() Obtain The number of entries returned at a time. The maximum value is `100`.
 * @method void setLimit(integer $Limit) Set The number of entries returned at a time. The maximum value is `100`.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getBeginTime() Obtain Cycle start time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
 * @method void setBeginTime(string $BeginTime) Set Cycle start time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
 * @method string getEndTime() Obtain Cycle end time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
 * @method void setEndTime(string $EndTime) Set Cycle end time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
 * @method integer getNeedRecordNum() Obtain Whether the total number of records in the list is needed, for frontend pagination1: needed, 0: not needed
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Whether the total number of records in the list is needed, for frontend pagination1: needed, 0: not needed
 * @method string getMonth() Obtain Month, in the format of yyyy-mm. Either Month or BeginTime&EndTime must be entered, and if BeginTime&EndTime is entered, Month becomes invalid. It cannot be earlier than the month when cost analysis is activated. Data of up to 24 months can be retrieved.
 * @method void setMonth(string $Month) Set Month, in the format of yyyy-mm. Either Month or BeginTime&EndTime must be entered, and if BeginTime&EndTime is entered, Month becomes invalid. It cannot be earlier than the month when cost analysis is activated. Data of up to 24 months can be retrieved.
 * @method string getProductCode() Obtain Used to query information of a specified product (currently not available)
 * @method void setProductCode(string $ProductCode) Set Used to query information of a specified product (currently not available)
 * @method string getPayMode() Obtain Payment mode. Options include prePay and postPay.
 * @method void setPayMode(string $PayMode) Set Payment mode. Options include prePay and postPay.
 * @method string getResourceId() Obtain Used to query information of a specified resource
 * @method void setResourceId(string $ResourceId) Set Used to query information of a specified resource
 */
class DescribeCostDetailRequest extends AbstractModel
{
    /**
     * @var integer The number of entries returned at a time. The maximum value is `100`.
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Cycle start time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
     */
    public $BeginTime;

    /**
     * @var string Cycle end time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
     */
    public $EndTime;

    /**
     * @var integer Whether the total number of records in the list is needed, for frontend pagination1: needed, 0: not needed
     */
    public $NeedRecordNum;

    /**
     * @var string Month, in the format of yyyy-mm. Either Month or BeginTime&EndTime must be entered, and if BeginTime&EndTime is entered, Month becomes invalid. It cannot be earlier than the month when cost analysis is activated. Data of up to 24 months can be retrieved.
     */
    public $Month;

    /**
     * @var string Used to query information of a specified product (currently not available)
     */
    public $ProductCode;

    /**
     * @var string Payment mode. Options include prePay and postPay.
     */
    public $PayMode;

    /**
     * @var string Used to query information of a specified resource
     */
    public $ResourceId;

    /**
     * @param integer $Limit The number of entries returned at a time. The maximum value is `100`.
     * @param integer $Offset Offset
     * @param string $BeginTime Cycle start time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
     * @param string $EndTime Cycle end time in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be entered, and if this field is present, Month becomes invalid. BeginTime and EndTime must be entered together, and must be in the same month. Cross-month retrieval is not currently supported. Data retrievable is the data after cost analysis is activated and within the past 24 months.
     * @param integer $NeedRecordNum Whether the total number of records in the list is needed, for frontend pagination1: needed, 0: not needed
     * @param string $Month Month, in the format of yyyy-mm. Either Month or BeginTime&EndTime must be entered, and if BeginTime&EndTime is entered, Month becomes invalid. It cannot be earlier than the month when cost analysis is activated. Data of up to 24 months can be retrieved.
     * @param string $ProductCode Used to query information of a specified product (currently not available)
     * @param string $PayMode Payment mode. Options include prePay and postPay.
     * @param string $ResourceId Used to query information of a specified resource
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
