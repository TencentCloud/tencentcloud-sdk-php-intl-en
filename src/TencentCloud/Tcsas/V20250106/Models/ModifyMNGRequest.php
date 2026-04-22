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
 * ModifyMNG request structure.
 *
 * @method string getMNPType() Obtain <p>Mini game type</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini game type</p>
 * @method string getMNPName() Obtain <p>Mini game name</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name</p>
 * @method string getMNPIntro() Obtain <p>Mini game introduction</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini game introduction</p>
 * @method string getMNPDesc() Obtain <p>Mini game description</p>
 * @method void setMNPDesc(string $MNPDesc) Set <p>Mini game description</p>
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getPlatformId() Obtain <p>Platform ID</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID</p>
 * @method string getMNPIcon() Obtain <p>Mini game icon</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini game icon</p>
 */
class ModifyMNGRequest extends AbstractModel
{
    /**
     * @var string <p>Mini game type</p>
     */
    public $MNPType;

    /**
     * @var string <p>Mini game name</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini game introduction</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Mini game description</p>
     */
    public $MNPDesc;

    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Platform ID</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Mini game icon</p>
     */
    public $MNPIcon;

    /**
     * @param string $MNPType <p>Mini game type</p>
     * @param string $MNPName <p>Mini game name</p>
     * @param string $MNPIntro <p>Mini game introduction</p>
     * @param string $MNPDesc <p>Mini game description</p>
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $PlatformId <p>Platform ID</p>
     * @param string $MNPIcon <p>Mini game icon</p>
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
        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }
    }
}
