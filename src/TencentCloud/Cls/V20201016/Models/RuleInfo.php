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
 * Index rule. At least one of the `FullText`, `KeyValue`, and `Tag` parameters must be valid.
 *
 * @method FullTextInfo getFullText() Obtain Full-text index configuration. If empty, full-text indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullText(FullTextInfo $FullText) Set Full-text index configuration. If empty, full-text indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RuleKeyValueInfo getKeyValue() Obtain Key-value index configuration. If empty, key-value indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyValue(RuleKeyValueInfo $KeyValue) Set Key-value index configuration. If empty, key-value indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RuleTagInfo getTag() Obtain Metadata field index configuration. If empty, metadata field indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(RuleTagInfo $Tag) Set Metadata field index configuration. If empty, metadata field indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DynamicIndex getDynamicIndex() Obtain Key-value index automatic configuration. If empty, the feature is not enabled.Once enabled, fields within logs are automatically added to the key-value index, including fields added to logs subsequently.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDynamicIndex(DynamicIndex $DynamicIndex) Set Key-value index automatic configuration. If empty, the feature is not enabled.Once enabled, fields within logs are automatically added to the key-value index, including fields added to logs subsequently.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var FullTextInfo Full-text index configuration. If empty, full-text indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullText;

    /**
     * @var RuleKeyValueInfo Key-value index configuration. If empty, key-value indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyValue;

    /**
     * @var RuleTagInfo Metadata field index configuration. If empty, metadata field indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var DynamicIndex Key-value index automatic configuration. If empty, the feature is not enabled.Once enabled, fields within logs are automatically added to the key-value index, including fields added to logs subsequently.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DynamicIndex;

    /**
     * @param FullTextInfo $FullText Full-text index configuration. If empty, full-text indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RuleKeyValueInfo $KeyValue Key-value index configuration. If empty, key-value indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RuleTagInfo $Tag Metadata field index configuration. If empty, metadata field indexing is not enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DynamicIndex $DynamicIndex Key-value index automatic configuration. If empty, the feature is not enabled.Once enabled, fields within logs are automatically added to the key-value index, including fields added to logs subsequently.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FullText",$param) and $param["FullText"] !== null) {
            $this->FullText = new FullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new RuleKeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new RuleTagInfo();
            $this->Tag->deserialize($param["Tag"]);
        }

        if (array_key_exists("DynamicIndex",$param) and $param["DynamicIndex"] !== null) {
            $this->DynamicIndex = new DynamicIndex();
            $this->DynamicIndex->deserialize($param["DynamicIndex"]);
        }
    }
}
