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
 * Target group instance
 *
 * @method string getBindIP() Obtain Private IP of target group instance
 * @method void setBindIP(string $BindIP) Set Private IP of target group instance
 * @method integer getPort() Obtain Port of target group instance
 * @method void setPort(integer $Port) Set Port of target group instance
 * @method integer getWeight() Obtain Weight of target group instance
 * @method void setWeight(integer $Weight) Set Weight of target group instance
 * @method integer getNewPort() Obtain New port of target group instance
 * @method void setNewPort(integer $NewPort) Set New port of target group instance
 */
class TargetGroupInstance extends AbstractModel
{
    /**
     * @var string Private IP of target group instance
     */
    public $BindIP;

    /**
     * @var integer Port of target group instance
     */
    public $Port;

    /**
     * @var integer Weight of target group instance
     */
    public $Weight;

    /**
     * @var integer New port of target group instance
     */
    public $NewPort;

    /**
     * @param string $BindIP Private IP of target group instance
     * @param integer $Port Port of target group instance
     * @param integer $Weight Weight of target group instance
     * @param integer $NewPort New port of target group instance
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
        if (array_key_exists("BindIP",$param) and $param["BindIP"] !== null) {
            $this->BindIP = $param["BindIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("NewPort",$param) and $param["NewPort"] !== null) {
            $this->NewPort = $param["NewPort"];
        }
    }
}
