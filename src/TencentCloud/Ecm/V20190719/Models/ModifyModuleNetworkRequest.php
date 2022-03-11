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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleNetwork request structure.
 *
 * @method string getModuleId() Obtain Module ID
 * @method void setModuleId(string $ModuleId) Set Module ID
 * @method integer getDefaultBandwidth() Obtain Default outbound bandwidth cap
 * @method void setDefaultBandwidth(integer $DefaultBandwidth) Set Default outbound bandwidth cap
 * @method integer getDefaultBandwidthIn() Obtain Default inbound bandwidth cap
 * @method void setDefaultBandwidthIn(integer $DefaultBandwidthIn) Set Default inbound bandwidth cap
 */
class ModifyModuleNetworkRequest extends AbstractModel
{
    /**
     * @var string Module ID
     */
    public $ModuleId;

    /**
     * @var integer Default outbound bandwidth cap
     */
    public $DefaultBandwidth;

    /**
     * @var integer Default inbound bandwidth cap
     */
    public $DefaultBandwidthIn;

    /**
     * @param string $ModuleId Module ID
     * @param integer $DefaultBandwidth Default outbound bandwidth cap
     * @param integer $DefaultBandwidthIn Default inbound bandwidth cap
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("DefaultBandwidth",$param) and $param["DefaultBandwidth"] !== null) {
            $this->DefaultBandwidth = $param["DefaultBandwidth"];
        }

        if (array_key_exists("DefaultBandwidthIn",$param) and $param["DefaultBandwidthIn"] !== null) {
            $this->DefaultBandwidthIn = $param["DefaultBandwidthIn"];
        }
    }
}
