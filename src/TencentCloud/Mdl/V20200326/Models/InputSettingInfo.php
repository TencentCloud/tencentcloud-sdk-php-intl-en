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
 * The input settings.
The format of an RTMP_PUSH address is ${InputAddress}/${AppName}/${StreamName}.
The format of an SRT_PUSH address is ${InputAddress}?streamid=${StreamName},h=${InputDomain}.
 *
 * @method string getAppName() Obtain Application name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAppName(string $AppName) Set Application name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStreamName() Obtain Stream name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStreamName(string $StreamName) Set Stream name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSourceUrl() Obtain Source URL, which is valid if `Type` is `RTMP_PULL`, `HLS_PULL`, or `MP4_PULL` and can contain 1-512 characters
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSourceUrl(string $SourceUrl) Set Source URL, which is valid if `Type` is `RTMP_PULL`, `HLS_PULL`, or `MP4_PULL` and can contain 1-512 characters
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInputAddress() Obtain RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInputAddress(string $InputAddress) Set RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSourceType() Obtain Source type for stream pulling and relaying. To pull content from private-read COS buckets under the current account, set this parameter to `TencentCOS`; otherwise, leave it empty.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setSourceType(string $SourceType) Set Source type for stream pulling and relaying. To pull content from private-read COS buckets under the current account, set this parameter to `TencentCOS`; otherwise, leave it empty.
Note: this field may return `null`, indicating that no valid value was found.
 * @method integer getDelayTime() Obtain Delayed time (ms) for playback, which is valid if `Type` is `RTMP_PUSH`
Value range: 0 (default) or 10000-600000
The value must be a multiple of 1,000.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDelayTime(integer $DelayTime) Set Delayed time (ms) for playback, which is valid if `Type` is `RTMP_PUSH`
Value range: 0 (default) or 10000-600000
The value must be a multiple of 1,000.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInputDomain() Obtain The domain name of the SRT_PUSH push address. No need to fill in the input parameter.
 * @method void setInputDomain(string $InputDomain) Set The domain name of the SRT_PUSH push address. No need to fill in the input parameter.
 * @method string getUserName() Obtain The username, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUserName(string $UserName) Set The username, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPassword() Obtain The password, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPassword(string $Password) Set The password, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getContentType() Obtain This parameter is valid when the input source is HLS_PULL and MP4_PULL. It indicates the type of file the source is. The optional values are: LIVE, VOD. Please note that if you do not enter this parameter, the system will take the default input value VOD.
 * @method void setContentType(string $ContentType) Set This parameter is valid when the input source is HLS_PULL and MP4_PULL. It indicates the type of file the source is. The optional values are: LIVE, VOD. Please note that if you do not enter this parameter, the system will take the default input value VOD.
 */
class InputSettingInfo extends AbstractModel
{
    /**
     * @var string Application name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AppName;

    /**
     * @var string Stream name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StreamName;

    /**
     * @var string Source URL, which is valid if `Type` is `RTMP_PULL`, `HLS_PULL`, or `MP4_PULL` and can contain 1-512 characters
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SourceUrl;

    /**
     * @var string RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InputAddress;

    /**
     * @var string Source type for stream pulling and relaying. To pull content from private-read COS buckets under the current account, set this parameter to `TencentCOS`; otherwise, leave it empty.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $SourceType;

    /**
     * @var integer Delayed time (ms) for playback, which is valid if `Type` is `RTMP_PUSH`
Value range: 0 (default) or 10000-600000
The value must be a multiple of 1,000.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DelayTime;

    /**
     * @var string The domain name of the SRT_PUSH push address. No need to fill in the input parameter.
     */
    public $InputDomain;

    /**
     * @var string The username, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UserName;

    /**
     * @var string The password, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Password;

    /**
     * @var string This parameter is valid when the input source is HLS_PULL and MP4_PULL. It indicates the type of file the source is. The optional values are: LIVE, VOD. Please note that if you do not enter this parameter, the system will take the default input value VOD.
     */
    public $ContentType;

    /**
     * @param string $AppName Application name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StreamName Stream name, which is valid if `Type` is `RTMP_PUSH` and can contain 1-32 letters and digits
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SourceUrl Source URL, which is valid if `Type` is `RTMP_PULL`, `HLS_PULL`, or `MP4_PULL` and can contain 1-512 characters
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InputAddress RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SourceType Source type for stream pulling and relaying. To pull content from private-read COS buckets under the current account, set this parameter to `TencentCOS`; otherwise, leave it empty.
Note: this field may return `null`, indicating that no valid value was found.
     * @param integer $DelayTime Delayed time (ms) for playback, which is valid if `Type` is `RTMP_PUSH`
Value range: 0 (default) or 10000-600000
The value must be a multiple of 1,000.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InputDomain The domain name of the SRT_PUSH push address. No need to fill in the input parameter.
     * @param string $UserName The username, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Password The password, which is used for authentication.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ContentType This parameter is valid when the input source is HLS_PULL and MP4_PULL. It indicates the type of file the source is. The optional values are: LIVE, VOD. Please note that if you do not enter this parameter, the system will take the default input value VOD.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("InputAddress",$param) and $param["InputAddress"] !== null) {
            $this->InputAddress = $param["InputAddress"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("InputDomain",$param) and $param["InputDomain"] !== null) {
            $this->InputDomain = $param["InputDomain"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
