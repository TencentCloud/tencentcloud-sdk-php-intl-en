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
 * DescribeTranscodeTemplates request structure.
 *
 * @method array getDefinitions() Obtain Unique ID filter of transcoding templates. Array length limit: 100.
 * @method void setDefinitions(array $Definitions) Set Unique ID filter of transcoding templates. Array length limit: 100.
 * @method string getType() Obtain Template type filter. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type filter. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method string getContainerType() Obtain Container filter. Valid values:
<li>Video: video container that can contain both video stream and audio stream;</li>
<li>PureAudio: audio container that can contain only audio stream.</li>
 * @method void setContainerType(string $ContainerType) Set Container filter. Valid values:
<li>Video: video container that can contain both video stream and audio stream;</li>
<li>PureAudio: audio container that can contain only audio stream.</li>
 * @method string getTEHDType() Obtain TESHD filter, which is used to filter common transcoding or ultra-fast HD transcoding templates. Valid values:
<li>Common: Common transcoding template;</li>
<li>TEHD: TESHD template.</li>
 * @method void setTEHDType(string $TEHDType) Set TESHD filter, which is used to filter common transcoding or ultra-fast HD transcoding templates. Valid values:
<li>Common: Common transcoding template;</li>
<li>TEHD: TESHD template.</li>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var array Unique ID filter of transcoding templates. Array length limit: 100.
     */
    public $Definitions;

    /**
     * @var string Template type filter. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Container filter. Valid values:
<li>Video: video container that can contain both video stream and audio stream;</li>
<li>PureAudio: audio container that can contain only audio stream.</li>
     */
    public $ContainerType;

    /**
     * @var string TESHD filter, which is used to filter common transcoding or ultra-fast HD transcoding templates. Valid values:
<li>Common: Common transcoding template;</li>
<li>TEHD: TESHD template.</li>
     */
    public $TEHDType;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param array $Definitions Unique ID filter of transcoding templates. Array length limit: 100.
     * @param string $Type Template type filter. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     * @param string $ContainerType Container filter. Valid values:
<li>Video: video container that can contain both video stream and audio stream;</li>
<li>PureAudio: audio container that can contain only audio stream.</li>
     * @param string $TEHDType TESHD filter, which is used to filter common transcoding or ultra-fast HD transcoding templates. Valid values:
<li>Common: Common transcoding template;</li>
<li>TEHD: TESHD template.</li>
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
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

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("TEHDType",$param) and $param["TEHDType"] !== null) {
            $this->TEHDType = $param["TEHDType"];
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
