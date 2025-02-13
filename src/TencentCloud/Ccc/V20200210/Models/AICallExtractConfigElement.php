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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI call extraction configuration item.
 *
 * @method string getInfoType() Obtain Configuration item type, including.
Text.
Selector option.
Boolean value.
Number.
 * @method void setInfoType(string $InfoType) Set Configuration item type, including.
Text.
Selector option.
Boolean value.
Number.
 * @method string getInfoName() Obtain Configuration item name, duplicat.
 * @method void setInfoName(string $InfoName) Set Configuration item name, duplicat.
 * @method string getInfoContent() Obtain Specific content of the configuration item.
 * @method void setInfoContent(string $InfoContent) Set Specific content of the configuration item.
 * @method array getExamples() Obtain Example of extracted content from the configuration item.
 * @method void setExamples(array $Examples) Set Example of extracted content from the configuration item.
 * @method array getChoices() Obtain When infotype is selector, this field needs to be configured.
 * @method void setChoices(array $Choices) Set When infotype is selector, this field needs to be configured.
 */
class AICallExtractConfigElement extends AbstractModel
{
    /**
     * @var string Configuration item type, including.
Text.
Selector option.
Boolean value.
Number.
     */
    public $InfoType;

    /**
     * @var string Configuration item name, duplicat.
     */
    public $InfoName;

    /**
     * @var string Specific content of the configuration item.
     */
    public $InfoContent;

    /**
     * @var array Example of extracted content from the configuration item.
     */
    public $Examples;

    /**
     * @var array When infotype is selector, this field needs to be configured.
     */
    public $Choices;

    /**
     * @param string $InfoType Configuration item type, including.
Text.
Selector option.
Boolean value.
Number.
     * @param string $InfoName Configuration item name, duplicat.
     * @param string $InfoContent Specific content of the configuration item.
     * @param array $Examples Example of extracted content from the configuration item.
     * @param array $Choices When infotype is selector, this field needs to be configured.
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
        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("InfoName",$param) and $param["InfoName"] !== null) {
            $this->InfoName = $param["InfoName"];
        }

        if (array_key_exists("InfoContent",$param) and $param["InfoContent"] !== null) {
            $this->InfoContent = $param["InfoContent"];
        }

        if (array_key_exists("Examples",$param) and $param["Examples"] !== null) {
            $this->Examples = $param["Examples"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = $param["Choices"];
        }
    }
}
