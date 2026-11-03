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
 * Skipped field configuration in the exception rule
 *
 * @method string getScope() Obtain Specific fields to skip. Supported values: <br/>
<li>body.json: parameter content in JSON requests. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "body.json", "Condition": "", "TargetField": "key" } means ALL parameters in the JSON request content skip WAF scan.</li>
<li style="margin-top:5px">cookie: Cookie; at this point, Condition supports key and value, and TargetField supports key and value, for example { "Scope": "cookie", "Condition": "${key} in ['account-id'] and ${value} like ['prefix-*']", "TargetField": "value" }, which means the cookie parameter name equals account-id and the parameter value wildcard matches prefix-* to skip WAF scan;</li>
<li style="margin-top:5px">header: HTTP header parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "header", "Condition": "${key} like ['x-auth-*']", "TargetField": "value" } means the header parameter name wildcard match x-auth-* skips WAF scan.</li>
<li style="margin-top:5px">uri.query: URL-encoded content/query parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "uri.query", "Condition": "${key} in ['action'] and ${value} in ['upload', 'delete']", "TargetField": "value" } means the parameter name of the URL-encoded content/query parameters is equal to action and the parameter value is equal to upload or delete, skip WAF scan;</li>
<li style="margin-top:5px">uri: request path URI. At this point, Condition must be empty, and TargetField supports query, path, and fullpath. For example, { "Scope": "uri", "Condition": "", "TargetField": "query" } means only query parameters in the request path URI skip WAF scan.</li>
<li style="margin-top:5px">body: request body content. At this point, Condition must be empty, and TargetField supports fullbody and multipart, for example { "Scope": "body",  "Condition": "", "TargetField": "fullbody" }, which means the request body content is the complete request body and skips WAF scan;</li>
 * @method void setScope(string $Scope) Set Specific fields to skip. Supported values: <br/>
<li>body.json: parameter content in JSON requests. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "body.json", "Condition": "", "TargetField": "key" } means ALL parameters in the JSON request content skip WAF scan.</li>
<li style="margin-top:5px">cookie: Cookie; at this point, Condition supports key and value, and TargetField supports key and value, for example { "Scope": "cookie", "Condition": "${key} in ['account-id'] and ${value} like ['prefix-*']", "TargetField": "value" }, which means the cookie parameter name equals account-id and the parameter value wildcard matches prefix-* to skip WAF scan;</li>
<li style="margin-top:5px">header: HTTP header parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "header", "Condition": "${key} like ['x-auth-*']", "TargetField": "value" } means the header parameter name wildcard match x-auth-* skips WAF scan.</li>
<li style="margin-top:5px">uri.query: URL-encoded content/query parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "uri.query", "Condition": "${key} in ['action'] and ${value} in ['upload', 'delete']", "TargetField": "value" } means the parameter name of the URL-encoded content/query parameters is equal to action and the parameter value is equal to upload or delete, skip WAF scan;</li>
<li style="margin-top:5px">uri: request path URI. At this point, Condition must be empty, and TargetField supports query, path, and fullpath. For example, { "Scope": "uri", "Condition": "", "TargetField": "query" } means only query parameters in the request path URI skip WAF scan.</li>
<li style="margin-top:5px">body: request body content. At this point, Condition must be empty, and TargetField supports fullbody and multipart, for example { "Scope": "body",  "Condition": "", "TargetField": "fullbody" }, which means the request body content is the complete request body and skips WAF scan;</li>
 * @method string getCondition() Obtain Expression of the specific field to skip, which must comply with the expression grammar.<br />
Condition supports expression configuration syntax: <li> Write the filter condition expression syntax based on the rule, with support for referencing key and value.</li><li> Support in and like operators, and logical combination with and.</li>
For example: <li>${key} in ['x-trace-id']: The parameter name is equal to x-trace-id.</li><li>${key} in ['x-trace-id'] and ${value} like ['Bearer *']: The parameter name is equal to x-trace-id and the parameter value wildcard matches Bearer *.</li>
 * @method void setCondition(string $Condition) Set Expression of the specific field to skip, which must comply with the expression grammar.<br />
Condition supports expression configuration syntax: <li> Write the filter condition expression syntax based on the rule, with support for referencing key and value.</li><li> Support in and like operators, and logical combination with and.</li>
For example: <li>${key} in ['x-trace-id']: The parameter name is equal to x-trace-id.</li><li>${key} in ['x-trace-id'] and ${value} like ['Bearer *']: The parameter name is equal to x-trace-id and the parameter value wildcard matches Bearer *.</li>
 * @method string getTargetField() Obtain When the Scope parameter takes different values, the supported values in the TargetField expression are as follows:
<li> body.json: supports key and value</li>
<li> cookie: supports key and value</li>
<li> header: supports key and value</li>
<li> uri.query: supports key and value</li>
<li> uri: supports path, query, and fullpath</li>
<li> body: supports fullbody and multipart</li>
 * @method void setTargetField(string $TargetField) Set When the Scope parameter takes different values, the supported values in the TargetField expression are as follows:
<li> body.json: supports key and value</li>
<li> cookie: supports key and value</li>
<li> header: supports key and value</li>
<li> uri.query: supports key and value</li>
<li> uri: supports path, query, and fullpath</li>
<li> body: supports fullbody and multipart</li>
 */
