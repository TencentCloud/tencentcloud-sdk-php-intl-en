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
 * The mini program name and description in multiple languages.
 *
 * @method string getLang() Obtain Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.
 * @method void setLang(string $Lang) Set Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.
 * @method integer getIsDefault() Obtain Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.
 * @method void setIsDefault(integer $IsDefault) Set Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getMNPIntro() Obtain Mini program introduction.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction.
 */
class MNPI18NSyncDto extends AbstractModel
{
    /**
     * @var string Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.
     */
    public $Lang;

    /**
     * @var integer Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.
     */
    public $IsDefault;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Mini program introduction.
     */
    public $MNPIntro;

    /**
     * @param string $Lang Language type. Valid values: en-US: English; zh-CN: Simplified Chinese; zh-Hant: Traditional Chinese; fr-FR: French; ar-SA: Arabic; id-ID: Indonesian; vi-VN: Vietnamese. Default value: en-US.
     * @param integer $IsDefault Whether this is the default language. Valid values: 0: No; 1: Yes. Default value: 0.
     * @param string $MNPName Mini program name.
     * @param string $MNPIntro Mini program introduction.
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
