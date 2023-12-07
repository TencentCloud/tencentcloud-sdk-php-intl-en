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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetTranscodeCallback request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the customer
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the customer
 * @method string getCallback() Obtain Callback address for the document transcoding progress. If an empty string is passed in, the existing callback address will be deleted. The callback address only supports the HTTP or HTTPS protocol, so the callback address must start with `http://` or `https://`.
For more information about the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
 * @method void setCallback(string $Callback) Set Callback address for the document transcoding progress. If an empty string is passed in, the existing callback address will be deleted. The callback address only supports the HTTP or HTTPS protocol, so the callback address must start with `http://` or `https://`.
For more information about the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
 */
class SetTranscodeCallbackRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the customer
     */
    public $SdkAppId;

    /**
     * @var string Callback address for the document transcoding progress. If an empty string is passed in, the existing callback address will be deleted. The callback address only supports the HTTP or HTTPS protocol, so the callback address must start with `http://` or `https://`.
For more information about the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
     */
    public $Callback;

    /**
     * @param integer $SdkAppId SdkAppId of the customer
     * @param string $Callback Callback address for the document transcoding progress. If an empty string is passed in, the existing callback address will be deleted. The callback address only supports the HTTP or HTTPS protocol, so the callback address must start with `http://` or `https://`.
For more information about the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
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

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }
    }
}
