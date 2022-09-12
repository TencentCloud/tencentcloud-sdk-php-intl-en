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
 * DescribeInstanceSpecs request structure.
 *
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method boolean getIncludeZoneStocks() Obtain Whether to return the AZ information.
 * @method void setIncludeZoneStocks(boolean $IncludeZoneStocks) Set Whether to return the AZ information.
 */
class DescribeInstanceSpecsRequest extends AbstractModel
{
    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var boolean Whether to return the AZ information.
     */
    public $IncludeZoneStocks;

    /**
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param boolean $IncludeZoneStocks Whether to return the AZ information.
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
    }
}
