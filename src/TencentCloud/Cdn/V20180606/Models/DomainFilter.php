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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter conditions for domain name query.
 *
 * @method string getName() Obtain Filter filter. Values:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Values: `online`, `offline`, and `processing`.
- `serviceType`: Service type. Values: `web`, `download`, `media`, `hybrid` and `dynamic`.
- `projectId`: Project ID.
- `domainType`: Primary origin type. Values: `cname` (customer origin), `COS` (COS origin), `third_party` (third-party object storage origin), and `igtm` (IGTM origin).
- `fullUrlCache`: Whether to enable path cache. Values: `on`, `off`.
- `https`: Whether to configure HTTPS. Values: `on`, `off` and `processing`.
- `originPullProtocol`: Origin-pull protocol type. Value: `http`, `follow`, and `https`.
- `tagKey`: Tag key.
 * @method void setName(string $Name) Set Filter filter. Values:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Values: `online`, `offline`, and `processing`.
- `serviceType`: Service type. Values: `web`, `download`, `media`, `hybrid` and `dynamic`.
- `projectId`: Project ID.
- `domainType`: Primary origin type. Values: `cname` (customer origin), `COS` (COS origin), `third_party` (third-party object storage origin), and `igtm` (IGTM origin).
- `fullUrlCache`: Whether to enable path cache. Values: `on`, `off`.
- `https`: Whether to configure HTTPS. Values: `on`, `off` and `processing`.
- `originPullProtocol`: Origin-pull protocol type. Value: `http`, `follow`, and `https`.
- `tagKey`: Tag key.
 * @method array getValue() Obtain Filter field value.
 * @method void setValue(array $Value) Set Filter field value.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
 */
class DomainFilter extends AbstractModel
{
    /**
     * @var string Filter filter. Values:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Values: `online`, `offline`, and `processing`.
- `serviceType`: Service type. Values: `web`, `download`, `media`, `hybrid` and `dynamic`.
- `projectId`: Project ID.
- `domainType`: Primary origin type. Values: `cname` (customer origin), `COS` (COS origin), `third_party` (third-party object storage origin), and `igtm` (IGTM origin).
- `fullUrlCache`: Whether to enable path cache. Values: `on`, `off`.
- `https`: Whether to configure HTTPS. Values: `on`, `off` and `processing`.
- `originPullProtocol`: Origin-pull protocol type. Value: `http`, `follow`, and `https`.
- `tagKey`: Tag key.
     */
    public $Name;

    /**
     * @var array Filter field value.
     */
    public $Value;

    /**
     * @var boolean Whether to enable fuzzy query. Only `origin` or `domain` is supported for the filter field name.
When fuzzy query is enabled, the maximum Value length is 1. When fuzzy query is disabled, the maximum Value length is 5.
     */
    public $Fuzzy;

    /**
     * @param string $Name Filter filter. Values:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Values: `online`, `offline`, and `processing`.
- `serviceType`: Service type. Values: `web`, `download`, `media`, `hybrid` and `dynamic`.
- `projectId`: Project ID.
- `domainType`: Primary origin type. Values: `cname` (customer origin), `COS` (COS origin), `third_party` (third-party object storage origin), and `igtm` (IGTM origin).
- `fullUrlCache`: Whether to enable path cache. Values: `on`, `off`.
- `https`: Whether to configure HTTPS. Values: `on`, `off` and `processing`.
- `originPullProtocol`: Origin-pull protocol type. Value: `http`, `follow`, and `https`.
- `tagKey`: Tag key.
     * @param array $Value Filter field value.
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
