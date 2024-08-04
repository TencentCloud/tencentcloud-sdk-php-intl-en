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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relay destination address.
 *
 * @method string getOutputUrl() Obtain Relay destination address. Length limit: [1,512].
 * @method void setOutputUrl(string $OutputUrl) Set Relay destination address. Length limit: [1,512].
 * @method string getAuthKey() Obtain Authentication key. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthKey(string $AuthKey) Set Authentication key. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsername() Obtain Authentication username. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsername(string $Username) Set Authentication username. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Authentication password. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Authentication password. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDestinationType() Obtain The destination type of the retweet. Currently available values are: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. The default is: Standard. When the output group type is FRAME_CAPTURE, valid values are: AWS_AmazonS3, COS.
 * @method void setDestinationType(string $DestinationType) Set The destination type of the retweet. Currently available values are: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. The default is: Standard. When the output group type is FRAME_CAPTURE, valid values are: AWS_AmazonS3, COS.
 * @method AmazonS3Settings getAmazonS3Settings() Obtain Aws S3 destination setting.
 * @method void setAmazonS3Settings(AmazonS3Settings $AmazonS3Settings) Set Aws S3 destination setting.
 * @method CosSettings getCosSettings() Obtain Cos destination setting.
 * @method void setCosSettings(CosSettings $CosSettings) Set Cos destination setting.
 */
class DestinationInfo extends AbstractModel
{
    /**
     * @var string Relay destination address. Length limit: [1,512].
     */
    public $OutputUrl;

    /**
     * @var string Authentication key. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthKey;

    /**
     * @var string Authentication username. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Username;

    /**
     * @var string Authentication password. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var string The destination type of the retweet. Currently available values are: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. The default is: Standard. When the output group type is FRAME_CAPTURE, valid values are: AWS_AmazonS3, COS.
     */
    public $DestinationType;

    /**
     * @var AmazonS3Settings Aws S3 destination setting.
     */
    public $AmazonS3Settings;

    /**
     * @var CosSettings Cos destination setting.
     */
    public $CosSettings;

    /**
     * @param string $OutputUrl Relay destination address. Length limit: [1,512].
     * @param string $AuthKey Authentication key. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Username Authentication username. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Password Authentication password. Length limit: [1,128].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DestinationType The destination type of the retweet. Currently available values are: Standard, AWS_MediaPackageV1, AWS_MediaPackageV2. The default is: Standard. When the output group type is FRAME_CAPTURE, valid values are: AWS_AmazonS3, COS.
     * @param AmazonS3Settings $AmazonS3Settings Aws S3 destination setting.
     * @param CosSettings $CosSettings Cos destination setting.
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
