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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtitle suppression template details
 *
 * @method integer getDefinition() Obtain Unique identifier of the subtitle suppression template
 * @method void setDefinition(integer $Definition) Set Unique identifier of the subtitle suppression template
 * @method string getName() Obtain Subtitle suppression template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Subtitle suppression template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Subtitle suppression template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Subtitle suppression template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDeleteTag() Obtain Deletion mark. 0 Not deleted. 1 Deleted.
 * @method void setDeleteTag(integer $DeleteTag) Set Deletion mark. 0 Not deleted. 1 Deleted.
 * @method string getCreateTime() Obtain Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method SubtitleEmbedConfig getSubtitleEmbedConfig() Obtain Subtitle suppression module settings
 * @method void setSubtitleEmbedConfig(SubtitleEmbedConfig $SubtitleEmbedConfig) Set Subtitle suppression module settings
 * @method string getAliasName() Obtain Subtitle suppression template English name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set Subtitle suppression template English name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SubtitleEmbedTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of the subtitle suppression template
     */
    public $Definition;

    /**
     * @var string Subtitle suppression template name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Subtitle suppression template description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Deletion mark. 0 Not deleted. 1 Deleted.
     */
    public $DeleteTag;

    /**
     * @var string Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var SubtitleEmbedConfig Subtitle suppression module settings
     */
    public $SubtitleEmbedConfig;

    /**
     * @var string Subtitle suppression template English name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @param integer $Definition Unique identifier of the subtitle suppression template
     * @param string $Name Subtitle suppression template name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment Subtitle suppression template description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DeleteTag Deletion mark. 0 Not deleted. 1 Deleted.
     * @param string $CreateTime Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param SubtitleEmbedConfig $SubtitleEmbedConfig Subtitle suppression module settings
     * @param string $AliasName Subtitle suppression template English name
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DeleteTag",$param) and $param["DeleteTag"] !== null) {
            $this->DeleteTag = $param["DeleteTag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubtitleEmbedConfig",$param) and $param["SubtitleEmbedConfig"] !== null) {
            $this->SubtitleEmbedConfig = new SubtitleEmbedConfig();
            $this->SubtitleEmbedConfig->deserialize($param["SubtitleEmbedConfig"]);
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
