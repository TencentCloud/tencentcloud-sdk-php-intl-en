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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServerlessStrategy request structure.
 *
 * @method string getClusterId() Obtain <p>serverless cluster id</p>
 * @method void setClusterId(string $ClusterId) Set <p>serverless cluster id</p>
 * @method string getAutoPause() Obtain <p>Whether the cluster auto-pause feature is enabled. Optional range</p><li>yes</li><li>no</li>
 * @method void setAutoPause(string $AutoPause) Set <p>Whether the cluster auto-pause feature is enabled. Optional range</p><li>yes</li><li>no</li>
 * @method integer getAutoPauseDelay() Obtain <p>Delay of Cluster Auto-Pause in seconds, optional range [600,691200], default 600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set <p>Delay of Cluster Auto-Pause in seconds, optional range [600,691200], default 600</p>
 * @method integer getAutoScaleUpDelay() Obtain <p>This parameter is temporarily unavailable</p>
 * @method void setAutoScaleUpDelay(integer $AutoScaleUpDelay) Set <p>This parameter is temporarily unavailable</p>
 * @method integer getAutoScaleDownDelay() Obtain <p>This parameter is temporarily invalid</p>
 * @method void setAutoScaleDownDelay(integer $AutoScaleDownDelay) Set <p>This parameter is temporarily invalid</p>
 * @method float getMinCpu() Obtain <p>cpu minimum value. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMinCpu(float $MinCpu) Set <p>cpu minimum value. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method float getMaxCpu() Obtain <p>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method float getMinRoCpu() Obtain <p>Minimum value of read-only instance cpu. For the optional range, refer to the API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMinRoCpu(float $MinRoCpu) Set <p>Minimum value of read-only instance cpu. For the optional range, refer to the API response of DescribeServerlessInstanceSpecs.</p>
 * @method float getMaxRoCpu() Obtain <p>Read-only cpu maximum value of the optional range. For reference, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMaxRoCpu(float $MaxRoCpu) Set <p>Read-only cpu maximum value of the optional range. For reference, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method integer getMinRoCount() Obtain <p>Minimum count of read-only nodes</p>
 * @method void setMinRoCount(integer $MinRoCount) Set <p>Minimum count of read-only nodes</p>
 * @method integer getMaxRoCount() Obtain <p>Maximum number of read-only nodes</p>
 * @method void setMaxRoCount(integer $MaxRoCount) Set <p>Maximum number of read-only nodes</p>
 * @method string getAutoArchive() Obtain <p>Whether archiving is enabled. Optional range</p><li>yes</li><li>no</li>Default value: yes</p>
 * @method void setAutoArchive(string $AutoArchive) Set <p>Whether archiving is enabled. Optional range</p><li>yes</li><li>no</li>Default value: yes</p>
 * @method string getUpgradeType() Obtain <p>Upgrade type. Default value: upgradeImmediate. Available values: upgradeImmediate - immediately complete the modification; upgradeInMaintain - complete the modification during maintenance window.</p>
 * @method void setUpgradeType(string $UpgradeType) Set <p>Upgrade type. Default value: upgradeImmediate. Available values: upgradeImmediate - immediately complete the modification; upgradeInMaintain - complete the modification during maintenance window.</p>
 * @method array getSecurityGroupIdsForNewRo() Obtain <p>List of security groups to which newly-added read-only instances need to be bound. This only applies to binding security groups to read-only instances generated during the process of this adjustment of policies. Existing instances are not bound.</p>
 * @method void setSecurityGroupIdsForNewRo(array $SecurityGroupIdsForNewRo) Set <p>List of security groups to which newly-added read-only instances need to be bound. This only applies to binding security groups to read-only instances generated during the process of this adjustment of policies. Existing instances are not bound.</p>
 */
class ModifyServerlessStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>serverless cluster id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Whether the cluster auto-pause feature is enabled. Optional range</p><li>yes</li><li>no</li>
     */
    public $AutoPause;

    /**
     * @var integer <p>Delay of Cluster Auto-Pause in seconds, optional range [600,691200], default 600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var integer <p>This parameter is temporarily unavailable</p>
     */
    public $AutoScaleUpDelay;

    /**
     * @var integer <p>This parameter is temporarily invalid</p>
     */
    public $AutoScaleDownDelay;

    /**
     * @var float <p>cpu minimum value. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MaxCpu;

    /**
     * @var float <p>Minimum value of read-only instance cpu. For the optional range, refer to the API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MinRoCpu;

    /**
     * @var float <p>Read-only cpu maximum value of the optional range. For reference, see API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MaxRoCpu;

    /**
     * @var integer <p>Minimum count of read-only nodes</p>
     */
    public $MinRoCount;

    /**
     * @var integer <p>Maximum number of read-only nodes</p>
     */
    public $MaxRoCount;

    /**
     * @var string <p>Whether archiving is enabled. Optional range</p><li>yes</li><li>no</li>Default value: yes</p>
     */
    public $AutoArchive;

    /**
     * @var string <p>Upgrade type. Default value: upgradeImmediate. Available values: upgradeImmediate - immediately complete the modification; upgradeInMaintain - complete the modification during maintenance window.</p>
     */
    public $UpgradeType;

    /**
     * @var array <p>List of security groups to which newly-added read-only instances need to be bound. This only applies to binding security groups to read-only instances generated during the process of this adjustment of policies. Existing instances are not bound.</p>
     */
    public $SecurityGroupIdsForNewRo;

    /**
     * @param string $ClusterId <p>serverless cluster id</p>
     * @param string $AutoPause <p>Whether the cluster auto-pause feature is enabled. Optional range</p><li>yes</li><li>no</li>
     * @param integer $AutoPauseDelay <p>Delay of Cluster Auto-Pause in seconds, optional range [600,691200], default 600</p>
     * @param integer $AutoScaleUpDelay <p>This parameter is temporarily unavailable</p>
     * @param integer $AutoScaleDownDelay <p>This parameter is temporarily invalid</p>
     * @param float $MinCpu <p>cpu minimum value. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     * @param float $MaxCpu <p>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     * @param float $MinRoCpu <p>Minimum value of read-only instance cpu. For the optional range, refer to the API response of DescribeServerlessInstanceSpecs.</p>
     * @param float $MaxRoCpu <p>Read-only cpu maximum value of the optional range. For reference, see API response of DescribeServerlessInstanceSpecs.</p>
     * @param integer $MinRoCount <p>Minimum count of read-only nodes</p>
     * @param integer $MaxRoCount <p>Maximum number of read-only nodes</p>
     * @param string $AutoArchive <p>Whether archiving is enabled. Optional range</p><li>yes</li><li>no</li>Default value: yes</p>
     * @param string $UpgradeType <p>Upgrade type. Default value: upgradeImmediate. Available values: upgradeImmediate - immediately complete the modification; upgradeInMaintain - complete the modification during maintenance window.</p>
     * @param array $SecurityGroupIdsForNewRo <p>List of security groups to which newly-added read-only instances need to be bound. This only applies to binding security groups to read-only instances generated during the process of this adjustment of policies. Existing instances are not bound.</p>
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

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("SecurityGroupIdsForNewRo",$param) and $param["SecurityGroupIdsForNewRo"] !== null) {
            $this->SecurityGroupIdsForNewRo = $param["SecurityGroupIdsForNewRo"];
        }
    }
}
