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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rules configuration.
 *
 * @method string getEnabled() Obtain The managed rule status. Values: <li>`on`: enabled, all managed rules take effect as configured;</li> <li>`off`: disabled, all managed rules do not take effect.</li>.
 * @method void setEnabled(string $Enabled) Set The managed rule status. Values: <li>`on`: enabled, all managed rules take effect as configured;</li> <li>`off`: disabled, all managed rules do not take effect.</li>.
 * @method string getDetectionOnly() Obtain Evaluation mode is enabled or not, it is valid only when the `Enabled` parameter is set to `on`. Values: <li>`on`: enabled, all managed rules take effect in `observe` mode.</li> <li>off: disabled, all managed rules take effect according to the specified configuration.</li>.
 * @method void setDetectionOnly(string $DetectionOnly) Set Evaluation mode is enabled or not, it is valid only when the `Enabled` parameter is set to `on`. Values: <li>`on`: enabled, all managed rules take effect in `observe` mode.</li> <li>off: disabled, all managed rules take effect according to the specified configuration.</li>.
 * @method string getSemanticAnalysis() Obtain Managed rule semantic analysis is enabled or not, it is valid only when the `Enabled` parameter is `on`. Values: <li>`on`: enabled, perform semantic analysis  before processing requests;</li> <li>`off`: disabled, process requests directly without semantic analysis.</li> <br/>The default value is `off`.
 * @method void setSemanticAnalysis(string $SemanticAnalysis) Set Managed rule semantic analysis is enabled or not, it is valid only when the `Enabled` parameter is `on`. Values: <li>`on`: enabled, perform semantic analysis  before processing requests;</li> <li>`off`: disabled, process requests directly without semantic analysis.</li> <br/>The default value is `off`.
 * @method ManagedRuleAutoUpdate getAutoUpdate() Obtain Managed rule automatic update option.
 * @method void setAutoUpdate(ManagedRuleAutoUpdate $AutoUpdate) Set Managed rule automatic update option.
 * @method array getManagedRuleGroups() Obtain Configuration of the managed rule group. If this structure is passed as an empty array or the GroupId is not included in the array, it will be processed based by default.
 * @method void setManagedRuleGroups(array $ManagedRuleGroups) Set Configuration of the managed rule group. If this structure is passed as an empty array or the GroupId is not included in the array, it will be processed based by default.
 */
class ManagedRules extends AbstractModel
{
    /**
     * @var string The managed rule status. Values: <li>`on`: enabled, all managed rules take effect as configured;</li> <li>`off`: disabled, all managed rules do not take effect.</li>.
     */
    public $Enabled;

    /**
     * @var string Evaluation mode is enabled or not, it is valid only when the `Enabled` parameter is set to `on`. Values: <li>`on`: enabled, all managed rules take effect in `observe` mode.</li> <li>off: disabled, all managed rules take effect according to the specified configuration.</li>.
     */
    public $DetectionOnly;

    /**
     * @var string Managed rule semantic analysis is enabled or not, it is valid only when the `Enabled` parameter is `on`. Values: <li>`on`: enabled, perform semantic analysis  before processing requests;</li> <li>`off`: disabled, process requests directly without semantic analysis.</li> <br/>The default value is `off`.
     */
    public $SemanticAnalysis;

    /**
     * @var ManagedRuleAutoUpdate Managed rule automatic update option.
     */
    public $AutoUpdate;

    /**
     * @var array Configuration of the managed rule group. If this structure is passed as an empty array or the GroupId is not included in the array, it will be processed based by default.
     */
    public $ManagedRuleGroups;

    /**
     * @param string $Enabled The managed rule status. Values: <li>`on`: enabled, all managed rules take effect as configured;</li> <li>`off`: disabled, all managed rules do not take effect.</li>.
     * @param string $DetectionOnly Evaluation mode is enabled or not, it is valid only when the `Enabled` parameter is set to `on`. Values: <li>`on`: enabled, all managed rules take effect in `observe` mode.</li> <li>off: disabled, all managed rules take effect according to the specified configuration.</li>.
     * @param string $SemanticAnalysis Managed rule semantic analysis is enabled or not, it is valid only when the `Enabled` parameter is `on`. Values: <li>`on`: enabled, perform semantic analysis  before processing requests;</li> <li>`off`: disabled, process requests directly without semantic analysis.</li> <br/>The default value is `off`.
     * @param ManagedRuleAutoUpdate $AutoUpdate Managed rule automatic update option.
     * @param array $ManagedRuleGroups Configuration of the managed rule group. If this structure is passed as an empty array or the GroupId is not included in the array, it will be processed based by default.
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
    }
}
