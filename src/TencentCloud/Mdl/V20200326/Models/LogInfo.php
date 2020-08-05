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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log information.
 *
 * @method string getType() Obtain Log type.
It contains the value of `StreamStart` which refers to the push information.
 * @method void setType(string $Type) Set Log type.
It contains the value of `StreamStart` which refers to the push information.
 * @method string getTime() Obtain Time when the log is printed.
 * @method void setTime(string $Time) Set Time when the log is printed.
 * @method LogMessageInfo getMessage() Obtain Log details.
 * @method void setMessage(LogMessageInfo $Message) Set Log details.
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string Log type.
It contains the value of `StreamStart` which refers to the push information.
     */
    public $Type;

    /**
     * @var string Time when the log is printed.
     */
    public $Time;

    /**
     * @var LogMessageInfo Log details.
     */
    public $Message;

    /**
     * @param string $Type Log type.
It contains the value of `StreamStart` which refers to the push information.
     * @param string $Time Time when the log is printed.
     * @param LogMessageInfo $Message Log details.
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new LogMessageInfo();
            $this->Message->deserialize($param["Message"]);
        }
    }
}
