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
 * ModifyVodDomainAccelerateConfig request structure.
 *
 * @method string getDomain() Obtain Domain name for acceleration setting
 * @method void setDomain(string $Domain) Set Domain name for acceleration setting
 * @method string getArea() Obtain Region. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
 * @method void setArea(string $Area) Set Region. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
 * @method string getStatus() Obtain Whether to enable or disable domain name acceleration for the selected region. Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
 * @method void setStatus(string $Status) Set Whether to enable or disable domain name acceleration for the selected region. Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 */
class ModifyVodDomainAccelerateConfigRequest extends AbstractModel
{
    /**
     * @var string Domain name for acceleration setting
     */
    public $Domain;

    /**
     * @var string Region. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
     */
    public $Area;

    /**
     * @var string Whether to enable or disable domain name acceleration for the selected region. Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
     */
    public $Status;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @param string $Domain Domain name for acceleration setting
     * @param string $Area Region. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
     * @param string $Status Whether to enable or disable domain name acceleration for the selected region. Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
