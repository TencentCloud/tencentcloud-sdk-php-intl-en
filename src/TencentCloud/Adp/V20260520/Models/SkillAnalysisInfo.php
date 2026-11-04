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
 * SkillAnalysisInfo: Skill security scan information.
 *
 * @method integer getAnalysisStatus() Obtain Safety detection status

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | To be checked |
| 1 | detecting |
| 2 | Available |
| 3 | Unavailable |
| 4 | Detection failed |
 * @method void setAnalysisStatus(integer $AnalysisStatus) Set Safety detection status

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | To be checked |
| 1 | detecting |
| 2 | Available |
| 3 | Unavailable |
| 4 | Detection failed |
 * @method string getRiskDescription() Obtain Risk description
 * @method void setRiskDescription(string $RiskDescription) Set Risk description
 * @method integer getRiskLevel() Obtain Risk level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | risk-free |
| 1 | Low risk |
| 2 | Medium-risk |
| 3 | High-risk |
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | risk-free |
| 1 | Low risk |
| 2 | Medium-risk |
| 3 | High-risk |
 * @method string getSecurityReportUrl() Obtain Security report redirection url
 * @method void setSecurityReportUrl(string $SecurityReportUrl) Set Security report redirection url
 */
class SkillAnalysisInfo extends AbstractModel
{
    /**
     * @var integer Safety detection status

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | To be checked |
| 1 | detecting |
| 2 | Available |
| 3 | Unavailable |
| 4 | Detection failed |
     */
    public $AnalysisStatus;

    /**
     * @var string Risk description
     */
    public $RiskDescription;

    /**
     * @var integer Risk level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | risk-free |
| 1 | Low risk |
| 2 | Medium-risk |
| 3 | High-risk |
     */
    public $RiskLevel;

    /**
     * @var string Security report redirection url
     */
    public $SecurityReportUrl;

    /**
     * @param integer $AnalysisStatus Safety detection status

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | To be checked |
| 1 | detecting |
| 2 | Available |
| 3 | Unavailable |
| 4 | Detection failed |
     * @param string $RiskDescription Risk description
     * @param integer $RiskLevel Risk level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | risk-free |
| 1 | Low risk |
| 2 | Medium-risk |
| 3 | High-risk |
     * @param string $SecurityReportUrl Security report redirection url
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
        if (array_key_exists("AnalysisStatus",$param) and $param["AnalysisStatus"] !== null) {
            $this->AnalysisStatus = $param["AnalysisStatus"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("SecurityReportUrl",$param) and $param["SecurityReportUrl"] !== null) {
            $this->SecurityReportUrl = $param["SecurityReportUrl"];
        }
    }
}
