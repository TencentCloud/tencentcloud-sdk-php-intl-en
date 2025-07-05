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
 * DescribeAssetImageRiskListExport request structure.
 *
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method array getFilters() Obtain Filter
<li>Level- String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Behavior - String - Required: No - Risky behavior. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Type - String - Required: No - Risk type. Valid values: `1`, `2`.</li>
 * @method void setFilters(array $Filters) Set Filter
<li>Level- String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Behavior - String - Required: No - Risky behavior. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Type - String - Required: No - Risk type. Valid values: `1`, `2`.</li>
 */
class DescribeAssetImageRiskListExportRequest extends AbstractModel
{
    /**
     * @var array Export field
     */
    public $ExportField;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var array Filter
<li>Level- String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Behavior - String - Required: No - Risky behavior. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Type - String - Required: No - Risk type. Valid values: `1`, `2`.</li>
     */
    public $Filters;

    /**
     * @param array $ExportField Export field
     * @param string $ImageID Image ID
     * @param array $Filters Filter
<li>Level- String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Behavior - String - Required: No - Risky behavior. Valid values: `1`, `2`, `3`, `4`.</li>
<li>Type - String - Required: No - Risk type. Valid values: `1`, `2`.</li>
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
        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
