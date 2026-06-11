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
 * Alarm configuration for the multidimensional analysis
 *
 * @method string getKey() Obtain Keys. The following keys are supported:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
 * @method void setKey(string $Key) Set Keys. The following keys are supported:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
 * @method string getValue() Obtain Value.
Key corresponds to the following values:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
 * @method void setValue(string $Value) Set Value.
Key corresponds to the following values:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
 */
class AlarmAnalysisConfig extends AbstractModel
{
    /**
     * @var string Keys. The following keys are supported:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
     */
    public $Key;

    /**
     * @var string Value.
Key corresponds to the following values:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
     */
    public $Value;

    /**
     * @param string $Key Keys. The following keys are supported:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
     * @param string $Value Value.
Key corresponds to the following values:
SyntaxRule: Syntax rule, value supports 0: Lucene syntax; 1: CQL syntax.
QueryIndex: Serial number of execution statement. value supports -1: custom; 1: execution statement 1; 2: execution statement 2.
CustomQuery: Query statement. Required and valid when QueryIndex is -1. Example of value: "* | select count(*) as count".
Fields: field. value supports __SOURCE__, __FILENAME__, __HOSTNAME__, __TIMESTAMP__, __INDEX_STATUS__, __PKG_LOGID__, __TOPIC__.
Format: Display Format. value supports 1: one log per line; 2: one field per line for each log entry.
Limit: Maximum number of logs. Example of value: 5.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
