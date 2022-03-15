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
 * GetRule response structure.
 *
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getRuleId() Obtain Event rule ID
 * @method void setRuleId(string $RuleId) Set Event rule ID
 * @method string getRuleName() Obtain Event rule name
 * @method void setRuleName(string $RuleName) Set Event rule name
 * @method string getStatus() Obtain Event rule status
 * @method void setStatus(string $Status) Set Event rule status
 * @method boolean getEnable() Obtain Switch
 * @method void setEnable(boolean $Enable) Set Switch
 * @method string getDescription() Obtain Event rule description
 * @method void setDescription(string $Description) Set Event rule description
 * @method string getEventPattern() Obtain Event pattern
 * @method void setEventPattern(string $EventPattern) Set Event pattern
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getModTime() Obtain Update time
 * @method void setModTime(string $ModTime) Set Update time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetRuleResponse extends AbstractModel
{
    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Event rule ID
     */
    public $RuleId;

    /**
     * @var string Event rule name
     */
    public $RuleName;

    /**
     * @var string Event rule status
     */
    public $Status;

    /**
     * @var boolean Switch
     */
    public $Enable;

    /**
     * @var string Event rule description
     */
    public $Description;

    /**
     * @var string Event pattern
     */
    public $EventPattern;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Update time
     */
    public $ModTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $EventBusId Event bus ID
     * @param string $RuleId Event rule ID
     * @param string $RuleName Event rule name
     * @param string $Status Event rule status
     * @param boolean $Enable Switch
     * @param string $Description Event rule description
     * @param string $EventPattern Event pattern
     * @param string $AddTime Creation time
     * @param string $ModTime Update time
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
