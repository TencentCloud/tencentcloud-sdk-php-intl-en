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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method string getText() Obtain <p>Search content</p>
 * @method void setText(string $Text) Set <p>Search content</p>
 * @method integer getLimit() Obtain <p>Number of returned records. The default value is 20.</p><p>Value ranges from 1 to 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned records. The default value is 20.</p><p>Value ranges from 1 to 100.</p>
 * @method array getCategories() Obtain <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
 * @method void setCategories(array $Categories) Set <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
 * @method array getTags() Obtain <p>Tag set, match any element in the collection.</p><p>Input parameter limit: single tag length limited to 32 characters. Array length limit: 16.</p>
 * @method void setTags(array $Tags) Set <p>Tag set, match any element in the collection.</p><p>Input parameter limit: single tag length limited to 32 characters. Array length limit: 16.</p>
 * @method array getPersons() Obtain <p>Figure collection, matching video clips where all imported figures appear.</p><p>Input limit: Array length limit: 16.</p>
 * @method void setPersons(array $Persons) Set <p>Figure collection, matching video clips where all imported figures appear.</p><p>Input limit: Array length limit: 16.</p>
 * @method array getTaskTypes() Obtain <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 * @method void setTaskTypes(array $TaskTypes) Set <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Search content</p>
     */
    public $Text;

    /**
     * @var integer <p>Number of returned records. The default value is 20.</p><p>Value ranges from 1 to 100.</p>
     */
    public $Limit;

    /**
     * @var array <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
     */
    public $Categories;

    /**
     * @var array <p>Tag set, match any element in the collection.</p><p>Input parameter limit: single tag length limited to 32 characters. Array length limit: 16.</p>
     */
    public $Tags;

    /**
     * @var array <p>Figure collection, matching video clips where all imported figures appear.</p><p>Input limit: Array length limit: 16.</p>
     */
    public $Persons;

    /**
     * @var array <p>Task type to search. Optional values: </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     * @param string $Text <p>Search content</p>
     * @param integer $Limit <p>Number of returned records. The default value is 20.</p><p>Value ranges from 1 to 100.</p>
     * @param array $Categories <p>File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li></p>
     * @param array $Tags <p>Tag set, match any element in the collection.</p><p>Input parameter limit: single tag length limited to 32 characters. Array length limit: 16.</p>
     * @param array $Persons <p>Figure collection, matching video clips where all imported figures appear.</p><p>Input limit: Array length limit: 16.</p>
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
