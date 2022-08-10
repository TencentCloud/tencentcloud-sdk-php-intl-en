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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User profiling rule details
 *
 * @method integer getRuleId() Obtain Unique rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Unique rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleTypeName() Obtain Rule type name: botdb (user profile)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleTypeName(string $RuleTypeName) Set Rule type name: botdb (user profile)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClassificationId() Obtain Rule feature category ID (scanner, bot behavior, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassificationId(integer $ClassificationId) Set Rule feature category ID (scanner, bot behavior, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Current rule action status (block, alg, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Current rule action status (block, alg, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PortraitManagedRuleDetail extends AbstractModel
{
    /**
     * @var integer Unique rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Rule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Rule type name: botdb (user profile)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleTypeName;

    /**
     * @var integer Rule feature category ID (scanner, bot behavior, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClassificationId;

    /**
     * @var string Current rule action status (block, alg, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $RuleId Unique rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Rule description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleTypeName Rule type name: botdb (user profile)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClassificationId Rule feature category ID (scanner, bot behavior, etc.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Current rule action status (block, alg, etc.)
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("ClassificationId",$param) and $param["ClassificationId"] !== null) {
            $this->ClassificationId = $param["ClassificationId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
