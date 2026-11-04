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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model definition in the Agent configuration
 *
 * @method string getModelId() Obtain <p>Unique model id</p>
 * @method void setModelId(string $ModelId) Set <p>Unique model id</p>
 * @method string getAlias() Obtain <p>Model alias</p>
 * @method void setAlias(string $Alias) Set <p>Model alias</p>
 * @method integer getContextWordsLimit() Obtain <p>Model context length character limit</p>
 * @method void setContextWordsLimit(integer $ContextWordsLimit) Set <p>Model context length character limit</p>
 * @method integer getInstructionsWordsLimit() Obtain <p>Instruction length character limit</p>
 * @method void setInstructionsWordsLimit(integer $InstructionsWordsLimit) Set <p>Instruction length character limit</p>
 * @method ModelParams getModelParameters() Obtain <p>Model parameters</p>
 * @method void setModelParameters(ModelParams $ModelParameters) Set <p>Model parameters</p>
 */
class AgentModelConfig extends AbstractModel
{
    /**
     * @var string <p>Unique model id</p>
     */
    public $ModelId;

    /**
     * @var string <p>Model alias</p>
     */
    public $Alias;

    /**
     * @var integer <p>Model context length character limit</p>
     */
    public $ContextWordsLimit;

    /**
     * @var integer <p>Instruction length character limit</p>
     */
    public $InstructionsWordsLimit;

    /**
     * @var ModelParams <p>Model parameters</p>
     */
    public $ModelParameters;

    /**
     * @param string $ModelId <p>Unique model id</p>
     * @param string $Alias <p>Model alias</p>
     * @param integer $ContextWordsLimit <p>Model context length character limit</p>
     * @param integer $InstructionsWordsLimit <p>Instruction length character limit</p>
     * @param ModelParams $ModelParameters <p>Model parameters</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ContextWordsLimit",$param) and $param["ContextWordsLimit"] !== null) {
            $this->ContextWordsLimit = $param["ContextWordsLimit"];
        }

        if (array_key_exists("InstructionsWordsLimit",$param) and $param["InstructionsWordsLimit"] !== null) {
            $this->InstructionsWordsLimit = $param["InstructionsWordsLimit"];
        }

        if (array_key_exists("ModelParameters",$param) and $param["ModelParameters"] !== null) {
            $this->ModelParameters = new ModelParams();
            $this->ModelParameters->deserialize($param["ModelParameters"]);
        }
    }
}
