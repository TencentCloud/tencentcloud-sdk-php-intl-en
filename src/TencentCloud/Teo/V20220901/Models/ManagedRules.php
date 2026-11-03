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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rules for Web security
 *
 * @method string getEnabled() Obtain <p>Whether managed rules are enabled. Valid values: <li>on: enabled. All managed rules take effect as configured.</li><li>off: disabled. No managed rules take effect.</li></p>
 * @method void setEnabled(string $Enabled) Set <p>Whether managed rules are enabled. Valid values: <li>on: enabled. All managed rules take effect as configured.</li><li>off: disabled. No managed rules take effect.</li></p>
 * @method string getDetectionOnly() Obtain <p>Whether evaluation mode is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. All managed rules take effect in observation mode.</li><li>off: disabled. All managed rules take effect as configured.</li></p>
 * @method void setDetectionOnly(string $DetectionOnly) Set <p>Whether evaluation mode is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. All managed rules take effect in observation mode.</li><li>off: disabled. All managed rules take effect as configured.</li></p>
 * @method string getSemanticAnalysis() Obtain <p>Whether the deep analysis option for managed rules is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. Requests are processed after deep analysis.</li><li>off: disabled. Requests are processed directly without deep analysis.</li> <br>This parameter is to be deprecated. The switch for deep analysis rules is migrated to the `SemanticAnalysisRules.Enabled` parameter.</p>
 * @method void setSemanticAnalysis(string $SemanticAnalysis) Set <p>Whether the deep analysis option for managed rules is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. Requests are processed after deep analysis.</li><li>off: disabled. Requests are processed directly without deep analysis.</li> <br>This parameter is to be deprecated. The switch for deep analysis rules is migrated to the `SemanticAnalysisRules.Enabled` parameter.</p>
 * @method SemanticAnalysisRules getSemanticAnalysisRules() Obtain <p>Deep analysis configuration option. Identifies malicious behaviors in requests (such as SQL injection and XSS attacks), and logs and blocks malicious requests.</p>
 * @method void setSemanticAnalysisRules(SemanticAnalysisRules $SemanticAnalysisRules) Set <p>Deep analysis configuration option. Identifies malicious behaviors in requests (such as SQL injection and XSS attacks), and logs and blocks malicious requests.</p>
 * @method ManagedRuleAutoUpdate getAutoUpdate() Obtain <p>Auto-update option for managed rules.</p>
 * @method void setAutoUpdate(ManagedRuleAutoUpdate $AutoUpdate) Set <p>Auto-update option for managed rules.</p>
 * @method array getManagedRuleGroups() Obtain <p>Configuration of managed rule groups. If an empty array is passed for this structure or `GroupId` is not included in the list, the default processing method is used.</p>
 * @method void setManagedRuleGroups(array $ManagedRuleGroups) Set <p>Configuration of managed rule groups. If an empty array is passed for this structure or `GroupId` is not included in the list, the default processing method is used.</p>
 * @method FrequentScanningProtection getFrequentScanningProtection() Obtain <p>High-frequency scan protection configuration option. When a visitor's requests frequently trigger managed rules configured as block, all requests from this visitor are blocked for a period of time.</p>
 * @method void setFrequentScanningProtection(FrequentScanningProtection $FrequentScanningProtection) Set <p>High-frequency scan protection configuration option. When a visitor's requests frequently trigger managed rules configured as block, all requests from this visitor are blocked for a period of time.</p>
 */
class ManagedRules extends AbstractModel
{
    /**
     * @var string <p>Whether managed rules are enabled. Valid values: <li>on: enabled. All managed rules take effect as configured.</li><li>off: disabled. No managed rules take effect.</li></p>
     */
    public $Enabled;

    /**
     * @var string <p>Whether evaluation mode is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. All managed rules take effect in observation mode.</li><li>off: disabled. All managed rules take effect as configured.</li></p>
     */
    public $DetectionOnly;

