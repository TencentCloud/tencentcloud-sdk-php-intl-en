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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRealServerId() 获取Origin server ID
 * @method void setRealServerId(string $RealServerId) 设置Origin server ID
 * @method integer getRealServerPort() 获取Origin server port
 * @method void setRealServerPort(integer $RealServerPort) 设置Origin server port
 * @method string getRealServerIP() 获取Origin server IP
 * @method void setRealServerIP(string $RealServerIP) 设置Origin server IP
 * @method integer getRealServerWeight() 获取Origin server weight
 * @method void setRealServerWeight(integer $RealServerWeight) 设置Origin server weight
 */

/**
 *RealServerBindSetReq
 */
class RealServerBindSetReq extends AbstractModel
{
    /**
     * @var string Origin server ID
     */
    public $RealServerId;

    /**
     * @var integer Origin server port
     */
    public $RealServerPort;

    /**
     * @var string Origin server IP
     */
    public $RealServerIP;

    /**
     * @var integer Origin server weight
     */
    public $RealServerWeight;
    /**
     * @param string $RealServerId Origin server ID
     * @param integer $RealServerPort Origin server port
     * @param string $RealServerIP Origin server IP
     * @param integer $RealServerWeight Origin server weight
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerWeight",$param) and $param["RealServerWeight"] !== null) {
            $this->RealServerWeight = $param["RealServerWeight"];
        }
    }
}
