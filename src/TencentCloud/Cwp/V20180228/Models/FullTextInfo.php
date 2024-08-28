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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration for full-text index
 *
 * @method boolean getCaseSensitive() Obtain Whether case-sensitive
 * @method void setCaseSensitive(boolean $CaseSensitive) Set Whether case-sensitive
 * @method string getTokenizer() Obtain Delimiter
 * @method void setTokenizer(string $Tokenizer) Set Delimiter
 * @method boolean getContainZH() Obtain Whether Chinese characters are contained.
 * @method void setContainZH(boolean $ContainZH) Set Whether Chinese characters are contained.
 */
class FullTextInfo extends AbstractModel
{
    /**
     * @var boolean Whether case-sensitive
     */
    public $CaseSensitive;

    /**
     * @var string Delimiter
     */
    public $Tokenizer;

    /**
     * @var boolean Whether Chinese characters are contained.
     */
    public $ContainZH;

    /**
     * @param boolean $CaseSensitive Whether case-sensitive
     * @param string $Tokenizer Delimiter
     * @param boolean $ContainZH Whether Chinese characters are contained.
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
