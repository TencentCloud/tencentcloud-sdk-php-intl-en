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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring task execution time point in alarm policy
 *
 * @method string getType() Obtain Valid values:
<br><li> `Period`: periodic execution
<br><li> `Fixed`: scheduled execution
 * @method void setType(string $Type) Set Valid values:
<br><li> `Period`: periodic execution
<br><li> `Fixed`: scheduled execution
 * @method integer getTime() Obtain Execution interval or scheduled time point in minutes. Value range: 1–1440.
 * @method void setTime(integer $Time) Set Execution interval or scheduled time point in minutes. Value range: 1–1440.
 */
class MonitorTime extends AbstractModel
{
    /**
     * @var string Valid values:
<br><li> `Period`: periodic execution
<br><li> `Fixed`: scheduled execution
     */
    public $Type;

    /**
     * @var integer Execution interval or scheduled time point in minutes. Value range: 1–1440.
     */
    public $Time;

    /**
     * @param string $Type Valid values:
<br><li> `Period`: periodic execution
<br><li> `Fixed`: scheduled execution
     * @param integer $Time Execution interval or scheduled time point in minutes. Value range: 1–1440.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
