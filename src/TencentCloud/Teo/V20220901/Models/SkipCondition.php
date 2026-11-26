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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skip match condition of the exception rule. In case of an exception, skip the specified field and content based on this match condition.
 *
 * @method string getType() Obtain Exception skip type. Value:
<li>header_fields: HTTP request header;</li>
<li>cookie: HTTP request cookie;</li>
<li>query_string: The query parameter in the HTTP Request URL;</li>
<li>uri: HTTP request URI;</li>
<li>body_raw: HTTP request body;</li>
<li>body_json: HTTP Body in JSON format.</li>
 * @method void setType(string $Type) Set Exception skip type. Value:
<li>header_fields: HTTP request header;</li>
<li>cookie: HTTP request cookie;</li>
<li>query_string: The query parameter in the HTTP Request URL;</li>
<li>uri: HTTP request URI;</li>
<li>body_raw: HTTP request body;</li>
<li>body_json: HTTP Body in JSON format.</li>
 * @method string getSelector() Obtain Field to skip. Value:
<li>args: select query parameter under uri: ?name1=jack&age=12;</li>
<li>path: Select a path under the uri: /path/to/resource.jpg;</li>
<li>full: select the full path under uri: example.com/path/to/resource.jpg?name1=jack&age=12;</li>
<li>upload_filename: Segmented file name, that is, when transferring files in segments;</li>
<li>keys: all keys;</li>
<li>values: The value corresponding to the match Key;</li>
<li>key_value: Match key and match value.</li>
 * @method void setSelector(string $Selector) Set Field to skip. Value:
<li>args: select query parameter under uri: ?name1=jack&age=12;</li>
<li>path: Select a path under the uri: /path/to/resource.jpg;</li>
<li>full: select the full path under uri: example.com/path/to/resource.jpg?name1=jack&age=12;</li>
<li>upload_filename: Segmented file name, that is, when transferring files in segments;</li>
<li>keys: all keys;</li>
<li>values: The value corresponding to the match Key;</li>
<li>key_value: Match key and match value.</li>
 * @method string getMatchFromType() Obtain Match mode used by the match Key. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
 * @method void setMatchFromType(string $MatchFromType) Set Match mode used by the match Key. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
 * @method array getMatchFrom() Obtain Value of the match Key.
 * @method void setMatchFrom(array $MatchFrom) Set Value of the match Key.
 * @method string getMatchContentType() Obtain Match mode used by Content. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
 * @method void setMatchContentType(string $MatchContentType) Set Match mode used by Content. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
 * @method array getMatchContent() Obtain Value of the match Value.
 * @method void setMatchContent(array $MatchContent) Set Value of the match Value.
 */
class SkipCondition extends AbstractModel
{
    /**
     * @var string Exception skip type. Value:
<li>header_fields: HTTP request header;</li>
<li>cookie: HTTP request cookie;</li>
<li>query_string: The query parameter in the HTTP Request URL;</li>
<li>uri: HTTP request URI;</li>
<li>body_raw: HTTP request body;</li>
<li>body_json: HTTP Body in JSON format.</li>
     */
    public $Type;

    /**
     * @var string Field to skip. Value:
<li>args: select query parameter under uri: ?name1=jack&age=12;</li>
<li>path: Select a path under the uri: /path/to/resource.jpg;</li>
<li>full: select the full path under uri: example.com/path/to/resource.jpg?name1=jack&age=12;</li>
<li>upload_filename: Segmented file name, that is, when transferring files in segments;</li>
<li>keys: all keys;</li>
<li>values: The value corresponding to the match Key;</li>
<li>key_value: Match key and match value.</li>
     */
    public $Selector;

    /**
     * @var string Match mode used by the match Key. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
     */
    public $MatchFromType;

    /**
     * @var array Value of the match Key.
     */
    public $MatchFrom;

    /**
     * @var string Match mode used by Content. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
     */
    public $MatchContentType;

    /**
     * @var array Value of the match Value.
     */
    public $MatchContent;

    /**
     * @param string $Type Exception skip type. Value:
<li>header_fields: HTTP request header;</li>
<li>cookie: HTTP request cookie;</li>
<li>query_string: The query parameter in the HTTP Request URL;</li>
<li>uri: HTTP request URI;</li>
<li>body_raw: HTTP request body;</li>
<li>body_json: HTTP Body in JSON format.</li>
     * @param string $Selector Field to skip. Value:
<li>args: select query parameter under uri: ?name1=jack&age=12;</li>
<li>path: Select a path under the uri: /path/to/resource.jpg;</li>
<li>full: select the full path under uri: example.com/path/to/resource.jpg?name1=jack&age=12;</li>
<li>upload_filename: Segmented file name, that is, when transferring files in segments;</li>
<li>keys: all keys;</li>
<li>values: The value corresponding to the match Key;</li>
<li>key_value: Match key and match value.</li>
     * @param string $MatchFromType Match mode used by the match Key. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
     * @param array $MatchFrom Value of the match Key.
     * @param string $MatchContentType Match mode used by Content. Value:
<li>equal: exact match, equal to;</li>
<li>wildcard: wildcard match, supports * wildcard.</li>
     * @param array $MatchContent Value of the match Value.
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

        if (array_key_exists("Selector",$param) and $param["Selector"] !== null) {
            $this->Selector = $param["Selector"];
        }

        if (array_key_exists("MatchFromType",$param) and $param["MatchFromType"] !== null) {
            $this->MatchFromType = $param["MatchFromType"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchContentType",$param) and $param["MatchContentType"] !== null) {
            $this->MatchContentType = $param["MatchContentType"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
