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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRenewFlag request structure.
 *
 * @method array getResourceIds() Obtain ID of the instance to be manipulated
 * @method void setResourceIds(array $ResourceIds) Set ID of the instance to be manipulated
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal.
 */
class SetRenewFlagRequest extends AbstractModel
{
    /**
     * @var array ID of the instance to be manipulated
     */
    public $ResourceIds;

    /**
     * @var integer Auto-renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal.
     */
    public $AutoRenewFlag;

    /**
     * @param array $ResourceIds ID of the instance to be manipulated
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal.
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
