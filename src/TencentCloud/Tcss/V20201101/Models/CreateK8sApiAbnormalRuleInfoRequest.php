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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateK8sApiAbnormalRuleInfo request structure.
 *
 * @method K8sApiAbnormalRuleInfo getRuleInfo() Obtain Rule details
 * @method void setRuleInfo(K8sApiAbnormalRuleInfo $RuleInfo) Set Rule details
 * @method string getCopySrcRuleID() Obtain The ID of the copy rule (for copy rule scenarios)
 * @method void setCopySrcRuleID(string $CopySrcRuleID) Set The ID of the copy rule (for copy rule scenarios)
 * @method integer getEventID() Obtain Event ID (for adding events to an allowlist)
 * @method void setEventID(integer $EventID) Set Event ID (for adding events to an allowlist)
 */
class CreateK8sApiAbnormalRuleInfoRequest extends AbstractModel
{
    /**
     * @var K8sApiAbnormalRuleInfo Rule details
     */
    public $RuleInfo;

    /**
     * @var string The ID of the copy rule (for copy rule scenarios)
     */
    public $CopySrcRuleID;

    /**
     * @var integer Event ID (for adding events to an allowlist)
     */
    public $EventID;

    /**
     * @param K8sApiAbnormalRuleInfo $RuleInfo Rule details
     * @param string $CopySrcRuleID The ID of the copy rule (for copy rule scenarios)
     * @param integer $EventID Event ID (for adding events to an allowlist)
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
        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = new K8sApiAbnormalRuleInfo();
            $this->RuleInfo->deserialize($param["RuleInfo"]);
        }

        if (array_key_exists("CopySrcRuleID",$param) and $param["CopySrcRuleID"] !== null) {
            $this->CopySrcRuleID = $param["CopySrcRuleID"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }
    }
}
