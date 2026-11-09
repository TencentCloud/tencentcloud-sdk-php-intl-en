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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAigcApiToken request structure.
 *
 * @method string getApiToken() Obtain <p>To update the Api Key</p>
 * @method void setApiToken(string $ApiToken) Set <p>To update the Api Key</p>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getActionType() Obtain <p>Merge (default, merge ExtInfo JSON by top-level key), Overwrite (direct overwrite)</p>
 * @method void setActionType(string $ActionType) Set <p>Merge (default, merge ExtInfo JSON by top-level key), Overwrite (direct overwrite)</p>
 * @method string getExtInfo() Obtain <p>The ip allowlist and model allowlist are stored in ExtInfo in json format, with the following fields:</p><p>(1) ip allowlist<br>&quot;ip&quot;: {&quot;127.0.0.1&quot;:true}<br>Not enabled: &quot;ip&quot;: {}<br>Multiple groups: {&quot;&#39;11.12.112.90&quot;:true,&quot;15.12.112.90&quot;:true}</p><p>(2) model allowlist<br>&quot;model&quot;: {&quot;deepseek-v4-pro&quot;:true}<br>Not enabled: &quot;model&quot;: {}</p><p>(3) name<br>&quot;name&quot;: &quot;test&quot;</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>The ip allowlist and model allowlist are stored in ExtInfo in json format, with the following fields:</p><p>(1) ip allowlist<br>&quot;ip&quot;: {&quot;127.0.0.1&quot;:true}<br>Not enabled: &quot;ip&quot;: {}<br>Multiple groups: {&quot;&#39;11.12.112.90&quot;:true,&quot;15.12.112.90&quot;:true}</p><p>(2) model allowlist<br>&quot;model&quot;: {&quot;deepseek-v4-pro&quot;:true}<br>Not enabled: &quot;model&quot;: {}</p><p>(3) name<br>&quot;name&quot;: &quot;test&quot;</p>
 */
class UpdateAigcApiTokenRequest extends AbstractModel
{
    /**
     * @var string <p>To update the Api Key</p>
     */
    public $ApiToken;

    /**
     * @var integer <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Merge (default, merge ExtInfo JSON by top-level key), Overwrite (direct overwrite)</p>
     */
    public $ActionType;

    /**
     * @var string <p>The ip allowlist and model allowlist are stored in ExtInfo in json format, with the following fields:</p><p>(1) ip allowlist<br>&quot;ip&quot;: {&quot;127.0.0.1&quot;:true}<br>Not enabled: &quot;ip&quot;: {}<br>Multiple groups: {&quot;&#39;11.12.112.90&quot;:true,&quot;15.12.112.90&quot;:true}</p><p>(2) model allowlist<br>&quot;model&quot;: {&quot;deepseek-v4-pro&quot;:true}<br>Not enabled: &quot;model&quot;: {}</p><p>(3) name<br>&quot;name&quot;: &quot;test&quot;</p>
     */
    public $ExtInfo;

    /**
     * @param string $ApiToken <p>To update the Api Key</p>
     * @param integer $SubAppId <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $ActionType <p>Merge (default, merge ExtInfo JSON by top-level key), Overwrite (direct overwrite)</p>
     * @param string $ExtInfo <p>The ip allowlist and model allowlist are stored in ExtInfo in json format, with the following fields:</p><p>(1) ip allowlist<br>&quot;ip&quot;: {&quot;127.0.0.1&quot;:true}<br>Not enabled: &quot;ip&quot;: {}<br>Multiple groups: {&quot;&#39;11.12.112.90&quot;:true,&quot;15.12.112.90&quot;:true}</p><p>(2) model allowlist<br>&quot;model&quot;: {&quot;deepseek-v4-pro&quot;:true}<br>Not enabled: &quot;model&quot;: {}</p><p>(3) name<br>&quot;name&quot;: &quot;test&quot;</p>
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
        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
