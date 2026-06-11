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
 * Tag remark configuration.
Permission to dynamically rewrite the tag set of targets, alerts, captured samples and remote write samples.
 *
 * @method string getAction() Obtain Action executed based on regular expression matching.
-replace: Label replacement, required: SourceLabels, Separator, Regex, TargetLabel, Replacement
-labeldrop: Discard Label, Required: Regex
-labelkeep: Reserve Label, required: Regex
-lowercase, required: SourceLabels, Separator, TargetLabel
-Uppercase: uppercase, Required: SourceLabels, Separator, TargetLabel
-dropequal: Drop metric - exact match, required: SourceLabels, Separator, TargetLabel
-keepequal: retain metric - exact match, required: SourceLabels, Separator, TargetLabel
-drop: Drop metric - Regular expression matching. Required: SourceLabels, Separator, Regex.
-keep: Retain metric - Regular expression matching, Required: SourceLabels, Separator, Regex
-hashmod: hash modulo, required: SourceLabels, Separator, TargetLabel, Modulus
-labelmap: Label map, required: Regex, Replacement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action executed based on regular expression matching.
-replace: Label replacement, required: SourceLabels, Separator, Regex, TargetLabel, Replacement
-labeldrop: Discard Label, Required: Regex
-labelkeep: Reserve Label, required: Regex
-lowercase, required: SourceLabels, Separator, TargetLabel
-Uppercase: uppercase, Required: SourceLabels, Separator, TargetLabel
-dropequal: Drop metric - exact match, required: SourceLabels, Separator, TargetLabel
-keepequal: retain metric - exact match, required: SourceLabels, Separator, TargetLabel
-drop: Drop metric - Regular expression matching. Required: SourceLabels, Separator, Regex.
-keep: Retain metric - Regular expression matching, Required: SourceLabels, Separator, Regex
-hashmod: hash modulo, required: SourceLabels, Separator, TargetLabel, Modulus
-labelmap: Label map, required: Regex, Replacement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSourceLabels() Obtain original label
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceLabels(array $SourceLabels) Set original label
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSeparator() Obtain Original label delimiter. This parameter cannot be an empty string when it is required. Its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeparator(string $Separator) Set Original label delimiter. This parameter cannot be an empty string when it is required. Its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetLabel() Obtain Target label. This parameter cannot be an empty string when it is required. The verification format is ^[a-zA-Z_][a-zA-Z0-9_]*$, and its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetLabel(string $TargetLabel) Set Target label. This parameter cannot be an empty string when it is required. The verification format is ^[a-zA-Z_][a-zA-Z0-9_]*$, and its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReplacement() Obtain Replacement value. If regular expression matching is performed, execute the replacement operation.
-Cannot be an empty string when required. Length cannot exceed 256.
-When the action is LabelMap, check format for Replacement: `^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplacement(string $Replacement) Set Replacement value. If regular expression matching is performed, execute the replacement operation.
-Cannot be an empty string when required. Length cannot exceed 256.
-When the action is LabelMap, check format for Replacement: `^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegex() Obtain Regular expression. The matching value is extracted. This parameter cannot be an empty string when it is required. The regular expression should be a valid RE2. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegex(string $Regex) Set Regular expression. The matching value is extracted. This parameter cannot be an empty string when it is required. The regular expression should be a valid RE2. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getModulus() Obtain Obtains the hash value of a label value. This parameter cannot be empty or 0 when it is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModulus(integer $Modulus) Set Obtains the hash value of a label value. This parameter cannot be empty or 0 when it is required.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Relabeling extends AbstractModel
{
    /**
     * @var string Action executed based on regular expression matching.
-replace: Label replacement, required: SourceLabels, Separator, Regex, TargetLabel, Replacement
-labeldrop: Discard Label, Required: Regex
-labelkeep: Reserve Label, required: Regex
-lowercase, required: SourceLabels, Separator, TargetLabel
-Uppercase: uppercase, Required: SourceLabels, Separator, TargetLabel
-dropequal: Drop metric - exact match, required: SourceLabels, Separator, TargetLabel
-keepequal: retain metric - exact match, required: SourceLabels, Separator, TargetLabel
-drop: Drop metric - Regular expression matching. Required: SourceLabels, Separator, Regex.
-keep: Retain metric - Regular expression matching, Required: SourceLabels, Separator, Regex
-hashmod: hash modulo, required: SourceLabels, Separator, TargetLabel, Modulus
-labelmap: Label map, required: Regex, Replacement
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var array original label
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceLabels;

    /**
     * @var string Original label delimiter. This parameter cannot be an empty string when it is required. Its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Separator;

    /**
     * @var string Target label. This parameter cannot be an empty string when it is required. The verification format is ^[a-zA-Z_][a-zA-Z0-9_]*$, and its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetLabel;

    /**
     * @var string Replacement value. If regular expression matching is performed, execute the replacement operation.
-Cannot be an empty string when required. Length cannot exceed 256.
-When the action is LabelMap, check format for Replacement: `^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Replacement;

    /**
     * @var string Regular expression. The matching value is extracted. This parameter cannot be an empty string when it is required. The regular expression should be a valid RE2. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Regex;

    /**
     * @var integer Obtains the hash value of a label value. This parameter cannot be empty or 0 when it is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Modulus;

    /**
     * @param string $Action Action executed based on regular expression matching.
-replace: Label replacement, required: SourceLabels, Separator, Regex, TargetLabel, Replacement
-labeldrop: Discard Label, Required: Regex
-labelkeep: Reserve Label, required: Regex
-lowercase, required: SourceLabels, Separator, TargetLabel
-Uppercase: uppercase, Required: SourceLabels, Separator, TargetLabel
-dropequal: Drop metric - exact match, required: SourceLabels, Separator, TargetLabel
-keepequal: retain metric - exact match, required: SourceLabels, Separator, TargetLabel
-drop: Drop metric - Regular expression matching. Required: SourceLabels, Separator, Regex.
-keep: Retain metric - Regular expression matching, Required: SourceLabels, Separator, Regex
-hashmod: hash modulo, required: SourceLabels, Separator, TargetLabel, Modulus
-labelmap: Label map, required: Regex, Replacement
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SourceLabels original label
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Separator Original label delimiter. This parameter cannot be an empty string when it is required. Its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetLabel Target label. This parameter cannot be an empty string when it is required. The verification format is ^[a-zA-Z_][a-zA-Z0-9_]*$, and its length cannot exceed 256 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Replacement Replacement value. If regular expression matching is performed, execute the replacement operation.
-Cannot be an empty string when required. Length cannot exceed 256.
-When the action is LabelMap, check format for Replacement: `^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Regex Regular expression. The matching value is extracted. This parameter cannot be an empty string when it is required. The regular expression should be a valid RE2. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Modulus Obtains the hash value of a label value. This parameter cannot be empty or 0 when it is required.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SourceLabels",$param) and $param["SourceLabels"] !== null) {
            $this->SourceLabels = $param["SourceLabels"];
        }

        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }

        if (array_key_exists("TargetLabel",$param) and $param["TargetLabel"] !== null) {
            $this->TargetLabel = $param["TargetLabel"];
        }

        if (array_key_exists("Replacement",$param) and $param["Replacement"] !== null) {
            $this->Replacement = $param["Replacement"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Modulus",$param) and $param["Modulus"] !== null) {
            $this->Modulus = $param["Modulus"];
        }
    }
}
