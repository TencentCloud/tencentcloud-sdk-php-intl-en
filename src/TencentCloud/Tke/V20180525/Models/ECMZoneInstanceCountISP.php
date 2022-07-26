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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Combination of the ECM instance AZ, number of instances, and ISP
 *
 * @method string getZone() Obtain Instance AZ
 * @method void setZone(string $Zone) Set Instance AZ
 * @method integer getInstanceCount() Obtain Number of instances to be created in the current AZ
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to be created in the current AZ
 * @method string getISP() Obtain ISP
 * @method void setISP(string $ISP) Set ISP
 */
class ECMZoneInstanceCountISP extends AbstractModel
{
    /**
     * @var string Instance AZ
     */
    public $Zone;

    /**
     * @var integer Number of instances to be created in the current AZ
     */
    public $InstanceCount;

    /**
     * @var string ISP
     */
    public $ISP;

    /**
     * @param string $Zone Instance AZ
     * @param integer $InstanceCount Number of instances to be created in the current AZ
     * @param string $ISP ISP
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }
    }
}
