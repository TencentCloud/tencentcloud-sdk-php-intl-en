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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCLSDeliverTask request structure.
 *
 * @method string getTaskName() Obtain <p>Task name</p><p>Parameter format: <code>^[a-zA-Z0-9_-]{1,64}$</code></p>
 * @method void setTaskName(string $TaskName) Set <p>Task name</p><p>Parameter format: <code>^[a-zA-Z0-9_-]{1,64}$</code></p>
 * @method SourceTopicConfig getSourceTopicConfig() Obtain <p>Source topic information</p>
 * @method void setSourceTopicConfig(SourceTopicConfig $SourceTopicConfig) Set <p>Source topic information</p>
 * @method TargetTopicConfig getTargetTopicConfig() Obtain <p>Target topic information</p>
 * @method void setTargetTopicConfig(TargetTopicConfig $TargetTopicConfig) Set <p>Target topic information</p>
 * @method DeliverRule getDeliverRule() Obtain <p>Shipping Rule</p>
 * @method void setDeliverRule(DeliverRule $DeliverRule) Set <p>Shipping Rule</p>
 * @method integer getCompliance() Obtain <p>Compliance commitment.</p><p>Enumeration values:</p><ul><li>1: Agree to the cross-border data transmission clause</li></ul>
 * @method void setCompliance(integer $Compliance) Set <p>Compliance commitment.</p><p>Enumeration values:</p><ul><li>1: Agree to the cross-border data transmission clause</li></ul>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable delivery service log.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul><p>Default value: 2</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable delivery service log.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul><p>Default value: 2</p>
 */
class CreateCLSDeliverTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Task name</p><p>Parameter format: <code>^[a-zA-Z0-9_-]{1,64}$</code></p>
     */
    public $TaskName;

    /**
     * @var SourceTopicConfig <p>Source topic information</p>
     */
    public $SourceTopicConfig;

    /**
     * @var TargetTopicConfig <p>Target topic information</p>
     */
    public $TargetTopicConfig;

    /**
     * @var DeliverRule <p>Shipping Rule</p>
     */
    public $DeliverRule;

    /**
     * @var integer <p>Compliance commitment.</p><p>Enumeration values:</p><ul><li>1: Agree to the cross-border data transmission clause</li></ul>
     */
    public $Compliance;

    /**
     * @var integer <p>Whether to enable delivery service log.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul><p>Default value: 2</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TaskName <p>Task name</p><p>Parameter format: <code>^[a-zA-Z0-9_-]{1,64}$</code></p>
     * @param SourceTopicConfig $SourceTopicConfig <p>Source topic information</p>
     * @param TargetTopicConfig $TargetTopicConfig <p>Target topic information</p>
     * @param DeliverRule $DeliverRule <p>Shipping Rule</p>
     * @param integer $Compliance <p>Compliance commitment.</p><p>Enumeration values:</p><ul><li>1: Agree to the cross-border data transmission clause</li></ul>
     * @param integer $HasServicesLog <p>Whether to enable delivery service log.</p><p>Enumeration values:</p><ul><li>1: Disabled</li><li>2: Enabled</li></ul><p>Default value: 2</p>
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceTopicConfig",$param) and $param["SourceTopicConfig"] !== null) {
            $this->SourceTopicConfig = new SourceTopicConfig();
            $this->SourceTopicConfig->deserialize($param["SourceTopicConfig"]);
        }

        if (array_key_exists("TargetTopicConfig",$param) and $param["TargetTopicConfig"] !== null) {
            $this->TargetTopicConfig = new TargetTopicConfig();
            $this->TargetTopicConfig->deserialize($param["TargetTopicConfig"]);
        }

        if (array_key_exists("DeliverRule",$param) and $param["DeliverRule"] !== null) {
            $this->DeliverRule = new DeliverRule();
            $this->DeliverRule->deserialize($param["DeliverRule"]);
        }

        if (array_key_exists("Compliance",$param) and $param["Compliance"] !== null) {
            $this->Compliance = $param["Compliance"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
