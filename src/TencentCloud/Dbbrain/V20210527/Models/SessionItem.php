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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access source details of the real-time session
 *
 * @method string getIp() Obtain Access source
 * @method void setIp(string $Ip) Set Access source
 * @method string getActiveConn() Obtain The number of active connections from the current access source
 * @method void setActiveConn(string $ActiveConn) Set The number of active connections from the current access source
 * @method integer getAllConn() Obtain The total number of connections from the current access source
 * @method void setAllConn(integer $AllConn) Set The total number of connections from the current access source
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string Access source
     */
    public $Ip;

    /**
     * @var string The number of active connections from the current access source
     */
    public $ActiveConn;

    /**
     * @var integer The total number of connections from the current access source
     */
    public $AllConn;

    /**
     * @param string $Ip Access source
     * @param string $ActiveConn The number of active connections from the current access source
     * @param integer $AllConn The total number of connections from the current access source
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ActiveConn",$param) and $param["ActiveConn"] !== null) {
            $this->ActiveConn = $param["ActiveConn"];
        }

        if (array_key_exists("AllConn",$param) and $param["AllConn"] !== null) {
            $this->AllConn = $param["AllConn"];
        }
    }
}
