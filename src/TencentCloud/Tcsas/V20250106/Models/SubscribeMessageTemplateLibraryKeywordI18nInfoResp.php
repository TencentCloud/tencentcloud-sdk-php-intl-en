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
 * Subscription message template library keywords in multiple languages.
 *
 * @method array getI18nList() Obtain <p>Multilanguage list.</p>
 * @method void setI18nList(array $I18nList) Set <p>Multilanguage list.</p>
 */
class SubscribeMessageTemplateLibraryKeywordI18nInfoResp extends AbstractModel
{
    /**
     * @var array <p>Multilanguage list.</p>
     */
    public $I18nList;

    /**
     * @param array $I18nList <p>Multilanguage list.</p>
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
        if (array_key_exists("I18nList",$param) and $param["I18nList"] !== null) {
            $this->I18nList = [];
            foreach ($param["I18nList"] as $key => $value){
                $obj = new I18nItem();
                $obj->deserialize($value);
                array_push($this->I18nList, $obj);
            }
        }
    }
}
