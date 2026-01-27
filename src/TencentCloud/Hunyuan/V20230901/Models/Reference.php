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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Translate dialogue reference example.
 *
 * @method string getType() Obtain Translate text type, enumerate "sentence" means sentence, "term" means terminology.
 * @method void setType(string $Type) Set Translate text type, enumerate "sentence" means sentence, "term" means terminology.
 * @method string getText() Obtain Original.
 * @method void setText(string $Text) Set Original.
 * @method string getTranslation() Obtain Translation.
 * @method void setTranslation(string $Translation) Set Translation.
 */
class Reference extends AbstractModel
{
    /**
     * @var string Translate text type, enumerate "sentence" means sentence, "term" means terminology.
     */
    public $Type;

    /**
     * @var string Original.
     */
    public $Text;

    /**
     * @var string Translation.
     */
    public $Translation;

    /**
     * @param string $Type Translate text type, enumerate "sentence" means sentence, "term" means terminology.
     * @param string $Text Original.
     * @param string $Translation Translation.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Translation",$param) and $param["Translation"] !== null) {
            $this->Translation = $param["Translation"];
        }
    }
}
