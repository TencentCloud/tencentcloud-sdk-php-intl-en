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
 * CreateConsoleMNPVersionCompileTask request structure.
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPVersion() Obtain Version
 * @method void setMNPVersion(string $MNPVersion) Set Version
 * @method string getFileUrl() Obtain External URL of the document
 * @method void setFileUrl(string $FileUrl) Set External URL of the document
 * @method string getFileInnerUrl() Obtain Internal URL of the document
 * @method void setFileInnerUrl(string $FileInnerUrl) Set Internal URL of the document
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method integer getTaskType() Obtain Type 2 Version
 * @method void setTaskType(integer $TaskType) Set Type 2 Version
 * @method string getMNPVersionIntro() Obtain Version introduction
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Version introduction
 * @method string getMNPVersionDesc() Obtain Version description
 * @method void setMNPVersionDesc(string $MNPVersionDesc) Set Version description
 * @method integer getSourceType() Obtain Type 1 Unencrypted 2 Encrypted 3 Source
 * @method void setSourceType(integer $SourceType) Set Type 1 Unencrypted 2 Encrypted 3 Source
 * @method integer getReleaseChannel() Obtain Upload platform 1- TCMPP 2 WeChat 3. TCMPP + WeChat
 * @method void setReleaseChannel(integer $ReleaseChannel) Set Upload platform 1- TCMPP 2 WeChat 3. TCMPP + WeChat
 */
class CreateConsoleMNPVersionCompileTaskRequest extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Version
     */
    public $MNPVersion;

    /**
     * @var string External URL of the document
     */
    public $FileUrl;

    /**
     * @var string Internal URL of the document
     */
    public $FileInnerUrl;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var integer Type 2 Version
     */
    public $TaskType;

    /**
     * @var string Version introduction
     */
    public $MNPVersionIntro;

    /**
     * @var string Version description
     */
    public $MNPVersionDesc;

    /**
     * @var integer Type 1 Unencrypted 2 Encrypted 3 Source
     */
    public $SourceType;

    /**
     * @var integer Upload platform 1- TCMPP 2 WeChat 3. TCMPP + WeChat
     */
    public $ReleaseChannel;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPVersion Version
     * @param string $FileUrl External URL of the document
     * @param string $FileInnerUrl Internal URL of the document
     * @param string $PlatformId Platform ID
     * @param integer $TaskType Type 2 Version
     * @param string $MNPVersionIntro Version introduction
     * @param string $MNPVersionDesc Version description
     * @param integer $SourceType Type 1 Unencrypted 2 Encrypted 3 Source
     * @param integer $ReleaseChannel Upload platform 1- TCMPP 2 WeChat 3. TCMPP + WeChat
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

        if (array_key_exists("FileInnerUrl",$param) and $param["FileInnerUrl"] !== null) {
            $this->FileInnerUrl = $param["FileInnerUrl"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MNPVersionIntro",$param) and $param["MNPVersionIntro"] !== null) {
            $this->MNPVersionIntro = $param["MNPVersionIntro"];
        }

        if (array_key_exists("MNPVersionDesc",$param) and $param["MNPVersionDesc"] !== null) {
            $this->MNPVersionDesc = $param["MNPVersionDesc"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ReleaseChannel",$param) and $param["ReleaseChannel"] !== null) {
            $this->ReleaseChannel = $param["ReleaseChannel"];
        }
    }
}
