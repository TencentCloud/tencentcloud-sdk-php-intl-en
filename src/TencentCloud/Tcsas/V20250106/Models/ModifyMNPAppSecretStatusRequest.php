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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMNPAppSecretStatus request structure.
 *
 * @method string getMNPId() Obtain <p>Mini program appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program appid.</p>
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method integer getSecretStatus() Obtain <p>Operation status. Valid values: 1: Freeze; 2: Unfreeze.</p>
 * @method void setSecretStatus(integer $SecretStatus) Set <p>Operation status. Valid values: 1: Freeze; 2: Unfreeze.</p>
 */
class ModifyMNPAppSecretStatusRequest extends AbstractModel
{
    /**
     * @var string <p>Mini program appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var integer <p>Operation status. Valid values: 1: Freeze; 2: Unfreeze.</p>
     */
    public $SecretStatus;

    /**
     * @param string $MNPId <p>Mini program appid.</p>
     * @param string $PlatformId <p>Platform ID.</p>
     * @param integer $SecretStatus <p>Operation status. Valid values: 1: Freeze; 2: Unfreeze.</p>
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("SecretStatus",$param) and $param["SecretStatus"] !== null) {
            $this->SecretStatus = $param["SecretStatus"];
        }
    }
}
