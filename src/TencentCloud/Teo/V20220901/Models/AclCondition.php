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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The condition that makes up an access control rule
 *
 * @method string getMatchFrom() Obtain Filters: 
<li>`host`: Request domain name;</li>
<li>`sip`: Client IP;</li>
<li>`ua`: User-Agent;</li>
<li>`cookie`: Cookie;</li>
<li>`cgi`: CGI script;</li>
<li>`xff`: XFF header;</li></li>
<li>`url`: Request URL;<li></li>
<li>`accept`: Request content type;</li>
<li>`method`: Request method<;/li>
<li>`header`: Request header;</li>
<li>`app_proto`: Application layer protocol;</li>
<li>`sip_proto`: Network layer protocol;</li>
<li>`uabot`: UA rules (only available in custom bot rules);</li>
<li>`idcid`: IDC rules (only available in custom bot rules);</li>
<li>`sipbot`: Search engine rules (only available in custom bot rules);</li>
<li>`portrait`: Client reputation (only available in custom bot rules);</li>
<li>`header_seq`: Header sequence (only available in custom bot rules);</li>
<li>`hdr`: Request body (only available in custom Web protection rules). </li>
 * @method void setMatchFrom(string $MatchFrom) Set Filters: 
<li>`host`: Request domain name;</li>
<li>`sip`: Client IP;</li>
<li>`ua`: User-Agent;</li>
<li>`cookie`: Cookie;</li>
<li>`cgi`: CGI script;</li>
<li>`xff`: XFF header;</li></li>
<li>`url`: Request URL;<li></li>
<li>`accept`: Request content type;</li>
<li>`method`: Request method<;/li>
<li>`header`: Request header;</li>
<li>`app_proto`: Application layer protocol;</li>
<li>`sip_proto`: Network layer protocol;</li>
<li>`uabot`: UA rules (only available in custom bot rules);</li>
<li>`idcid`: IDC rules (only available in custom bot rules);</li>
<li>`sipbot`: Search engine rules (only available in custom bot rules);</li>
<li>`portrait`: Client reputation (only available in custom bot rules);</li>
<li>`header_seq`: Header sequence (only available in custom bot rules);</li>
<li>`hdr`: Request body (only available in custom Web protection rules). </li>
 * @method string getMatchParam() Obtain The parameter of the field. When `MatchFrom = header`, the key contained in the header can be passed.
 * @method void setMatchParam(string $MatchParam) Set The parameter of the field. When `MatchFrom = header`, the key contained in the header can be passed.
 * @method string getOperator() Obtain The logical operator. Values:
<li>`equal`: Value equals</li>
<li>`not_equal`: Value not equals</li>
<li>`include`: String contains</li>
<li>`not_include`: String not contains</li>
<li>`match`: IP matches</li>
<li>`not_match`: IP not matches</li>
<li>`include_area`: Regions contain</li>
<li>`is_empty`: Value left empty</li>
<li>`not_exists`: Key fields not exist</li>
<li>`regexp`: Regex matches</li>
<li>`len_gt`: Value greater than</li>
<li>`len_lt`: Value smaller than</li>
<li>`len_eq`: Value equals</li>
<li>`match_prefix`: Prefix matches</li>
<li>`match_suffix`: Suffix matches</li>
<li>`wildcard`: Wildcard</li>
 * @method void setOperator(string $Operator) Set The logical operator. Values:
<li>`equal`: Value equals</li>
<li>`not_equal`: Value not equals</li>
<li>`include`: String contains</li>
<li>`not_include`: String not contains</li>
<li>`match`: IP matches</li>
<li>`not_match`: IP not matches</li>
<li>`include_area`: Regions contain</li>
<li>`is_empty`: Value left empty</li>
<li>`not_exists`: Key fields not exist</li>
<li>`regexp`: Regex matches</li>
<li>`len_gt`: Value greater than</li>
<li>`len_lt`: Value smaller than</li>
<li>`len_eq`: Value equals</li>
<li>`match_prefix`: Prefix matches</li>
<li>`match_suffix`: Suffix matches</li>
<li>`wildcard`: Wildcard</li>
 * @method string getMatchContent() Obtain The content to match.
 * @method void setMatchContent(string $MatchContent) Set The content to match.
 */
