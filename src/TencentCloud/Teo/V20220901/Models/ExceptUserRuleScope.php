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
 * The scope to which the exception rule applies
 *
 * @method string getType() Obtain Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
 * @method void setType(string $Type) Set Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
 * @method array getModules() Obtain The module to be activated. Values:
<li>`waf`: Tencent Cloud-managed rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`acl`: Custom rule</li>
<li>`cc`: CC attack defense</li>
<li>`bot`: Bot protection</li>
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setModules(array $Modules) Set The module to be activated. Values:
<li>`waf`: Tencent Cloud-managed rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`acl`: Custom rule</li>
<li>`cc`: CC attack defense</li>
<li>`bot`: Bot protection</li>
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getPartialModules() Obtain Module settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPartialModules(array $PartialModules) Set Module settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getSkipConditions() Obtain Condition settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSkipConditions(array $SkipConditions) Set Condition settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ExceptUserRuleScope extends AbstractModel
{
    /**
     * @var string Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
     */
    public $Type;

    /**
     * @var array The module to be activated. Values:
<li>`waf`: Tencent Cloud-managed rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`acl`: Custom rule</li>
<li>`cc`: CC attack defense</li>
<li>`bot`: Bot protection</li>
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Modules;

    /**
     * @var array Module settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PartialModules;

    /**
     * @var array Condition settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SkipConditions;

    /**
     * @param string $Type Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
     * @param array $Modules The module to be activated. Values:
<li>`waf`: Tencent Cloud-managed rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`acl`: Custom rule</li>
<li>`cc`: CC attack defense</li>
<li>`bot`: Bot protection</li>
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $PartialModules Module settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $SkipConditions Condition settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("PartialModules",$param) and $param["PartialModules"] !== null) {
            $this->PartialModules = [];
            foreach ($param["PartialModules"] as $key => $value){
                $obj = new PartialModule();
                $obj->deserialize($value);
                array_push($this->PartialModules, $obj);
            }
        }

        if (array_key_exists("SkipConditions",$param) and $param["SkipConditions"] !== null) {
            $this->SkipConditions = [];
            foreach ($param["SkipConditions"] as $key => $value){
                $obj = new SkipCondition();
                $obj->deserialize($value);
                array_push($this->SkipConditions, $obj);
            }
        }
    }
}
