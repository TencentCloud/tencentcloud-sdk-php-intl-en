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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Condition that makes up an access control rule
 *
 * @method string getMatchFrom() Obtain Field to match
 * @method void setMatchFrom(string $MatchFrom) Set Field to match
 * @method string getMatchParam() Obtain String to match
 * @method void setMatchParam(string $MatchParam) Set String to match
 * @method string getOperator() Obtain Relation between the field and content
 * @method void setOperator(string $Operator) Set Relation between the field and content
 * @method string getMatchContent() Obtain Content to match
 * @method void setMatchContent(string $MatchContent) Set Content to match
 */
class ACLCondition extends AbstractModel
{
    /**
     * @var string Field to match
     */
    public $MatchFrom;

    /**
     * @var string String to match
     */
    public $MatchParam;

    /**
     * @var string Relation between the field and content
     */
    public $Operator;

    /**
     * @var string Content to match
     */
    public $MatchContent;

    /**
     * @param string $MatchFrom Field to match
     * @param string $MatchParam String to match
     * @param string $Operator Relation between the field and content
     * @param string $MatchContent Content to match
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
        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchParam",$param) and $param["MatchParam"] !== null) {
            $this->MatchParam = $param["MatchParam"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
