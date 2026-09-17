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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method string getKnowledgeBaseId() Obtain 
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method array getCategories() Obtain 
 * @method void setCategories(array $Categories) Set 
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 * @method array getPersons() Obtain 
 * @method void setPersons(array $Persons) Set 
 * @method array getTaskTypes() Obtain 
 * @method void setTaskTypes(array $TaskTypes) Set 
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var string 
     */
    public $KnowledgeBaseId;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var array 
     */
    public $Categories;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @var array 
     */
    public $Persons;

    /**
     * @var array 
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId 
     * @param string $Text 
     * @param string $KnowledgeBaseId 
     * @param integer $Limit 
     * @param array $Categories 
     * @param array $Tags 
     * @param array $Persons 
     * @param array $TaskTypes 
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
