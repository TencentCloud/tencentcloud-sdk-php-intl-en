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
 * Command duration
 *
 * @method string getCmd() Obtain Command name.
 * @method void setCmd(string $Cmd) Set Command name.
 * @method integer getTook() Obtain Time consumed. Unit: ms.
 * @method void setTook(integer $Took) Set Time consumed. Unit: ms.
 */
class CommandTake extends AbstractModel
{
    /**
     * @var string Command name.
     */
    public $Cmd;

    /**
     * @var integer Time consumed. Unit: ms.
     */
    public $Took;

    /**
     * @param string $Cmd Command name.
     * @param integer $Took Time consumed. Unit: ms.
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
        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Took",$param) and $param["Took"] !== null) {
            $this->Took = $param["Took"];
        }
    }
}