    /**
     * @var string <p>Whether the deep analysis option for managed rules is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. Requests are processed after deep analysis.</li><li>off: disabled. Requests are processed directly without deep analysis.</li> <br>This parameter is to be deprecated. The switch for deep analysis rules is migrated to the `SemanticAnalysisRules.Enabled` parameter.</p>
     */
    public $SemanticAnalysis;

    /**
     * @var SemanticAnalysisRules <p>Deep analysis configuration option. Identifies malicious behaviors in requests (such as SQL injection and XSS attacks), and logs and blocks malicious requests.</p>
     */
    public $SemanticAnalysisRules;

    /**
     * @var ManagedRuleAutoUpdate <p>Auto-update option for managed rules.</p>
     */
    public $AutoUpdate;

    /**
     * @var array <p>Configuration of managed rule groups. If an empty array is passed for this structure or `GroupId` is not included in the list, the default processing method is used.</p>
     */
    public $ManagedRuleGroups;

    /**
     * @var FrequentScanningProtection <p>High-frequency scan protection configuration option. When a visitor's requests frequently trigger managed rules configured as block, all requests from this visitor are blocked for a period of time.</p>
     */
    public $FrequentScanningProtection;

    /**
     * @param string $Enabled <p>Whether managed rules are enabled. Valid values: <li>on: enabled. All managed rules take effect as configured.</li><li>off: disabled. No managed rules take effect.</li></p>
     * @param string $DetectionOnly <p>Whether evaluation mode is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. All managed rules take effect in observation mode.</li><li>off: disabled. All managed rules take effect as configured.</li></p>
     * @param string $SemanticAnalysis <p>Whether the deep analysis option for managed rules is enabled. This parameter is valid only when the `Enabled` parameter is set to `on`. Valid values: <li>on: enabled. Requests are processed after deep analysis.</li><li>off: disabled. Requests are processed directly without deep analysis.</li> <br>This parameter is to be deprecated. The switch for deep analysis rules is migrated to the `SemanticAnalysisRules.Enabled` parameter.</p>
     * @param SemanticAnalysisRules $SemanticAnalysisRules <p>Deep analysis configuration option. Identifies malicious behaviors in requests (such as SQL injection and XSS attacks), and logs and blocks malicious requests.</p>
     * @param ManagedRuleAutoUpdate $AutoUpdate <p>Auto-update option for managed rules.</p>
     * @param array $ManagedRuleGroups <p>Configuration of managed rule groups. If an empty array is passed for this structure or `GroupId` is not included in the list, the default processing method is used.</p>
     * @param FrequentScanningProtection $FrequentScanningProtection <p>High-frequency scan protection configuration option. When a visitor's requests frequently trigger managed rules configured as block, all requests from this visitor are blocked for a period of time.</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DetectionOnly",$param) and $param["DetectionOnly"] !== null) {
            $this->DetectionOnly = $param["DetectionOnly"];
        }

        if (array_key_exists("SemanticAnalysis",$param) and $param["SemanticAnalysis"] !== null) {
            $this->SemanticAnalysis = $param["SemanticAnalysis"];
        }

        if (array_key_exists("SemanticAnalysisRules",$param) and $param["SemanticAnalysisRules"] !== null) {
            $this->SemanticAnalysisRules = new SemanticAnalysisRules();
            $this->SemanticAnalysisRules->deserialize($param["SemanticAnalysisRules"]);
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = new ManagedRuleAutoUpdate();
            $this->AutoUpdate->deserialize($param["AutoUpdate"]);
        }

        if (array_key_exists("ManagedRuleGroups",$param) and $param["ManagedRuleGroups"] !== null) {
            $this->ManagedRuleGroups = [];
            foreach ($param["ManagedRuleGroups"] as $key => $value){
                $obj = new ManagedRuleGroup();
                $obj->deserialize($value);
                array_push($this->ManagedRuleGroups, $obj);
            }
        }

        if (array_key_exists("FrequentScanningProtection",$param) and $param["FrequentScanningProtection"] !== null) {
            $this->FrequentScanningProtection = new FrequentScanningProtection();
            $this->FrequentScanningProtection->deserialize($param["FrequentScanningProtection"]);
        }
    }
}
