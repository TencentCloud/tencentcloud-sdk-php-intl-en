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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES cluster log details
 *
 * @method string getTime() Obtain Log time
 * @method void setTime(string $Time) Set Log time
 * @method string getLevel() Obtain Log level
 * @method void setLevel(string $Level) Set Log level
 * @method string getIp() Obtain Cluster node IP
 * @method void setIp(string $Ip) Set Cluster node IP
 * @method string getMessage() Obtain Log content
 * @method void setMessage(string $Message) Set Log content
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string Log time
     */
    public $Time;

    /**
     * @var string Log level
     */
    public $Level;

    /**
     * @var string Cluster node IP
     */
    public $Ip;

    /**
     * @var string Log content
     */
    public $Message;

    /**
     * @param string $Time Log time
     * @param string $Level Log level
     * @param string $Ip Cluster node IP
     * @param string $Message Log content
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
