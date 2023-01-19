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
 * The details of a moderation template.
 *
 * @method integer getDefinition() Obtain The unique ID of the moderation template.
 * @method void setDefinition(integer $Definition) Set The unique ID of the moderation template.
 * @method string getName() Obtain The template name.
 * @method void setName(string $Name) Set The template name.
 * @method string getComment() Obtain The template description.
 * @method void setComment(string $Comment) Set The template description.
 * @method string getType() Obtain The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method void setType(string $Type) Set The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method array getLabels() Obtain The violation labels used.
 * @method void setLabels(array $Labels) Set The violation labels used.
 * @method string getCreateTime() Obtain The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewTemplate extends AbstractModel
{
    /**
     * @var integer The unique ID of the moderation template.
     */
    public $Definition;

    /**
     * @var string The template name.
     */
    public $Name;

    /**
     * @var string The template description.
     */
    public $Comment;

    /**
     * @var string The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     */
    public $Type;

    /**
     * @var array The violation labels used.
     */
    public $Labels;

    /**
     * @var string The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition The unique ID of the moderation template.
     * @param string $Name The template name.
     * @param string $Comment The template description.
     * @param string $Type The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     * @param array $Labels The violation labels used.
     * @param string $CreateTime The template creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime The last updated time of the template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
