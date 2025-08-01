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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backend information of a classic CLB
 *
 * @method string getInstanceId() Obtain Real server ID
 * @method void setInstanceId(string $InstanceId) Set Real server ID
 * @method integer getWeight() Obtain Weight. Value range: [0, 100]
 * @method void setWeight(integer $Weight) Set Weight. Value range: [0, 100]
 */
class ClassicalTargetInfo extends AbstractModel
{
    /**
     * @var string Real server ID
     */
    public $InstanceId;

    /**
     * @var integer Weight. Value range: [0, 100]
     */
    public $Weight;

    /**
     * @param string $InstanceId Real server ID
     * @param integer $Weight Weight. Value range: [0, 100]
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
