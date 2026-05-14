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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPackageRenewFlag request structure.
 *
 * @method string getResourceId() Obtain Unique resource ID of the data transfer plan
 * @method void setResourceId(string $ResourceId) Set Unique resource ID of the data transfer plan
 * @method boolean getRenewFlag() Obtain Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
 * @method void setRenewFlag(boolean $RenewFlag) Set Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
 */
class ModifyPackageRenewFlagRequest extends AbstractModel
{
    /**
     * @var string Unique resource ID of the data transfer plan
     */
    public $ResourceId;

    /**
     * @var boolean Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
     */
    public $RenewFlag;

    /**
     * @param string $ResourceId Unique resource ID of the data transfer plan
     * @param boolean $RenewFlag Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
