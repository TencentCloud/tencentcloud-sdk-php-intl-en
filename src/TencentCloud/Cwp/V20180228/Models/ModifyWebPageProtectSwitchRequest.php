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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebPageProtectSwitch request structure.
 *
 * @method integer getSwitchType() Obtain Switch type: 1 - protection switch; 2 - auto recovery switch; 3 - remove protection directory
 * @method void setSwitchType(integer $SwitchType) Set Switch type: 1 - protection switch; 2 - auto recovery switch; 3 - remove protection directory
 * @method array getIds() Obtain Sites that require operating switches (maximum quantity is 100)
 * @method void setIds(array $Ids) Set Sites that require operating switches (maximum quantity is 100)
 * @method integer getStatus() Obtain 1 - on; 0 - off; required when SwitchType is 1 | 2;
 * @method void setStatus(integer $Status) Set 1 - on; 0 - off; required when SwitchType is 1 | 2;
 */
class ModifyWebPageProtectSwitchRequest extends AbstractModel
{
    /**
     * @var integer Switch type: 1 - protection switch; 2 - auto recovery switch; 3 - remove protection directory
     */
    public $SwitchType;

    /**
     * @var array Sites that require operating switches (maximum quantity is 100)
     */
    public $Ids;

    /**
     * @var integer 1 - on; 0 - off; required when SwitchType is 1 | 2;
     */
    public $Status;

    /**
     * @param integer $SwitchType Switch type: 1 - protection switch; 2 - auto recovery switch; 3 - remove protection directory
     * @param array $Ids Sites that require operating switches (maximum quantity is 100)
     * @param integer $Status 1 - on; 0 - off; required when SwitchType is 1 | 2;
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
        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
