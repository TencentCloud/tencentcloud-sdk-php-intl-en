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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delay distribution details
 *
 * @method integer getLadder() Obtain Delay distribution. The mapping between delay range and `Ladder` value is as follows:
[0ms,1ms]: 1;
[1ms,5ms]: 5;
[5ms,10ms]: 10;
[10ms,50ms]: 50;
[50ms,200ms]: 200;
[200ms,∞]: -1.
 * @method void setLadder(integer $Ladder) Set Delay distribution. The mapping between delay range and `Ladder` value is as follows:
[0ms,1ms]: 1;
[1ms,5ms]: 5;
[5ms,10ms]: 10;
[10ms,50ms]: 50;
[50ms,200ms]: 200;
[200ms,∞]: -1.
 * @method integer getSize() Obtain The number of commands whose delay falls within the current delay range
 * @method void setSize(integer $Size) Set The number of commands whose delay falls within the current delay range
 * @method integer getUpdatetime() Obtain Modification time
 * @method void setUpdatetime(integer $Updatetime) Set Modification time
 */
class DelayDistribution extends AbstractModel
{
    /**
     * @var integer Delay distribution. The mapping between delay range and `Ladder` value is as follows:
[0ms,1ms]: 1;
[1ms,5ms]: 5;
[5ms,10ms]: 10;
[10ms,50ms]: 50;
[50ms,200ms]: 200;
[200ms,∞]: -1.
     */
    public $Ladder;

    /**
     * @var integer The number of commands whose delay falls within the current delay range
     */
    public $Size;

    /**
     * @var integer Modification time
     */
    public $Updatetime;

    /**
     * @param integer $Ladder Delay distribution. The mapping between delay range and `Ladder` value is as follows:
[0ms,1ms]: 1;
[1ms,5ms]: 5;
[5ms,10ms]: 10;
[10ms,50ms]: 50;
[50ms,200ms]: 200;
[200ms,∞]: -1.
     * @param integer $Size The number of commands whose delay falls within the current delay range
     * @param integer $Updatetime Modification time
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
        if (array_key_exists("Ladder",$param) and $param["Ladder"] !== null) {
            $this->Ladder = $param["Ladder"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
