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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublicIPSwitchStatus request structure.
 *
 * @method string getFireWallPublicIP() Obtain Public IP
 * @method void setFireWallPublicIP(string $FireWallPublicIP) Set Public IP
 * @method integer getStatus() Obtain Status value. 0: off; 1: on
 * @method void setStatus(integer $Status) Set Status value. 0: off; 1: on
 */
class ModifyPublicIPSwitchStatusRequest extends AbstractModel
{
    /**
     * @var string Public IP
     */
    public $FireWallPublicIP;

    /**
     * @var integer Status value. 0: off; 1: on
     */
    public $Status;

    /**
     * @param string $FireWallPublicIP Public IP
     * @param integer $Status Status value. 0: off; 1: on
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
        if (array_key_exists("FireWallPublicIP",$param) and $param["FireWallPublicIP"] !== null) {
            $this->FireWallPublicIP = $param["FireWallPublicIP"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
