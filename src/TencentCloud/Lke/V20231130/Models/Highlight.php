<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Fragment highlight content.
 *
 * @method string getStartPos() Obtain Highlight starting position.
 * @method void setStartPos(string $StartPos) Set Highlight starting position.
 * @method string getEndPos() Obtain Highlight end position.
 * @method void setEndPos(string $EndPos) Set Highlight end position.
 * @method string getText() Obtain Highlight subtext.
 * @method void setText(string $Text) Set Highlight subtext.
 */
class Highlight extends AbstractModel
{
    /**
     * @var string Highlight starting position.
     */
    public $StartPos;

    /**
     * @var string Highlight end position.
     */
    public $EndPos;

    /**
     * @var string Highlight subtext.
     */
    public $Text;

    /**
     * @param string $StartPos Highlight starting position.
     * @param string $EndPos Highlight end position.
     * @param string $Text Highlight subtext.
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
        if (array_key_exists("StartPos",$param) and $param["StartPos"] !== null) {
            $this->StartPos = $param["StartPos"];
        }

        if (array_key_exists("EndPos",$param) and $param["EndPos"] !== null) {
            $this->EndPos = $param["EndPos"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
