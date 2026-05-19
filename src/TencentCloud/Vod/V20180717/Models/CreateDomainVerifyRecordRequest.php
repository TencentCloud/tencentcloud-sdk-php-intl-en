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
 * CreateDomainVerifyRecord request structure.
 *
 * @method string getDomain() Obtain Need to access the VOD acceleration domain name.
 * @method void setDomain(string $Domain) Set Need to access the VOD acceleration domain name.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2024, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>	
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2024, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>	
 */
class CreateDomainVerifyRecordRequest extends AbstractModel
{
    /**
     * @var string Need to access the VOD acceleration domain name.
     */
    public $Domain;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2024, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>	
     */
    public $SubAppId;

    /**
     * @param string $Domain Need to access the VOD acceleration domain name.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2024, they must fill this field with the app ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>	
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
