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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM configuration
 *
 * @method string getZone() Obtain CVM availability zone
 * @method void setZone(string $Zone) Set CVM availability zone
 * @method string getInstanceType() Obtain CVM instance specifications
 * @method void setInstanceType(string $InstanceType) Set CVM instance specifications
 */
class CVMOption extends AbstractModel
{
    /**
     * @var string CVM availability zone
     */
    public $Zone;

    /**
     * @var string CVM instance specifications
     */
    public $InstanceType;

    /**
     * @param string $Zone CVM availability zone
     * @param string $InstanceType CVM instance specifications
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
