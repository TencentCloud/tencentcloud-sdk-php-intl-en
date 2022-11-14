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
 * ModifyTableStatus request structure.
 *
 * @method string getEdgeId() Obtain Edge ID between two VPCs
 * @method void setEdgeId(string $EdgeId) Set Edge ID between two VPCs
 * @method integer getStatus() Obtain Status value. 1: table locked; 2: table unlocked
 * @method void setStatus(integer $Status) Set Status value. 1: table locked; 2: table unlocked
 * @method string getArea() Obtain NAT region
 * @method void setArea(string $Area) Set NAT region
 * @method integer getDirection() Obtain 0: outbound; 1: inbound
 * @method void setDirection(integer $Direction) Set 0: outbound; 1: inbound
 */
class ModifyTableStatusRequest extends AbstractModel
{
    /**
     * @var string Edge ID between two VPCs
     */
    public $EdgeId;

    /**
     * @var integer Status value. 1: table locked; 2: table unlocked
     */
    public $Status;

    /**
     * @var string NAT region
     */
    public $Area;

    /**
     * @var integer 0: outbound; 1: inbound
     */
    public $Direction;

    /**
     * @param string $EdgeId Edge ID between two VPCs
     * @param integer $Status Status value. 1: table locked; 2: table unlocked
     * @param string $Area NAT region
     * @param integer $Direction 0: outbound; 1: inbound
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
