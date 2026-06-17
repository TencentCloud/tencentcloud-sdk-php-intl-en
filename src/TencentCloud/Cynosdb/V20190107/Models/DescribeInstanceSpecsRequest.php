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
 * DescribeInstanceSpecs request structure.
 *
 * @method string getDbType() Obtain <p>Database type, value ranges from...to... </p><li> MYSQL </li>
 * @method void setDbType(string $DbType) Set <p>Database type, value ranges from...to... </p><li> MYSQL </li>
 * @method boolean getIncludeZoneStocks() Obtain <p>Whether required to return AZ information</p>
 * @method void setIncludeZoneStocks(boolean $IncludeZoneStocks) Set <p>Whether required to return AZ information</p>
 * @method string getDeviceType() Obtain <p>Instance machine type.</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance machine type.</p>
 * @method string getClusterLevel() Obtain <p>Cluster level, optional. For example P0, P1</p>
 * @method void setClusterLevel(string $ClusterLevel) Set <p>Cluster level, optional. For example P0, P1</p>
 */
class DescribeInstanceSpecsRequest extends AbstractModel
{
    /**
     * @var string <p>Database type, value ranges from...to... </p><li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var boolean <p>Whether required to return AZ information</p>
     */
    public $IncludeZoneStocks;

    /**
     * @var string <p>Instance machine type.</p>
     */
    public $DeviceType;

    /**
     * @var string <p>Cluster level, optional. For example P0, P1</p>
     */
    public $ClusterLevel;

    /**
     * @param string $DbType <p>Database type, value ranges from...to... </p><li> MYSQL </li>
     * @param boolean $IncludeZoneStocks <p>Whether required to return AZ information</p>
     * @param string $DeviceType <p>Instance machine type.</p>
     * @param string $ClusterLevel <p>Cluster level, optional. For example P0, P1</p>
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
        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("IncludeZoneStocks",$param) and $param["IncludeZoneStocks"] !== null) {
            $this->IncludeZoneStocks = $param["IncludeZoneStocks"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }
    }
}
