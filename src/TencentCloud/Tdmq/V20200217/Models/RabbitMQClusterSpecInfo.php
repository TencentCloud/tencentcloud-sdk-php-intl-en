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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSpecName() Obtain 
 * @method void setSpecName(string $SpecName) Set 
 * @method integer getNodeCount() Obtain 
 * @method void setNodeCount(integer $NodeCount) Set 
 * @method integer getMaxTps() Obtain 
 * @method void setMaxTps(integer $MaxTps) Set 
 * @method integer getMaxBandWidth() Obtain 
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set 
 * @method integer getMaxStorage() Obtain 
 * @method void setMaxStorage(integer $MaxStorage) Set 
 * @method integer getPublicNetworkTps() Obtain 
 * @method void setPublicNetworkTps(integer $PublicNetworkTps) Set 
 */
class RabbitMQClusterSpecInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $SpecName;

    /**
     * @var integer 
     */
    public $NodeCount;

    /**
     * @var integer 
     */
    public $MaxTps;

    /**
     * @var integer 
     */
    public $MaxBandWidth;

    /**
     * @var integer 
     */
    public $MaxStorage;

    /**
     * @var integer 
     */
    public $PublicNetworkTps;

    /**
     * @param string $SpecName 
     * @param integer $NodeCount 
     * @param integer $MaxTps 
     * @param integer $MaxBandWidth 
     * @param integer $MaxStorage 
     * @param integer $PublicNetworkTps 
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("PublicNetworkTps",$param) and $param["PublicNetworkTps"] !== null) {
            $this->PublicNetworkTps = $param["PublicNetworkTps"];
        }
    }
}
