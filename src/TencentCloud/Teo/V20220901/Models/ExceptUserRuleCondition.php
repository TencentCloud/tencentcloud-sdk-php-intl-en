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
 * Specific conditions for an exception rule to take effect.
 *
 * @method string getMatchFrom() Obtain Matching item. Valid values:
<li>host: request domain name;</li>
<li>sip: Client IP;</li>
<li>ua:User-Agent;</li>
<li>cookie: Session cookie;</li>
<li>cgi: CGI script;</li>
<li>xff: XFF extension header;</li>
<li>`url`: Request URL;
<li>accept: request content type;</li>
<li>method: request method;</li>
<li>header: request header;</li>
<li>sip_proto: network layer protocol.</li>
 * @method void setMatchFrom(string $MatchFrom) Set Matching item. Valid values:
<li>host: request domain name;</li>
<li>sip: Client IP;</li>
<li>ua:User-Agent;</li>
<li>cookie: Session cookie;</li>
<li>cgi: CGI script;</li>
<li>xff: XFF extension header;</li>
<li>`url`: Request URL;
<li>accept: request content type;</li>
<li>method: request method;</li>
<li>header: request header;</li>
<li>sip_proto: network layer protocol.</li>
 * @method string getMatchParam() Obtain Parameter of the matching item. Only when MatchFrom is header, you can use this parameter, and the key of the header can be set to this parameter.
 * @method void setMatchParam(string $MatchParam) Set Parameter of the matching item. Only when MatchFrom is header, you can use this parameter, and the key of the header can be set to this parameter.
 * @method string getOperator() Obtain Matching operator. Valid values:
<li>equal: string equals;</li>
<li>not_equal: value not equal to;</li>
<li>include: string containing;</li>
<li>not_include: string does not contain;</li>
<li>match: ip match;</li>
<li>not_match: ip not matched;</li>
<li>include_area: region inclusion;</li>
<li>is_empty: field with null value;</li>
<li>not_exists: key field not found;</li>
<li>regexp: regular expression matching;</li>
<li>len_gt: value greater than;</li>
<li>len_lt: value is less than;</li>
<li>len_eq: value equal to;</li>
<li>match_prefix: prefix match;</li>
<li>match_suffix: suffix matching;</li>
<li>wildcard: wildcard.</li>
 * @method void setOperator(string $Operator) Set Matching operator. Valid values:
<li>equal: string equals;</li>
<li>not_equal: value not equal to;</li>
<li>include: string containing;</li>
<li>not_include: string does not contain;</li>
<li>match: ip match;</li>
<li>not_match: ip not matched;</li>
<li>include_area: region inclusion;</li>
<li>is_empty: field with null value;</li>
<li>not_exists: key field not found;</li>
<li>regexp: regular expression matching;</li>
<li>len_gt: value greater than;</li>
<li>len_lt: value is less than;</li>
<li>len_eq: value equal to;</li>
<li>match_prefix: prefix match;</li>
<li>match_suffix: suffix matching;</li>
<li>wildcard: wildcard.</li>
 * @method string getMatchContent() Obtain Matching value.
 * @method void setMatchContent(string $MatchContent) Set Matching value.
 */
class ExceptUserRuleCondition extends AbstractModel
{
    /**
     * @var string Matching item. Valid values:
<li>host: request domain name;</li>
<li>sip: Client IP;</li>
<li>ua:User-Agent;</li>
<li>cookie: Session cookie;</li>
<li>cgi: CGI script;</li>
<li>xff: XFF extension header;</li>
<li>`url`: Request URL;
<li>accept: request content type;</li>
<li>method: request method;</li>
<li>header: request header;</li>
<li>sip_proto: network layer protocol.</li>
     */
    public $MatchFrom;

    /**
     * @var string Parameter of the matching item. Only when MatchFrom is header, you can use this parameter, and the key of the header can be set to this parameter.
     */
    public $MatchParam;

    /**
     * @var string Matching operator. Valid values:
<li>equal: string equals;</li>
<li>not_equal: value not equal to;</li>
<li>include: string containing;</li>
<li>not_include: string does not contain;</li>
<li>match: ip match;</li>
<li>not_match: ip not matched;</li>
<li>include_area: region inclusion;</li>
<li>is_empty: field with null value;</li>
<li>not_exists: key field not found;</li>
<li>regexp: regular expression matching;</li>
<li>len_gt: value greater than;</li>
<li>len_lt: value is less than;</li>
<li>len_eq: value equal to;</li>
<li>match_prefix: prefix match;</li>
<li>match_suffix: suffix matching;</li>
<li>wildcard: wildcard.</li>
     */
    public $Operator;

    /**
     * @var string Matching value.
     */
    public $MatchContent;

    /**
     * @param string $MatchFrom Matching item. Valid values:
<li>host: request domain name;</li>
<li>sip: Client IP;</li>
<li>ua:User-Agent;</li>
<li>cookie: Session cookie;</li>
<li>cgi: CGI script;</li>
<li>xff: XFF extension header;</li>
<li>`url`: Request URL;
<li>accept: request content type;</li>
<li>method: request method;</li>
<li>header: request header;</li>
<li>sip_proto: network layer protocol.</li>
     * @param string $MatchParam Parameter of the matching item. Only when MatchFrom is header, you can use this parameter, and the key of the header can be set to this parameter.
     * @param string $Operator Matching operator. Valid values:
<li>equal: string equals;</li>
<li>not_equal: value not equal to;</li>
<li>include: string containing;</li>
<li>not_include: string does not contain;</li>
<li>match: ip match;</li>
<li>not_match: ip not matched;</li>
<li>include_area: region inclusion;</li>
<li>is_empty: field with null value;</li>
<li>not_exists: key field not found;</li>
<li>regexp: regular expression matching;</li>
<li>len_gt: value greater than;</li>
<li>len_lt: value is less than;</li>
<li>len_eq: value equal to;</li>
<li>match_prefix: prefix match;</li>
<li>match_suffix: suffix matching;</li>
<li>wildcard: wildcard.</li>
     * @param string $MatchContent Matching value.
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
        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchParam",$param) and $param["MatchParam"] !== null) {
            $this->MatchParam = $param["MatchParam"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
