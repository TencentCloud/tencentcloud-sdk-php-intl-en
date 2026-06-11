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
 * Response for querying mini game subscription message template library information
 *
 * @method string getTemplateTitle() Obtain <p>Subscription message template library title.</p>
 * @method void setTemplateTitle(string $TemplateTitle) Set <p>Subscription message template library title.</p>
 * @method array getTemplateTitleI18nList() Obtain <p>Subscription message template library title in multiple languages.</p>
 * @method void setTemplateTitleI18nList(array $TemplateTitleI18nList) Set <p>Subscription message template library title in multiple languages.</p>
 * @method string getDefaultLang() Obtain <p>Subscription message template library default language.</p>
 * @method void setDefaultLang(string $DefaultLang) Set <p>Subscription message template library default language.</p>
 * @method string getSupportLang() Obtain <p>Subscription message template library supported languages.</p>
 * @method void setSupportLang(string $SupportLang) Set <p>Subscription message template library supported languages.</p>
 * @method string getKeywords() Obtain <p>Subscription message template library keywords.</p>
 * @method void setKeywords(string $Keywords) Set <p>Subscription message template library keywords.</p>
 * @method array getKeywordI18nList() Obtain <p>Subscription message template library keyword in multiple languages.</p>
 * @method void setKeywordI18nList(array $KeywordI18nList) Set <p>Subscription message template library keyword in multiple languages.</p>
 * @method string getDescription() Obtain <p>Subscription message template library description.</p>
 * @method void setDescription(string $Description) Set <p>Subscription message template library description.</p>
 * @method string getTemplateLibraryId() Obtain <p>Subscription message template library ID.</p>
 * @method void setTemplateLibraryId(string $TemplateLibraryId) Set <p>Subscription message template library ID.</p>
 * @method integer getTemplateType() Obtain <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method void setTemplateType(integer $TemplateType) Set <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 */
class DescribeMNGSubscribeMessageTemplateLibraryInfoResp extends AbstractModel
{
    /**
     * @var string <p>Subscription message template library title.</p>
     */
    public $TemplateTitle;

    /**
     * @var array <p>Subscription message template library title in multiple languages.</p>
     */
    public $TemplateTitleI18nList;

    /**
     * @var string <p>Subscription message template library default language.</p>
     */
    public $DefaultLang;

    /**
     * @var string <p>Subscription message template library supported languages.</p>
     */
    public $SupportLang;

    /**
     * @var string <p>Subscription message template library keywords.</p>
     */
    public $Keywords;

    /**
     * @var array <p>Subscription message template library keyword in multiple languages.</p>
     */
    public $KeywordI18nList;

    /**
     * @var string <p>Subscription message template library description.</p>
     */
    public $Description;

    /**
     * @var string <p>Subscription message template library ID.</p>
     */
    public $TemplateLibraryId;

    /**
     * @var integer <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     */
    public $TemplateType;

    /**
     * @param string $TemplateTitle <p>Subscription message template library title.</p>
     * @param array $TemplateTitleI18nList <p>Subscription message template library title in multiple languages.</p>
     * @param string $DefaultLang <p>Subscription message template library default language.</p>
     * @param string $SupportLang <p>Subscription message template library supported languages.</p>
     * @param string $Keywords <p>Subscription message template library keywords.</p>
     * @param array $KeywordI18nList <p>Subscription message template library keyword in multiple languages.</p>
     * @param string $Description <p>Subscription message template library description.</p>
     * @param string $TemplateLibraryId <p>Subscription message template library ID.</p>
     * @param integer $TemplateType <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
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
        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TemplateTitleI18nList",$param) and $param["TemplateTitleI18nList"] !== null) {
            $this->TemplateTitleI18nList = [];
            foreach ($param["TemplateTitleI18nList"] as $key => $value){
                $obj = new I18nItem();
                $obj->deserialize($value);
                array_push($this->TemplateTitleI18nList, $obj);
            }
        }

        if (array_key_exists("DefaultLang",$param) and $param["DefaultLang"] !== null) {
            $this->DefaultLang = $param["DefaultLang"];
        }

        if (array_key_exists("SupportLang",$param) and $param["SupportLang"] !== null) {
            $this->SupportLang = $param["SupportLang"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("KeywordI18nList",$param) and $param["KeywordI18nList"] !== null) {
            $this->KeywordI18nList = [];
            foreach ($param["KeywordI18nList"] as $key => $value){
                $obj = new SubscribeMessageTemplateLibraryKeywordI18nInfoResp();
                $obj->deserialize($value);
                array_push($this->KeywordI18nList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TemplateLibraryId",$param) and $param["TemplateLibraryId"] !== null) {
            $this->TemplateLibraryId = $param["TemplateLibraryId"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
