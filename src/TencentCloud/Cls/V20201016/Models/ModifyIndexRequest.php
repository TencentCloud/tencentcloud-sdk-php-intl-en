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
 * ModifyIndex request structure.
 *
 * @method string getTopicId() Obtain Log topic Id.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic Id.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method boolean getStatus() Obtain Index status. false: close index, true: enable index.
Once enabled, retrieval and analysis of logs will generate indexing traffic, index storage and corresponding fees. [Billing details](https://www.tencentcloud.com/document/product/614/45802?from_cn_redirect=1#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
 * @method void setStatus(boolean $Status) Set Index status. false: close index, true: enable index.
Once enabled, retrieval and analysis of logs will generate indexing traffic, index storage and corresponding fees. [Billing details](https://www.tencentcloud.com/document/product/614/45802?from_cn_redirect=1#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
 * @method RuleInfo getRule() Obtain Index rule
 * @method void setRule(RuleInfo $Rule) Set Index rule
 * @method boolean getIncludeInternalFields() Obtain Whether full-text indexing includes internal fields (`__FILENAME__`, `__HOSTNAME__`, and `__SOURCE__`). Default value: `false`. Recommended value: `true`.
* `false`: Full-text indexing does not include internal fields.
* `true`: Full-text indexing includes internal fields.
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) Set Whether full-text indexing includes internal fields (`__FILENAME__`, `__HOSTNAME__`, and `__SOURCE__`). Default value: `false`. Recommended value: `true`.
* `false`: Full-text indexing does not include internal fields.
* `true`: Full-text indexing includes internal fields.
 * @method integer getMetadataFlag() Obtain Whether full-text indexing includes metadata fields (which are prefixed with `__TAG__`). Default value: `0`. Recommended value: `1`.
* `0`: Full-text indexing includes only metadata fields with key-value indexing enabled.
* `1`: Full-text indexing includes all metadata fields.
* `2`: Full-text indexing does not include metadata fields.
 * @method void setMetadataFlag(integer $MetadataFlag) Set Whether full-text indexing includes metadata fields (which are prefixed with `__TAG__`). Default value: `0`. Recommended value: `1`.
* `0`: Full-text indexing includes only metadata fields with key-value indexing enabled.
* `1`: Full-text indexing includes all metadata fields.
* `2`: Full-text indexing does not include metadata fields.
 * @method string getCoverageField() Obtain Custom log parsing exception storage fields
 * @method void setCoverageField(string $CoverageField) Set Custom log parsing exception storage fields
 */
class ModifyIndexRequest extends AbstractModel
{
    /**
     * @var string Log topic Id.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var boolean Index status. false: close index, true: enable index.
Once enabled, retrieval and analysis of logs will generate indexing traffic, index storage and corresponding fees. [Billing details](https://www.tencentcloud.com/document/product/614/45802?from_cn_redirect=1#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
     */
    public $Status;

    /**
     * @var RuleInfo Index rule
     */
    public $Rule;

    /**
     * @var boolean Whether full-text indexing includes internal fields (`__FILENAME__`, `__HOSTNAME__`, and `__SOURCE__`). Default value: `false`. Recommended value: `true`.
* `false`: Full-text indexing does not include internal fields.
* `true`: Full-text indexing includes internal fields.
     */
    public $IncludeInternalFields;

    /**
     * @var integer Whether full-text indexing includes metadata fields (which are prefixed with `__TAG__`). Default value: `0`. Recommended value: `1`.
* `0`: Full-text indexing includes only metadata fields with key-value indexing enabled.
* `1`: Full-text indexing includes all metadata fields.
* `2`: Full-text indexing does not include metadata fields.
     */
    public $MetadataFlag;

    /**
     * @var string Custom log parsing exception storage fields
     */
    public $CoverageField;

    /**
     * @param string $TopicId Log topic Id.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param boolean $Status Index status. false: close index, true: enable index.
Once enabled, retrieval and analysis of logs will generate indexing traffic, index storage and corresponding fees. [Billing details](https://www.tencentcloud.com/document/product/614/45802?from_cn_redirect=1#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
     * @param RuleInfo $Rule Index rule
     * @param boolean $IncludeInternalFields Whether full-text indexing includes internal fields (`__FILENAME__`, `__HOSTNAME__`, and `__SOURCE__`). Default value: `false`. Recommended value: `true`.
* `false`: Full-text indexing does not include internal fields.
* `true`: Full-text indexing includes internal fields.
     * @param integer $MetadataFlag Whether full-text indexing includes metadata fields (which are prefixed with `__TAG__`). Default value: `0`. Recommended value: `1`.
* `0`: Full-text indexing includes only metadata fields with key-value indexing enabled.
* `1`: Full-text indexing includes all metadata fields.
* `2`: Full-text indexing does not include metadata fields.
     * @param string $CoverageField Custom log parsing exception storage fields
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

        if (array_key_exists("CoverageField",$param) and $param["CoverageField"] !== null) {
            $this->CoverageField = $param["CoverageField"];
        }
    }
}
