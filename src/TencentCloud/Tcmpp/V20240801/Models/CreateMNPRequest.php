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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMNP request structure.
 *
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPIcon() Obtain Mini app icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini app icon
 * @method string getMNPIntro() Obtain Mini program introduction
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
 * @method string getMNPDesc() Obtain Mini program description
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 */
class CreateMNPRequest extends AbstractModel
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
     * @var string Mini app icon
     */
    public $MNPIcon;

    /**
     * @var string Mini program introduction
     */
    public $MNPIntro;

    /**
     * @var string Mini program description
     */
    public $MNPDesc;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @param string $MNPType Mini program type
     * @param string $MNPName Mini program name
     * @param string $MNPIcon Mini app icon
     * @param string $MNPIntro Mini program introduction
     * @param string $MNPDesc Mini program description
     * @param string $PlatformId Platform ID
     * @param string $TeamId Team ID
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

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
