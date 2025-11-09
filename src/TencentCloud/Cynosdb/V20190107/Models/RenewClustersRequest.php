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
 * RenewClusters request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method float getTimeSpan() Obtain Renewal period.
 * @method void setTimeSpan(float $TimeSpan) Set Renewal period.
 * @method string getTimeUnit() Obtain Time unit, such as y, m, d, h, i, and s.
 * @method void setTimeUnit(string $TimeUnit) Set Time unit, such as y, m, d, h, i, and s.
 * @method integer getDealMode() Obtain "Transaction mode. 	0 - place an order and pay; 1 - place an order."
 * @method void setDealMode(integer $DealMode) Set "Transaction mode. 	0 - place an order and pay; 1 - place an order."
 */
class RenewClustersRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var float Renewal period.
     */
    public $TimeSpan;

    /**
     * @var string Time unit, such as y, m, d, h, i, and s.
     */
    public $TimeUnit;

    /**
     * @var integer "Transaction mode. 	0 - place an order and pay; 1 - place an order."
     */
    public $DealMode;

    /**
     * @param string $ClusterId Cluster ID.
     * @param float $TimeSpan Renewal period.
     * @param string $TimeUnit Time unit, such as y, m, d, h, i, and s.
     * @param integer $DealMode "Transaction mode. 	0 - place an order and pay; 1 - place an order."
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

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }
    }
}
