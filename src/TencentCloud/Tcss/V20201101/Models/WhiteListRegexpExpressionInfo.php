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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowlist Regular Expression Information
 *
 * @method string getLogicSymbol() Obtain Logic symbol
AND
OR
NOT
 * @method void setLogicSymbol(string $LogicSymbol) Set Logic symbol
AND
OR
NOT
 * @method string getMatchField() Obtain Matching field
 * @method void setMatchField(string $MatchField) Set Matching field
 * @method string getMatchContent() Obtain Matching content
 * @method void setMatchContent(string $MatchContent) Set Matching content
 */
class WhiteListRegexpExpressionInfo extends AbstractModel
{
    /**
     * @var string Logic symbol
AND
OR
NOT
     */
    public $LogicSymbol;

    /**
     * @var string Matching field
     */
    public $MatchField;

    /**
     * @var string Matching content
     */
    public $MatchContent;

    /**
     * @param string $LogicSymbol Logic symbol
AND
OR
NOT
     * @param string $MatchField Matching field
     * @param string $MatchContent Matching content
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
        if (array_key_exists("LogicSymbol",$param) and $param["LogicSymbol"] !== null) {
            $this->LogicSymbol = $param["LogicSymbol"];
        }

        if (array_key_exists("MatchField",$param) and $param["MatchField"] !== null) {
            $this->MatchField = $param["MatchField"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
