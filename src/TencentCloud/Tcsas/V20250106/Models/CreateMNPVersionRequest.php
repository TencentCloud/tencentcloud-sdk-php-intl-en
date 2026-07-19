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
 * CreateMNPVersion request structure.
 *
 * @method string getMNPId() Obtain <p>Mini-program appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini-program appid.</p>
 * @method string getMNPVersion() Obtain <p>Version number.</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Version number.</p>
 * @method string getFileUrl() Obtain <p>URL of the mini program file exported from the IDE and uploaded to the file server.<p>
 * @method void setFileUrl(string $FileUrl) Set <p>URL of the mini program file exported from the IDE and uploaded to the file server.<p>
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getMNPVersionIntro() Obtain <p>Version description.</p>
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set <p>Version description.</p>
 * @method integer getVersionType() Obtain <p>Version type. Valid values: 1: Debug version; 2: Development version. Default value: 2.</p>
 * @method void setVersionType(integer $VersionType) Set <p>Version type. Valid values: 1: Debug version; 2: Development version. Default value: 2.</p>
 * @method string getCompileCondition() Obtain <p>Compilation conditions.</p>
 * @method void setCompileCondition(string $CompileCondition) Set <p>Compilation conditions.</p>
 * @method string getCompileConfig() Obtain <p>Compilation configuration.</p>
 * @method void setCompileConfig(string $CompileConfig) Set <p>Compilation configuration.</p>
 * @method string getPipelineId() Obtain <p>CICD ID</p>
 * @method void setPipelineId(string $PipelineId) Set <p>CICD ID</p>
 * @method string getFileInnerUrl() Obtain <p>Internal file URL.</p>
 * @method void setFileInnerUrl(string $FileInnerUrl) Set <p>Internal file URL.</p>
 */
class CreateMNPVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Mini-program appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Version number.</p>
     */
    public $MNPVersion;

    /**
     * @var string <p>URL of the mini program file exported from the IDE and uploaded to the file server.<p>
     */
    public $FileUrl;

    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Version description.</p>
     */
    public $MNPVersionIntro;

    /**
     * @var integer <p>Version type. Valid values: 1: Debug version; 2: Development version. Default value: 2.</p>
     */
    public $VersionType;

    /**
     * @var string <p>Compilation conditions.</p>
     */
    public $CompileCondition;

    /**
     * @var string <p>Compilation configuration.</p>
     */
    public $CompileConfig;

    /**
     * @var string <p>CICD ID</p>
     */
    public $PipelineId;

    /**
     * @var string <p>Internal file URL.</p>
     */
    public $FileInnerUrl;

    /**
     * @param string $MNPId <p>Mini-program appid.</p>
     * @param string $MNPVersion <p>Version number.</p>
     * @param string $FileUrl <p>URL of the mini program file exported from the IDE and uploaded to the file server.<p>
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $MNPVersionIntro <p>Version description.</p>
     * @param integer $VersionType <p>Version type. Valid values: 1: Debug version; 2: Development version. Default value: 2.</p>
     * @param string $CompileCondition <p>Compilation conditions.</p>
     * @param string $CompileConfig <p>Compilation configuration.</p>
     * @param string $PipelineId <p>CICD ID</p>
     * @param string $FileInnerUrl <p>Internal file URL.</p>
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

        if (array_key_exists("VersionType",$param) and $param["VersionType"] !== null) {
            $this->VersionType = $param["VersionType"];
        }

        if (array_key_exists("CompileCondition",$param) and $param["CompileCondition"] !== null) {
            $this->CompileCondition = $param["CompileCondition"];
        }

        if (array_key_exists("CompileConfig",$param) and $param["CompileConfig"] !== null) {
            $this->CompileConfig = $param["CompileConfig"];
        }

        if (array_key_exists("PipelineId",$param) and $param["PipelineId"] !== null) {
            $this->PipelineId = $param["PipelineId"];
        }

        if (array_key_exists("FileInnerUrl",$param) and $param["FileInnerUrl"] !== null) {
            $this->FileInnerUrl = $param["FileInnerUrl"];
        }
    }
}
