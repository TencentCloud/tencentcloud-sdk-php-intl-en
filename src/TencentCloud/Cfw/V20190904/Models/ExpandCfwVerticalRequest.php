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
 * ExpandCfwVertical request structure.
 *
 * @method string getFwType() Obtain nat: NAT firewall, ew: east-west firewall
 * @method void setFwType(string $FwType) Set nat: NAT firewall, ew: east-west firewall
 * @method integer getWidth() Obtain Bandwidth value
 * @method void setWidth(integer $Width) Set Bandwidth value
 * @method string getCfwInstance() Obtain Firewall instance ID
 * @method void setCfwInstance(string $CfwInstance) Set Firewall instance ID
 */
class ExpandCfwVerticalRequest extends AbstractModel
{
    /**
     * @var string nat: NAT firewall, ew: east-west firewall
     */
    public $FwType;

    /**
     * @var integer Bandwidth value
     */
    public $Width;

    /**
     * @var string Firewall instance ID
     */
    public $CfwInstance;

    /**
     * @param string $FwType nat: NAT firewall, ew: east-west firewall
     * @param integer $Width Bandwidth value
     * @param string $CfwInstance Firewall instance ID
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
        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }
    }
}
