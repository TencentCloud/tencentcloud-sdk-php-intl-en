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
 * DescribeAssetImageVulListExport request structure.
 *
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>Name- String - Required: No - Vulnerability name</li>
<li>Level - String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
 * @method void setFilters(array $Filters) Set Filter
<li>Name- String - Required: No - Vulnerability name</li>
<li>Level - String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
 */
class DescribeAssetImageVulListExportRequest extends AbstractModel
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
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter
<li>Name- String - Required: No - Vulnerability name</li>
<li>Level - String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
     */
    public $Filters;

    /**
     * @param array $ExportField Export field
     * @param string $ImageID Image ID
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>Name- String - Required: No - Vulnerability name</li>
<li>Level - String - Required: No - Risk level. Valid values: `1`, `2`, `3`, `4`.</li>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
