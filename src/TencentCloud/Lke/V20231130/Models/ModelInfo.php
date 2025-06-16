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
 * Model information.
 *
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method string getModelDesc() Obtain Model description.
 * @method void setModelDesc(string $ModelDesc) Set Model description.
 * @method string getAliasName() Obtain Model name.
 * @method void setAliasName(string $AliasName) Set Model name.
 * @method integer getResourceStatus() Obtain Resource status, 1: available; 2: exhausted.
 * @method void setResourceStatus(integer $ResourceStatus) Set Resource status, 1: available; 2: exhausted.
 * @method string getPromptWordsLimit() Obtain Character limit of prompt content.
 * @method void setPromptWordsLimit(string $PromptWordsLimit) Set Character limit of prompt content.
 * @method ModelParameter getTopP() Obtain By controlling the diversity of content generation through core sampling, a higher Top P value will lead to more diverse content generation.
 * @method void setTopP(ModelParameter $TopP) Set By controlling the diversity of content generation through core sampling, a higher Top P value will lead to more diverse content generation.
 * @method ModelParameter getTemperature() Obtain Temperature control randomness.
 * @method void setTemperature(ModelParameter $Temperature) Set Temperature control randomness.
 * @method ModelParameter getMaxTokens() Obtain Maximum quantity of tokens that can be generated.
 * @method void setMaxTokens(ModelParameter $MaxTokens) Set Maximum quantity of tokens that can be generated.
 * @method string getSource() Obtain Model source, Hunyuan: Tencent Hunyuan; Industry: Tencent Cloud industry large model; Experience: new model experience.
 * @method void setSource(string $Source) Set Model source, Hunyuan: Tencent Hunyuan; Industry: Tencent Cloud industry large model; Experience: new model experience.
 * @method string getIcon() Obtain Model icon.
 * @method void setIcon(string $Icon) Set Model icon.
 * @method boolean getIsFree() Obtain Whether it is free.
 * @method void setIsFree(boolean $IsFree) Set Whether it is free.
 * @method integer getInputLenLimit() Obtain Maximum characters input in the model dialog box.
 * @method void setInputLenLimit(integer $InputLenLimit) Set Maximum characters input in the model dialog box.
 * @method integer getSupportWorkflowStatus() Obtain Workflow support levels:
0 - Not supported by the model;
1 - Supported by the model;
2 - Poorly supported by the model.
 * @method void setSupportWorkflowStatus(integer $SupportWorkflowStatus) Set Workflow support levels:
0 - Not supported by the model;
1 - Supported by the model;
2 - Poorly supported by the model.
 * @method string getModelCategory() Obtain Model categories:
Generate: Generative model
Thought: Thinking model
 * @method void setModelCategory(string $ModelCategory) Set Model categories:
