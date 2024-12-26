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
 * VerifyDomainRecord request structure.
 *
 * @method string getDomain() Obtain Need to access the VOD acceleration domain name.
 * @method void setDomain(string $Domain) Set Need to access the VOD acceleration domain name.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2024, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2024, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getVerifyType() Obtain VerifyType:
<li>dns: DNS Parse verification; </li>
<li>fIle: Document verification.</li>

Default value: dns.
 * @method void setVerifyType(string $VerifyType) Set VerifyType:
<li>dns: DNS Parse verification; </li>
<li>fIle: Document verification.</li>

Default value: dns.
 */
class VerifyDomainRecordRequest extends AbstractModel
{
    /**
     * @var string Need to access the VOD acceleration domain name.
     */
    public $Domain;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2024, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string VerifyType:
<li>dns: DNS Parse verification; </li>
<li>fIle: Document verification.</li>

Default value: dns.
     */
    public $VerifyType;

    /**
     * @param string $Domain Need to access the VOD acceleration domain name.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2024, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $VerifyType VerifyType:
<li>dns: DNS Parse verification; </li>
<li>fIle: Document verification.</li>

Default value: dns.
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

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
