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
 * AI call extraction result.
 *
 * @method string getInfoType() Obtain Type of extracted information.
Text.
Selector options.
Boolean value.
Number.
 * @method void setInfoType(string $InfoType) Set Type of extracted information.
Text.
Selector options.
Boolean value.
Number.
 * @method string getInfoName() Obtain Name of the extracted information.
 * @method void setInfoName(string $InfoName) Set Name of the extracted information.
 * @method string getInfoContent() Obtain Specific description of the extracted information.
 * @method void setInfoContent(string $InfoContent) Set Specific description of the extracted information.
 * @method AICallExtractResultInfo getResult() Obtain Specific result of the extracted information.
 * @method void setResult(AICallExtractResultInfo $Result) Set Specific result of the extracted information.
 */
class AICallExtractResultElement extends AbstractModel
{
    /**
     * @var string Type of extracted information.
Text.
Selector options.
Boolean value.
Number.
     */
    public $InfoType;

    /**
     * @var string Name of the extracted information.
     */
    public $InfoName;

    /**
     * @var string Specific description of the extracted information.
     */
    public $InfoContent;

    /**
     * @var AICallExtractResultInfo Specific result of the extracted information.
     */
    public $Result;

    /**
     * @param string $InfoType Type of extracted information.
Text.
Selector options.
Boolean value.
Number.
     * @param string $InfoName Name of the extracted information.
     * @param string $InfoContent Specific description of the extracted information.
     * @param AICallExtractResultInfo $Result Specific result of the extracted information.
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

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new AICallExtractResultInfo();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