Generate: Generative model
Thought: Thinking model
 * @method boolean getIsDefault() Obtain Whether it is the default model.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default model.
 * @method integer getRoleLenLimit() Obtain Maximum characters of role prompt words.
 * @method void setRoleLenLimit(integer $RoleLenLimit) Set Maximum characters of role prompt words.
 * @method boolean getIsExclusive() Obtain Whether it is an exclusive concurrency model.
 * @method void setIsExclusive(boolean $IsExclusive) Set Whether it is an exclusive concurrency model.
 * @method integer getSupportAiCallStatus() Obtain The model supports intelligent call effects.
 * @method void setSupportAiCallStatus(integer $SupportAiCallStatus) Set The model supports intelligent call effects.
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string Model name.
     */
    public $ModelName;

    /**
     * @var string Model description.
     */
    public $ModelDesc;

    /**
     * @var string Model name.
     */
    public $AliasName;

    /**
     * @var integer Resource status, 1: available; 2: exhausted.
     */
    public $ResourceStatus;

    /**
     * @var string Character limit of prompt content.
     */
    public $PromptWordsLimit;

    /**
     * @var ModelParameter By controlling the diversity of content generation through core sampling, a higher Top P value will lead to more diverse content generation.
     */
    public $TopP;

    /**
     * @var ModelParameter Temperature control randomness.
     */
    public $Temperature;

    /**
     * @var ModelParameter Maximum quantity of tokens that can be generated.
     */
    public $MaxTokens;

    /**
     * @var string Model source, Hunyuan: Tencent Hunyuan; Industry: Tencent Cloud industry large model; Experience: new model experience.
     */
    public $Source;

    /**
     * @var string Model icon.
     */
    public $Icon;

    /**
     * @var boolean Whether it is free.
     */
    public $IsFree;

    /**
     * @var integer Maximum characters input in the model dialog box.
     */
    public $InputLenLimit;

    /**
     * @var integer Workflow support levels:
0 - Not supported by the model;
1 - Supported by the model;
2 - Poorly supported by the model.
     */
    public $SupportWorkflowStatus;

    /**
     * @var string Model categories:
Generate: Generative model
Thought: Thinking model
     */
    public $ModelCategory;

    /**
     * @var boolean Whether it is the default model.
     */
    public $IsDefault;

    /**
     * @var integer Maximum characters of role prompt words.
     */
    public $RoleLenLimit;

    /**
     * @var boolean Whether it is an exclusive concurrency model.
     */
    public $IsExclusive;

    /**
     * @var integer The model supports intelligent call effects.
     */
    public $SupportAiCallStatus;

    /**
     * @param string $ModelName Model name.
     * @param string $ModelDesc Model description.
     * @param string $AliasName Model name.
     * @param integer $ResourceStatus Resource status, 1: available; 2: exhausted.
     * @param string $PromptWordsLimit Character limit of prompt content.
     * @param ModelParameter $TopP By controlling the diversity of content generation through core sampling, a higher Top P value will lead to more diverse content generation.
     * @param ModelParameter $Temperature Temperature control randomness.
     * @param ModelParameter $MaxTokens Maximum quantity of tokens that can be generated.
     * @param string $Source Model source, Hunyuan: Tencent Hunyuan; Industry: Tencent Cloud industry large model; Experience: new model experience.
     * @param string $Icon Model icon.
     * @param boolean $IsFree Whether it is free.
     * @param integer $InputLenLimit Maximum characters input in the model dialog box.
     * @param integer $SupportWorkflowStatus Workflow support levels:
0 - Not supported by the model;
1 - Supported by the model;
2 - Poorly supported by the model.
     * @param string $ModelCategory Model categories:
Generate: Generative model
Thought: Thinking model
     * @param boolean $IsDefault Whether it is the default model.
     * @param integer $RoleLenLimit Maximum characters of role prompt words.
     * @param boolean $IsExclusive Whether it is an exclusive concurrency model.
     * @param integer $SupportAiCallStatus The model supports intelligent call effects.
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelDesc",$param) and $param["ModelDesc"] !== null) {
            $this->ModelDesc = $param["ModelDesc"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("PromptWordsLimit",$param) and $param["PromptWordsLimit"] !== null) {
            $this->PromptWordsLimit = $param["PromptWordsLimit"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = new ModelParameter();
            $this->TopP->deserialize($param["TopP"]);
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = new ModelParameter();
            $this->Temperature->deserialize($param["Temperature"]);
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = new ModelParameter();
            $this->MaxTokens->deserialize($param["MaxTokens"]);
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("InputLenLimit",$param) and $param["InputLenLimit"] !== null) {
            $this->InputLenLimit = $param["InputLenLimit"];
        }

        if (array_key_exists("SupportWorkflowStatus",$param) and $param["SupportWorkflowStatus"] !== null) {
            $this->SupportWorkflowStatus = $param["SupportWorkflowStatus"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("RoleLenLimit",$param) and $param["RoleLenLimit"] !== null) {
            $this->RoleLenLimit = $param["RoleLenLimit"];
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("SupportAiCallStatus",$param) and $param["SupportAiCallStatus"] !== null) {
            $this->SupportAiCallStatus = $param["SupportAiCallStatus"];
        }
    }
}
