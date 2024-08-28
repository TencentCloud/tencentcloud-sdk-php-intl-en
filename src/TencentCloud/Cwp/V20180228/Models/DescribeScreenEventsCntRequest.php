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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScreenEventsCnt request structure.
 *
 * @method integer getBusinessType() Obtain Data type: 0 - total number of pending risks; 1: total number of affected assets. The default is 0.
 * @method void setBusinessType(integer $BusinessType) Set Data type: 0 - total number of pending risks; 1: total number of affected assets. The default is 0.
 */
class DescribeScreenEventsCntRequest extends AbstractModel
{
    /**
     * @var integer Data type: 0 - total number of pending risks; 1: total number of affected assets. The default is 0.
     */
    public $BusinessType;

    /**
     * @param integer $BusinessType Data type: 0 - total number of pending risks; 1: total number of affected assets. The default is 0.
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }
    }
}
