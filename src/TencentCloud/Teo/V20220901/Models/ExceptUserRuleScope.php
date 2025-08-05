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
 * The scope to which the exception rule applies
 *
 * @method string getType() Obtain Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
 * @method void setType(string $Type) Set Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
 * @method array getModules() Obtain Effective module. the field value can be:.
<li>`waf`: tencent cloud-managed rules</li>.
<Li>`Rate`: rate limit</li>.
<li>`acl`: custom rule</li>.
<Li>`Cc`: cc attack defense</li>.
<Li>`Bot`: bot protection</li>.
 * @method void setModules(array $Modules) Set Effective module. the field value can be:.
<li>`waf`: tencent cloud-managed rules</li>.
<Li>`Rate`: rate limit</li>.
<li>`acl`: custom rule</li>.
<Li>`Cc`: cc attack defense</li>.
<Li>`Bot`: bot protection</li>.
 * @method array getPartialModules() Obtain Skip exception rule details for some rule ids. if null, use the last set configuration by default.
 * @method void setPartialModules(array $PartialModules) Set Skip exception rule details for some rule ids. if null, use the last set configuration by default.
 * @method array getSkipConditions() Obtain Details of the exception rule for skipping specific fields. if null, use the last set configuration by default.
 * @method void setSkipConditions(array $SkipConditions) Set Details of the exception rule for skipping specific fields. if null, use the last set configuration by default.
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
     * @var array Effective module. the field value can be:.
<li>`waf`: tencent cloud-managed rules</li>.
<Li>`Rate`: rate limit</li>.
<li>`acl`: custom rule</li>.
<Li>`Cc`: cc attack defense</li>.
<Li>`Bot`: bot protection</li>.
     */
    public $Modules;

    /**
     * @var array Skip exception rule details for some rule ids. if null, use the last set configuration by default.
     */
    public $PartialModules;

    /**
     * @var array Details of the exception rule for skipping specific fields. if null, use the last set configuration by default.
     */
    public $SkipConditions;

    /**
     * @param string $Type Exception mode. Values:
<li>`complete`: Skip the exception rule for full requests.</li>
<li>`partial`: Skip the exception rule for partial requests.</li>
     * @param array $Modules Effective module. the field value can be:.
<li>`waf`: tencent cloud-managed rules</li>.
<Li>`Rate`: rate limit</li>.
<li>`acl`: custom rule</li>.
<Li>`Cc`: cc attack defense</li>.
<Li>`Bot`: bot protection</li>.
     * @param array $PartialModules Skip exception rule details for some rule ids. if null, use the last set configuration by default.
     * @param array $SkipConditions Details of the exception rule for skipping specific fields. if null, use the last set configuration by default.
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
