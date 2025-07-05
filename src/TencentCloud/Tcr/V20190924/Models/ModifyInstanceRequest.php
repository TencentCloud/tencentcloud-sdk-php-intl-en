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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getRegistryType() Obtain Instance edition
Basic: `basic`
Standard: `standard`
Premium: `premium`
 * @method void setRegistryType(string $RegistryType) Set Instance edition
Basic: `basic`
Standard: `standard`
Premium: `premium`
 * @method boolean getDeletionProtection() Obtain Whether to enable deletion protection. It defaults to `false`. 
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether to enable deletion protection. It defaults to `false`. 
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Instance edition
Basic: `basic`
Standard: `standard`
Premium: `premium`
     */
    public $RegistryType;

    /**
     * @var boolean Whether to enable deletion protection. It defaults to `false`. 
     */
    public $DeletionProtection;

    /**
     * @param string $RegistryId Instance ID
     * @param string $RegistryType Instance edition
Basic: `basic`
Standard: `standard`
Premium: `premium`
     * @param boolean $DeletionProtection Whether to enable deletion protection. It defaults to `false`. 
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
