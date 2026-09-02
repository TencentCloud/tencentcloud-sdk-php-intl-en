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
 * ModifySandboxLLMAuditRuleStatus request structure.
 *
 * @method array getIDList() Obtain List of rule IDs.
Input parameter limits: not empty, length 1-100
 * @method void setIDList(array $IDList) Set List of rule IDs.
Input parameter limits: not empty, length 1-100
 * @method string getStatus() Obtain Target Status
Enumeration value:
ON: enabled.
OFF: disabled.
 * @method void setStatus(string $Status) Set Target Status
Enumeration value:
ON: enabled.
OFF: disabled.
 */
class ModifySandboxLLMAuditRuleStatusRequest extends AbstractModel
{
    /**
     * @var array List of rule IDs.
Input parameter limits: not empty, length 1-100
     */
    public $IDList;

    /**
     * @var string Target Status
Enumeration value:
ON: enabled.
OFF: disabled.
     */
    public $Status;

    /**
     * @param array $IDList List of rule IDs.
Input parameter limits: not empty, length 1-100
     * @param string $Status Target Status
Enumeration value:
ON: enabled.
OFF: disabled.
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
        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
