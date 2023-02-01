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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccessControlsRuleExportJob request structure.
 *
 * @method array getFilters() Obtain Filter conditions
<li>`RuleType` - String  - Optional - Rule type</li>
<li>`Status` - String - Optional - Status</li>
 * @method void setFilters(array $Filters) Set Filter conditions
<li>`RuleType` - String  - Optional - Rule type</li>
<li>`Status` - String - Optional - Status</li>
 * @method string getOrder() Obtain Sorting order
 * @method void setOrder(string $Order) Set Sorting order
 * @method array getBy() Obtain Sorting field
 * @method void setBy(array $By) Set Sorting field
 * @method array getExportField() Obtain Fields to export
 * @method void setExportField(array $ExportField) Set Fields to export
 */
class CreateAccessControlsRuleExportJobRequest extends AbstractModel
{
    /**
     * @var array Filter conditions
<li>`RuleType` - String  - Optional - Rule type</li>
<li>`Status` - String - Optional - Status</li>
     */
    public $Filters;

    /**
     * @var string Sorting order
     */
    public $Order;

    /**
     * @var array Sorting field
     */
    public $By;

    /**
     * @var array Fields to export
     */
    public $ExportField;

    /**
     * @param array $Filters Filter conditions
<li>`RuleType` - String  - Optional - Rule type</li>
<li>`Status` - String - Optional - Status</li>
     * @param string $Order Sorting order
     * @param array $By Sorting field
     * @param array $ExportField Fields to export
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }
    }
}
