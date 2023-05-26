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
 * Validate client behavior.
 *
 * @method string getName() Obtain Method to validate client behavior.
 * @method void setName(string $Name) Set Method to validate client behavior.
 * @method string getWorkLevel() Obtain Proof-of-work strength. Values:
<li>`low` (default): Low</li>
<li>`middle`: Medium</li>
<li>`high`: High</li>
 * @method void setWorkLevel(string $WorkLevel) Set Proof-of-work strength. Values:
<li>`low` (default): Low</li>
<li>`middle`: Medium</li>
<li>`high`: High</li>
 * @method integer getExecuteMode() Obtain Implement a delay before executing JS in milliseconds. Value range: 0-1000. Default value: 500.
 * @method void setExecuteMode(integer $ExecuteMode) Set Implement a delay before executing JS in milliseconds. Value range: 0-1000. Default value: 500.
 * @method integer getInvalidStatTime() Obtain The period threshold for validating the result "Client JS disabled" in seconds. Value range: 5-3600. Default value: 10.
 * @method void setInvalidStatTime(integer $InvalidStatTime) Set The period threshold for validating the result "Client JS disabled" in seconds. Value range: 5-3600. Default value: 10.
 * @method integer getInvalidThreshold() Obtain The number of times for the result "Client JS disabled" occurred in the specified period. Value range: 1-100000000. Default value: 30.
 * @method void setInvalidThreshold(integer $InvalidThreshold) Set The number of times for the result "Client JS disabled" occurred in the specified period. Value range: 1-100000000. Default value: 30.
 * @method array getAlgDetectResults() Obtain Client behavior validation results.
 * @method void setAlgDetectResults(array $AlgDetectResults) Set Client behavior validation results.
 */
class AlgDetectJS extends AbstractModel
{
    /**
     * @var string Method to validate client behavior.
     */
    public $Name;

    /**
     * @var string Proof-of-work strength. Values:
<li>`low` (default): Low</li>
<li>`middle`: Medium</li>
<li>`high`: High</li>
     */
    public $WorkLevel;

    /**
     * @var integer Implement a delay before executing JS in milliseconds. Value range: 0-1000. Default value: 500.
     */
    public $ExecuteMode;

    /**
     * @var integer The period threshold for validating the result "Client JS disabled" in seconds. Value range: 5-3600. Default value: 10.
     */
    public $InvalidStatTime;

    /**
     * @var integer The number of times for the result "Client JS disabled" occurred in the specified period. Value range: 1-100000000. Default value: 30.
     */
    public $InvalidThreshold;

    /**
     * @var array Client behavior validation results.
     */
    public $AlgDetectResults;

    /**
     * @param string $Name Method to validate client behavior.
     * @param string $WorkLevel Proof-of-work strength. Values:
<li>`low` (default): Low</li>
<li>`middle`: Medium</li>
<li>`high`: High</li>
     * @param integer $ExecuteMode Implement a delay before executing JS in milliseconds. Value range: 0-1000. Default value: 500.
     * @param integer $InvalidStatTime The period threshold for validating the result "Client JS disabled" in seconds. Value range: 5-3600. Default value: 10.
     * @param integer $InvalidThreshold The number of times for the result "Client JS disabled" occurred in the specified period. Value range: 1-100000000. Default value: 30.
     * @param array $AlgDetectResults Client behavior validation results.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WorkLevel",$param) and $param["WorkLevel"] !== null) {
            $this->WorkLevel = $param["WorkLevel"];
        }

        if (array_key_exists("ExecuteMode",$param) and $param["ExecuteMode"] !== null) {
            $this->ExecuteMode = $param["ExecuteMode"];
        }

        if (array_key_exists("InvalidStatTime",$param) and $param["InvalidStatTime"] !== null) {
            $this->InvalidStatTime = $param["InvalidStatTime"];
        }

        if (array_key_exists("InvalidThreshold",$param) and $param["InvalidThreshold"] !== null) {
            $this->InvalidThreshold = $param["InvalidThreshold"];
        }

        if (array_key_exists("AlgDetectResults",$param) and $param["AlgDetectResults"] !== null) {
            $this->AlgDetectResults = [];
            foreach ($param["AlgDetectResults"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->AlgDetectResults, $obj);
            }
        }
    }
}
