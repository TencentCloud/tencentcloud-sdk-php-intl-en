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
 * DescribeJustInTimeTranscodeTemplates request structure.
 *
 * @method array getNames() Obtain Template name filter condition, array length limit: 100.
 * @method void setNames(array $Names) Set Template name filter condition, array length limit: 100.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getType() Obtain Template type filter conditions, optional values:
<li>Preset: system preset task flow template;</li>
<li>Custom: user-defined task flow template. </li>
 * @method void setType(string $Type) Set Template type filter conditions, optional values:
<li>Preset: system preset task flow template;</li>
<li>Custom: user-defined task flow template. </li>
 * @method integer getOffset() Obtain Paging offset, default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset, default value: 0.
 * @method integer getLimit() Obtain Returns the number of records, default value: 10, maximum value: 100.
 * @method void setLimit(integer $Limit) Set Returns the number of records, default value: 10, maximum value: 100.
 */
class DescribeJustInTimeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var array Template name filter condition, array length limit: 100.
     */
    public $Names;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Template type filter conditions, optional values:
<li>Preset: system preset task flow template;</li>
<li>Custom: user-defined task flow template. </li>
     */
    public $Type;

    /**
     * @var integer Paging offset, default value: 0.
     */
    public $Offset;

    /**
     * @var integer Returns the number of records, default value: 10, maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $Names Template name filter condition, array length limit: 100.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Type Template type filter conditions, optional values:
<li>Preset: system preset task flow template;</li>
<li>Custom: user-defined task flow template. </li>
     * @param integer $Offset Paging offset, default value: 0.
     * @param integer $Limit Returns the number of records, default value: 10, maximum value: 100.
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
