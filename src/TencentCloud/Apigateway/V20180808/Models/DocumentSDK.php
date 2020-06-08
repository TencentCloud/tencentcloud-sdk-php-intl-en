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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API documentation download
 *
 * @method string getDocumentURL() Obtain Download link of generated file. Generated documents are stored in COS.
 * @method void setDocumentURL(string $DocumentURL) Set Download link of generated file. Generated documents are stored in COS.
 * @method string getSdkURL() Obtain Download link of generated SDK file. Generated SDKs are stored in COS.
 * @method void setSdkURL(string $SdkURL) Set Download link of generated SDK file. Generated SDKs are stored in COS.
 */
class DocumentSDK extends AbstractModel
{
    /**
     * @var string Download link of generated file. Generated documents are stored in COS.
     */
    public $DocumentURL;

    /**
     * @var string Download link of generated SDK file. Generated SDKs are stored in COS.
     */
    public $SdkURL;

    /**
     * @param string $DocumentURL Download link of generated file. Generated documents are stored in COS.
     * @param string $SdkURL Download link of generated SDK file. Generated SDKs are stored in COS.
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
        if (array_key_exists("DocumentURL",$param) and $param["DocumentURL"] !== null) {
            $this->DocumentURL = $param["DocumentURL"];
        }

        if (array_key_exists("SdkURL",$param) and $param["SdkURL"] !== null) {
            $this->SdkURL = $param["SdkURL"];
        }
    }
}
