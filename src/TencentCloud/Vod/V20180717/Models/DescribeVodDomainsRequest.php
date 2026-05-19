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
 * DescribeVodDomains request structure.
 *
 * @method array getDomains() Obtain Domain name list. When this field is left empty, list all domain information by default. The limits are as follows:
<li>The maximum number of domains is 20.</li>
 * @method void setDomains(array $Domains) Set Domain name list. When this field is left empty, list all domain information by default. The limits are as follows:
<li>The maximum number of domains is 20.</li>
 * @method integer getLimit() Obtain Maximum number of results returned for pagination pull. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of results returned for pagination pull. Default value: 20.
 * @method integer getOffset() Obtain Starting offset for pagination pull. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset for pagination pull. Default value: 0.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 */
class DescribeVodDomainsRequest extends AbstractModel
{
    /**
     * @var array Domain name list. When this field is left empty, list all domain information by default. The limits are as follows:
<li>The maximum number of domains is 20.</li>
     */
    public $Domains;

    /**
     * @var integer Maximum number of results returned for pagination pull. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Starting offset for pagination pull. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @param array $Domains Domain name list. When this field is left empty, list all domain information by default. The limits are as follows:
<li>The maximum number of domains is 20.</li>
     * @param integer $Limit Maximum number of results returned for pagination pull. Default value: 20.
     * @param integer $Offset Starting offset for pagination pull. Default value: 0.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
