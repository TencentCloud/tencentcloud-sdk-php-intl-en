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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoRenewFlag request structure.
 *
 * @method array getInstanceIds() Obtain <P>Instance list that needs to be modified</p>.
 * @method void setInstanceIds(array $InstanceIds) Set <P>Instance list that needs to be modified</p>.
 * @method integer getAutoRenewFlag() Obtain <P>1 enables automatic renewal, 0 disables automatic renewal.</p>.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <P>1 enables automatic renewal, 0 disables automatic renewal.</p>.
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array <P>Instance list that needs to be modified</p>.
     */
    public $InstanceIds;

    /**
     * @var integer <P>1 enables automatic renewal, 0 disables automatic renewal.</p>.
     */
    public $AutoRenewFlag;

    /**
     * @param array $InstanceIds <P>Instance list that needs to be modified</p>.
     * @param integer $AutoRenewFlag <P>1 enables automatic renewal, 0 disables automatic renewal.</p>.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
