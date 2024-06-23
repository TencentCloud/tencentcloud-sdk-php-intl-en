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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent Collector Status Statistics
 *
 * @method integer getRunning() Obtain Running Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunning(integer $Running) Set Running Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAbnormal() Obtain Number of Anomalies
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAbnormal(integer $Abnormal) Set Number of Anomalies
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInOperation() Obtain Operating Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInOperation(integer $InOperation) Set Operating Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AgentStatus extends AbstractModel
{
    /**
     * @var integer Running Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Running;

    /**
     * @var integer Number of Anomalies
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Abnormal;

    /**
     * @var integer Operating Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InOperation;

    /**
     * @param integer $Running Running Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Abnormal Number of Anomalies
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InOperation Operating Quantity
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Abnormal",$param) and $param["Abnormal"] !== null) {
            $this->Abnormal = $param["Abnormal"];
        }

        if (array_key_exists("InOperation",$param) and $param["InOperation"] !== null) {
            $this->InOperation = $param["InOperation"];
        }
    }
}
