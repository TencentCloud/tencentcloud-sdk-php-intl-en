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
 * RO instance weight value
 *
 * @method string getInstanceId() Obtain RO instance ID.
 * @method void setInstanceId(string $InstanceId) Set RO instance ID.
 * @method integer getWeight() Obtain Weight value. Value range: [0, 100].
 * @method void setWeight(integer $Weight) Set Weight value. Value range: [0, 100].
 */
class RoWeightValue extends AbstractModel
{
    /**
     * @var string RO instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Weight value. Value range: [0, 100].
     */
    public $Weight;

    /**
     * @param string $InstanceId RO instance ID.
     * @param integer $Weight Weight value. Value range: [0, 100].
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
