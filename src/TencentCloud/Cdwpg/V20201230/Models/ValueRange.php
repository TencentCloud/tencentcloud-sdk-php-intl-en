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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ValueRange
 *
 * @method string getType() Obtain Parameter types. Valid values: enum, string, and section. Enum indicates enumeration, namely utf8, latin1, gbk. String indicates that the returned parameter value is a string. Section indicates that the returned parameter value is a value range, for example, 4-8.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Parameter types. Valid values: enum, string, and section. Enum indicates enumeration, namely utf8, latin1, gbk. String indicates that the returned parameter value is a string. Section indicates that the returned parameter value is a value range, for example, 4-8.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Range getRange() Obtain Response parameter when the type is a section.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRange(Range $Range) Set Response parameter when the type is a section.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEnum() Obtain Response parameter when the type is an enum.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnum(array $Enum) Set Response parameter when the type is an enum.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getString() Obtain Response parameter when the type is a string.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setString(string $String) Set Response parameter when the type is a string.Note: This field may return null, indicating that no valid values can be obtained.
 */
class ValueRange extends AbstractModel
{
    /**
     * @var string Parameter types. Valid values: enum, string, and section. Enum indicates enumeration, namely utf8, latin1, gbk. String indicates that the returned parameter value is a string. Section indicates that the returned parameter value is a value range, for example, 4-8.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var Range Response parameter when the type is a section.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Range;

    /**
     * @var array Response parameter when the type is an enum.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enum;

    /**
     * @var string Response parameter when the type is a string.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $String;

    /**
     * @param string $Type Parameter types. Valid values: enum, string, and section. Enum indicates enumeration, namely utf8, latin1, gbk. String indicates that the returned parameter value is a string. Section indicates that the returned parameter value is a value range, for example, 4-8.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Range $Range Response parameter when the type is a section.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Enum Response parameter when the type is an enum.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $String Response parameter when the type is a string.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new Range();
            $this->Range->deserialize($param["Range"]);
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = $param["String"];
        }
    }
}
