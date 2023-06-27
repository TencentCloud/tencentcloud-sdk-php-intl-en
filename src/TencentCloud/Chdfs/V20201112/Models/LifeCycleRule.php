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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lifecycle rule
 *
 * @method integer getLifeCycleRuleId() Obtain Lifecycle rule ID
 * @method void setLifeCycleRuleId(integer $LifeCycleRuleId) Set Lifecycle rule ID
 * @method string getLifeCycleRuleName() Obtain Lifecycle rule name
 * @method void setLifeCycleRuleName(string $LifeCycleRuleName) Set Lifecycle rule name
 * @method string getPath() Obtain Lifecycle rule path (directory or file)
 * @method void setPath(string $Path) Set Lifecycle rule path (directory or file)
 * @method array getTransitions() Obtain List of lifecycle rule transitions
 * @method void setTransitions(array $Transitions) Set List of lifecycle rule transitions
 * @method integer getStatus() Obtain Lifecycle rule status (1: enabled; 2: disabled)
 * @method void setStatus(integer $Status) Set Lifecycle rule status (1: enabled; 2: disabled)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method Summary getSummary() Obtain Detailed storage usage of the current lifecycle rule path
 * @method void setSummary(Summary $Summary) Set Detailed storage usage of the current lifecycle rule path
 * @method string getLastSummaryTime() Obtain Update time of `Summary`
 * @method void setLastSummaryTime(string $LastSummaryTime) Set Update time of `Summary`
 */
class LifeCycleRule extends AbstractModel
{
    /**
     * @var integer Lifecycle rule ID
     */
    public $LifeCycleRuleId;

    /**
     * @var string Lifecycle rule name
     */
    public $LifeCycleRuleName;

    /**
     * @var string Lifecycle rule path (directory or file)
     */
    public $Path;

    /**
     * @var array List of lifecycle rule transitions
     */
    public $Transitions;

    /**
     * @var integer Lifecycle rule status (1: enabled; 2: disabled)
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var Summary Detailed storage usage of the current lifecycle rule path
     */
    public $Summary;

    /**
     * @var string Update time of `Summary`
     */
    public $LastSummaryTime;

    /**
     * @param integer $LifeCycleRuleId Lifecycle rule ID
     * @param string $LifeCycleRuleName Lifecycle rule name
     * @param string $Path Lifecycle rule path (directory or file)
     * @param array $Transitions List of lifecycle rule transitions
     * @param integer $Status Lifecycle rule status (1: enabled; 2: disabled)
     * @param string $CreateTime Creation time
     * @param Summary $Summary Detailed storage usage of the current lifecycle rule path
     * @param string $LastSummaryTime Update time of `Summary`
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
        if (array_key_exists("LifeCycleRuleId",$param) and $param["LifeCycleRuleId"] !== null) {
            $this->LifeCycleRuleId = $param["LifeCycleRuleId"];
        }

        if (array_key_exists("LifeCycleRuleName",$param) and $param["LifeCycleRuleName"] !== null) {
            $this->LifeCycleRuleName = $param["LifeCycleRuleName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Transitions",$param) and $param["Transitions"] !== null) {
            $this->Transitions = [];
            foreach ($param["Transitions"] as $key => $value){
                $obj = new Transition();
                $obj->deserialize($value);
                array_push($this->Transitions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new Summary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("LastSummaryTime",$param) and $param["LastSummaryTime"] !== null) {
            $this->LastSummaryTime = $param["LastSummaryTime"];
        }
    }
}
