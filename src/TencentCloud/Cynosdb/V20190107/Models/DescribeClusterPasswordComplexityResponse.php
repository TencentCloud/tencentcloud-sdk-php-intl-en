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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterPasswordComplexity response structure.
 *
 * @method ParamInfo getValidatePasswordDictionary() Obtain Data dictionary parameter Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordDictionary(ParamInfo $ValidatePasswordDictionary) Set Data dictionary parameter Note: This field may return null, indicating that no valid values can be obtained.
 * @method ParamInfo getValidatePasswordLength() Obtain The length of the password Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordLength(ParamInfo $ValidatePasswordLength) Set The length of the password Note: This field may return null, indicating that no valid values can be obtained.
 * @method ParamInfo getValidatePasswordMixedCaseCount() Obtain Number of case-sensitive characters Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordMixedCaseCount(ParamInfo $ValidatePasswordMixedCaseCount) Set Number of case-sensitive characters Note: This field may return null, indicating that no valid values can be obtained.
 * @method ParamInfo getValidatePasswordNumberCount() Obtain Number of digits Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordNumberCount(ParamInfo $ValidatePasswordNumberCount) Set Number of digits Note: This field may return null, indicating that no valid values can be obtained.
 * @method ParamInfo getValidatePasswordPolicy() Obtain Password level Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordPolicy(ParamInfo $ValidatePasswordPolicy) Set Password level Note: This field may return null, indicating that no valid values can be obtained.
 * @method ParamInfo getValidatePasswordSpecialCharCount() Obtain Number of symbols Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidatePasswordSpecialCharCount(ParamInfo $ValidatePasswordSpecialCharCount) Set Number of symbols Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterPasswordComplexityResponse extends AbstractModel
{
    /**
     * @var ParamInfo Data dictionary parameter Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordDictionary;

    /**
     * @var ParamInfo The length of the password Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordLength;

    /**
     * @var ParamInfo Number of case-sensitive characters Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordMixedCaseCount;

    /**
     * @var ParamInfo Number of digits Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordNumberCount;

    /**
     * @var ParamInfo Password level Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordPolicy;

    /**
     * @var ParamInfo Number of symbols Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidatePasswordSpecialCharCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ParamInfo $ValidatePasswordDictionary Data dictionary parameter Note: This field may return null, indicating that no valid values can be obtained.
     * @param ParamInfo $ValidatePasswordLength The length of the password Note: This field may return null, indicating that no valid values can be obtained.
     * @param ParamInfo $ValidatePasswordMixedCaseCount Number of case-sensitive characters Note: This field may return null, indicating that no valid values can be obtained.
     * @param ParamInfo $ValidatePasswordNumberCount Number of digits Note: This field may return null, indicating that no valid values can be obtained.
     * @param ParamInfo $ValidatePasswordPolicy Password level Note: This field may return null, indicating that no valid values can be obtained.
     * @param ParamInfo $ValidatePasswordSpecialCharCount Number of symbols Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ValidatePasswordDictionary",$param) and $param["ValidatePasswordDictionary"] !== null) {
            $this->ValidatePasswordDictionary = new ParamInfo();
            $this->ValidatePasswordDictionary->deserialize($param["ValidatePasswordDictionary"]);
        }

        if (array_key_exists("ValidatePasswordLength",$param) and $param["ValidatePasswordLength"] !== null) {
            $this->ValidatePasswordLength = new ParamInfo();
            $this->ValidatePasswordLength->deserialize($param["ValidatePasswordLength"]);
        }

        if (array_key_exists("ValidatePasswordMixedCaseCount",$param) and $param["ValidatePasswordMixedCaseCount"] !== null) {
            $this->ValidatePasswordMixedCaseCount = new ParamInfo();
            $this->ValidatePasswordMixedCaseCount->deserialize($param["ValidatePasswordMixedCaseCount"]);
        }

        if (array_key_exists("ValidatePasswordNumberCount",$param) and $param["ValidatePasswordNumberCount"] !== null) {
            $this->ValidatePasswordNumberCount = new ParamInfo();
            $this->ValidatePasswordNumberCount->deserialize($param["ValidatePasswordNumberCount"]);
        }

        if (array_key_exists("ValidatePasswordPolicy",$param) and $param["ValidatePasswordPolicy"] !== null) {
            $this->ValidatePasswordPolicy = new ParamInfo();
            $this->ValidatePasswordPolicy->deserialize($param["ValidatePasswordPolicy"]);
        }

        if (array_key_exists("ValidatePasswordSpecialCharCount",$param) and $param["ValidatePasswordSpecialCharCount"] !== null) {
            $this->ValidatePasswordSpecialCharCount = new ParamInfo();
            $this->ValidatePasswordSpecialCharCount->deserialize($param["ValidatePasswordSpecialCharCount"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
