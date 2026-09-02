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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index information of full text of the log
 *
 * @method boolean getCaseSensitive() Obtain <p>Case-sensitive</p>
 * @method void setCaseSensitive(boolean $CaseSensitive) Set <p>Case-sensitive</p>
 * @method string getTokenizer() Obtain <p>token</p>
 * @method void setTokenizer(string $Tokenizer) Set <p>token</p>
 * @method boolean getContainZH() Obtain <p>contain Chinese</p>
 * @method void setContainZH(boolean $ContainZH) Set <p>contain Chinese</p>
 */
class LogFullTextInfo extends AbstractModel
{
    /**
     * @var boolean <p>Case-sensitive</p>
     */
    public $CaseSensitive;

    /**
     * @var string <p>token</p>
     */
    public $Tokenizer;

    /**
     * @var boolean <p>contain Chinese</p>
     */
    public $ContainZH;

    /**
     * @param boolean $CaseSensitive <p>Case-sensitive</p>
     * @param string $Tokenizer <p>token</p>
     * @param boolean $ContainZH <p>contain Chinese</p>
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
