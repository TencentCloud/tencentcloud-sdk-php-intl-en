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
 * Log index value description
 *
 * @method string getType() Obtain <p>Type.</p>
 * @method void setType(string $Type) Set <p>Type.</p>
 * @method string getTokenizer() Obtain <p>Tag.</p>
 * @method void setTokenizer(string $Tokenizer) Set <p>Tag.</p>
 * @method boolean getSqlFlag() Obtain <p>sql tag</p>
 * @method void setSqlFlag(boolean $SqlFlag) Set <p>sql tag</p>
 * @method boolean getContainZH() Obtain <p>contain Chinese</p>
 * @method void setContainZH(boolean $ContainZH) Set <p>contain Chinese</p>
 * @method string getAlias() Obtain <p>Alias</p>
 * @method void setAlias(string $Alias) Set <p>Alias</p>
 */
class LogValueInfo extends AbstractModel
{
    /**
     * @var string <p>Type.</p>
     */
    public $Type;

    /**
     * @var string <p>Tag.</p>
     */
    public $Tokenizer;

    /**
     * @var boolean <p>sql tag</p>
     */
    public $SqlFlag;

    /**
     * @var boolean <p>contain Chinese</p>
     */
    public $ContainZH;

    /**
     * @var string <p>Alias</p>
     */
    public $Alias;

    /**
     * @param string $Type <p>Type.</p>
     * @param string $Tokenizer <p>Tag.</p>
     * @param boolean $SqlFlag <p>sql tag</p>
     * @param boolean $ContainZH <p>contain Chinese</p>
     * @param string $Alias <p>Alias</p>
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

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
