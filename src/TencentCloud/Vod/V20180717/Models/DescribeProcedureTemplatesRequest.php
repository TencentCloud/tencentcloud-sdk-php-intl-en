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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method array getNames() Obtain <p>Task flow template name filter conditions, with an array length limit of 100.</p>
 * @method void setNames(array $Names) Set <p>Task flow template name filter conditions, with an array length limit of 100.</p>
 * @method string getType() Obtain <p>Task flow template type filter conditions. Available values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
 * @method void setType(string $Type) Set <p>Task flow template type filter conditions. Available values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method array getSortBy() Obtain <p>Sort the returned results by the specified field in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order is desc (in descending order) or asc (in ascending order)</p><p>Input parameter limit: currently only supports CreateTime as the sorting field</p>
 * @method void setSortBy(array $SortBy) Set <p>Sort the returned results by the specified field in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order is desc (in descending order) or asc (in ascending order)</p><p>Input parameter limit: currently only supports CreateTime as the sorting field</p>
 */
class DescribeProcedureTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>Task flow template name filter conditions, with an array length limit of 100.</p>
     */
    public $Names;

    /**
     * @var string <p>Task flow template type filter conditions. Available values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
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
     * @var array <p>Sort the returned results by the specified field in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order is desc (in descending order) or asc (in ascending order)</p><p>Input parameter limit: currently only supports CreateTime as the sorting field</p>
     */
    public $SortBy;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     * @param array $Names <p>Task flow template name filter conditions, with an array length limit of 100.</p>
     * @param string $Type <p>Task flow template type filter conditions. Available values:</p><li>Preset: system preset task flow template;</li><li>Custom: user-defined task flow template.</li>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     * @param array $SortBy <p>Sort the returned results by the specified field in ascending or descending order. Sort.Field currently only supports CreateTime. Sort.Order is desc (in descending order) or asc (in ascending order)</p><p>Input parameter limit: currently only supports CreateTime as the sorting field</p>
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
