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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output of digital watermark extraction.
 *
 * @method string getUv() Obtain The distributor’s user ID, which is a six-digit hex number. This parameter is relevant when [digital watermarks](https://intl.cloud.tencent.com/document/product/266/75789?from_cn_redirect=1) are used.
 * @method void setUv(string $Uv) Set The distributor’s user ID, which is a six-digit hex number. This parameter is relevant when [digital watermarks](https://intl.cloud.tencent.com/document/product/266/75789?from_cn_redirect=1) are used.
 * @method string getUid() Obtain This parameter has been deprecated.
 * @method void setUid(string $Uid) Set This parameter has been deprecated.
 */
class ExtractTraceWatermarkTaskOutput extends AbstractModel
{
    /**
     * @var string The distributor’s user ID, which is a six-digit hex number. This parameter is relevant when [digital watermarks](https://intl.cloud.tencent.com/document/product/266/75789?from_cn_redirect=1) are used.
     */
    public $Uv;

    /**
     * @var string This parameter has been deprecated.
     */
    public $Uid;

    /**
     * @param string $Uv The distributor’s user ID, which is a six-digit hex number. This parameter is relevant when [digital watermarks](https://intl.cloud.tencent.com/document/product/266/75789?from_cn_redirect=1) are used.
     * @param string $Uid This parameter has been deprecated.
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
        if (array_key_exists("Uv",$param) and $param["Uv"] !== null) {
            $this->Uv = $param["Uv"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
