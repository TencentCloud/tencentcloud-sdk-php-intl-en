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
 * @method array getResourceIds() Obtain Analysis Cluster ID List
 * @method void setResourceIds(array $ResourceIds) Set Analysis Cluster ID List
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag 0: Normal renewal 1: Automatic renewal 2: Non-renewal upon expiration
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag 0: Normal renewal 1: Automatic renewal 2: Non-renewal upon expiration
 */
class SetLibraDBClusterRenewFlagRequest extends AbstractModel
{
    /**
     * @var array Analysis Cluster ID List
     */
    public $ResourceIds;

    /**
     * @var integer Auto-renewal flag 0: Normal renewal 1: Automatic renewal 2: Non-renewal upon expiration
     */
    public $AutoRenewFlag;

    /**
     * @param array $ResourceIds Analysis Cluster ID List
     * @param integer $AutoRenewFlag Auto-renewal flag 0: Normal renewal 1: Automatic renewal 2: Non-renewal upon expiration
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
