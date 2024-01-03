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
 * DescribeVodDomains request structure.
 *
 * @method array getDomains() Obtain Domain name list. When this field is left blank, all domain name information will be listed by default. The limitations of this field are as follows:
<li>The maximum number of domain names is 20. </li>
 * @method void setDomains(array $Domains) Set Domain name list. When this field is left blank, all domain name information will be listed by default. The limitations of this field are as follows:
<li>The maximum number of domain names is 20. </li>
 * @method integer getLimit() Obtain Maximum results to return for pulling paginated queries. Default value: 20
 * @method void setLimit(integer $Limit) Set Maximum results to return for pulling paginated queries. Default value: 20
 * @method integer getOffset() Obtain Page number offset from the beginning of paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number offset from the beginning of paginated queries. Default value: 0
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 */
class DescribeVodDomainsRequest extends AbstractModel
{
    /**
     * @var array Domain name list. When this field is left blank, all domain name information will be listed by default. The limitations of this field are as follows:
<li>The maximum number of domain names is 20. </li>
     */
    public $Domains;

    /**
     * @var integer Maximum results to return for pulling paginated queries. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number offset from the beginning of paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @param array $Domains Domain name list. When this field is left blank, all domain name information will be listed by default. The limitations of this field are as follows:
<li>The maximum number of domain names is 20. </li>
     * @param integer $Limit Maximum results to return for pulling paginated queries. Default value: 20
     * @param integer $Offset Page number offset from the beginning of paginated queries. Default value: 0
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
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
