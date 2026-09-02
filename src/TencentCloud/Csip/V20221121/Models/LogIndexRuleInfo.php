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
 * Log indexing rule information
 *
 * @method LogFullTextInfo getFullText() Obtain <p>Full-text index</p>
 * @method void setFullText(LogFullTextInfo $FullText) Set <p>Full-text index</p>
 * @method LogRuleKeyValueInfo getKeyValue() Obtain <p>Key-value index</p>
 * @method void setKeyValue(LogRuleKeyValueInfo $KeyValue) Set <p>Key-value index</p>
 * @method LogRuleKeyValueInfo getTag() Obtain <p>Tag.</p>
 * @method void setTag(LogRuleKeyValueInfo $Tag) Set <p>Tag.</p>
 * @method LogDynamicIndex getDynamicIndex() Obtain <p>Dynamic indexing</p>
 * @method void setDynamicIndex(LogDynamicIndex $DynamicIndex) Set <p>Dynamic indexing</p>
 */
class LogIndexRuleInfo extends AbstractModel
{
    /**
     * @var LogFullTextInfo <p>Full-text index</p>
     */
    public $FullText;

    /**
     * @var LogRuleKeyValueInfo <p>Key-value index</p>
     */
    public $KeyValue;

    /**
     * @var LogRuleKeyValueInfo <p>Tag.</p>
     */
    public $Tag;

    /**
     * @var LogDynamicIndex <p>Dynamic indexing</p>
     */
    public $DynamicIndex;

    /**
     * @param LogFullTextInfo $FullText <p>Full-text index</p>
     * @param LogRuleKeyValueInfo $KeyValue <p>Key-value index</p>
     * @param LogRuleKeyValueInfo $Tag <p>Tag.</p>
     * @param LogDynamicIndex $DynamicIndex <p>Dynamic indexing</p>
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
            $this->FullText = new LogFullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new LogRuleKeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new LogRuleKeyValueInfo();
            $this->Tag->deserialize($param["Tag"]);
        }

        if (array_key_exists("DynamicIndex",$param) and $param["DynamicIndex"] !== null) {
            $this->DynamicIndex = new LogDynamicIndex();
            $this->DynamicIndex->deserialize($param["DynamicIndex"]);
        }
    }
}
