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
 * Mini game subscription message template list information
 *
 * @method string getTemplateTitle() Obtain <p>Subscription message template title.</p>
 * @method void setTemplateTitle(string $TemplateTitle) Set <p>Subscription message template title.</p>
 * @method array getTemplateTitleI18nList() Obtain <p>Subscription message template title in multiple languages.</p>
 * @method void setTemplateTitleI18nList(array $TemplateTitleI18nList) Set <p>Subscription message template title in multiple languages.</p>
 * @method string getDefaultLang() Obtain <p>Default language.</p>
 * @method void setDefaultLang(string $DefaultLang) Set <p>Default language.</p>
 * @method array getSupportLang() Obtain <p>Supported languages.</p>
 * @method void setSupportLang(array $SupportLang) Set <p>Supported languages.</p>
 * @method string getTemplateId() Obtain <p>Subscription message template ID.</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Subscription message template ID.</p>
 * @method string getKeywords() Obtain <p>Subscription message template keywords.</p>
 * @method void setKeywords(string $Keywords) Set <p>Subscription message template keywords.</p>
 * @method array getKeywordI18nList() Obtain <p>Subscription message template keyword in multiple languages.</p>
 * @method void setKeywordI18nList(array $KeywordI18nList) Set <p>Subscription message template keyword in multiple languages.</p>
 * @method integer getTemplateType() Obtain <p>Subscription message template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method void setTemplateType(integer $TemplateType) Set <p>Subscription message template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getStatus() Obtain <p>Status. Valid values: 1: Active.</p>
 * @method void setStatus(integer $Status) Set <p>Status. Valid values: 1: Active.</p>
 */
class DescribeMNGSubscribeMessageTemplateInfoResp extends AbstractModel
{
    /**
     * @var string <p>Subscription message template title.</p>
     */
    public $TemplateTitle;

    /**
     * @var array <p>Subscription message template title in multiple languages.</p>
     */
    public $TemplateTitleI18nList;

    /**
     * @var string <p>Default language.</p>
     */
    public $DefaultLang;

    /**
     * @var array <p>Supported languages.</p>
     */
    public $SupportLang;

    /**
     * @var string <p>Subscription message template ID.</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Subscription message template keywords.</p>
     */
    public $Keywords;

    /**
     * @var array <p>Subscription message template keyword in multiple languages.</p>
     */
    public $KeywordI18nList;

    /**
     * @var integer <p>Subscription message template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     */
    public $TemplateType;

    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Status. Valid values: 1: Active.</p>
     */
    public $Status;

    /**
     * @param string $TemplateTitle <p>Subscription message template title.</p>
     * @param array $TemplateTitleI18nList <p>Subscription message template title in multiple languages.</p>
     * @param string $DefaultLang <p>Default language.</p>
     * @param array $SupportLang <p>Supported languages.</p>
     * @param string $TemplateId <p>Subscription message template ID.</p>
     * @param string $Keywords <p>Subscription message template keywords.</p>
     * @param array $KeywordI18nList <p>Subscription message template keyword in multiple languages.</p>
     * @param integer $TemplateType <p>Subscription message template type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $Status <p>Status. Valid values: 1: Active.</p>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
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

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
