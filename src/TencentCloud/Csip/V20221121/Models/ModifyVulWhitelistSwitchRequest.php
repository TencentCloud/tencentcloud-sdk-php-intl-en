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
 * ModifyVulWhitelistSwitch request structure.
 *
 * @method array getId() Obtain <p>id list</p>
 * @method void setId(array $Id) Set <p>id list</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getSwitch() Obtain <p>Policy switch</p><p>Enumeration value:</p><ul><li>0: Turn off</li><li>1: Enable</li></ul>
 * @method void setSwitch(integer $Switch) Set <p>Policy switch</p><p>Enumeration value:</p><ul><li>0: Turn off</li><li>1: Enable</li></ul>
 */
class ModifyVulWhitelistSwitchRequest extends AbstractModel
{
    /**
     * @var array <p>id list</p>
     */
    public $Id;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Policy switch</p><p>Enumeration value:</p><ul><li>0: Turn off</li><li>1: Enable</li></ul>
     */
    public $Switch;

    /**
     * @param array $Id <p>id list</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Switch <p>Policy switch</p><p>Enumeration value:</p><ul><li>0: Turn off</li><li>1: Enable</li></ul>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
