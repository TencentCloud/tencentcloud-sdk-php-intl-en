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
 * Mini program multilingual information
 *
 * @method integer getID() Obtain <p>Language ID.</p>
 * @method void setID(integer $ID) Set <p>Language ID.</p>
 * @method string getLang() Obtain <p>Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.</p>
 * @method void setLang(string $Lang) Set <p>Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.</p>
 * @method integer getIsDefault() Obtain <p>Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.</p>
 * @method void setIsDefault(integer $IsDefault) Set <p>Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.</p>
 * @method string getMNPName() Obtain <p>Mini program name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program name.</p>
 * @method string getMNPIntro() Obtain <p>Mini program introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini program introduction.</p>
 */
class MNPDetailI18nVO extends AbstractModel
{
    /**
     * @var integer <p>Language ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.</p>
     */
    public $Lang;

    /**
     * @var integer <p>Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.</p>
     */
    public $IsDefault;

    /**
     * @var string <p>Mini program name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program introduction.</p>
     */
    public $MNPIntro;

    /**
     * @param integer $ID <p>Language ID.</p>
     * @param string $Lang <p>Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.</p>
     * @param integer $IsDefault <p>Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.</p>
     * @param string $MNPName <p>Mini program name.</p>
     * @param string $MNPIntro <p>Mini program introduction.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }
    }
}
