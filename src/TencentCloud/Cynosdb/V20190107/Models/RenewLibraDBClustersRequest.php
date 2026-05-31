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
 * RenewLibraDBClusters request structure.
 *
 * @method integer getTimeSpan() Obtain Time interval
 * @method void setTimeSpan(integer $TimeSpan) Set Time interval
 * @method string getTimeUnit() Obtain Time unit
 * @method void setTimeUnit(string $TimeUnit) Set Time unit
 * @method string getClusterId() Obtain Analysis Cluster ID
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster ID
 * @method integer getDealMode() Obtain Order mode
 * @method void setDealMode(integer $DealMode) Set Order mode
 */
class RenewLibraDBClustersRequest extends AbstractModel
{
    /**
     * @var integer Time interval
     */
    public $TimeSpan;

    /**
     * @var string Time unit
     */
    public $TimeUnit;

    /**
     * @var string Analysis Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Order mode
     */
    public $DealMode;

    /**
     * @param integer $TimeSpan Time interval
     * @param string $TimeUnit Time unit
     * @param string $ClusterId Analysis Cluster ID
     * @param integer $DealMode Order mode
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }
    }
}
