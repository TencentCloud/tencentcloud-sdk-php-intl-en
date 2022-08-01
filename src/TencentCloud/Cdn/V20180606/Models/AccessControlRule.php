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
 * Access control rule
 *
 * @method string getRuleType() Obtain requestHeader: access control over request header
url: access control over access URL
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleType(string $RuleType) Set requestHeader: access control over request header
url: access control over access URL
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRuleContent() Obtain Blocked content
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleContent(string $RuleContent) Set Blocked content
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRegex() Obtain on: regular match
off: exact match
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRegex(string $Regex) Set on: regular match
off: exact match
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRuleHeader() Obtain This parameter is required only if `RuleType` is `requestHeader`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleHeader(string $RuleHeader) Set This parameter is required only if `RuleType` is `requestHeader`
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class AccessControlRule extends AbstractModel
{
    /**
     * @var string requestHeader: access control over request header
url: access control over access URL
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleType;

    /**
     * @var string Blocked content
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleContent;

    /**
     * @var string on: regular match
off: exact match
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Regex;

    /**
     * @var string This parameter is required only if `RuleType` is `requestHeader`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleHeader;

    /**
     * @param string $RuleType requestHeader: access control over request header
url: access control over access URL
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RuleContent Blocked content
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Regex on: regular match
off: exact match
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RuleHeader This parameter is required only if `RuleType` is `requestHeader`
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("RuleHeader",$param) and $param["RuleHeader"] !== null) {
            $this->RuleHeader = $param["RuleHeader"];
        }
    }
}
