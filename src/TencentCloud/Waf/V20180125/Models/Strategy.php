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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Matching criteria structure for custom rules
 *
 * @method string getField() Obtain Matching field

    Different matching fields result in different matching parameters, logical operators, and matching contents. The details are as follows:
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the contentwith a maximum of 512 characters.</td></tr> <tr><td>GET_HEADERS_NAMES (header parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters. The lowercase is recommended.</td> </tr><tr><td>ARGS_HEADER (header parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr></tbody></table>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setField(string $Field) Set Matching field

    Different matching fields result in different matching parameters, logical operators, and matching contents. The details are as follows:
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the contentwith a maximum of 512 characters.</td></tr> <tr><td>GET_HEADERS_NAMES (header parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters. The lowercase is recommended.</td> </tr><tr><td>ARGS_HEADER (header parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr></tbody></table>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCompareFunc() Obtain Logic symbol

    Logical symbols are divided into the following types:
        empty (content is empty)
        null (do not exist)
        eq (equal to)
        neq (not equal to)
        contains (contain)
        ncontains (do not contain)
        strprefix (prefix matching)
        strsuffix (suffix matching)
        len_eq (length equals to)
        len_gt (length is greater than)
        len_lt (length is less than)
        ipmatch (belong to)
        ipnmatch (do not belong to)
    Different matching fields correspond to different logical operators. For details, see the matching field table above.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareFunc(string $CompareFunc) Set Logic symbol

    Logical symbols are divided into the following types:
        empty (content is empty)
        null (do not exist)
        eq (equal to)
        neq (not equal to)
        contains (contain)
        ncontains (do not contain)
        strprefix (prefix matching)
        strsuffix (suffix matching)
        len_eq (length equals to)
        len_gt (length is greater than)
        len_lt (length is less than)
        ipmatch (belong to)
        ipnmatch (do not belong to)
    Different matching fields correspond to different logical operators. For details, see the matching field table above.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContent() Obtain Matching content

    Currently, when the matching field is COOKIE (cookie), the matching content  is not required. In other scenes, the matching content is required.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Matching content

    Currently, when the matching field is COOKIE (cookie), the matching content  is not required. In other scenes, the matching content is required.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArg() Obtain Matching parameter

    There are two types of configuration parameters: unsupported parameters and supported parameters.
    The matching parameter can be entered only when the matching field is one of the following four. Otherwise, the parameter is not supported.
        GET (GET parameter value)		
        POST (POST parameter value)		
        ARGS_COOKIE (Cookie parameter value)		
        ARGS_HEADER (Header parameter value)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArg(string $Arg) Set Matching parameter

    There are two types of configuration parameters: unsupported parameters and supported parameters.
    The matching parameter can be entered only when the matching field is one of the following four. Otherwise, the parameter is not supported.
        GET (GET parameter value)		
        POST (POST parameter value)		
        ARGS_COOKIE (Cookie parameter value)		
        ARGS_HEADER (Header parameter value)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCaseNotSensitive() Obtain 0: case-sensitive.
1: case-insensitive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCaseNotSensitive(integer $CaseNotSensitive) Set 0: case-sensitive.
1: case-insensitive.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Strategy extends AbstractModel
{
    /**
     * @var string Matching field

    Different matching fields result in different matching parameters, logical operators, and matching contents. The details are as follows:
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the contentwith a maximum of 512 characters.</td></tr> <tr><td>GET_HEADERS_NAMES (header parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters. The lowercase is recommended.</td> </tr><tr><td>ARGS_HEADER (header parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr></tbody></table>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Field;

    /**
     * @var string Logic symbol

    Logical symbols are divided into the following types:
        empty (content is empty)
        null (do not exist)
        eq (equal to)
        neq (not equal to)
        contains (contain)
        ncontains (do not contain)
        strprefix (prefix matching)
        strsuffix (suffix matching)
        len_eq (length equals to)
        len_gt (length is greater than)
        len_lt (length is less than)
        ipmatch (belong to)
        ipnmatch (do not belong to)
    Different matching fields correspond to different logical operators. For details, see the matching field table above.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareFunc;

    /**
     * @var string Matching content

    Currently, when the matching field is COOKIE (cookie), the matching content  is not required. In other scenes, the matching content is required.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string Matching parameter

    There are two types of configuration parameters: unsupported parameters and supported parameters.
    The matching parameter can be entered only when the matching field is one of the following four. Otherwise, the parameter is not supported.
        GET (GET parameter value)		
        POST (POST parameter value)		
        ARGS_COOKIE (Cookie parameter value)		
        ARGS_HEADER (Header parameter value)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Arg;

    /**
     * @var integer 0: case-sensitive.
1: case-insensitive.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CaseNotSensitive;

    /**
     * @param string $Field Matching field

    Different matching fields result in different matching parameters, logical operators, and matching contents. The details are as follows:
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the contentwith a maximum of 512 characters.</td></tr> <tr><td>GET_HEADERS_NAMES (header parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters. The lowercase is recommended.</td> </tr><tr><td>ARGS_HEADER (header parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr></tbody></table>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CompareFunc Logic symbol

    Logical symbols are divided into the following types:
        empty (content is empty)
        null (do not exist)
        eq (equal to)
        neq (not equal to)
        contains (contain)
        ncontains (do not contain)
        strprefix (prefix matching)
        strsuffix (suffix matching)
        len_eq (length equals to)
        len_gt (length is greater than)
        len_lt (length is less than)
        ipmatch (belong to)
        ipnmatch (do not belong to)
    Different matching fields correspond to different logical operators. For details, see the matching field table above.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Content Matching content

    Currently, when the matching field is COOKIE (cookie), the matching content  is not required. In other scenes, the matching content is required.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Arg Matching parameter

    There are two types of configuration parameters: unsupported parameters and supported parameters.
    The matching parameter can be entered only when the matching field is one of the following four. Otherwise, the parameter is not supported.
        GET (GET parameter value)		
        POST (POST parameter value)		
        ARGS_COOKIE (Cookie parameter value)		
        ARGS_HEADER (Header parameter value)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CaseNotSensitive 0: case-sensitive.
1: case-insensitive.
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Arg",$param) and $param["Arg"] !== null) {
            $this->Arg = $param["Arg"];
        }

        if (array_key_exists("CaseNotSensitive",$param) and $param["CaseNotSensitive"] !== null) {
            $this->CaseNotSensitive = $param["CaseNotSensitive"];
        }
    }
}
