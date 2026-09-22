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
 * SearchMediaBySemantics request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
 * @method string getText() Obtain <p>Content to search</p>
 * @method void setText(string $Text) Set <p>Content to search</p>
 * @method string getKnowledgeBaseId() Obtain <p>Knowledge base ID. If left empty, the default knowledge base will be used</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set <p>Knowledge base ID. If left empty, the default knowledge base will be used</p>
 * @method integer getLimit() Obtain <p>Number of returned records. Default value: 20.</p><p>Value range: [1, 100]</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned records. Default value: 20.</p><p>Value range: [1, 100]</p>
 * @method array getCategories() Obtain <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
 * @method void setCategories(array $Categories) Set <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
 * @method array getTags() Obtain <p>Tag set, match any element in the collection.</p><p>Input parameter limits: Single tag length limit: 32 characters. Array length limit: 16.</p>
 * @method void setTags(array $Tags) Set <p>Tag set, match any element in the collection.</p><p>Input parameter limits: Single tag length limit: 32 characters. Array length limit: 16.</p>
 * @method array getPersons() Obtain <p>Collection of people, matching recording clips where all input people appear</p><p>Input limit: array length limit: 16</p>
 * @method void setPersons(array $Persons) Set <p>Collection of people, matching recording clips where all input people appear</p><p>Input limit: array length limit: 16</p>
 * @method array getTaskTypes() Obtain <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 * @method void setTaskTypes(array $TaskTypes) Set <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Content to search</p>
     */
    public $Text;

    /**
     * @var string <p>Knowledge base ID. If left empty, the default knowledge base will be used</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var integer <p>Number of returned records. Default value: 20.</p><p>Value range: [1, 100]</p>
     */
    public $Limit;

    /**
     * @var array <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
     */
    public $Categories;

    /**
     * @var array <p>Tag set, match any element in the collection.</p><p>Input parameter limits: Single tag length limit: 32 characters. Array length limit: 16.</p>
     */
    public $Tags;

    /**
     * @var array <p>Collection of people, matching recording clips where all input people appear</p><p>Input limit: array length limit: 16</p>
     */
    public $Persons;

    /**
     * @var array <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled with the app ID.</b></p>
     * @param string $Text <p>Content to search</p>
     * @param string $KnowledgeBaseId <p>Knowledge base ID. If left empty, the default knowledge base will be used</p>
     * @param integer $Limit <p>Number of returned records. Default value: 20.</p><p>Value range: [1, 100]</p>
     * @param array $Categories <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
     * @param array $Tags <p>Tag set, match any element in the collection.</p><p>Input parameter limits: Single tag length limit: 32 characters. Array length limit: 16.</p>
     * @param array $Persons <p>Collection of people, matching recording clips where all input people appear</p><p>Input limit: array length limit: 16</p>
     * @param array $TaskTypes <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
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

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Persons",$param) and $param["Persons"] !== null) {
            $this->Persons = $param["Persons"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }
    }
}
