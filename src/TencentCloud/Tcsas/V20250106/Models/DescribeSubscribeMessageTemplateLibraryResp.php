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
 * @method string getMNPName() Obtain <p>Mini program name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program name.</p>
 * @method string getMNPIcon() Obtain <p>Mini program icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program icon.</p>
 * @method string getTemplateTitle() Obtain <p>Template title.</p>
 * @method void setTemplateTitle(string $TemplateTitle) Set <p>Template title.</p>
 * @method array getTitleList() Obtain <p>Template title in multiple languages.</p>
 * @method void setTitleList(array $TitleList) Set <p>Template title in multiple languages.</p>
 * @method string getDefaultLang() Obtain <p>Default language.</p>
 * @method void setDefaultLang(string $DefaultLang) Set <p>Default language.</p>
 * @method string getSupportLang() Obtain <p>Supported languages.</p>
 * @method void setSupportLang(string $SupportLang) Set <p>Supported languages.</p>
 * @method array getKeywordList() Obtain <p>Template keyword in multiple languages.</p>
 * @method void setKeywordList(array $KeywordList) Set <p>Template keyword in multiple languages.</p>
 * @method integer getTemplateType() Obtain <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method void setTemplateType(integer $TemplateType) Set <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 */
class DescribeSubscribeMessageTemplateLibraryResp extends AbstractModel
{
    /**
     * @var string <p>Mini program name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Template title.</p>
     */
    public $TemplateTitle;

    /**
     * @var array <p>Template title in multiple languages.</p>
     */
    public $TitleList;

    /**
     * @var string <p>Default language.</p>
     */
    public $DefaultLang;

    /**
     * @var string <p>Supported languages.</p>
     */
    public $SupportLang;

    /**
     * @var array <p>Template keyword in multiple languages.</p>
     */
    public $KeywordList;

    /**
     * @var integer <p>Template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     */
    public $TemplateType;

    /**
     * @param string $MNPName <p>Mini program name.</p>
     * @param string $MNPIcon <p>Mini program icon.</p>
     * @param string $TemplateTitle <p>Template title.</p>
     * @param array $TitleList <p>Template title in multiple languages.</p>
     * @param string $DefaultLang <p>Default language.</p>
     * @param string $SupportLang <p>Supported languages.</p>
     * @param array $KeywordList <p>Template keyword in multiple languages.</p>
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
        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
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

        if (array_key_exists("SupportLang",$param) and $param["SupportLang"] !== null) {
            $this->SupportLang = $param["SupportLang"];
        }

        if (array_key_exists("KeywordList",$param) and $param["KeywordList"] !== null) {
            $this->KeywordList = [];
            foreach ($param["KeywordList"] as $key => $value){
                $obj = new DescribeSubscribeMessageTemplateLibraryKeywordInfoResp();
                $obj->deserialize($value);
                array_push($this->KeywordList, $obj);
            }
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
