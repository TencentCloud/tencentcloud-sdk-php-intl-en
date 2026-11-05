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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document link
 *
 * @method string getCosUrl() Obtain <p>COS link address, which can be used for preview and download</p>
 * @method void setCosUrl(string $CosUrl) Set <p>COS link address, which can be used for preview and download</p>
 * @method DocExternalLink getExternalLink() Obtain <p>External link</p>
 * @method void setExternalLink(DocExternalLink $ExternalLink) Set <p>External link</p>
 */
class DocLink extends AbstractModel
{
    /**
     * @var string <p>COS link address, which can be used for preview and download</p>
     */
    public $CosUrl;

    /**
     * @var DocExternalLink <p>External link</p>
     */
    public $ExternalLink;

    /**
     * @param string $CosUrl <p>COS link address, which can be used for preview and download</p>
     * @param DocExternalLink $ExternalLink <p>External link</p>
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
        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("ExternalLink",$param) and $param["ExternalLink"] !== null) {
            $this->ExternalLink = new DocExternalLink();
            $this->ExternalLink->deserialize($param["ExternalLink"]);
        }
    }
}
