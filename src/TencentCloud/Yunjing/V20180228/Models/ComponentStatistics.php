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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Component statistics.
 *
 * @method integer getId() Obtain Component ID.
 * @method void setId(integer $Id) Set Component ID.
 * @method integer getMachineNum() Obtain Number of servers.
 * @method void setMachineNum(integer $MachineNum) Set Number of servers.
 * @method string getComponentName() Obtain Component name.
 * @method void setComponentName(string $ComponentName) Set Component name.
 * @method string getComponentType() Obtain Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
 * @method void setComponentType(string $ComponentType) Set Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
 * @method string getDescription() Obtain Component description.
 * @method void setDescription(string $Description) Set Component description.
 */
class ComponentStatistics extends AbstractModel
{
    /**
     * @var integer Component ID.
     */
    public $Id;

    /**
     * @var integer Number of servers.
     */
    public $MachineNum;

    /**
     * @var string Component name.
     */
    public $ComponentName;

    /**
     * @var string Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
     */
    public $ComponentType;

    /**
     * @var string Component description.
     */
    public $Description;

    /**
     * @param integer $Id Component ID.
     * @param integer $MachineNum Number of servers.
     * @param string $ComponentName Component name.
     * @param string $ComponentType Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
     * @param string $Description Component description.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
