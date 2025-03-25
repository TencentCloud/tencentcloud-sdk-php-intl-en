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

namespace TencentCloud\Tms\V20201229;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tms\V20201229\Models as Models;

/**
 * @method Models\TextModerationResponse TextModeration(Models\TextModerationRequest $req) This API is used to submit text content for intelligent moderation. 

### Notes
- Before invoking this API, be sure you have activated Tencent Cloud Text Moderation System in the [Content Moderation - Text Moderation System](https://console.cloud.tencent.com/cms/text/package) console.
- This is a paid API. For the billing details, see [Text Moderation System Pricing](https://intl.cloud.tencent.com/product/tms/pricing?from_cn_redirect=1).

 
 
 
 
 
 

### Use limits
- The submitted texts can not be longer than 10,000 unicode characters.
- English letters, digits and Chinese characters are supported for moderation.
- The API request frequency limit: **1,000 times/second**.
 */

class TmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tms.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tms";

    /**
     * @var string
     */
    protected $version = "2020-12-29";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tms")."\\"."V20201229\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
