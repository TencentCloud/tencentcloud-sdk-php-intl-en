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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDefinitions() Obtain Unique ID filter of watermarking templates. Array length limit: 100.
 * @method void setDefinitions(array $Definitions) Set Unique ID filter of watermarking templates. Array length limit: 100.
 * @method string getType() Obtain Watermark type filter. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
 * @method void setType(string $Type) Set Watermark type filter. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
 * @method integer getOffset() Obtain Paged offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paged offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries
<li>Default value: 10;</li>
<li>Maximum value: 100.</li>
 * @method void setLimit(integer $Limit) Set Number of returned entries
<li>Default value: 10;</li>
<li>Maximum value: 100.</li>
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */

/**
 *DescribeWatermarkTemplates request structure.
 */
class DescribeWatermarkTemplatesRequest extends AbstractModel
{
    /**
     * @var array Unique ID filter of watermarking templates. Array length limit: 100.
     */
    public $Definitions;

    /**
     * @var string Watermark type filter. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
     */
    public $Type;

    /**
     * @var integer Paged offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries
<li>Default value: 10;</li>
<li>Maximum value: 100.</li>
     */
    public $Limit;

    /**
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;
    /**
     * @param array $Definitions Unique ID filter of watermarking templates. Array length limit: 100.
     * @param string $Type Watermark type filter. Valid values:
<li>image: image watermark;</li>
<li>text: text watermark.</li>
     * @param integer $Offset Paged offset. Default value: 0.
     * @param integer $Limit Number of returned entries
<li>Default value: 10;</li>
<li>Maximum value: 100.</li>
     * @param integer $SubAppId [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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
        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
