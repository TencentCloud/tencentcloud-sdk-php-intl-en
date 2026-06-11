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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for querying mini program subscription message template library details
 *
 * @method string getKeywordId() Obtain <p>Template keyword ID.</p>
 * @method void setKeywordId(string $KeywordId) Set <p>Template keyword ID.</p>
 * @method string getKeyword() Obtain <p>Template keyword.</p>
 * @method void setKeyword(string $Keyword) Set <p>Template keyword.</p>
 * @method string getKeywordType() Obtain <p>Template keyword type.</p>
 * @method void setKeywordType(string $KeywordType) Set <p>Template keyword type.</p>
 * @method string getDefaultValue() Obtain <p>Template keyword default value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Template keyword default value.</p>
 * @method array getKeywordList() Obtain <p>Template keyword in multiple languages.</p>
 * @method void setKeywordList(array $KeywordList) Set <p>Template keyword in multiple languages.</p>
 * @method array getDefaultValueList() Obtain <p>Template keyword default values in multiple languages.</p>
 * @method void setDefaultValueList(array $DefaultValueList) Set <p>Template keyword default values in multiple languages.</p>
 */
class DescribeSubscribeMessageTemplateLibraryKeywordInfoResp extends AbstractModel
{
    /**
     * @var string <p>Template keyword ID.</p>
     */
    public $KeywordId;

    /**
     * @var string <p>Template keyword.</p>
     */
    public $Keyword;

    /**
     * @var string <p>Template keyword type.</p>
     */
    public $KeywordType;

    /**
     * @var string <p>Template keyword default value.</p>
     */
    public $DefaultValue;

    /**
     * @var array <p>Template keyword in multiple languages.</p>
     */
    public $KeywordList;

    /**
     * @var array <p>Template keyword default values in multiple languages.</p>
     */
    public $DefaultValueList;

    /**
     * @param string $KeywordId <p>Template keyword ID.</p>
     * @param string $Keyword <p>Template keyword.</p>
     * @param string $KeywordType <p>Template keyword type.</p>
     * @param string $DefaultValue <p>Template keyword default value.</p>
     * @param array $KeywordList <p>Template keyword in multiple languages.</p>
     * @param array $DefaultValueList <p>Template keyword default values in multiple languages.</p>
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
        if (array_key_exists("KeywordId",$param) and $param["KeywordId"] !== null) {
            $this->KeywordId = $param["KeywordId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("KeywordType",$param) and $param["KeywordType"] !== null) {
            $this->KeywordType = $param["KeywordType"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("KeywordList",$param) and $param["KeywordList"] !== null) {
            $this->KeywordList = [];
            foreach ($param["KeywordList"] as $key => $value){
                $obj = new I18nItem();
                $obj->deserialize($value);
                array_push($this->KeywordList, $obj);
            }
        }

        if (array_key_exists("DefaultValueList",$param) and $param["DefaultValueList"] !== null) {
            $this->DefaultValueList = [];
            foreach ($param["DefaultValueList"] as $key => $value){
                $obj = new I18nItem();
                $obj->deserialize($value);
                array_push($this->DefaultValueList, $obj);
            }
        }
    }
}
