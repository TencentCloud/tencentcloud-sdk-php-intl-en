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
 * CreateMNPVersion request structure.
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPVersion() Obtain Version number
 * @method void setMNPVersion(string $MNPVersion) Set Version number
 * @method string getFileUrl() Obtain Address of the mini program package. You can export the package from IDE and upload it to a file server. 
 * @method void setFileUrl(string $FileUrl) Set Address of the mini program package. You can export the package from IDE and upload it to a file server. 
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getMNPVersionIntro() Obtain Version introduction
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Version introduction
 */
class CreateMNPVersionRequest extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Version number
     */
    public $MNPVersion;

    /**
     * @var string Address of the mini program package. You can export the package from IDE and upload it to a file server. 
     */
    public $FileUrl;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Version introduction
     */
    public $MNPVersionIntro;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPVersion Version number
     * @param string $FileUrl Address of the mini program package. You can export the package from IDE and upload it to a file server. 
     * @param string $PlatformId Platform ID
     * @param string $MNPVersionIntro Version introduction
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

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("MNPVersionIntro",$param) and $param["MNPVersionIntro"] !== null) {
            $this->MNPVersionIntro = $param["MNPVersionIntro"];
        }
    }
}
