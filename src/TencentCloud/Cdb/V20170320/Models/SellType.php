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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purchasable instance type
 *
 * @method string getTypeName() Obtain Name of the purchasable instance
 * @method void setTypeName(string $TypeName) Set Name of the purchasable instance
 * @method array getEngineVersion() Obtain Kernel version number
 * @method void setEngineVersion(array $EngineVersion) Set Kernel version number
 * @method array getConfigs() Obtain Configuration details of a purchasable specification
 * @method void setConfigs(array $Configs) Set Configuration details of a purchasable specification
 */
class SellType extends AbstractModel
{
    /**
     * @var string Name of the purchasable instance
     */
    public $TypeName;

    /**
     * @var array Kernel version number
     */
    public $EngineVersion;

    /**
     * @var array Configuration details of a purchasable specification
     */
    public $Configs;

    /**
     * @param string $TypeName Name of the purchasable instance
     * @param array $EngineVersion Kernel version number
     * @param array $Configs Configuration details of a purchasable specification
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new SellConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
