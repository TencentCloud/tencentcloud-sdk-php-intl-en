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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relay destination address.
 *
 * @method string getOutputUrl() Obtain Relay destination address. Length limit: [1,512].
 * @method void setOutputUrl(string $OutputUrl) Set Relay destination address. Length limit: [1,512].
 * @method string getAuthKey() Obtain Authentication key, length limited to [1, 128].
 * @method void setAuthKey(string $AuthKey) Set Authentication key, length limited to [1, 128].
 * @method string getUsername() Obtain Authentication username, length limited to [1, 128].
 * @method void setUsername(string $Username) Set Authentication username, length limited to [1, 128].
 * @method string getPassword() Obtain Authentication password, length limited to [1, 128].
 * @method void setPassword(string $Password) Set Authentication password, length limited to [1, 128].
 * @method string getDestinationType() Obtain The destination type for relay. Available values: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. Default: Standard. AWS_AmazonS3 or COS is supported when FrameCapture group is selected.
 * @method void setDestinationType(string $DestinationType) Set The destination type for relay. Available values: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. Default: Standard. AWS_AmazonS3 or COS is supported when FrameCapture group is selected.
 * @method AmazonS3Settings getAmazonS3Settings() Obtain Forward the Aws S3 address information.
 * @method void setAmazonS3Settings(AmazonS3Settings $AmazonS3Settings) Set Forward the Aws S3 address information.
 * @method CosSettings getCosSettings() Obtain Forward COS address information.
 * @method void setCosSettings(CosSettings $CosSettings) Set Forward COS address information.
 */
class DestinationInfo extends AbstractModel
{
    /**
     * @var string Relay destination address. Length limit: [1,512].
     */
    public $OutputUrl;

    /**
     * @var string Authentication key, length limited to [1, 128].
     */
    public $AuthKey;

    /**
     * @var string Authentication username, length limited to [1, 128].
     */
    public $Username;

    /**
     * @var string Authentication password, length limited to [1, 128].
     */
    public $Password;

    /**
     * @var string The destination type for relay. Available values: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. Default: Standard. AWS_AmazonS3 or COS is supported when FrameCapture group is selected.
     */
    public $DestinationType;

    /**
     * @var AmazonS3Settings Forward the Aws S3 address information.
     */
    public $AmazonS3Settings;

    /**
     * @var CosSettings Forward COS address information.
     */
    public $CosSettings;

    /**
     * @param string $OutputUrl Relay destination address. Length limit: [1,512].
     * @param string $AuthKey Authentication key, length limited to [1, 128].
     * @param string $Username Authentication username, length limited to [1, 128].
     * @param string $Password Authentication password, length limited to [1, 128].
     * @param string $DestinationType The destination type for relay. Available values: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. Default: Standard. AWS_AmazonS3 or COS is supported when FrameCapture group is selected.
     * @param AmazonS3Settings $AmazonS3Settings Forward the Aws S3 address information.
     * @param CosSettings $CosSettings Forward COS address information.
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
        if (array_key_exists("OutputUrl",$param) and $param["OutputUrl"] !== null) {
            $this->OutputUrl = $param["OutputUrl"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DestinationType",$param) and $param["DestinationType"] !== null) {
            $this->DestinationType = $param["DestinationType"];
        }

        if (array_key_exists("AmazonS3Settings",$param) and $param["AmazonS3Settings"] !== null) {
            $this->AmazonS3Settings = new AmazonS3Settings();
            $this->AmazonS3Settings->deserialize($param["AmazonS3Settings"]);
        }

        if (array_key_exists("CosSettings",$param) and $param["CosSettings"] !== null) {
            $this->CosSettings = new CosSettings();
            $this->CosSettings->deserialize($param["CosSettings"]);
        }
    }
}