class AclCondition extends AbstractModel
{
    /**
     * @var string Filters: 
<li>`host`: Request domain name;</li>
<li>`sip`: Client IP;</li>
<li>`ua`: User-Agent;</li>
<li>`cookie`: Cookie;</li>
<li>`cgi`: CGI script;</li>
<li>`xff`: XFF header;</li></li>
<li>`url`: Request URL;<li></li>
<li>`accept`: Request content type;</li>
<li>`method`: Request method<;/li>
<li>`header`: Request header;</li>
<li>`app_proto`: Application layer protocol;</li>
<li>`sip_proto`: Network layer protocol;</li>
<li>`uabot`: UA rules (only available in custom bot rules);</li>
<li>`idcid`: IDC rules (only available in custom bot rules);</li>
<li>`sipbot`: Search engine rules (only available in custom bot rules);</li>
<li>`portrait`: Client reputation (only available in custom bot rules);</li>
<li>`header_seq`: Header sequence (only available in custom bot rules);</li>
<li>`hdr`: Request body (only available in custom Web protection rules). </li>
     */
    public $MatchFrom;

    /**
     * @var string The parameter of the field. When `MatchFrom = header`, the key contained in the header can be passed.
     */
    public $MatchParam;

    /**
     * @var string The logical operator. Values:
<li>`equal`: Value equals</li>
<li>`not_equal`: Value not equals</li>
<li>`include`: String contains</li>
<li>`not_include`: String not contains</li>
<li>`match`: IP matches</li>
<li>`not_match`: IP not matches</li>
<li>`include_area`: Regions contain</li>
<li>`is_empty`: Value left empty</li>
<li>`not_exists`: Key fields not exist</li>
<li>`regexp`: Regex matches</li>
<li>`len_gt`: Value greater than</li>
<li>`len_lt`: Value smaller than</li>
<li>`len_eq`: Value equals</li>
<li>`match_prefix`: Prefix matches</li>
<li>`match_suffix`: Suffix matches</li>
<li>`wildcard`: Wildcard</li>
     */
    public $Operator;

    /**
     * @var string The content to match.
     */
    public $MatchContent;

    /**
     * @param string $MatchFrom Filters: 
<li>`host`: Request domain name;</li>
<li>`sip`: Client IP;</li>
<li>`ua`: User-Agent;</li>
<li>`cookie`: Cookie;</li>
<li>`cgi`: CGI script;</li>
<li>`xff`: XFF header;</li></li>
<li>`url`: Request URL;<li></li>
<li>`accept`: Request content type;</li>
<li>`method`: Request method<;/li>
<li>`header`: Request header;</li>
<li>`app_proto`: Application layer protocol;</li>
<li>`sip_proto`: Network layer protocol;</li>
<li>`uabot`: UA rules (only available in custom bot rules);</li>
<li>`idcid`: IDC rules (only available in custom bot rules);</li>
<li>`sipbot`: Search engine rules (only available in custom bot rules);</li>
<li>`portrait`: Client reputation (only available in custom bot rules);</li>
<li>`header_seq`: Header sequence (only available in custom bot rules);</li>
<li>`hdr`: Request body (only available in custom Web protection rules). </li>
     * @param string $MatchParam The parameter of the field. When `MatchFrom = header`, the key contained in the header can be passed.
     * @param string $Operator The logical operator. Values:
<li>`equal`: Value equals</li>
<li>`not_equal`: Value not equals</li>
<li>`include`: String contains</li>
<li>`not_include`: String not contains</li>
<li>`match`: IP matches</li>
<li>`not_match`: IP not matches</li>
<li>`include_area`: Regions contain</li>
<li>`is_empty`: Value left empty</li>
<li>`not_exists`: Key fields not exist</li>
<li>`regexp`: Regex matches</li>
<li>`len_gt`: Value greater than</li>
<li>`len_lt`: Value smaller than</li>
<li>`len_eq`: Value equals</li>
<li>`match_prefix`: Prefix matches</li>
<li>`match_suffix`: Suffix matches</li>
<li>`wildcard`: Wildcard</li>
     * @param string $MatchContent The content to match.
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
