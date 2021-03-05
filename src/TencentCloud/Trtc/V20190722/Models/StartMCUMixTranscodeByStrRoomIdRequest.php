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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartMCUMixTranscodeByStrRoomId request structure.
 *
 * @method integer getSdkAppId() Obtain `SDKAppId` of TRTC
 * @method void setSdkAppId(integer $SdkAppId) Set `SDKAppId` of TRTC
 * @method string getStrRoomId() Obtain Room ID in string type
 * @method void setStrRoomId(string $StrRoomId) Set Room ID in string type
 * @method OutputParams getOutputParams() Obtain On-Cloud MixTranscoding output parameters
 * @method void setOutputParams(OutputParams $OutputParams) Set On-Cloud MixTranscoding output parameters
 * @method EncodeParams getEncodeParams() Obtain On-Cloud MixTranscoding output encoding parameters
 * @method void setEncodeParams(EncodeParams $EncodeParams) Set On-Cloud MixTranscoding output encoding parameters
 * @method LayoutParams getLayoutParams() Obtain On-Cloud MixTranscoding output layout parameters
 * @method void setLayoutParams(LayoutParams $LayoutParams) Set On-Cloud MixTranscoding output layout parameters
 * @method PublishCdnParams getPublishCdnParams() Obtain Relayed push parameters of a non-Tencent Cloud CDN
 * @method void setPublishCdnParams(PublishCdnParams $PublishCdnParams) Set Relayed push parameters of a non-Tencent Cloud CDN
 */
class StartMCUMixTranscodeByStrRoomIdRequest extends AbstractModel
{
    /**
     * @var integer `SDKAppId` of TRTC
     */
    public $SdkAppId;

    /**
     * @var string Room ID in string type
     */
    public $StrRoomId;

    /**
     * @var OutputParams On-Cloud MixTranscoding output parameters
     */
    public $OutputParams;

    /**
     * @var EncodeParams On-Cloud MixTranscoding output encoding parameters
     */
    public $EncodeParams;

    /**
     * @var LayoutParams On-Cloud MixTranscoding output layout parameters
     */
    public $LayoutParams;

    /**
     * @var PublishCdnParams Relayed push parameters of a non-Tencent Cloud CDN
     */
    public $PublishCdnParams;

    /**
     * @param integer $SdkAppId `SDKAppId` of TRTC
     * @param string $StrRoomId Room ID in string type
     * @param OutputParams $OutputParams On-Cloud MixTranscoding output parameters
     * @param EncodeParams $EncodeParams On-Cloud MixTranscoding output encoding parameters
     * @param LayoutParams $LayoutParams On-Cloud MixTranscoding output layout parameters
     * @param PublishCdnParams $PublishCdnParams Relayed push parameters of a non-Tencent Cloud CDN
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StrRoomId",$param) and $param["StrRoomId"] !== null) {
            $this->StrRoomId = $param["StrRoomId"];
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = new OutputParams();
            $this->OutputParams->deserialize($param["OutputParams"]);
        }

        if (array_key_exists("EncodeParams",$param) and $param["EncodeParams"] !== null) {
            $this->EncodeParams = new EncodeParams();
            $this->EncodeParams->deserialize($param["EncodeParams"]);
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new LayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = new PublishCdnParams();
            $this->PublishCdnParams->deserialize($param["PublishCdnParams"]);
        }
    }
}
