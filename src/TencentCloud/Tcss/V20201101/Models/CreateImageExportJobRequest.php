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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageExportJob request structure.
 *
 * @method array getFilters() Obtain Filter
<li>ImageName- String - Required: No - Image name</li>
<li>ScanStatus - String - Required: No - Image scanning status. Valid values: `notScan`, `scanning`, `scanned`, `scanErr`.</li>
<li>ImageID- String - Required: No - Image ID</li>
<li>SecurityRisk- String - Required: No - Security risks. Valid values: `VulCnt`, `VirusCnt`, `RiskCnt`, `IsTrustImage`.</li>
 * @method void setFilters(array $Filters) Set Filter
<li>ImageName- String - Required: No - Image name</li>
<li>ScanStatus - String - Required: No - Image scanning status. Valid values: `notScan`, `scanning`, `scanned`, `scanErr`.</li>
<li>ImageID- String - Required: No - Image ID</li>
<li>SecurityRisk- String - Required: No - Security risks. Valid values: `VulCnt`, `VirusCnt`, `RiskCnt`, `IsTrustImage`.</li>
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `asc`, `desc`.
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 */
class CreateImageExportJobRequest extends AbstractModel
{
    /**
     * @var array Filter
<li>ImageName- String - Required: No - Image name</li>
<li>ScanStatus - String - Required: No - Image scanning status. Valid values: `notScan`, `scanning`, `scanned`, `scanErr`.</li>
<li>ImageID- String - Required: No - Image ID</li>
<li>SecurityRisk- String - Required: No - Security risks. Valid values: `VulCnt`, `VirusCnt`, `RiskCnt`, `IsTrustImage`.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @var array Export field
     */
    public $ExportField;

    /**
     * @param array $Filters Filter
<li>ImageName- String - Required: No - Image name</li>
<li>ScanStatus - String - Required: No - Image scanning status. Valid values: `notScan`, `scanning`, `scanned`, `scanErr`.</li>
<li>ImageID- String - Required: No - Image ID</li>
<li>SecurityRisk- String - Required: No - Security risks. Valid values: `VulCnt`, `VirusCnt`, `RiskCnt`, `IsTrustImage`.</li>
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param string $By Sorting field
     * @param string $Order Sorting order. Valid values: `asc`, `desc`.
     * @param array $ExportField Export field
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }
    }
}
