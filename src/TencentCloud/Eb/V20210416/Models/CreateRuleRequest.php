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
 * CreateRule request structure.
 *
 * @method string getEventPattern() Obtain See [Event Pattern](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
 * @method void setEventPattern(string $EventPattern) Set See [Event Pattern](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
 * @method string getEventBusId() Obtain Event bus ID.
 * @method void setEventBusId(string $EventBusId) Set Event bus ID.
 * @method string getRuleName() Obtain Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 * @method void setRuleName(string $RuleName) Set Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 * @method boolean getEnable() Obtain Switch.
 * @method void setEnable(boolean $Enable) Set Switch.
 * @method string getDescription() Obtain Event bus description, which can contain up to 200 characters of any type
 * @method void setDescription(string $Description) Set Event bus description, which can contain up to 200 characters of any type
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string See [Event Pattern](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
     */
    public $EventPattern;

    /**
     * @var string Event bus ID.
     */
    public $EventBusId;

    /**
     * @var string Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
     */
    public $RuleName;

    /**
     * @var boolean Switch.
     */
    public $Enable;

    /**
     * @var string Event bus description, which can contain up to 200 characters of any type
     */
    public $Description;

    /**
     * @param string $EventPattern See [Event Pattern](https://intl.cloud.tencent.com/document/product/1359/56084?from_cn_redirect=1)
     * @param string $EventBusId Event bus ID.
     * @param string $RuleName Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
     * @param boolean $Enable Switch.
     * @param string $Description Event bus description, which can contain up to 200 characters of any type
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
        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
