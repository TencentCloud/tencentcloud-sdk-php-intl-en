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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule matching criteria structure.
 *
 * @method string getField() Obtain Specifies the matching field.

Different matching fields result in different matching parameters, logical operators, and matching contents. the details are as follows:.
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content512 characters limit</td></tr><tr><td>GET_HEADERS_NAMES (Header parameter name)</td><td>parameter not supported</td><td>exsit (parameter exists)<br/>nexsit (parameter does not exist)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, lowercase is recommended, up to 512 characters</td></tr><tr><td>ARGS_Header (Header parameter value)</td><td>support parameter entry</td><td>contains (include)<br/>ncontains (does not include)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, up to 512 characters</td></tr><tr><td>CONTENT_LENGTH (CONTENT-LENGTH)</td><td>support parameter entry</td><td>numgt (value greater than)<br/>numlt (value smaller than)<br/>numeq (value equal to)<br/></td><td>enter an integer between 0-9999999999999</td></tr><tr><td>IP_GEO (source IP geolocation)</td><td>support parameter entry</td><td>GEO_in (belong)<br/>GEO_not_in (not_in)<br/></td><td>enter CONTENT, up to 10240 characters, format: serialized JSON, format: [{"Country":"china","Region":"guangdong","City":"shenzhen"}]</td></tr><tr><td>CAPTCHA_RISK (CAPTCHA RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter RISK level value, value range 0-255</td></tr><tr><td>CAPTCHA_DEVICE_RISK (CAPTCHA DEVICE RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter DEVICE RISK code, valid values: 101, 201, 301, 401, 501, 601, 701</td></tr><tr><td>CAPTCHAR_SCORE (CAPTCHA RISK assessment SCORE)</td><td>parameter not supported</td><td>numeq (value equal to)<br/>numgt (value greater than)<br/>numlt (value smaller than)<br/>numle (less than or equal to)<br/>numge (value is greater than or equal to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter assessment SCORE, value range 0-100</td></tr>.
</tbody></table>
 * @method void setField(string $Field) Set Specifies the matching field.

Different matching fields result in different matching parameters, logical operators, and matching contents. the details are as follows:.
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content512 characters limit</td></tr><tr><td>GET_HEADERS_NAMES (Header parameter name)</td><td>parameter not supported</td><td>exsit (parameter exists)<br/>nexsit (parameter does not exist)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, lowercase is recommended, up to 512 characters</td></tr><tr><td>ARGS_Header (Header parameter value)</td><td>support parameter entry</td><td>contains (include)<br/>ncontains (does not include)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, up to 512 characters</td></tr><tr><td>CONTENT_LENGTH (CONTENT-LENGTH)</td><td>support parameter entry</td><td>numgt (value greater than)<br/>numlt (value smaller than)<br/>numeq (value equal to)<br/></td><td>enter an integer between 0-9999999999999</td></tr><tr><td>IP_GEO (source IP geolocation)</td><td>support parameter entry</td><td>GEO_in (belong)<br/>GEO_not_in (not_in)<br/></td><td>enter CONTENT, up to 10240 characters, format: serialized JSON, format: [{"Country":"china","Region":"guangdong","City":"shenzhen"}]</td></tr><tr><td>CAPTCHA_RISK (CAPTCHA RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter RISK level value, value range 0-255</td></tr><tr><td>CAPTCHA_DEVICE_RISK (CAPTCHA DEVICE RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter DEVICE RISK code, valid values: 101, 201, 301, 401, 501, 601, 701</td></tr><tr><td>CAPTCHAR_SCORE (CAPTCHA RISK assessment SCORE)</td><td>parameter not supported</td><td>numeq (value equal to)<br/>numgt (value greater than)<br/>numlt (value smaller than)<br/>numle (less than or equal to)<br/>numge (value is greater than or equal to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter assessment SCORE, value range 0-100</td></tr>.
</tbody></table>
 * @method string getCompareFunc() Obtain Specifies the logic symbol. 

Logical symbols are divided into the following types:.
Empty (content is empty).
null (not found).
Eq (equal to).
neq (not equal to).
contains (contain).
ncontains (do not contain).
strprefix (prefix matching).
strsuffix (suffix matching).
Len_eq (length equals to).
Len_gt (length greater than).
Len_lt (length less than).
ipmatch (belong).
ipnmatch (not_in).
numgt (value greater than).
NumValue smaller than].
Value equal to.
numneq (value not equal to).
numle (less than or equal to).
numge (value is greater than or equal to).
geo_in (IP geographic belong).
geo_not_in (IP geographic not_in).
Specifies different logical operators for matching fields. for details, see the matching field table above.
 * @method void setCompareFunc(string $CompareFunc) Set Specifies the logic symbol. 

Logical symbols are divided into the following types:.
Empty (content is empty).
null (not found).
Eq (equal to).
neq (not equal to).
contains (contain).
ncontains (do not contain).
strprefix (prefix matching).
strsuffix (suffix matching).
Len_eq (length equals to).
Len_gt (length greater than).
Len_lt (length less than).
ipmatch (belong).
ipnmatch (not_in).
numgt (value greater than).
NumValue smaller than].
Value equal to.
numneq (value not equal to).
numle (less than or equal to).
numge (value is greater than or equal to).
geo_in (IP geographic belong).
geo_not_in (IP geographic not_in).
Specifies different logical operators for matching fields. for details, see the matching field table above.
 * @method string getContent() Obtain Specifies the match content.

Currently, when the match field is COOKIE (COOKIE), match content is not required. all others are needed.

 * @method void setContent(string $Content) Set Specifies the match content.

Currently, when the match field is COOKIE (COOKIE), match content is not required. all others are needed.

 * @method string getArg() Obtain Specifies the matching parameter.

Configuration parameters are divided into two data types: parameter not supported and support parameters.
When the match field is one of the following four, the matching parameter can be entered, otherwise not supported.
GET (get parameter value).		
POST (post parameter value).		
ARGS_COOKIE (COOKIE parameter value).		
ARGS_HEADER (HEADER parameter value).

 * @method void setArg(string $Arg) Set Specifies the matching parameter.

Configuration parameters are divided into two data types: parameter not supported and support parameters.
When the match field is one of the following four, the matching parameter can be entered, otherwise not supported.
GET (get parameter value).		
POST (post parameter value).		
ARGS_COOKIE (COOKIE parameter value).		
ARGS_HEADER (HEADER parameter value).

 * @method integer getCaseNotSensitive() Obtain Case-Sensitive.
Case-Insensitive.
 * @method void setCaseNotSensitive(integer $CaseNotSensitive) Set Case-Sensitive.
Case-Insensitive.
 */
class Strategy extends AbstractModel
{
    /**
     * @var string Specifies the matching field.

Different matching fields result in different matching parameters, logical operators, and matching contents. the details are as follows:.
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content512 characters limit</td></tr><tr><td>GET_HEADERS_NAMES (Header parameter name)</td><td>parameter not supported</td><td>exsit (parameter exists)<br/>nexsit (parameter does not exist)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, lowercase is recommended, up to 512 characters</td></tr><tr><td>ARGS_Header (Header parameter value)</td><td>support parameter entry</td><td>contains (include)<br/>ncontains (does not include)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, up to 512 characters</td></tr><tr><td>CONTENT_LENGTH (CONTENT-LENGTH)</td><td>support parameter entry</td><td>numgt (value greater than)<br/>numlt (value smaller than)<br/>numeq (value equal to)<br/></td><td>enter an integer between 0-9999999999999</td></tr><tr><td>IP_GEO (source IP geolocation)</td><td>support parameter entry</td><td>GEO_in (belong)<br/>GEO_not_in (not_in)<br/></td><td>enter CONTENT, up to 10240 characters, format: serialized JSON, format: [{"Country":"china","Region":"guangdong","City":"shenzhen"}]</td></tr><tr><td>CAPTCHA_RISK (CAPTCHA RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter RISK level value, value range 0-255</td></tr><tr><td>CAPTCHA_DEVICE_RISK (CAPTCHA DEVICE RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter DEVICE RISK code, valid values: 101, 201, 301, 401, 501, 601, 701</td></tr><tr><td>CAPTCHAR_SCORE (CAPTCHA RISK assessment SCORE)</td><td>parameter not supported</td><td>numeq (value equal to)<br/>numgt (value greater than)<br/>numlt (value smaller than)<br/>numle (less than or equal to)<br/>numge (value is greater than or equal to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter assessment SCORE, value range 0-100</td></tr>.
</tbody></table>
     */
    public $Field;

    /**
     * @var string Specifies the logic symbol. 

Logical symbols are divided into the following types:.
Empty (content is empty).
null (not found).
Eq (equal to).
neq (not equal to).
contains (contain).
ncontains (do not contain).
strprefix (prefix matching).
strsuffix (suffix matching).
Len_eq (length equals to).
Len_gt (length greater than).
Len_lt (length less than).
ipmatch (belong).
ipnmatch (not_in).
numgt (value greater than).
NumValue smaller than].
Value equal to.
numneq (value not equal to).
numle (less than or equal to).
numge (value is greater than or equal to).
geo_in (IP geographic belong).
geo_not_in (IP geographic not_in).
Specifies different logical operators for matching fields. for details, see the matching field table above.
     */
    public $CompareFunc;

    /**
     * @var string Specifies the match content.

Currently, when the match field is COOKIE (COOKIE), match content is not required. all others are needed.

     */
    public $Content;

    /**
     * @var string Specifies the matching parameter.

Configuration parameters are divided into two data types: parameter not supported and support parameters.
When the match field is one of the following four, the matching parameter can be entered, otherwise not supported.
GET (get parameter value).		
POST (post parameter value).		
ARGS_COOKIE (COOKIE parameter value).		
ARGS_HEADER (HEADER parameter value).

     */
    public $Arg;

    /**
     * @var integer Case-Sensitive.
Case-Insensitive.
     */
    public $CaseNotSensitive;

    /**
     * @param string $Field Specifies the matching field.

Different matching fields result in different matching parameters, logical operators, and matching contents. the details are as follows:.
<table><thead><tr><th>Matching Field</th> <th>Matching Parameter</th> <th>Logical Symbol</th> <th>Matching Content</th></tr></thead> <tbody><tr><td>IP (source IP)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>Multiple IP addresses are separated by commas. A maximum of 20 IP addresses are allowed.</td></tr> <tr><td>IPv6 (source IPv6)</td> <td>Parameters are not supported.</td> <td>ipmatch (match)<br/>ipnmatch (mismatch)</td> <td>A single IPv6 address is supported.</td></tr> <tr><td>Referer (referer)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content, with a maximum of 512 characters.</td></tr> <tr><td>URL (request path)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)<br/>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is 
 less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td> <td>Enter the content starting with /, with a maximum of 512 characters.</td></tr> <tr><td>UserAgent (UserAgent)</td> <td>Parameters are not supported.</td><td>Same logical symbols as the matching field <font color="Red">Referer</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>HTTP_METHOD (HTTP request method)</td> <td>Parameters are not supported.</td> <td>eq (equal to)<br/>neq (not equal to)</td> <td>Enter the method name. The uppercase is recommended.</td></tr> <tr><td>QUERY_STRING (request string)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET (GET parameter value)</td> <td>Parameter entry is supported.</td> <td>contains (contain)<br/>ncontains (do not contain)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_PARAMS_NAMES (GET parameter name)</td> <td>Parameters are not supported.</td> <td>exist (Parameter exists.)<br/>nexist (Parameter does not exist.)<br/>len_eq (length equals to)<br/>len_gt (length is greater than)<br/>len_lt (length is less than)<br/>strprefix (prefix matching)<br/>strsuffix (suffix matching)</td><td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST (POST parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>GET_POST_NAMES (POST parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>POST_BODY (complete body)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">Request Path</font></td><td>Enter the body content with a maximum of 512 characters.</td></tr> <tr><td>COOKIE (cookie)</td> <td>Parameters are not supported.</td> <td>empty (Content is empty.)<br/>null (do not exist)<br/>rematch (regular expression matching)</td> <td><font color="Red">Unsupported currently</font></td></tr> <tr><td>GET_COOKIES_NAMES (cookie parameter name)</td> <td>Parameters are not supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Name</font></td> <td>Enter the content with a maximum of 512 characters.</td></tr> <tr><td>ARGS_COOKIE (cookie parameter value)</td> <td>Parameter entry is supported.</td> <td>Same logical symbol as the matching field <font color="Red">GET Parameter Value</font></td> <td>Enter the content512 characters limit</td></tr><tr><td>GET_HEADERS_NAMES (Header parameter name)</td><td>parameter not supported</td><td>exsit (parameter exists)<br/>nexsit (parameter does not exist)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, lowercase is recommended, up to 512 characters</td></tr><tr><td>ARGS_Header (Header parameter value)</td><td>support parameter entry</td><td>contains (include)<br/>ncontains (does not include)<br/>len_eq (LENGTH equal)<br/>len_gt (LENGTH greater than)<br/>len_lt (LENGTH less than)<br/>strprefix (prefix match)<br/>strsuffix (suffix matching)<br/>rematch (regular expression matching)</td><td>enter CONTENT, up to 512 characters</td></tr><tr><td>CONTENT_LENGTH (CONTENT-LENGTH)</td><td>support parameter entry</td><td>numgt (value greater than)<br/>numlt (value smaller than)<br/>numeq (value equal to)<br/></td><td>enter an integer between 0-9999999999999</td></tr><tr><td>IP_GEO (source IP geolocation)</td><td>support parameter entry</td><td>GEO_in (belong)<br/>GEO_not_in (not_in)<br/></td><td>enter CONTENT, up to 10240 characters, format: serialized JSON, format: [{"Country":"china","Region":"guangdong","City":"shenzhen"}]</td></tr><tr><td>CAPTCHA_RISK (CAPTCHA RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter RISK level value, value range 0-255</td></tr><tr><td>CAPTCHA_DEVICE_RISK (CAPTCHA DEVICE RISK)</td><td>parameter not supported</td><td>eq (equal)<br/>neq (not equal to)<br/>belong (belong)<br/>not_belong (not belong to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter DEVICE RISK code, valid values: 101, 201, 301, 401, 501, 601, 701</td></tr><tr><td>CAPTCHAR_SCORE (CAPTCHA RISK assessment SCORE)</td><td>parameter not supported</td><td>numeq (value equal to)<br/>numgt (value greater than)<br/>numlt (value smaller than)<br/>numle (less than or equal to)<br/>numge (value is greater than or equal to)<br/>null (nonexistent)<br/>exist (exist)</td><td>enter assessment SCORE, value range 0-100</td></tr>.
</tbody></table>
     * @param string $CompareFunc Specifies the logic symbol. 

Logical symbols are divided into the following types:.
Empty (content is empty).
null (not found).
Eq (equal to).
neq (not equal to).
contains (contain).
ncontains (do not contain).
strprefix (prefix matching).
strsuffix (suffix matching).
Len_eq (length equals to).
Len_gt (length greater than).
Len_lt (length less than).
ipmatch (belong).
ipnmatch (not_in).
numgt (value greater than).
NumValue smaller than].
Value equal to.
numneq (value not equal to).
numle (less than or equal to).
numge (value is greater than or equal to).
geo_in (IP geographic belong).
geo_not_in (IP geographic not_in).
Specifies different logical operators for matching fields. for details, see the matching field table above.
     * @param string $Content Specifies the match content.

Currently, when the match field is COOKIE (COOKIE), match content is not required. all others are needed.

     * @param string $Arg Specifies the matching parameter.

Configuration parameters are divided into two data types: parameter not supported and support parameters.
When the match field is one of the following four, the matching parameter can be entered, otherwise not supported.
GET (get parameter value).		
POST (post parameter value).		
ARGS_COOKIE (COOKIE parameter value).		
ARGS_HEADER (HEADER parameter value).

     * @param integer $CaseNotSensitive Case-Sensitive.
Case-Insensitive.
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
