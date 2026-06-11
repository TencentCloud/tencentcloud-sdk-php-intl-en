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
 * Multi-Dimensional analysis dimension
 *
 * @method string getName() Obtain Analysis Name
 * @method void setName(string $Name) Set Analysis Name
 * @method string getType() Obtain Analysis type: query (custom retrieval and analysis), field (TOP5 fields and proportion statistics), original (related raw logs)

 * @method void setType(string $Type) Set Analysis type: query (custom retrieval and analysis), field (TOP5 fields and proportion statistics), original (related raw logs)

 * @method string getContent() Obtain Analysis content
 * @method void setContent(string $Content) Set Analysis content
 * @method array getConfigInfo() Obtain Multi-dimensional analysis configuration.

When the Type field of Analysis is query (custom), support
{
"Key": "SyntaxRule",  // Syntax rule
"Value": "1"  //0: Lucene syntax, 1: CQL syntax
}

When the Type field of Analysis is field (top5), it supports
 {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", //Query statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "SyntaxRule", // If this field cannot be found, it's assumed to be the legacy syntax (Lucene)
    "Value": "0"//0:Lucene, 1:CQL
}       

When the Type field of Analysis is original (raw log), it supports
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", // Retrieval statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "Format", //Display format. 1: one log per line, 2: one field per line for each log entry
    "Value": "2"
},
{
"Key": "Limit", //Maximum number of logs
    "Value": "5"
},{
"Key": "SyntaxRule", // If this field is not found, it's also the old syntax
    "Value": "0"//0:Lucene, 1:CQL
}
 * @method void setConfigInfo(array $ConfigInfo) Set Multi-dimensional analysis configuration.

When the Type field of Analysis is query (custom), support
{
"Key": "SyntaxRule",  // Syntax rule
"Value": "1"  //0: Lucene syntax, 1: CQL syntax
}

When the Type field of Analysis is field (top5), it supports
 {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", //Query statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "SyntaxRule", // If this field cannot be found, it's assumed to be the legacy syntax (Lucene)
    "Value": "0"//0:Lucene, 1:CQL
}       

When the Type field of Analysis is original (raw log), it supports
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", // Retrieval statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "Format", //Display format. 1: one log per line, 2: one field per line for each log entry
    "Value": "2"
},
{
"Key": "Limit", //Maximum number of logs
    "Value": "5"
},{
"Key": "SyntaxRule", // If this field is not found, it's also the old syntax
    "Value": "0"//0:Lucene, 1:CQL
}
 */
class AnalysisDimensional extends AbstractModel
{
    /**
     * @var string Analysis Name
     */
    public $Name;

    /**
     * @var string Analysis type: query (custom retrieval and analysis), field (TOP5 fields and proportion statistics), original (related raw logs)

     */
    public $Type;

    /**
     * @var string Analysis content
     */
    public $Content;

    /**
     * @var array Multi-dimensional analysis configuration.

When the Type field of Analysis is query (custom), support
{
"Key": "SyntaxRule",  // Syntax rule
"Value": "1"  //0: Lucene syntax, 1: CQL syntax
}

When the Type field of Analysis is field (top5), it supports
 {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", //Query statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "SyntaxRule", // If this field cannot be found, it's assumed to be the legacy syntax (Lucene)
    "Value": "0"//0:Lucene, 1:CQL
}       

When the Type field of Analysis is original (raw log), it supports
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", // Retrieval statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "Format", //Display format. 1: one log per line, 2: one field per line for each log entry
    "Value": "2"
},
{
"Key": "Limit", //Maximum number of logs
    "Value": "5"
},{
"Key": "SyntaxRule", // If this field is not found, it's also the old syntax
    "Value": "0"//0:Lucene, 1:CQL
}
     */
    public $ConfigInfo;

    /**
     * @param string $Name Analysis Name
     * @param string $Type Analysis type: query (custom retrieval and analysis), field (TOP5 fields and proportion statistics), original (related raw logs)

     * @param string $Content Analysis content
     * @param array $ConfigInfo Multi-dimensional analysis configuration.

When the Type field of Analysis is query (custom), support
{
"Key": "SyntaxRule",  // Syntax rule
"Value": "1"  //0: Lucene syntax, 1: CQL syntax
}

When the Type field of Analysis is field (top5), it supports
 {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", //Query statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "SyntaxRule", // If this field cannot be found, it's assumed to be the legacy syntax (Lucene)
    "Value": "0"//0:Lucene, 1:CQL
}       

When the Type field of Analysis is original (raw log), it supports
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
"Value": "-1" // -1: Custom, 1: Execute statement 1, 2: Execute statement 2
},{
"Key": "CustomQuery", // Retrieval statement. Required and valid when QueryIndex is -1.
    "Value": "* | select count(*) as count"
},{
"Key": "Format", //Display format. 1: one log per line, 2: one field per line for each log entry
    "Value": "2"
},
{
"Key": "Limit", //Maximum number of logs
    "Value": "5"
},{
"Key": "SyntaxRule", // If this field is not found, it's also the old syntax
    "Value": "0"//0:Lucene, 1:CQL
}
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ConfigInfo",$param) and $param["ConfigInfo"] !== null) {
            $this->ConfigInfo = [];
            foreach ($param["ConfigInfo"] as $key => $value){
                $obj = new AlarmAnalysisConfig();
                $obj->deserialize($value);
                array_push($this->ConfigInfo, $obj);
            }
        }
    }
}
