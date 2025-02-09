<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifyMNP request structure.
 *
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPIntro() Obtain Mini program introduction
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
 * @method string getMNPDesc() Obtain Mini program description
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getMNPIcon() Obtain Mini program icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
 */
class ModifyMNPRequest extends AbstractModel
{
    /**
     * @var string Mini program type
     */
    public $MNPType;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Mini program introduction
     */
    public $MNPIntro;

    /**
     * @var string Mini program description
     */
    public $MNPDesc;

    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Mini program icon
     */
    public $MNPIcon;

    /**
     * @param string $MNPType Mini program type
     * @param string $MNPName Mini program name
     * @param string $MNPIntro Mini program introduction
     * @param string $MNPDesc Mini program description
     * @param string $MNPId Mini program ID
     * @param string $PlatformId Platform ID
     * @param string $MNPIcon Mini program icon
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
