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
 * Validate Cookie.
 *
 * @method string getName() Obtain Method to validate Cookie.
 * @method void setName(string $Name) Set Method to validate Cookie.
 * @method string getDetectMode() Obtain The validation mode. Values:
<li>`detect`: Validate only</li>
<li>`update_detect` (default): Update Cookie and validate</li>
 * @method void setDetectMode(string $DetectMode) Set The validation mode. Values:
<li>`detect`: Validate only</li>
<li>`update_detect` (default): Update Cookie and validate</li>
 * @method string getSessionAnalyzeSwitch() Obtain Whether to enable Cookie-based session check. The default value is `off`. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setSessionAnalyzeSwitch(string $SessionAnalyzeSwitch) Set Whether to enable Cookie-based session check. The default value is `off`. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method integer getInvalidStatTime() Obtain The period threshold for validating the result "No Cookie/Cookie expired" in seconds. Value range: 5-3600. Default value: 10.
 * @method void setInvalidStatTime(integer $InvalidStatTime) Set The period threshold for validating the result "No Cookie/Cookie expired" in seconds. Value range: 5-3600. Default value: 10.
 * @method integer getInvalidThreshold() Obtain The number of times for the result "No Cookie/Cookie expired" occurred in the specified period. Value range: 1-100000000. Default value: 300.
 * @method void setInvalidThreshold(integer $InvalidThreshold) Set The number of times for the result "No Cookie/Cookie expired" occurred in the specified period. Value range: 1-100000000. Default value: 300.
 * @method array getAlgDetectResults() Obtain Cookie validation results.
 * @method void setAlgDetectResults(array $AlgDetectResults) Set Cookie validation results.
 * @method array getSessionBehaviors() Obtain Cookie-based session check results.
 * @method void setSessionBehaviors(array $SessionBehaviors) Set Cookie-based session check results.
 */
class AlgDetectSession extends AbstractModel
{
    /**
     * @var string Method to validate Cookie.
     */
    public $Name;

    /**
     * @var string The validation mode. Values:
<li>`detect`: Validate only</li>
<li>`update_detect` (default): Update Cookie and validate</li>
     */
    public $DetectMode;

    /**
     * @var string Whether to enable Cookie-based session check. The default value is `off`. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $SessionAnalyzeSwitch;

    /**
     * @var integer The period threshold for validating the result "No Cookie/Cookie expired" in seconds. Value range: 5-3600. Default value: 10.
     */
    public $InvalidStatTime;

    /**
     * @var integer The number of times for the result "No Cookie/Cookie expired" occurred in the specified period. Value range: 1-100000000. Default value: 300.
     */
    public $InvalidThreshold;

    /**
     * @var array Cookie validation results.
     */
    public $AlgDetectResults;

    /**
     * @var array Cookie-based session check results.
     */
    public $SessionBehaviors;

    /**
     * @param string $Name Method to validate Cookie.
     * @param string $DetectMode The validation mode. Values:
<li>`detect`: Validate only</li>
<li>`update_detect` (default): Update Cookie and validate</li>
     * @param string $SessionAnalyzeSwitch Whether to enable Cookie-based session check. The default value is `off`. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param integer $InvalidStatTime The period threshold for validating the result "No Cookie/Cookie expired" in seconds. Value range: 5-3600. Default value: 10.
     * @param integer $InvalidThreshold The number of times for the result "No Cookie/Cookie expired" occurred in the specified period. Value range: 1-100000000. Default value: 300.
     * @param array $AlgDetectResults Cookie validation results.
     * @param array $SessionBehaviors Cookie-based session check results.
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

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("SessionAnalyzeSwitch",$param) and $param["SessionAnalyzeSwitch"] !== null) {
            $this->SessionAnalyzeSwitch = $param["SessionAnalyzeSwitch"];
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

        if (array_key_exists("SessionBehaviors",$param) and $param["SessionBehaviors"] !== null) {
            $this->SessionBehaviors = [];
            foreach ($param["SessionBehaviors"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->SessionBehaviors, $obj);
            }
        }
    }
}
