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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduling topology distribution.
 *
 * @method integer getMaxSkew() Obtain <p>Maximum deviation value.</p>
 * @method void setMaxSkew(integer $MaxSkew) Set <p>Maximum deviation value.</p>
 * @method string getTopologyKey() Obtain <p>Topology domain key.</p>
 * @method void setTopologyKey(string $TopologyKey) Set <p>Topology domain key.</p>
 * @method string getWhenUnsatisfiable() Obtain <p>Handling policy, which is used when constraints are not met.</p>
 * @method void setWhenUnsatisfiable(string $WhenUnsatisfiable) Set <p>Handling policy, which is used when constraints are not met.</p>
 * @method LabelSelector getLabelSelector() Obtain <p>Tag selector.</p>
 * @method void setLabelSelector(LabelSelector $LabelSelector) Set <p>Tag selector.</p>
 * @method integer getMinDomains() Obtain <p>Minimum number of topology domains.</p>
 * @method void setMinDomains(integer $MinDomains) Set <p>Minimum number of topology domains.</p>
 * @method string getNodeAffinityPolicy() Obtain <p>Node affinity policy.</p>
 * @method void setNodeAffinityPolicy(string $NodeAffinityPolicy) Set <p>Node affinity policy.</p>
 * @method string getNodeTaintsPolicy() Obtain <p>Node taint policy.</p>
 * @method void setNodeTaintsPolicy(string $NodeTaintsPolicy) Set <p>Node taint policy.</p>
 * @method array getMatchLabelKeys() Obtain <p>List of tag keys to be matched.</p>
 * @method void setMatchLabelKeys(array $MatchLabelKeys) Set <p>List of tag keys to be matched.</p>
 */
class TopologySpreadConstraint extends AbstractModel
{
    /**
     * @var integer <p>Maximum deviation value.</p>
     */
    public $MaxSkew;

    /**
     * @var string <p>Topology domain key.</p>
     */
    public $TopologyKey;

    /**
     * @var string <p>Handling policy, which is used when constraints are not met.</p>
     */
    public $WhenUnsatisfiable;

    /**
     * @var LabelSelector <p>Tag selector.</p>
     */
    public $LabelSelector;

    /**
     * @var integer <p>Minimum number of topology domains.</p>
     */
    public $MinDomains;

    /**
     * @var string <p>Node affinity policy.</p>
     */
    public $NodeAffinityPolicy;

    /**
     * @var string <p>Node taint policy.</p>
     */
    public $NodeTaintsPolicy;

    /**
     * @var array <p>List of tag keys to be matched.</p>
     */
    public $MatchLabelKeys;

    /**
     * @param integer $MaxSkew <p>Maximum deviation value.</p>
     * @param string $TopologyKey <p>Topology domain key.</p>
     * @param string $WhenUnsatisfiable <p>Handling policy, which is used when constraints are not met.</p>
     * @param LabelSelector $LabelSelector <p>Tag selector.</p>
     * @param integer $MinDomains <p>Minimum number of topology domains.</p>
     * @param string $NodeAffinityPolicy <p>Node affinity policy.</p>
     * @param string $NodeTaintsPolicy <p>Node taint policy.</p>
     * @param array $MatchLabelKeys <p>List of tag keys to be matched.</p>
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
        if (array_key_exists("MaxSkew",$param) and $param["MaxSkew"] !== null) {
            $this->MaxSkew = $param["MaxSkew"];
        }

        if (array_key_exists("TopologyKey",$param) and $param["TopologyKey"] !== null) {
            $this->TopologyKey = $param["TopologyKey"];
        }

        if (array_key_exists("WhenUnsatisfiable",$param) and $param["WhenUnsatisfiable"] !== null) {
            $this->WhenUnsatisfiable = $param["WhenUnsatisfiable"];
        }

        if (array_key_exists("LabelSelector",$param) and $param["LabelSelector"] !== null) {
            $this->LabelSelector = new LabelSelector();
            $this->LabelSelector->deserialize($param["LabelSelector"]);
        }

        if (array_key_exists("MinDomains",$param) and $param["MinDomains"] !== null) {
            $this->MinDomains = $param["MinDomains"];
        }

        if (array_key_exists("NodeAffinityPolicy",$param) and $param["NodeAffinityPolicy"] !== null) {
            $this->NodeAffinityPolicy = $param["NodeAffinityPolicy"];
        }

        if (array_key_exists("NodeTaintsPolicy",$param) and $param["NodeTaintsPolicy"] !== null) {
            $this->NodeTaintsPolicy = $param["NodeTaintsPolicy"];
        }

        if (array_key_exists("MatchLabelKeys",$param) and $param["MatchLabelKeys"] !== null) {
            $this->MatchLabelKeys = $param["MatchLabelKeys"];
        }
    }
}
