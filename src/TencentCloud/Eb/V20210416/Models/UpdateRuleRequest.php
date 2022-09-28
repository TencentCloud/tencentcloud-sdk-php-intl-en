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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRule request structure.
 *
 * @method string getRuleId() Obtain Event rule ID
 * @method void setRuleId(string $RuleId) Set Event rule ID
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method boolean getEnable() Obtain Switch.
 * @method void setEnable(boolean $Enable) Set Switch.
 * @method string getDescription() Obtain Rule description, which can contain up to 200 characters of any type.
 * @method void setDescription(string $Description) Set Rule description, which can contain up to 200 characters of any type.
 * @method string getEventPattern() Obtain See [CKafka Target](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
 * @method void setEventPattern(string $EventPattern) Set See [CKafka Target](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
 * @method string getRuleName() Obtain Event rule name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 * @method void setRuleName(string $RuleName) Set Event rule name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 */
class UpdateRuleRequest extends AbstractModel
{
    /**
     * @var string Event rule ID
     */
    public $RuleId;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var boolean Switch.
     */
    public $Enable;

    /**
     * @var string Rule description, which can contain up to 200 characters of any type.
     */
    public $Description;

    /**
     * @var string See [CKafka Target](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
     */
    public $EventPattern;

    /**
     * @var string Event rule name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
     */
    public $RuleName;

    /**
     * @param string $RuleId Event rule ID
     * @param string $EventBusId Event bus ID
     * @param boolean $Enable Switch.
     * @param string $Description Rule description, which can contain up to 200 characters of any type.
     * @param string $EventPattern See [CKafka Target](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
     * @param string $RuleName Event rule name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
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

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
