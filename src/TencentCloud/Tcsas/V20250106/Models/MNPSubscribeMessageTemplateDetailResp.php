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
 * Mini program subscription template detail information
 *
 * @method string getTemplateId() Obtain <p>Subscription message template ID.</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Subscription message template ID.</p>
 * @method string getTemplateTitle() Obtain <p>Subscription message template title.</p>
 * @method void setTemplateTitle(string $TemplateTitle) Set <p>Subscription message template title.</p>
 * @method array getTitleList() Obtain <p>Subscription message template title in multiple languages.</p>
 * @method void setTitleList(array $TitleList) Set <p>Subscription message template title in multiple languages.</p>
 * @method string getDefaultLang() Obtain <p>Subscription message template default language.</p>
 * @method void setDefaultLang(string $DefaultLang) Set <p>Subscription message template default language.</p>
 * @method array getLanguages() Obtain <p>Subscription message template supported languages.</p>
 * @method void setLanguages(array $Languages) Set <p>Subscription message template supported languages.</p>
 * @method array getKeywordList() Obtain <p>Subscription message template keywords.</p>
 * @method void setKeywordList(array $KeywordList) Set <p>Subscription message template keywords.</p>
 * @method string getMNPName() Obtain <p>Mini program name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program name.</p>
 * @method string getMNPIcon() Obtain <p>Mini program icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program icon.</p>
 * @method integer getTemplateType() Obtain <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method void setTemplateType(integer $TemplateType) Set <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 */
class MNPSubscribeMessageTemplateDetailResp extends AbstractModel
{
    /**
     * @var string <p>Subscription message template ID.</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Subscription message template title.</p>
     */
    public $TemplateTitle;

    /**
     * @var array <p>Subscription message template title in multiple languages.</p>
     */
    public $TitleList;

    /**
     * @var string <p>Subscription message template default language.</p>
     */
    public $DefaultLang;

    /**
     * @var array <p>Subscription message template supported languages.</p>
     */
    public $Languages;

    /**
     * @var array <p>Subscription message template keywords.</p>
     */
    public $KeywordList;

    /**
     * @var string <p>Mini program name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program icon.</p>
     */
    public $MNPIcon;

    /**
     * @var integer <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     */
    public $TemplateType;

    /**
     * @param string $TemplateId <p>Subscription message template ID.</p>
     * @param string $TemplateTitle <p>Subscription message template title.</p>
     * @param array $TitleList <p>Subscription message template title in multiple languages.</p>
     * @param string $DefaultLang <p>Subscription message template default language.</p>
     * @param array $Languages <p>Subscription message template supported languages.</p>
     * @param array $KeywordList <p>Subscription message template keywords.</p>
     * @param string $MNPName <p>Mini program name.</p>
     * @param string $MNPIcon <p>Mini program icon.</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TitleList",$param) and $param["TitleList"] !== null) {
            $this->TitleList = [];
            foreach ($param["TitleList"] as $key => $value){
                $obj = new I18nItem();
                $obj->deserialize($value);
                array_push($this->TitleList, $obj);
            }
        }

        if (array_key_exists("DefaultLang",$param) and $param["DefaultLang"] !== null) {
            $this->DefaultLang = $param["DefaultLang"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("KeywordList",$param) and $param["KeywordList"] !== null) {
            $this->KeywordList = [];
            foreach ($param["KeywordList"] as $key => $value){
                $obj = new DescribeSubscribeMessageTemplateLibraryKeywordData();
                $obj->deserialize($value);
                array_push($this->KeywordList, $obj);
            }
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
