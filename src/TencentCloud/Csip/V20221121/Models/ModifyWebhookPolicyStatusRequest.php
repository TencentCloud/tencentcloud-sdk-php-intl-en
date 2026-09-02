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
 * ModifyWebhookPolicyStatus request structure.
 *
 * @method integer getID() Obtain Policy ID.
 * @method void setID(integer $ID) Set Policy ID.
 * @method string getStatus() Obtain Target Status
Enumeration values:
ON: enable
OFF: disabled.
 * @method void setStatus(string $Status) Set Target Status
Enumeration values:
ON: enable
OFF: disabled.
 */
class ModifyWebhookPolicyStatusRequest extends AbstractModel
{
    /**
     * @var integer Policy ID.
     */
    public $ID;

    /**
     * @var string Target Status
Enumeration values:
ON: enable
OFF: disabled.
     */
    public $Status;

    /**
     * @param integer $ID Policy ID.
     * @param string $Status Target Status
Enumeration values:
ON: enable
OFF: disabled.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
