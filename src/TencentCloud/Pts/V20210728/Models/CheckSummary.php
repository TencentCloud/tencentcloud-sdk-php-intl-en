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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Checkpoint summary results
 *
 * @method string getName() Obtain Checkpoint name.
 * @method void setName(string $Name) Set Checkpoint name.
 * @method string getStep() Obtain Step name of the checkpoint.
 * @method void setStep(string $Step) Set Step name of the checkpoint.
 * @method integer getSuccessCount() Obtain Number of successful checks.
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful checks.
 * @method integer getFailCount() Obtain Number of failed checks.
 * @method void setFailCount(integer $FailCount) Set Number of failed checks.
 * @method float getErrorRate() Obtain Error ratio.
 * @method void setErrorRate(float $ErrorRate) Set Error ratio.
 */
class CheckSummary extends AbstractModel
{
    /**
     * @var string Checkpoint name.
     */
    public $Name;

    /**
     * @var string Step name of the checkpoint.
     */
    public $Step;

    /**
     * @var integer Number of successful checks.
     */
    public $SuccessCount;

    /**
     * @var integer Number of failed checks.
     */
    public $FailCount;

    /**
     * @var float Error ratio.
     */
    public $ErrorRate;

    /**
     * @param string $Name Checkpoint name.
     * @param string $Step Step name of the checkpoint.
     * @param integer $SuccessCount Number of successful checks.
     * @param integer $FailCount Number of failed checks.
     * @param float $ErrorRate Error ratio.
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

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }
    }
}
