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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServerlessStrategy request structure.
 *
 * @method string getClusterId() Obtain Specifies the serverless cluster id.
 * @method void setClusterId(string $ClusterId) Set Specifies the serverless cluster id.
 * @method string getAutoPause() Obtain Specifies whether the cluster automatically pauses. valid values for the optional range.
<li>yes</li>
<li>no</li>
 * @method void setAutoPause(string $AutoPause) Set Specifies whether the cluster automatically pauses. valid values for the optional range.
<li>yes</li>
<li>no</li>
 * @method integer getAutoPauseDelay() Obtain Specifies the delay for cluster auto-pause in seconds. the value range is [600,691200]. the default value is 600.
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set Specifies the delay for cluster auto-pause in seconds. the value range is [600,691200]. the default value is 600.
 * @method integer getAutoScaleUpDelay() Obtain The parameter is temporarily unavailable.
 * @method void setAutoScaleUpDelay(integer $AutoScaleUpDelay) Set The parameter is temporarily unavailable.
 * @method integer getAutoScaleDownDelay() Obtain The parameter is temporarily unavailable.
 * @method void setAutoScaleDownDelay(integer $AutoScaleDownDelay) Set The parameter is temporarily unavailable.
 * @method float getMinCpu() Obtain Minimum value of cpu. for the optional range, refer to the API response of DescribeServerlessInstanceSpecs.
 * @method void setMinCpu(float $MinCpu) Set Minimum value of cpu. for the optional range, refer to the API response of DescribeServerlessInstanceSpecs.
 * @method float getMaxCpu() Obtain Maximum value of cpu, optional range refers to the API response of DescribeServerlessInstanceSpecs.
 * @method void setMaxCpu(float $MaxCpu) Set Maximum value of cpu, optional range refers to the API response of DescribeServerlessInstanceSpecs.
 * @method float getMinRoCpu() Obtain Minimum cpu value of a read-only instance. for valid values, refer to the API response of DescribeServerlessInstanceSpecs.
 * @method void setMinRoCpu(float $MinRoCpu) Set Minimum cpu value of a read-only instance. for valid values, refer to the API response of DescribeServerlessInstanceSpecs.
 * @method float getMaxRoCpu() Obtain Maximum value of read-only cpu, optional range refer to the API response of DescribeServerlessInstanceSpecs.
 * @method void setMaxRoCpu(float $MaxRoCpu) Set Maximum value of read-only cpu, optional range refer to the API response of DescribeServerlessInstanceSpecs.
 * @method integer getMinRoCount() Obtain Specifies the minimum count of read-only nodes.
 * @method void setMinRoCount(integer $MinRoCount) Set Specifies the minimum count of read-only nodes.
 * @method integer getMaxRoCount() Obtain Maximum number of read-only nodes.
 * @method void setMaxRoCount(integer $MaxRoCount) Set Maximum number of read-only nodes.
 */
class ModifyServerlessStrategyRequest extends AbstractModel
{
    /**
     * @var string Specifies the serverless cluster id.
     */
    public $ClusterId;

    /**
     * @var string Specifies whether the cluster automatically pauses. valid values for the optional range.
<li>yes</li>
<li>no</li>
     */
    public $AutoPause;

    /**
     * @var integer Specifies the delay for cluster auto-pause in seconds. the value range is [600,691200]. the default value is 600.
     */
    public $AutoPauseDelay;

    /**
     * @var integer The parameter is temporarily unavailable.
     */
    public $AutoScaleUpDelay;

    /**
     * @var integer The parameter is temporarily unavailable.
     */
    public $AutoScaleDownDelay;

    /**
     * @var float Minimum value of cpu. for the optional range, refer to the API response of DescribeServerlessInstanceSpecs.
     */
    public $MinCpu;

    /**
     * @var float Maximum value of cpu, optional range refers to the API response of DescribeServerlessInstanceSpecs.
     */
    public $MaxCpu;

    /**
     * @var float Minimum cpu value of a read-only instance. for valid values, refer to the API response of DescribeServerlessInstanceSpecs.
     */
    public $MinRoCpu;

    /**
     * @var float Maximum value of read-only cpu, optional range refer to the API response of DescribeServerlessInstanceSpecs.
     */
    public $MaxRoCpu;

    /**
     * @var integer Specifies the minimum count of read-only nodes.
     */
    public $MinRoCount;

    /**
     * @var integer Maximum number of read-only nodes.
     */
    public $MaxRoCount;

    /**
     * @param string $ClusterId Specifies the serverless cluster id.
     * @param string $AutoPause Specifies whether the cluster automatically pauses. valid values for the optional range.
<li>yes</li>
<li>no</li>
     * @param integer $AutoPauseDelay Specifies the delay for cluster auto-pause in seconds. the value range is [600,691200]. the default value is 600.
     * @param integer $AutoScaleUpDelay The parameter is temporarily unavailable.
     * @param integer $AutoScaleDownDelay The parameter is temporarily unavailable.
     * @param float $MinCpu Minimum value of cpu. for the optional range, refer to the API response of DescribeServerlessInstanceSpecs.
     * @param float $MaxCpu Maximum value of cpu, optional range refers to the API response of DescribeServerlessInstanceSpecs.
     * @param float $MinRoCpu Minimum cpu value of a read-only instance. for valid values, refer to the API response of DescribeServerlessInstanceSpecs.
     * @param float $MaxRoCpu Maximum value of read-only cpu, optional range refer to the API response of DescribeServerlessInstanceSpecs.
     * @param integer $MinRoCount Specifies the minimum count of read-only nodes.
     * @param integer $MaxRoCount Maximum number of read-only nodes.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("AutoScaleUpDelay",$param) and $param["AutoScaleUpDelay"] !== null) {
            $this->AutoScaleUpDelay = $param["AutoScaleUpDelay"];
        }

        if (array_key_exists("AutoScaleDownDelay",$param) and $param["AutoScaleDownDelay"] !== null) {
            $this->AutoScaleDownDelay = $param["AutoScaleDownDelay"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("MinRoCpu",$param) and $param["MinRoCpu"] !== null) {
            $this->MinRoCpu = $param["MinRoCpu"];
        }

        if (array_key_exists("MaxRoCpu",$param) and $param["MaxRoCpu"] !== null) {
            $this->MaxRoCpu = $param["MaxRoCpu"];
        }

        if (array_key_exists("MinRoCount",$param) and $param["MinRoCount"] !== null) {
            $this->MinRoCount = $param["MinRoCount"];
        }

        if (array_key_exists("MaxRoCount",$param) and $param["MaxRoCount"] !== null) {
            $this->MaxRoCount = $param["MaxRoCount"];
        }
    }
}
