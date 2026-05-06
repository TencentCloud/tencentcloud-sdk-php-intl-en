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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway Upstream info
 *
 * @method string getID() Obtain Service ID
 * @method void setID(string $ID) Set Service ID
 * @method string getName() Obtain Service name.
 * @method void setName(string $Name) Set Service name.
 * @method array getTarget() Obtain Backend configuration
 * @method void setTarget(array $Target) Set Backend configuration
 */
class KongUpstreamPreview extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ID;

    /**
     * @var string Service name.
     */
    public $Name;

    /**
     * @var array Backend configuration
     */
    public $Target;

    /**
     * @param string $ID Service ID
     * @param string $Name Service name.
     * @param array $Target Backend configuration
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = [];
            foreach ($param["Target"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Target, $obj);
            }
        }
    }
}
