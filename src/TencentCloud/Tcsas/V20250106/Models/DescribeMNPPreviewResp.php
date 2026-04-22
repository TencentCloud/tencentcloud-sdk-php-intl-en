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
 * Response of querying the preview
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPDesc() Obtain Mini program description
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
 * @method string getMNPVersion() Obtain Mini program version.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version.
 * @method string getMNPVersionIntro() Obtain Describes the mini program version.
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Describes the mini program version.
 * @method string getQRCodeUrl() Obtain Specifies the mini program qr code.
 * @method void setQRCodeUrl(string $QRCodeUrl) Set Specifies the mini program qr code.
 * @method string getPreviewEntrancePath() Obtain Specifies the path to the preview version.
 * @method void setPreviewEntrancePath(string $PreviewEntrancePath) Set Specifies the path to the preview version.
 * @method string getQRCodeContent() Obtain Specifies the qr code content.
 * @method void setQRCodeContent(string $QRCodeContent) Set Specifies the qr code content.
 */
class DescribeMNPPreviewResp extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Mini program description
     */
    public $MNPDesc;

    /**
     * @var string Mini program version.
     */
    public $MNPVersion;

    /**
     * @var string Describes the mini program version.
     */
    public $MNPVersionIntro;

    /**
     * @var string Specifies the mini program qr code.
     */
    public $QRCodeUrl;

    /**
     * @var string Specifies the path to the preview version.
     */
    public $PreviewEntrancePath;

    /**
     * @var string Specifies the qr code content.
     */
    public $QRCodeContent;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPName Mini program name
     * @param string $MNPDesc Mini program description
     * @param string $MNPVersion Mini program version.
     * @param string $MNPVersionIntro Describes the mini program version.
     * @param string $QRCodeUrl Specifies the mini program qr code.
     * @param string $PreviewEntrancePath Specifies the path to the preview version.
     * @param string $QRCodeContent Specifies the qr code content.
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

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("MNPVersionIntro",$param) and $param["MNPVersionIntro"] !== null) {
            $this->MNPVersionIntro = $param["MNPVersionIntro"];
        }

        if (array_key_exists("QRCodeUrl",$param) and $param["QRCodeUrl"] !== null) {
            $this->QRCodeUrl = $param["QRCodeUrl"];
        }

        if (array_key_exists("PreviewEntrancePath",$param) and $param["PreviewEntrancePath"] !== null) {
            $this->PreviewEntrancePath = $param["PreviewEntrancePath"];
        }

        if (array_key_exists("QRCodeContent",$param) and $param["QRCodeContent"] !== null) {
            $this->QRCodeContent = $param["QRCodeContent"];
        }
    }
}
