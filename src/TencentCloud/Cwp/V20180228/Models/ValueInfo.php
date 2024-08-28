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
 * Index value description
 *
 * @method string getTokenizer() Obtain Field delimiter
 * @method void setTokenizer(string $Tokenizer) Set Field delimiter
 * @method string getType() Obtain Field type
 * @method void setType(string $Type) Set Field type
 * @method boolean getSqlFlag() Obtain Whether the analysis feature is enabled for the field
 * @method void setSqlFlag(boolean $SqlFlag) Set Whether the analysis feature is enabled for the field
 * @method boolean getContainZH() Obtain Whether Chinese characters are contained
 * @method void setContainZH(boolean $ContainZH) Set Whether Chinese characters are contained
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string Field delimiter
     */
    public $Tokenizer;

    /**
     * @var string Field type
     */
    public $Type;

    /**
     * @var boolean Whether the analysis feature is enabled for the field
     */
    public $SqlFlag;

    /**
     * @var boolean Whether Chinese characters are contained
     */
    public $ContainZH;

    /**
     * @param string $Tokenizer Field delimiter
     * @param string $Type Field type
     * @param boolean $SqlFlag Whether the analysis feature is enabled for the field
     * @param boolean $ContainZH Whether Chinese characters are contained
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
        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
