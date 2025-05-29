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
 * Knowledge summary output configuration.
 *
 * @method integer getMethod() Obtain Output method: 1. streaming; 2. non-streaming.
 * @method void setMethod(integer $Method) Set Output method: 1. streaming; 2. non-streaming.
 * @method integer getRequirement() Obtain Output requirement 1: text summary. 2: customized requirement.
 * @method void setRequirement(integer $Requirement) Set Output requirement 1: text summary. 2: customized requirement.
 * @method string getRequireCommand() Obtain Custom requirement command.
 * @method void setRequireCommand(string $RequireCommand) Set Custom requirement command.
 */
class SummaryOutput extends AbstractModel
{
    /**
     * @var integer Output method: 1. streaming; 2. non-streaming.
     */
    public $Method;

    /**
     * @var integer Output requirement 1: text summary. 2: customized requirement.
     */
    public $Requirement;

    /**
     * @var string Custom requirement command.
     */
    public $RequireCommand;

    /**
     * @param integer $Method Output method: 1. streaming; 2. non-streaming.
     * @param integer $Requirement Output requirement 1: text summary. 2: customized requirement.
     * @param string $RequireCommand Custom requirement command.
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Requirement",$param) and $param["Requirement"] !== null) {
            $this->Requirement = $param["Requirement"];
        }

        if (array_key_exists("RequireCommand",$param) and $param["RequireCommand"] !== null) {
            $this->RequireCommand = $param["RequireCommand"];
        }
    }
}
