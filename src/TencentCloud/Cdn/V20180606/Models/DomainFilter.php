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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter conditions for domain name query.
 *
 * @method string getName() Obtain Filter field name. supported list as follows:.
-`Origin`: specifies the primary origin server.
-Domain name. specifies the domain name.
-resourceId: domain id.
-Status: specifies the domain name status. valid values: online, offline, processing, deleted.
-serviceType: specifies the business type. valid values: web, download, media, hybrid, dynamic.
-projectId: specifies the project ID.
-domainType: specifies the primary origin server type. valid values: cname (self-owned origin), cos (cloud object storage integration), third_party (third-party object storage), igtm (igtm multi-active origin).
-fullUrlCache. specifies full path cache. valid values: on, off.
-Specifies whether to configure https. valid values: on, off, processing.
-originPullProtocol: specifies the origin-pull protocol. valid values: http, follow, https.
-tagKey: specifies the Tag key.
 * @method void setName(string $Name) Set Filter field name. supported list as follows:.
-`Origin`: specifies the primary origin server.
-Domain name. specifies the domain name.
-resourceId: domain id.
-Status: specifies the domain name status. valid values: online, offline, processing, deleted.
-serviceType: specifies the business type. valid values: web, download, media, hybrid, dynamic.
-projectId: specifies the project ID.
-domainType: specifies the primary origin server type. valid values: cname (self-owned origin), cos (cloud object storage integration), third_party (third-party object storage), igtm (igtm multi-active origin).
-fullUrlCache. specifies full path cache. valid values: on, off.
-Specifies whether to configure https. valid values: on, off, processing.
-originPullProtocol: specifies the origin-pull protocol. valid values: http, follow, https.
-tagKey: specifies the Tag key.
 * @method array getValue() Obtain Specifies the filter field value. the default maximum is 5. when Name is origin/domain and Fuzzy is true, the maximum is 1.
 * @method void setValue(array $Value) Set Specifies the filter field value. the default maximum is 5. when Name is origin/domain and Fuzzy is true, the maximum is 1.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
 */
class DomainFilter extends AbstractModel
{
    /**
     * @var string Filter field name. supported list as follows:.
-`Origin`: specifies the primary origin server.
-Domain name. specifies the domain name.
-resourceId: domain id.
-Status: specifies the domain name status. valid values: online, offline, processing, deleted.
-serviceType: specifies the business type. valid values: web, download, media, hybrid, dynamic.
-projectId: specifies the project ID.
-domainType: specifies the primary origin server type. valid values: cname (self-owned origin), cos (cloud object storage integration), third_party (third-party object storage), igtm (igtm multi-active origin).
-fullUrlCache. specifies full path cache. valid values: on, off.
-Specifies whether to configure https. valid values: on, off, processing.
-originPullProtocol: specifies the origin-pull protocol. valid values: http, follow, https.
-tagKey: specifies the Tag key.
     */
    public $Name;

    /**
     * @var array Specifies the filter field value. the default maximum is 5. when Name is origin/domain and Fuzzy is true, the maximum is 1.
     */
    public $Value;

    /**
     * @var boolean Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
     */
    public $Fuzzy;

    /**
     * @param string $Name Filter field name. supported list as follows:.
-`Origin`: specifies the primary origin server.
-Domain name. specifies the domain name.
-resourceId: domain id.
-Status: specifies the domain name status. valid values: online, offline, processing, deleted.
-serviceType: specifies the business type. valid values: web, download, media, hybrid, dynamic.
-projectId: specifies the project ID.
-domainType: specifies the primary origin server type. valid values: cname (self-owned origin), cos (cloud object storage integration), third_party (third-party object storage), igtm (igtm multi-active origin).
-fullUrlCache. specifies full path cache. valid values: on, off.
-Specifies whether to configure https. valid values: on, off, processing.
-originPullProtocol: specifies the origin-pull protocol. valid values: http, follow, https.
-tagKey: specifies the Tag key.
     * @param array $Value Specifies the filter field value. the default maximum is 5. when Name is origin/domain and Fuzzy is true, the maximum is 1.
     * @param boolean $Fuzzy Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
