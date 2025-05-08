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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ cluster specification information.
 *
 * @method string getSpecName() Obtain Specifies the cluster specification name.
 * @method void setSpecName(string $SpecName) Set Specifies the cluster specification name.
 * @method integer getMaxTps() Obtain Max tps.
 * @method void setMaxTps(integer $MaxTps) Set Max tps.
 * @method integer getMaxQueueNum() Obtain Maximum number of queues.
 * @method void setMaxQueueNum(integer $MaxQueueNum) Set Maximum number of queues.
 * @method integer getMaxExchangeNum() Obtain Maximum number of exchanges.
 * @method void setMaxExchangeNum(integer $MaxExchangeNum) Set Maximum number of exchanges.
 * @method integer getMaxVhostNum() Obtain Maximum number of vhosts.
 * @method void setMaxVhostNum(integer $MaxVhostNum) Set Maximum number of vhosts.
 * @method integer getMaxConnNum() Obtain Maximum number of connections.
 * @method void setMaxConnNum(integer $MaxConnNum) Set Maximum number of connections.
 * @method integer getMaxUserNum() Obtain Maximum number of users.
 * @method void setMaxUserNum(integer $MaxUserNum) Set Maximum number of users.
 * @method integer getMaxBandWidth() Obtain Peak bandwidth. abandoned.
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Peak bandwidth. abandoned.
 * @method integer getPublicNetworkTps() Obtain Public network bandwidth. abandoned.
 * @method void setPublicNetworkTps(integer $PublicNetworkTps) Set Public network bandwidth. abandoned.
 */
class RabbitMQClusterSpecInfo extends AbstractModel
{
    /**
     * @var string Specifies the cluster specification name.
     */
    public $SpecName;

    /**
     * @var integer Max tps.
     */
    public $MaxTps;

    /**
     * @var integer Maximum number of queues.
     */
    public $MaxQueueNum;

    /**
     * @var integer Maximum number of exchanges.
     */
    public $MaxExchangeNum;

    /**
     * @var integer Maximum number of vhosts.
     */
    public $MaxVhostNum;

    /**
     * @var integer Maximum number of connections.
     */
    public $MaxConnNum;

    /**
     * @var integer Maximum number of users.
     */
    public $MaxUserNum;

    /**
     * @var integer Peak bandwidth. abandoned.
     */
    public $MaxBandWidth;

    /**
     * @var integer Public network bandwidth. abandoned.
     */
    public $PublicNetworkTps;

    /**
     * @param string $SpecName Specifies the cluster specification name.
     * @param integer $MaxTps Max tps.
     * @param integer $MaxQueueNum Maximum number of queues.
     * @param integer $MaxExchangeNum Maximum number of exchanges.
     * @param integer $MaxVhostNum Maximum number of vhosts.
     * @param integer $MaxConnNum Maximum number of connections.
     * @param integer $MaxUserNum Maximum number of users.
     * @param integer $MaxBandWidth Peak bandwidth. abandoned.
     * @param integer $PublicNetworkTps Public network bandwidth. abandoned.
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

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxQueueNum",$param) and $param["MaxQueueNum"] !== null) {
            $this->MaxQueueNum = $param["MaxQueueNum"];
        }

        if (array_key_exists("MaxExchangeNum",$param) and $param["MaxExchangeNum"] !== null) {
            $this->MaxExchangeNum = $param["MaxExchangeNum"];
        }

        if (array_key_exists("MaxVhostNum",$param) and $param["MaxVhostNum"] !== null) {
            $this->MaxVhostNum = $param["MaxVhostNum"];
        }

        if (array_key_exists("MaxConnNum",$param) and $param["MaxConnNum"] !== null) {
            $this->MaxConnNum = $param["MaxConnNum"];
        }

        if (array_key_exists("MaxUserNum",$param) and $param["MaxUserNum"] !== null) {
            $this->MaxUserNum = $param["MaxUserNum"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("PublicNetworkTps",$param) and $param["PublicNetworkTps"] !== null) {
            $this->PublicNetworkTps = $param["PublicNetworkTps"];
        }
    }
}
