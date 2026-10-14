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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sandbox information content
 *
 * @method string getUrl() Obtain URL address of the sandbox
 * @method void setUrl(string $Url) Set URL address of the sandbox
 * @method string getDisplayUrl() Obtain URL address for opening the sandbox through a browser
 * @method void setDisplayUrl(string $DisplayUrl) Set URL address for opening the sandbox through a browser
 * @method string getContent() Obtain Sandbox output content
 * @method void setContent(string $Content) Set Sandbox output content
 */
class SandboxContent extends AbstractModel
{
    /**
     * @var string URL address of the sandbox
     */
    public $Url;

    /**
     * @var string URL address for opening the sandbox through a browser
     */
    public $DisplayUrl;

    /**
     * @var string Sandbox output content
     */
    public $Content;

    /**
     * @param string $Url URL address of the sandbox
     * @param string $DisplayUrl URL address for opening the sandbox through a browser
     * @param string $Content Sandbox output content
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DisplayUrl",$param) and $param["DisplayUrl"] !== null) {
            $this->DisplayUrl = $param["DisplayUrl"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
