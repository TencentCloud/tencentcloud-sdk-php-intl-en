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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. for customers who activate on-demand services after december 25, 2023, this field must be filled with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. for customers who activate on-demand services after december 25, 2023, this field must be filled with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
 * @method string getText() Obtain Specifies the search content.
 * @method void setText(string $Text) Set Specifies the search content.
 * @method integer getLimit() Obtain Specifies the number of returned records. the default value is 20.
 * @method void setLimit(integer $Limit) Set Specifies the number of returned records. the default value is 20.
 * @method array getCategories() Obtain File type. matches any element in the collection: <li>Video: Video file</li> <li>Audio: Audio file</li> <li>Image: Image file</li>.
 * @method void setCategories(array $Categories) Set File type. matches any element in the collection: <li>Video: Video file</li> <li>Audio: Audio file</li> <li>Image: Image file</li>.
 * @method array getTags() Obtain Tag set, match any element in the collection. <li>single Tag length limit: 32 characters.</li> <li>array length limit: 16.</li>
 * @method void setTags(array $Tags) Set Tag set, match any element in the collection. <li>single Tag length limit: 32 characters.</li> <li>array length limit: 16.</li>
 * @method array getTaskTypes() Obtain Specifies the task type for the search. valid values:. 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
 * @method void setTaskTypes(array $TaskTypes) Set Specifies the task type for the search. valid values:. 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. for customers who activate on-demand services after december 25, 2023, this field must be filled with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Specifies the search content.
     */
    public $Text;

    /**
     * @var integer Specifies the number of returned records. the default value is 20.
     */
    public $Limit;

    /**
     * @var array File type. matches any element in the collection: <li>Video: Video file</li> <li>Audio: Audio file</li> <li>Image: Image file</li>.
     */
    public $Categories;

    /**
     * @var array Tag set, match any element in the collection. <li>single Tag length limit: 32 characters.</li> <li>array length limit: 16.</li>
     */
    public $Tags;

    /**
     * @var array Specifies the task type for the search. valid values:. 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. for customers who activate on-demand services after december 25, 2023, this field must be filled with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
     * @param string $Text Specifies the search content.
     * @param integer $Limit Specifies the number of returned records. the default value is 20.
     * @param array $Categories File type. matches any element in the collection: <li>Video: Video file</li> <li>Audio: Audio file</li> <li>Image: Image file</li>.
     * @param array $Tags Tag set, match any element in the collection. <li>single Tag length limit: 32 characters.</li> <li>array length limit: 16.</li>
     * @param array $TaskTypes Specifies the task type for the search. valid values:. 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
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

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }
    }
}