class RequestFieldsForException extends AbstractModel
{
    /**
     * @var string Specific fields to skip. Supported values: <br/>
<li>body.json: parameter content in JSON requests. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "body.json", "Condition": "", "TargetField": "key" } means ALL parameters in the JSON request content skip WAF scan.</li>
<li style="margin-top:5px">cookie: Cookie; at this point, Condition supports key and value, and TargetField supports key and value, for example { "Scope": "cookie", "Condition": "${key} in ['account-id'] and ${value} like ['prefix-*']", "TargetField": "value" }, which means the cookie parameter name equals account-id and the parameter value wildcard matches prefix-* to skip WAF scan;</li>
<li style="margin-top:5px">header: HTTP header parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "header", "Condition": "${key} like ['x-auth-*']", "TargetField": "value" } means the header parameter name wildcard match x-auth-* skips WAF scan.</li>
<li style="margin-top:5px">uri.query: URL-encoded content/query parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "uri.query", "Condition": "${key} in ['action'] and ${value} in ['upload', 'delete']", "TargetField": "value" } means the parameter name of the URL-encoded content/query parameters is equal to action and the parameter value is equal to upload or delete, skip WAF scan;</li>
<li style="margin-top:5px">uri: request path URI. At this point, Condition must be empty, and TargetField supports query, path, and fullpath. For example, { "Scope": "uri", "Condition": "", "TargetField": "query" } means only query parameters in the request path URI skip WAF scan.</li>
<li style="margin-top:5px">body: request body content. At this point, Condition must be empty, and TargetField supports fullbody and multipart, for example { "Scope": "body",  "Condition": "", "TargetField": "fullbody" }, which means the request body content is the complete request body and skips WAF scan;</li>
     */
    public $Scope;

    /**
     * @var string Expression of the specific field to skip, which must comply with the expression grammar.<br />
Condition supports expression configuration syntax: <li> Write the filter condition expression syntax based on the rule, with support for referencing key and value.</li><li> Support in and like operators, and logical combination with and.</li>
For example: <li>${key} in ['x-trace-id']: The parameter name is equal to x-trace-id.</li><li>${key} in ['x-trace-id'] and ${value} like ['Bearer *']: The parameter name is equal to x-trace-id and the parameter value wildcard matches Bearer *.</li>
     */
    public $Condition;

    /**
     * @var string When the Scope parameter takes different values, the supported values in the TargetField expression are as follows:
<li> body.json: supports key and value</li>
<li> cookie: supports key and value</li>
<li> header: supports key and value</li>
<li> uri.query: supports key and value</li>
<li> uri: supports path, query, and fullpath</li>
<li> body: supports fullbody and multipart</li>
     */
    public $TargetField;

    /**
     * @param string $Scope Specific fields to skip. Supported values: <br/>
<li>body.json: parameter content in JSON requests. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "body.json", "Condition": "", "TargetField": "key" } means ALL parameters in the JSON request content skip WAF scan.</li>
<li style="margin-top:5px">cookie: Cookie; at this point, Condition supports key and value, and TargetField supports key and value, for example { "Scope": "cookie", "Condition": "${key} in ['account-id'] and ${value} like ['prefix-*']", "TargetField": "value" }, which means the cookie parameter name equals account-id and the parameter value wildcard matches prefix-* to skip WAF scan;</li>
<li style="margin-top:5px">header: HTTP header parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "header", "Condition": "${key} like ['x-auth-*']", "TargetField": "value" } means the header parameter name wildcard match x-auth-* skips WAF scan.</li>
<li style="margin-top:5px">uri.query: URL-encoded content/query parameters. At this point, Condition supports key and value, and TargetField supports key and value. For example, { "Scope": "uri.query", "Condition": "${key} in ['action'] and ${value} in ['upload', 'delete']", "TargetField": "value" } means the parameter name of the URL-encoded content/query parameters is equal to action and the parameter value is equal to upload or delete, skip WAF scan;</li>
<li style="margin-top:5px">uri: request path URI. At this point, Condition must be empty, and TargetField supports query, path, and fullpath. For example, { "Scope": "uri", "Condition": "", "TargetField": "query" } means only query parameters in the request path URI skip WAF scan.</li>
<li style="margin-top:5px">body: request body content. At this point, Condition must be empty, and TargetField supports fullbody and multipart, for example { "Scope": "body",  "Condition": "", "TargetField": "fullbody" }, which means the request body content is the complete request body and skips WAF scan;</li>
     * @param string $Condition Expression of the specific field to skip, which must comply with the expression grammar.<br />
Condition supports expression configuration syntax: <li> Write the filter condition expression syntax based on the rule, with support for referencing key and value.</li><li> Support in and like operators, and logical combination with and.</li>
For example: <li>${key} in ['x-trace-id']: The parameter name is equal to x-trace-id.</li><li>${key} in ['x-trace-id'] and ${value} like ['Bearer *']: The parameter name is equal to x-trace-id and the parameter value wildcard matches Bearer *.</li>
     * @param string $TargetField When the Scope parameter takes different values, the supported values in the TargetField expression are as follows:
<li> body.json: supports key and value</li>
<li> cookie: supports key and value</li>
<li> header: supports key and value</li>
<li> uri.query: supports key and value</li>
<li> uri: supports path, query, and fullpath</li>
<li> body: supports fullbody and multipart</li>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TargetField",$param) and $param["TargetField"] !== null) {
            $this->TargetField = $param["TargetField"];
        }
    }
}
