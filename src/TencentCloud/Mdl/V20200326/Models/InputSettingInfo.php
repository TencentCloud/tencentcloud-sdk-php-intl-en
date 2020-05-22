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
 * Input settings information.
 *
 * @method string getAppName() Obtain Application name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppName(string $AppName) Set Application name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStreamName() Obtain Stream name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStreamName(string $StreamName) Set Stream name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSourceUrl() Obtain Origin-pull URL, which is used for RTMP_PULL/HLS_PULL/MP4_PULL. Length limit: [1,512].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSourceUrl(string $SourceUrl) Set Origin-pull URL, which is used for RTMP_PULL/HLS_PULL/MP4_PULL. Length limit: [1,512].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInputAddress() Obtain RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInputAddress(string $InputAddress) Set RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InputSettingInfo extends AbstractModel
{
    /**
     * @var string Application name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppName;

    /**
     * @var string Stream name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StreamName;

    /**
     * @var string Origin-pull URL, which is used for RTMP_PULL/HLS_PULL/MP4_PULL. Length limit: [1,512].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SourceUrl;

    /**
     * @var string RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InputAddress;

    /**
     * @param string $AppName Application name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StreamName Stream name, which is used for RTMP_PUSH and can contain 1–32 letters and digits.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SourceUrl Origin-pull URL, which is used for RTMP_PULL/HLS_PULL/MP4_PULL. Length limit: [1,512].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InputAddress RTP/UDP input address, which does not need to be entered for the input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
