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
 * Moderation template details
 *
 * @method integer getDefinition() Obtain Unique tag of the moderation template.
 * @method void setDefinition(integer $Definition) Set Unique tag of the moderation template.
 * @method string getName() Obtain Template Name
 * @method void setName(string $Name) Set Template Name
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method string getType() Obtain Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method array getLabels() Obtain List of violation labels to return.
 * @method void setLabels(array $Labels) Set List of violation labels to return.
 * @method string getCreateTime() Obtain Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewTemplate extends AbstractModel
{
    /**
     * @var integer Unique tag of the moderation template.
     */
    public $Definition;

    /**
     * @var string Template Name
     */
    public $Name;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var string Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var array List of violation labels to return.
     */
    public $Labels;

    /**
     * @var string Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique tag of the moderation template.
     * @param string $Name Template Name
     * @param string $Comment Template description information.
     * @param string $Type Template type. Available values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     * @param array $Labels List of violation labels to return.
     * @param string $CreateTime Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
