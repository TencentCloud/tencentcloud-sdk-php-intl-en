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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLibraDBClusterRenewFlag request structure.
 *
 * @method array getResourceIds() Obtain Analytical cluster ID list
 * @method void setResourceIds(array $ResourceIds) Set Analytical cluster ID list
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: normal renewal. 1: automatic renewal. 2: non-renewal upon expiration.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: normal renewal. 1: automatic renewal. 2: non-renewal upon expiration.
 */
class SetLibraDBClusterRenewFlagRequest extends AbstractModel
{
    /**
     * @var array Analytical cluster ID list
     */
    public $ResourceIds;

    /**
     * @var integer Auto-renewal flag. 0: normal renewal. 1: automatic renewal. 2: non-renewal upon expiration.
     */
    public $AutoRenewFlag;

    /**
     * @param array $ResourceIds Analytical cluster ID list
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: normal renewal. 1: automatic renewal. 2: non-renewal upon expiration.
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
