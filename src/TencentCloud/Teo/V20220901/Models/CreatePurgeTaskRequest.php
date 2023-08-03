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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePurgeTask request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getType() Obtain Purging mode. Valid values: 
<li>`purge_url`: Purge by URL;</li>
<li>`purge_prefix`: Purge by directory;</li>
<li>`purge_host`: Purge by hostname;</li>
<li>`purge_all`: Puege all cache;</li>
<li>`purge_cache_tag`: Purge by cache tag.</li>
 * @method void setType(string $Type) Set Purging mode. Valid values: 
<li>`purge_url`: Purge by URL;</li>
<li>`purge_prefix`: Purge by directory;</li>
<li>`purge_host`: Purge by hostname;</li>
<li>`purge_all`: Puege all cache;</li>
<li>`purge_cache_tag`: Purge by cache tag.</li>
 * @method string getMethod() Obtain 
 * @method void setMethod(string $Method) Set 
 * @method array getTargets() Obtain Resource to be purged, which depends on the `Type` field. 
1. When `Type = purge_host`: 
Enter the hostname, such as www.example.com and foo.bar.example.com. 
2. When `Type = purge_prefix`: 
Enter the prefix, such as http://www.example.com/example/. 
3. When `Type = purge_url`: 
Enter the URL, such as https://www.example.com/example.jpg. 
4. When `Type = purge_all`: 
`Targets` can be left empty. 
5. When `Type = purge_cache_tag`: 
Enter the cache tag, such as tag1. 
Note: The number of submitted tasks is limited by the quota of the plan. For details, see [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
 * @method void setTargets(array $Targets) Set Resource to be purged, which depends on the `Type` field. 
1. When `Type = purge_host`: 
Enter the hostname, such as www.example.com and foo.bar.example.com. 
2. When `Type = purge_prefix`: 
Enter the prefix, such as http://www.example.com/example/. 
3. When `Type = purge_url`: 
Enter the URL, such as https://www.example.com/example.jpg. 
4. When `Type = purge_all`: 
`Targets` can be left empty. 
5. When `Type = purge_cache_tag`: 
Enter the cache tag, such as tag1. 
Note: The number of submitted tasks is limited by the quota of the plan. For details, see [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
 * @method boolean getEncodeUrl() Obtain Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
 * @method void setEncodeUrl(boolean $EncodeUrl) Set Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
 */
class CreatePurgeTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Purging mode. Valid values: 
<li>`purge_url`: Purge by URL;</li>
<li>`purge_prefix`: Purge by directory;</li>
<li>`purge_host`: Purge by hostname;</li>
<li>`purge_all`: Puege all cache;</li>
<li>`purge_cache_tag`: Purge by cache tag.</li>
     */
    public $Type;

    /**
     * @var string 
     */
    public $Method;

    /**
     * @var array Resource to be purged, which depends on the `Type` field. 
1. When `Type = purge_host`: 
Enter the hostname, such as www.example.com and foo.bar.example.com. 
2. When `Type = purge_prefix`: 
Enter the prefix, such as http://www.example.com/example/. 
3. When `Type = purge_url`: 
Enter the URL, such as https://www.example.com/example.jpg. 
4. When `Type = purge_all`: 
`Targets` can be left empty. 
5. When `Type = purge_cache_tag`: 
Enter the cache tag, such as tag1. 
Note: The number of submitted tasks is limited by the quota of the plan. For details, see [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
     */
    public $Targets;

    /**
     * @var boolean Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
     * @deprecated
     */
    public $EncodeUrl;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $Type Purging mode. Valid values: 
<li>`purge_url`: Purge by URL;</li>
<li>`purge_prefix`: Purge by directory;</li>
<li>`purge_host`: Purge by hostname;</li>
<li>`purge_all`: Puege all cache;</li>
<li>`purge_cache_tag`: Purge by cache tag.</li>
     * @param string $Method 
     * @param array $Targets Resource to be purged, which depends on the `Type` field. 
1. When `Type = purge_host`: 
Enter the hostname, such as www.example.com and foo.bar.example.com. 
2. When `Type = purge_prefix`: 
Enter the prefix, such as http://www.example.com/example/. 
3. When `Type = purge_url`: 
Enter the URL, such as https://www.example.com/example.jpg. 
4. When `Type = purge_all`: 
`Targets` can be left empty. 
5. When `Type = purge_cache_tag`: 
Enter the cache tag, such as tag1. 
Note: The number of submitted tasks is limited by the quota of the plan. For details, see [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
     * @param boolean $EncodeUrl Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("EncodeUrl",$param) and $param["EncodeUrl"] !== null) {
            $this->EncodeUrl = $param["EncodeUrl"];
        }
    }
}
