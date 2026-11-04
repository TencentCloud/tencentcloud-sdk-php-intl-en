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
 * Document parsing model parameters
 *
 * @method string getAlias() Obtain Model alias
 * @method void setAlias(string $Alias) Set Model alias
 * @method string getDescription() Obtain Model description
 * @method void setDescription(string $Description) Set Model description
 * @method string getEnhancementMode() Obtain Enhanced mode
 * @method void setEnhancementMode(string $EnhancementMode) Set Enhanced mode
 * @method string getModelId() Obtain Unique ID of a model
 * @method void setModelId(string $ModelId) Set Unique ID of a model
 * @method string getModelProviderType() Obtain Model type
 * @method void setModelProviderType(string $ModelProviderType) Set Model type
 * @method boolean getEnableFormulaEnhancement() Obtain Whether to enable formula enhancement
 * @method void setEnableFormulaEnhancement(boolean $EnableFormulaEnhancement) Set Whether to enable formula enhancement
 * @method boolean getEnableLLMEnhancement() Obtain Whether to enable LLM enhancement
 * @method void setEnableLLMEnhancement(boolean $EnableLLMEnhancement) Set Whether to enable LLM enhancement
 * @method boolean getOutputHtmlTable() Obtain Whether to output an HTML table
 * @method void setOutputHtmlTable(boolean $OutputHtmlTable) Set Whether to output an HTML table
 * @method array getSupportedFileList() Obtain Supported file type list
 * @method void setSupportedFileList(array $SupportedFileList) Set Supported file type list
 */
class FileParseModel extends AbstractModel
{
    /**
     * @var string Model alias
     */
    public $Alias;

    /**
     * @var string Model description
     */
    public $Description;

    /**
     * @var string Enhanced mode
     */
    public $EnhancementMode;

    /**
     * @var string Unique ID of a model
     */
    public $ModelId;

    /**
     * @var string Model type
     */
    public $ModelProviderType;

    /**
     * @var boolean Whether to enable formula enhancement
     */
    public $EnableFormulaEnhancement;

    /**
     * @var boolean Whether to enable LLM enhancement
     */
    public $EnableLLMEnhancement;

    /**
     * @var boolean Whether to output an HTML table
     */
    public $OutputHtmlTable;

    /**
     * @var array Supported file type list
     */
    public $SupportedFileList;

    /**
     * @param string $Alias Model alias
     * @param string $Description Model description
     * @param string $EnhancementMode Enhanced mode
     * @param string $ModelId Unique ID of a model
     * @param string $ModelProviderType Model type
     * @param boolean $EnableFormulaEnhancement Whether to enable formula enhancement
     * @param boolean $EnableLLMEnhancement Whether to enable LLM enhancement
     * @param boolean $OutputHtmlTable Whether to output an HTML table
     * @param array $SupportedFileList Supported file type list
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnhancementMode",$param) and $param["EnhancementMode"] !== null) {
            $this->EnhancementMode = $param["EnhancementMode"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelProviderType",$param) and $param["ModelProviderType"] !== null) {
            $this->ModelProviderType = $param["ModelProviderType"];
        }

        if (array_key_exists("EnableFormulaEnhancement",$param) and $param["EnableFormulaEnhancement"] !== null) {
            $this->EnableFormulaEnhancement = $param["EnableFormulaEnhancement"];
        }

        if (array_key_exists("EnableLLMEnhancement",$param) and $param["EnableLLMEnhancement"] !== null) {
            $this->EnableLLMEnhancement = $param["EnableLLMEnhancement"];
        }

        if (array_key_exists("OutputHtmlTable",$param) and $param["OutputHtmlTable"] !== null) {
            $this->OutputHtmlTable = $param["OutputHtmlTable"];
        }

        if (array_key_exists("SupportedFileList",$param) and $param["SupportedFileList"] !== null) {
            $this->SupportedFileList = [];
            foreach ($param["SupportedFileList"] as $key => $value){
                $obj = new SupportedFileType();
                $obj->deserialize($value);
                array_push($this->SupportedFileList, $obj);
            }
        }
    }
}
