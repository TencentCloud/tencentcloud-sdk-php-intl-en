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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Replica AZ information
 *
 * @method string getSlaveZone() Obtain Replica AZ region code
 * @method void setSlaveZone(string $SlaveZone) Set Replica AZ region code
 * @method string getSlaveZoneName() Obtain Replica AZ
 * @method void setSlaveZoneName(string $SlaveZoneName) Set Replica AZ
 */
class SlaveZones extends AbstractModel
{
    /**
     * @var string Replica AZ region code
     */
    public $SlaveZone;

    /**
     * @var string Replica AZ
     */
    public $SlaveZoneName;

    /**
     * @param string $SlaveZone Replica AZ region code
     * @param string $SlaveZoneName Replica AZ
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
        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("SlaveZoneName",$param) and $param["SlaveZoneName"] !== null) {
            $this->SlaveZoneName = $param["SlaveZoneName"];
        }
    }
}
