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
 * Log topic search information
 *
 * @method string getTopicId() Obtain <p>Topic</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic</p>
 * @method boolean getStatus() Obtain <p>Status.</p>
 * @method void setStatus(boolean $Status) Set <p>Status.</p>
 * @method LogIndexRuleInfo getRule() Obtain <p>Rule</p>
 * @method void setRule(LogIndexRuleInfo $Rule) Set <p>Rule</p>
 * @method string getModifyTime() Obtain <p>Modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Modification time.</p>
 * @method boolean getIncludeInternalFields() Obtain <p>Whether it contains</p>
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) Set <p>Whether it contains</p>
 * @method integer getMetadataFlag() Obtain <p>Metadata tag</p>
 * @method void setMetadataFlag(integer $MetadataFlag) Set <p>Metadata tag</p>
 */
class LogTopicIndexInfo extends AbstractModel
{
    /**
     * @var string <p>Topic</p>
     */
    public $TopicId;

    /**
     * @var boolean <p>Status.</p>
     */
    public $Status;

    /**
     * @var LogIndexRuleInfo <p>Rule</p>
     */
    public $Rule;

    /**
     * @var string <p>Modification time.</p>
     */
    public $ModifyTime;

    /**
     * @var boolean <p>Whether it contains</p>
     */
    public $IncludeInternalFields;

    /**
     * @var integer <p>Metadata tag</p>
     */
    public $MetadataFlag;

    /**
     * @param string $TopicId <p>Topic</p>
     * @param boolean $Status <p>Status.</p>
     * @param LogIndexRuleInfo $Rule <p>Rule</p>
     * @param string $ModifyTime <p>Modification time.</p>
     * @param boolean $IncludeInternalFields <p>Whether it contains</p>
     * @param integer $MetadataFlag <p>Metadata tag</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new LogIndexRuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }
    }
}
