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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN layer-7 rule configuration for CC frequency limiting
 *
 * @method boolean getCaseSensitive() Obtain Whether values are case sensitive
 * @method void setCaseSensitive(boolean $CaseSensitive) Set Whether values are case sensitive
 * @method string getRuleType() Obtain Rule types:
`protocol`: protocol. Valid values: `HTTP` and `HTTPS`.
`method`: request method. Valid values: `HEAD`, `GET`, `POST`, `PUT`, `OPTIONS`, `TRACE`, `DELETE`, `PATCH` and `CONNECT`.
`all`: domain name. The matching content is `*` and cannot be edited.
`ip`: IP in CIDR format.
`directory`: path starting with a slash (/). You can specify a directory or specific path using up to 128 characters.
`index`: default homepage, which is specified by `/;/index.html` and cannot be edited.
`path`: full path of the file, such as `/acb/test.png`. Wildcard is supported, such as `/abc/*.jpg`.
`file`: file extension, such as `jpg`, `png` and `css`.
`param`: request parameter. The value can contain up to 512 characters.
`referer`: Referer. The value can contain up to 512 characters.
`cookie`: Cookie. The value can contain up to 512 characters.
`user-agent`: User-Agent. The value can contain up to 512 characters.
`head`: custom header. The value can contain up to 512 characters. If the matching content is blank or does not exist, enter the matching parameter directly.
 * @method void setRuleType(string $RuleType) Set Rule types:
`protocol`: protocol. Valid values: `HTTP` and `HTTPS`.
`method`: request method. Valid values: `HEAD`, `GET`, `POST`, `PUT`, `OPTIONS`, `TRACE`, `DELETE`, `PATCH` and `CONNECT`.
`all`: domain name. The matching content is `*` and cannot be edited.
`ip`: IP in CIDR format.
`directory`: path starting with a slash (/). You can specify a directory or specific path using up to 128 characters.
`index`: default homepage, which is specified by `/;/index.html` and cannot be edited.
`path`: full path of the file, such as `/acb/test.png`. Wildcard is supported, such as `/abc/*.jpg`.
`file`: file extension, such as `jpg`, `png` and `css`.
`param`: request parameter. The value can contain up to 512 characters.
`referer`: Referer. The value can contain up to 512 characters.
`cookie`: Cookie. The value can contain up to 512 characters.
`user-agent`: User-Agent. The value can contain up to 512 characters.
`head`: custom header. The value can contain up to 512 characters. If the matching content is blank or does not exist, enter the matching parameter directly.
 * @method string getLogicOperator() Obtain Logical operator, which connects the relation between RuleType and RuleValue. Valid values:
`exclude`: the rule value is not contained. 
`include`: the rule value is contained. 
`notequal`: the rule value is not equal to the specified rule type. 
`equal`: the rule value is equal to the specified rule type. 
`matching`: the rule value matches with the prefix of the specified rule type.
`null`: the rule value is empty or does not exist.
 * @method void setLogicOperator(string $LogicOperator) Set Logical operator, which connects the relation between RuleType and RuleValue. Valid values:
`exclude`: the rule value is not contained. 
`include`: the rule value is contained. 
`notequal`: the rule value is not equal to the specified rule type. 
`equal`: the rule value is equal to the specified rule type. 
`matching`: the rule value matches with the prefix of the specified rule type.
`null`: the rule value is empty or does not exist.
 * @method array getRuleValue() Obtain Rule value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRuleValue(array $RuleValue) Set Rule value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRuleParam() Obtain Matched parameter. Only request parameters, Cookie, and custom request headers have a value.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRuleParam(string $RuleParam) Set Matched parameter. Only request parameters, Cookie, and custom request headers have a value.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnSevenLayerRules extends AbstractModel
{
    /**
     * @var boolean Whether values are case sensitive
     */
    public $CaseSensitive;

    /**
     * @var string Rule types:
`protocol`: protocol. Valid values: `HTTP` and `HTTPS`.
`method`: request method. Valid values: `HEAD`, `GET`, `POST`, `PUT`, `OPTIONS`, `TRACE`, `DELETE`, `PATCH` and `CONNECT`.
`all`: domain name. The matching content is `*` and cannot be edited.
`ip`: IP in CIDR format.
`directory`: path starting with a slash (/). You can specify a directory or specific path using up to 128 characters.
`index`: default homepage, which is specified by `/;/index.html` and cannot be edited.
`path`: full path of the file, such as `/acb/test.png`. Wildcard is supported, such as `/abc/*.jpg`.
`file`: file extension, such as `jpg`, `png` and `css`.
`param`: request parameter. The value can contain up to 512 characters.
`referer`: Referer. The value can contain up to 512 characters.
`cookie`: Cookie. The value can contain up to 512 characters.
`user-agent`: User-Agent. The value can contain up to 512 characters.
`head`: custom header. The value can contain up to 512 characters. If the matching content is blank or does not exist, enter the matching parameter directly.
     */
    public $RuleType;

    /**
     * @var string Logical operator, which connects the relation between RuleType and RuleValue. Valid values:
`exclude`: the rule value is not contained. 
`include`: the rule value is contained. 
`notequal`: the rule value is not equal to the specified rule type. 
`equal`: the rule value is equal to the specified rule type. 
`matching`: the rule value matches with the prefix of the specified rule type.
`null`: the rule value is empty or does not exist.
     */
    public $LogicOperator;

    /**
     * @var array Rule value
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RuleValue;

    /**
     * @var string Matched parameter. Only request parameters, Cookie, and custom request headers have a value.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RuleParam;

    /**
     * @param boolean $CaseSensitive Whether values are case sensitive
     * @param string $RuleType Rule types:
`protocol`: protocol. Valid values: `HTTP` and `HTTPS`.
`method`: request method. Valid values: `HEAD`, `GET`, `POST`, `PUT`, `OPTIONS`, `TRACE`, `DELETE`, `PATCH` and `CONNECT`.
`all`: domain name. The matching content is `*` and cannot be edited.
`ip`: IP in CIDR format.
`directory`: path starting with a slash (/). You can specify a directory or specific path using up to 128 characters.
`index`: default homepage, which is specified by `/;/index.html` and cannot be edited.
`path`: full path of the file, such as `/acb/test.png`. Wildcard is supported, such as `/abc/*.jpg`.
`file`: file extension, such as `jpg`, `png` and `css`.
`param`: request parameter. The value can contain up to 512 characters.
`referer`: Referer. The value can contain up to 512 characters.
`cookie`: Cookie. The value can contain up to 512 characters.
`user-agent`: User-Agent. The value can contain up to 512 characters.
`head`: custom header. The value can contain up to 512 characters. If the matching content is blank or does not exist, enter the matching parameter directly.
     * @param string $LogicOperator Logical operator, which connects the relation between RuleType and RuleValue. Valid values:
`exclude`: the rule value is not contained. 
`include`: the rule value is contained. 
`notequal`: the rule value is not equal to the specified rule type. 
`equal`: the rule value is equal to the specified rule type. 
`matching`: the rule value matches with the prefix of the specified rule type.
`null`: the rule value is empty or does not exist.
     * @param array $RuleValue Rule value
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RuleParam Matched parameter. Only request parameters, Cookie, and custom request headers have a value.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("LogicOperator",$param) and $param["LogicOperator"] !== null) {
            $this->LogicOperator = $param["LogicOperator"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("RuleParam",$param) and $param["RuleParam"] !== null) {
            $this->RuleParam = $param["RuleParam"];
        }
    }
}
