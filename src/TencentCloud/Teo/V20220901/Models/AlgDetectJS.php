<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Bot proactive feature recognition client behavior validation.
 *
 * @method string getName() Obtain Operation name.
 * @method void setName(string $Name) Set Operation name.
 * @method string getWorkLevel() Obtain Proof of Work (proof_Of-Work) verification strength. Default value: low. Valid values:
<li>low: low;</li>
<li>middle: Medium;</li>
<li>high: high.</li>
 * @method void setWorkLevel(string $WorkLevel) Set Proof of Work (proof_Of-Work) verification strength. Default value: low. Valid values:
<li>low: low;</li>
<li>middle: Medium;</li>
<li>high: high.</li>
 * @method integer getExecuteMode() Obtain Execution mode. The time when js delay execution is triggered. Unit: ms. Default value: 500. Value range: 0–1000.
 * @method void setExecuteMode(integer $ExecuteMode) Set Execution mode. The time when js delay execution is triggered. Unit: ms. Default value: 500. Value range: 0–1000.
 * @method integer getInvalidStatTime() Obtain Statistical cycle for clients that do not have JS enabled (test not completed). Unit: seconds. Default: 10. Value range: 5–3600.
 * @method void setInvalidStatTime(integer $InvalidStatTime) Set Statistical cycle for clients that do not have JS enabled (test not completed). Unit: seconds. Default: 10. Value range: 5–3600.
 * @method integer getInvalidThreshold() Obtain Client JS not enabled (test not completed) trigger threshold. Count. Default: 300. Value: 1–100000000.
 * @method void setInvalidThreshold(integer $InvalidThreshold) Set Client JS not enabled (test not completed) trigger threshold. Count. Default: 300. Value: 1–100000000.
 * @method array getAlgDetectResults() Obtain Bot proactive feature recognition client behavior validation result.
 * @method void setAlgDetectResults(array $AlgDetectResults) Set Bot proactive feature recognition client behavior validation result.
 */
class AlgDetectJS extends AbstractModel
{
    /**
     * @var string Operation name.
     */
    public $Name;

    /**
     * @var string Proof of Work (proof_Of-Work) verification strength. Default value: low. Valid values:
<li>low: low;</li>
<li>middle: Medium;</li>
<li>high: high.</li>
     */
    public $WorkLevel;

    /**
     * @var integer Execution mode. The time when js delay execution is triggered. Unit: ms. Default value: 500. Value range: 0–1000.
     */
    public $ExecuteMode;

    /**
     * @var integer Statistical cycle for clients that do not have JS enabled (test not completed). Unit: seconds. Default: 10. Value range: 5–3600.
     */
    public $InvalidStatTime;

    /**
     * @var integer Client JS not enabled (test not completed) trigger threshold. Count. Default: 300. Value: 1–100000000.
     */
    public $InvalidThreshold;

    /**
     * @var array Bot proactive feature recognition client behavior validation result.
     */
    public $AlgDetectResults;

    /**
     * @param string $Name Operation name.
     * @param string $WorkLevel Proof of Work (proof_Of-Work) verification strength. Default value: low. Valid values:
<li>low: low;</li>
<li>middle: Medium;</li>
<li>high: high.</li>
     * @param integer $ExecuteMode Execution mode. The time when js delay execution is triggered. Unit: ms. Default value: 500. Value range: 0–1000.
     * @param integer $InvalidStatTime Statistical cycle for clients that do not have JS enabled (test not completed). Unit: seconds. Default: 10. Value range: 5–3600.
     * @param integer $InvalidThreshold Client JS not enabled (test not completed) trigger threshold. Count. Default: 300. Value: 1–100000000.
     * @param array $AlgDetectResults Bot proactive feature recognition client behavior validation result.
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
