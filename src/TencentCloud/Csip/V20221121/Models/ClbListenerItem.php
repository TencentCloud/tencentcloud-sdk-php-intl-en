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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB listener
 *
 * @method string getListenerID() Obtain <p>Listener ID.</p>
 * @method void setListenerID(string $ListenerID) Set <p>Listener ID.</p>
 * @method string getListenerName() Obtain <p>Listener name</p>
 * @method void setListenerName(string $ListenerName) Set <p>Listener name</p>
 * @method string getProtocol() Obtain <p>Protocol</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol</p>
 * @method integer getPort() Obtain <p>Port</p>
 * @method void setPort(integer $Port) Set <p>Port</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 */
class ClbListenerItem extends AbstractModel
{
    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerID;

    /**
     * @var string <p>Listener name</p>
     */
    public $ListenerName;

    /**
     * @var string <p>Protocol</p>
     */
    public $Protocol;

    /**
     * @var integer <p>Port</p>
     */
    public $Port;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @param string $ListenerID <p>Listener ID.</p>
     * @param string $ListenerName <p>Listener name</p>
     * @param string $Protocol <p>Protocol</p>
     * @param integer $Port <p>Port</p>
     * @param string $CreateTime <p>Creation time.</p>
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
        if (array_key_exists("ListenerID",$param) and $param["ListenerID"] !== null) {
            $this->ListenerID = $param["ListenerID"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
