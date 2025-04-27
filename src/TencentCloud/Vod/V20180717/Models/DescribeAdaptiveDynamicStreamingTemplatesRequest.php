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
 * DescribeAdaptiveDynamicStreamingTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method array getDefinitions() Obtain Unique id filter of transcoding to adaptive bitrate streaming templates. array length limit: 100.
 * @method void setDefinitions(array $Definitions) Set Unique id filter of transcoding to adaptive bitrate streaming templates. array length limit: 100.
 * @method integer getOffset() Obtain Pagination offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. default value: 10. maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. default value: 10. maximum value: 100.
 * @method string getType() Obtain Template type filter. valid values:.
<Li>Preset: system preset template;</li>.
<Li>Custom: user-defined template.</li>.
 * @method void setType(string $Type) Set Template type filter. valid values:.
<Li>Preset: system preset template;</li>.
<Li>Custom: user-defined template.</li>.
 */
class DescribeAdaptiveDynamicStreamingTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     */
    public $SubAppId;

    /**
     * @var array Unique id filter of transcoding to adaptive bitrate streaming templates. array length limit: 100.
     */
    public $Definitions;

    /**
     * @var integer Pagination offset. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. default value: 10. maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Template type filter. valid values:.
<Li>Preset: system preset template;</li>.
<Li>Custom: user-defined template.</li>.
     */
    public $Type;

    /**
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     * @param array $Definitions Unique id filter of transcoding to adaptive bitrate streaming templates. array length limit: 100.
     * @param integer $Offset Pagination offset. default value: 0.
     * @param integer $Limit Number of returned entries. default value: 10. maximum value: 100.
     * @param string $Type Template type filter. valid values:.
<Li>Preset: system preset template;</li>.
<Li>Custom: user-defined template.</li>.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
