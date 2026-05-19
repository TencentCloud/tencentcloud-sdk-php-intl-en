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
 * DescribeWatermarkTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getType() Obtain Watermark type filter. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
 * @method void setType(string $Type) Set Watermark type filter. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method array getDefinitions() Obtain Filter condition for the watermark template unique identifier. The array length cannot exceed 100.
 * @method void setDefinitions(array $Definitions) Set Filter condition for the watermark template unique identifier. The array length cannot exceed 100.
 * @method integer getLimit() Obtain Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 * @method void setLimit(integer $Limit) Set Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 */
class DescribeWatermarkTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Watermark type filter. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
     */
    public $Type;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter condition for the watermark template unique identifier. The array length cannot exceed 100.
     */
    public $Definitions;

    /**
     * @var integer Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Type Watermark type filter. Valid values:
<li>image: image watermark.</li>
<li>Text: text watermark.</li>
<li>svg: SVG watermark.</li>
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param array $Definitions Filter condition for the watermark template unique identifier. The array length cannot exceed 100.
     * @param integer $Limit Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
