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
 * Response object for querying the preview
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getMNPName() Obtain <p>Mini game name</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name</p>
 * @method string getMNPDesc() Obtain <p>Mini game description</p>
 * @method void setMNPDesc(string $MNPDesc) Set <p>Mini game description</p>
 * @method string getMNPVersion() Obtain <p>Mini game version</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Mini game version</p>
 * @method string getMNPVersionIntro() Obtain <p>Mini game version description</p>
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set <p>Mini game version description</p>
 * @method string getQRCodeUrl() Obtain <p>Mini game version QR code</p>
 * @method void setQRCodeUrl(string $QRCodeUrl) Set <p>Mini game version QR code</p>
 * @method string getPreviewEntrancePath() Obtain <p>Preview path</p>
 * @method void setPreviewEntrancePath(string $PreviewEntrancePath) Set <p>Preview path</p>
 * @method string getQRCodeContent() Obtain <p>Information encoded in the QR code</p>
 * @method void setQRCodeContent(string $QRCodeContent) Set <p>Information encoded in the QR code</p>
 */
class DescribeMNGPreviewResp extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini game name</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini game description</p>
     */
    public $MNPDesc;

    /**
     * @var string <p>Mini game version</p>
     */
    public $MNPVersion;

    /**
     * @var string <p>Mini game version description</p>
     */
    public $MNPVersionIntro;

    /**
     * @var string <p>Mini game version QR code</p>
     */
    public $QRCodeUrl;

    /**
     * @var string <p>Preview path</p>
     */
    public $PreviewEntrancePath;

    /**
     * @var string <p>Information encoded in the QR code</p>
     */
    public $QRCodeContent;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $MNPName <p>Mini game name</p>
     * @param string $MNPDesc <p>Mini game description</p>
     * @param string $MNPVersion <p>Mini game version</p>
     * @param string $MNPVersionIntro <p>Mini game version description</p>
     * @param string $QRCodeUrl <p>Mini game version QR code</p>
     * @param string $PreviewEntrancePath <p>Preview path</p>
     * @param string $QRCodeContent <p>Information encoded in the QR code</p>
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
