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
 * Mini program subscription message template keyword information
 *
 * @method string getKeywordId() Obtain <p>Subscription message template library keyword ID.</p>
 * @method void setKeywordId(string $KeywordId) Set <p>Subscription message template library keyword ID.</p>
 * @method string getKeyword() Obtain <p>Subscription message template library keywords.</p>
 * @method void setKeyword(string $Keyword) Set <p>Subscription message template library keywords.</p>
 * @method string getKeywordType() Obtain <p>Subscription message template library keyword type.</p>
 * @method void setKeywordType(string $KeywordType) Set <p>Subscription message template library keyword type.</p>
 * @method string getDefaultValue() Obtain <p>Subscription message template library keyword default value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Subscription message template library keyword default value.</p>
 * @method array getKeywordList() Obtain <p>Subscription message template library keyword in multiple languages.</p>
 * @method void setKeywordList(array $KeywordList) Set <p>Subscription message template library keyword in multiple languages.</p>
 * @method array getDefaultValueList() Obtain <p>Subscription message template library keyword default value multilingual type.</p>
 * @method void setDefaultValueList(array $DefaultValueList) Set <p>Subscription message template library keyword default value multilingual type.</p>
 */
class DescribeSubscribeMessageTemplateLibraryKeywordData extends AbstractModel
{
    /**
     * @var string <p>Subscription message template library keyword ID.</p>
     */
    public $KeywordId;

    /**
     * @var string <p>Subscription message template library keywords.</p>
     */
    public $Keyword;

    /**
     * @var string <p>Subscription message template library keyword type.</p>
     */
    public $KeywordType;

    /**
     * @var string <p>Subscription message template library keyword default value.</p>
     */
    public $DefaultValue;

    /**
     * @var array <p>Subscription message template library keyword in multiple languages.</p>
     */
    public $KeywordList;

    /**
     * @var array <p>Subscription message template library keyword default value multilingual type.</p>
     */
    public $DefaultValueList;

    /**
     * @param string $KeywordId <p>Subscription message template library keyword ID.</p>
     * @param string $Keyword <p>Subscription message template library keywords.</p>
     * @param string $KeywordType <p>Subscription message template library keyword type.</p>
     * @param string $DefaultValue <p>Subscription message template library keyword default value.</p>
     * @param array $KeywordList <p>Subscription message template library keyword in multiple languages.</p>
     * @param array $DefaultValueList <p>Subscription message template library keyword default value multilingual type.</p>
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
