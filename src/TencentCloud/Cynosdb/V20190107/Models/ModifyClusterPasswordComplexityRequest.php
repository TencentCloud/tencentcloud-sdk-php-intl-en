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
 * ModifyClusterPasswordComplexity request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getValidatePasswordLength() Obtain Password length
 * @method void setValidatePasswordLength(integer $ValidatePasswordLength) Set Password length
 * @method integer getValidatePasswordMixedCaseCount() Obtain Number of letters
 * @method void setValidatePasswordMixedCaseCount(integer $ValidatePasswordMixedCaseCount) Set Number of letters
 * @method integer getValidatePasswordSpecialCharCount() Obtain Number of symbols
 * @method void setValidatePasswordSpecialCharCount(integer $ValidatePasswordSpecialCharCount) Set Number of symbols
 * @method integer getValidatePasswordNumberCount() Obtain Number of digits
 * @method void setValidatePasswordNumberCount(integer $ValidatePasswordNumberCount) Set Number of digits
 * @method string getValidatePasswordPolicy() Obtain Password strength. Valid values: `MEDIUM`, `STRONG`.
 * @method void setValidatePasswordPolicy(string $ValidatePasswordPolicy) Set Password strength. Valid values: `MEDIUM`, `STRONG`.
 * @method array getValidatePasswordDictionary() Obtain Data dictionary
 * @method void setValidatePasswordDictionary(array $ValidatePasswordDictionary) Set Data dictionary
 */
class ModifyClusterPasswordComplexityRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Password length
     */
    public $ValidatePasswordLength;

    /**
     * @var integer Number of letters
     */
    public $ValidatePasswordMixedCaseCount;

    /**
     * @var integer Number of symbols
     */
    public $ValidatePasswordSpecialCharCount;

    /**
     * @var integer Number of digits
     */
    public $ValidatePasswordNumberCount;

    /**
     * @var string Password strength. Valid values: `MEDIUM`, `STRONG`.
     */
    public $ValidatePasswordPolicy;

    /**
     * @var array Data dictionary
     */
    public $ValidatePasswordDictionary;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $ValidatePasswordLength Password length
     * @param integer $ValidatePasswordMixedCaseCount Number of letters
     * @param integer $ValidatePasswordSpecialCharCount Number of symbols
     * @param integer $ValidatePasswordNumberCount Number of digits
     * @param string $ValidatePasswordPolicy Password strength. Valid values: `MEDIUM`, `STRONG`.
     * @param array $ValidatePasswordDictionary Data dictionary
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ValidatePasswordLength",$param) and $param["ValidatePasswordLength"] !== null) {
            $this->ValidatePasswordLength = $param["ValidatePasswordLength"];
        }

        if (array_key_exists("ValidatePasswordMixedCaseCount",$param) and $param["ValidatePasswordMixedCaseCount"] !== null) {
            $this->ValidatePasswordMixedCaseCount = $param["ValidatePasswordMixedCaseCount"];
        }

        if (array_key_exists("ValidatePasswordSpecialCharCount",$param) and $param["ValidatePasswordSpecialCharCount"] !== null) {
            $this->ValidatePasswordSpecialCharCount = $param["ValidatePasswordSpecialCharCount"];
        }

        if (array_key_exists("ValidatePasswordNumberCount",$param) and $param["ValidatePasswordNumberCount"] !== null) {
            $this->ValidatePasswordNumberCount = $param["ValidatePasswordNumberCount"];
        }

        if (array_key_exists("ValidatePasswordPolicy",$param) and $param["ValidatePasswordPolicy"] !== null) {
            $this->ValidatePasswordPolicy = $param["ValidatePasswordPolicy"];
        }

        if (array_key_exists("ValidatePasswordDictionary",$param) and $param["ValidatePasswordDictionary"] !== null) {
            $this->ValidatePasswordDictionary = $param["ValidatePasswordDictionary"];
        }
    }
}
