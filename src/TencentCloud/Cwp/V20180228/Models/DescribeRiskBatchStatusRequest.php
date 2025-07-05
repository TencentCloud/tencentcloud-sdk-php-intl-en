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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskBatchStatus request structure.
 *
 * @method string getRiskType() Obtain Operation event type. MALWARE: virus scanning; HOST_LOGIN: abnormal log-in; BRUTE_ATTACK: password cracking; MALICIOUS_REQUEST: malicious request; BASH_EVENT: high-risk command; PRIVILEGE_EVENT: local privilege escalation; REVERSE_SHELL: reverse shell.
 * @method void setRiskType(string $RiskType) Set Operation event type. MALWARE: virus scanning; HOST_LOGIN: abnormal log-in; BRUTE_ATTACK: password cracking; MALICIOUS_REQUEST: malicious request; BASH_EVENT: high-risk command; PRIVILEGE_EVENT: local privilege escalation; REVERSE_SHELL: reverse shell.
 */
class DescribeRiskBatchStatusRequest extends AbstractModel
{
    /**
     * @var string Operation event type. MALWARE: virus scanning; HOST_LOGIN: abnormal log-in; BRUTE_ATTACK: password cracking; MALICIOUS_REQUEST: malicious request; BASH_EVENT: high-risk command; PRIVILEGE_EVENT: local privilege escalation; REVERSE_SHELL: reverse shell.
     */
    public $RiskType;

    /**
     * @param string $RiskType Operation event type. MALWARE: virus scanning; HOST_LOGIN: abnormal log-in; BRUTE_ATTACK: password cracking; MALICIOUS_REQUEST: malicious request; BASH_EVENT: high-risk command; PRIVILEGE_EVENT: local privilege escalation; REVERSE_SHELL: reverse shell.
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
        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }
    }
}
