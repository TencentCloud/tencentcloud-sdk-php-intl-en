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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIndex request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method boolean getStatus() Obtain It does not take effect by default
 * @method void setStatus(boolean $Status) Set It does not take effect by default
 * @method RuleInfo getRule() Obtain Index rule
 * @method void setRule(RuleInfo $Rule) Set Index rule
 * @method boolean getIncludeInternalFields() Obtain Internal field marker of full-text index. Default value: `false`. Valid value: `false`: excluding internal fields; `true`: including internal fields
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) Set Internal field marker of full-text index. Default value: `false`. Valid value: `false`: excluding internal fields; `true`: including internal fields
 * @method integer getMetadataFlag() Obtain Metadata flag. Default value: `0`. Valid value: `0`: full-text index (including the metadata field with key-value index enabled); `1`: full-text index (including all metadata fields); `2`: full-text index (excluding metadata fields).
 * @method void setMetadataFlag(integer $MetadataFlag) Set Metadata flag. Default value: `0`. Valid value: `0`: full-text index (including the metadata field with key-value index enabled); `1`: full-text index (including all metadata fields); `2`: full-text index (excluding metadata fields).
 */
class ModifyIndexRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var boolean It does not take effect by default
     */
    public $Status;

    /**
     * @var RuleInfo Index rule
     */
    public $Rule;

    /**
     * @var boolean Internal field marker of full-text index. Default value: `false`. Valid value: `false`: excluding internal fields; `true`: including internal fields
     */
    public $IncludeInternalFields;

    /**
     * @var integer Metadata flag. Default value: `0`. Valid value: `0`: full-text index (including the metadata field with key-value index enabled); `1`: full-text index (including all metadata fields); `2`: full-text index (excluding metadata fields).
     */
    public $MetadataFlag;

    /**
     * @param string $TopicId Log topic ID
     * @param boolean $Status It does not take effect by default
     * @param RuleInfo $Rule Index rule
     * @param boolean $IncludeInternalFields Internal field marker of full-text index. Default value: `false`. Valid value: `false`: excluding internal fields; `true`: including internal fields
     * @param integer $MetadataFlag Metadata flag. Default value: `0`. Valid value: `0`: full-text index (including the metadata field with key-value index enabled); `1`: full-text index (including all metadata fields); `2`: full-text index (excluding metadata fields).
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
            $this->Rule = new RuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }
    }
}
