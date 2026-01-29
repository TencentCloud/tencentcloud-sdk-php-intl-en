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
 * ModifyOrganizationAccountStatus request structure.
 *
 * @method integer getStatus() Obtain Modify Group Account Status. 1: Enabled; 2: Disabled.
 * @method void setStatus(integer $Status) Set Modify Group Account Status. 1: Enabled; 2: Disabled.
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class ModifyOrganizationAccountStatusRequest extends AbstractModel
{
    /**
     * @var integer Modify Group Account Status. 1: Enabled; 2: Disabled.
     */
    public $Status;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $Status Modify Group Account Status. 1: Enabled; 2: Disabled.
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
