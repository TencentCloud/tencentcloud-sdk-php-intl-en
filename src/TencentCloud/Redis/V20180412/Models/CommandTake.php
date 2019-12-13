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
 * @method string getCmd() 获取Command
 * @method void setCmd(string $Cmd) 设置Command
 * @method integer getTook() 获取Duration
 * @method void setTook(integer $Took) 设置Duration
 */

/**
 *Command duration
 */
class CommandTake extends AbstractModel
{
    /**
     * @var string Command
     */
    public $Cmd;

    /**
     * @var integer Duration
     */
    public $Took;
    /**
     * @param string $Cmd Command
     * @param integer $Took Duration
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
