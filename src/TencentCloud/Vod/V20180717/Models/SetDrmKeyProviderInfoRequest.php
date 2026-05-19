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
 * SetDrmKeyProviderInfo request structure.
 *
 * @method SDMCDrmKeyProviderInfo getSDMCInfo() Obtain <p>DRM key provider information related to SDMC.</p><p>The SDMC service will be gradually phased out subsequently. Please use the VOD DRM encryption service.</p>
 * @method void setSDMCInfo(SDMCDrmKeyProviderInfo $SDMCInfo) Set <p>DRM key provider information related to SDMC.</p><p>The SDMC service will be gradually phased out subsequently. Please use the VOD DRM encryption service.</p>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 */
class SetDrmKeyProviderInfoRequest extends AbstractModel
{
    /**
     * @var SDMCDrmKeyProviderInfo <p>DRM key provider information related to SDMC.</p><p>The SDMC service will be gradually phased out subsequently. Please use the VOD DRM encryption service.</p>
     */
    public $SDMCInfo;

    /**
     * @var integer <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @param SDMCDrmKeyProviderInfo $SDMCInfo <p>DRM key provider information related to SDMC.</p><p>The SDMC service will be gradually phased out subsequently. Please use the VOD DRM encryption service.</p>
     * @param integer $SubAppId <p><b>VOD <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
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
        if (array_key_exists("SDMCInfo",$param) and $param["SDMCInfo"] !== null) {
            $this->SDMCInfo = new SDMCDrmKeyProviderInfo();
            $this->SDMCInfo->deserialize($param["SDMCInfo"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
