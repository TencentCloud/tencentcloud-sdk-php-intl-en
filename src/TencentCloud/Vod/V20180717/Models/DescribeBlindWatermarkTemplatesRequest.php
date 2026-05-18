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
 * DescribeBlindWatermarkTemplates request structure.
 *
 * @method integer getSubAppId() Obtain VOD application ID. Starting from December 25, 2023, customers who activate on-demand services must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).
 * @method void setSubAppId(integer $SubAppId) Set VOD application ID. Starting from December 25, 2023, customers who activate on-demand services must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).
 * @method array getDefinitions() Obtain Filtering condition for the unique identifier of the digital watermark template. The array length cannot exceed 100.
 * @method void setDefinitions(array $Definitions) Set Filtering condition for the unique identifier of the digital watermark template. The array length cannot exceed 100.
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 * @method void setLimit(integer $Limit) Set Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 */
class DescribeBlindWatermarkTemplatesRequest extends AbstractModel
{
    /**
     * @var integer VOD application ID. Starting from December 25, 2023, customers who activate on-demand services must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).
     */
    public $SubAppId;

    /**
     * @var array Filtering condition for the unique identifier of the digital watermark template. The array length cannot exceed 100.
     */
    public $Definitions;

    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
     */
    public $Type;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries
<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
     */
    public $Limit;

    /**
     * @param integer $SubAppId VOD application ID. Starting from December 25, 2023, customers who activate on-demand services must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).
     * @param array $Definitions Filtering condition for the unique identifier of the digital watermark template. The array length cannot exceed 100.
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
     * @param integer $Offset Pagination offset. Default value: 0.
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
    }
}
