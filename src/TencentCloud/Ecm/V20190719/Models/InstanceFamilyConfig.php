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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model family configuration
 *
 * @method string getInstanceFamilyName() Obtain Model name
 * @method void setInstanceFamilyName(string $InstanceFamilyName) Set Model name
 * @method string getInstanceFamily() Obtain Model ID
 * @method void setInstanceFamily(string $InstanceFamily) Set Model ID
 */
class InstanceFamilyConfig extends AbstractModel
{
    /**
     * @var string Model name
     */
    public $InstanceFamilyName;

    /**
     * @var string Model ID
     */
    public $InstanceFamily;

    /**
     * @param string $InstanceFamilyName Model name
     * @param string $InstanceFamily Model ID
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
        if (array_key_exists("InstanceFamilyName",$param) and $param["InstanceFamilyName"] !== null) {
            $this->InstanceFamilyName = $param["InstanceFamilyName"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
