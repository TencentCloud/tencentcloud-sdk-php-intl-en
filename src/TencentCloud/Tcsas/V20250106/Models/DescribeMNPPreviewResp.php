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
 * Response of querying the preview
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPDesc() Obtain Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersion() Obtain Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersionIntro() Obtain Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQRCodeUrl() Obtain Mini program QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQRCodeUrl(string $QRCodeUrl) Set Mini program QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPreviewEntrancePath() Obtain Path to the preview
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPreviewEntrancePath(string $PreviewEntrancePath) Set Path to the preview
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQRCodeContent() Obtain QR code content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQRCodeContent(string $QRCodeContent) Set QR code content
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPPreviewResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPName;

    /**
     * @var string Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPDesc;

    /**
     * @var string Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersion;

    /**
     * @var string Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionIntro;

    /**
     * @var string Mini program QR code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QRCodeUrl;

    /**
     * @var string Path to the preview
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PreviewEntrancePath;

    /**
     * @var string QR code content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QRCodeContent;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPDesc Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersion Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersionIntro Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QRCodeUrl Mini program QR code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PreviewEntrancePath Path to the preview
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QRCodeContent QR code content
Note: This field may return null, indicating that no valid values can be obtained.
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
