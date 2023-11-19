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
 * DescribeQualityInspectTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [subapplication](https://www.tencentcloud.com/zh/document/product/266/33987?has_map=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [subapplication](https://www.tencentcloud.com/zh/document/product/266/33987?has_map=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method array getDefinitions() Obtain Media quality inspect template list. Length limit: 100.
 * @method void setDefinitions(array $Definitions) Set Media quality inspect template list. Length limit: 100.
 * @method string getType() Obtain Template type filter conditions, optional values: <li>Preset: system preset template;</li> <li>Custom: user-defined template. </li>
 * @method void setType(string $Type) Set Template type filter conditions, optional values: <li>Preset: system preset template;</li> <li>Custom: user-defined template. </li>
 * @method integer getOffset() Obtain Paging offset, default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset, default value: 0.
 * @method integer getLimit() Obtain Back record count, default value: 10, maximum value: 100.
 * @method void setLimit(integer $Limit) Set Back record count, default value: 10, maximum value: 100.
 */
class DescribeQualityInspectTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [subapplication](https://www.tencentcloud.com/zh/document/product/266/33987?has_map=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     */
    public $SubAppId;

    /**
     * @var array Media quality inspect template list. Length limit: 100.
     */
    public $Definitions;

    /**
     * @var string Template type filter conditions, optional values: <li>Preset: system preset template;</li> <li>Custom: user-defined template. </li>
     */
    public $Type;

    /**
     * @var integer Paging offset, default value: 0.
     */
    public $Offset;

    /**
     * @var integer Back record count, default value: 10, maximum value: 100.
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>The VOD [subapplication](https://www.tencentcloud.com/zh/document/product/266/33987?has_map=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     * @param array $Definitions Media quality inspect template list. Length limit: 100.
     * @param string $Type Template type filter conditions, optional values: <li>Preset: system preset template;</li> <li>Custom: user-defined template. </li>
     * @param integer $Offset Paging offset, default value: 0.
     * @param integer $Limit Back record count, default value: 10, maximum value: 100.
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
