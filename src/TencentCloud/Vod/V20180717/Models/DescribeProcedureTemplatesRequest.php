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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProcedureTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method array getNames() Obtain <p>Task flow template name filter conditions. The array can contain up to 100 conditions.</p>
 * @method void setNames(array $Names) Set <p>Task flow template name filter conditions. The array can contain up to 100 conditions.</p>
 * @method string getType() Obtain <p>Filtering condition for the task flow template type. Valid values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
 * @method void setType(string $Type) Set <p>Filtering condition for the task flow template type. Valid values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method array getSortBy() Obtain <p>Specify the field to sort the returned results in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order can be desc (descending order) or asc (ascending order).</p><p>Input parameter limitation: Currently only the CreateTime field is supported for sorting.</p>
 * @method void setSortBy(array $SortBy) Set <p>Specify the field to sort the returned results in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order can be desc (descending order) or asc (ascending order).</p><p>Input parameter limitation: Currently only the CreateTime field is supported for sorting.</p>
 */
class DescribeProcedureTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>Task flow template name filter conditions. The array can contain up to 100 conditions.</p>
     */
    public $Names;

    /**
     * @var string <p>Filtering condition for the task flow template type. Valid values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
     */
    public $Type;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var array <p>Specify the field to sort the returned results in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order can be desc (descending order) or asc (ascending order).</p><p>Input parameter limitation: Currently only the CreateTime field is supported for sorting.</p>
     */
    public $SortBy;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param array $Names <p>Task flow template name filter conditions. The array can contain up to 100 conditions.</p>
     * @param string $Type <p>Filtering condition for the task flow template type. Valid values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     * @param array $SortBy <p>Specify the field to sort the returned results in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order can be desc (descending order) or asc (ascending order).</p><p>Input parameter limitation: Currently only the CreateTime field is supported for sorting.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = [];
            foreach ($param["SortBy"] as $key => $value){
                $obj = new SortBy();
                $obj->deserialize($value);
                array_push($this->SortBy, $obj);
            }
        }
    }
}
