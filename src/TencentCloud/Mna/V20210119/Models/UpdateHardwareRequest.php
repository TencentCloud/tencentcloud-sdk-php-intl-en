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
 * UpdateHardware request structure.
 *
 * @method string getHardwareId() Obtain Hardware ID
 * @method void setHardwareId(string $HardwareId) Set Hardware ID
 * @method string getSN() Obtain Hardware Serial Number
 * @method void setSN(string $SN) Set Hardware Serial Number
 * @method string getDescription() Obtain device Remarks
 * @method void setDescription(string $Description) Set device Remarks
 */
class UpdateHardwareRequest extends AbstractModel
{
    /**
     * @var string Hardware ID
     */
    public $HardwareId;

    /**
     * @var string Hardware Serial Number
     */
    public $SN;

    /**
     * @var string device Remarks
     */
    public $Description;

    /**
     * @param string $HardwareId Hardware ID
     * @param string $SN Hardware Serial Number
     * @param string $Description device Remarks
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
        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
