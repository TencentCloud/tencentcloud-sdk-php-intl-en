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
 * ModifyVodDomainAccelerateConfig request structure.
 *
 * @method string getDomain() Obtain <p>Domains requiring acceleration configuration.</p>
 * @method void setDomain(string $Domain) Set <p>Domains requiring acceleration configuration.</p>
 * @method string getArea() Obtain <p>Region. Available values:</p><li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li><li>Outside Chinese Mainland: outside the Chinese mainland.</li><li>Global: around the world.</li>
 * @method void setArea(string $Area) Set <p>Region. Available values:</p><li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li><li>Outside Chinese Mainland: outside the Chinese mainland.</li><li>Global: around the world.</li>
 * @method string getStatus() Obtain <p>Enable or disable domain name acceleration for the selected region. Available values:</p><li>Enabled: Enable.</li><li>Disabled: Disable.</li>
 * @method void setStatus(string $Status) Set <p>Enable or disable domain name acceleration for the selected region. Available values:</p><li>Enabled: Enable.</li><li>Disabled: Disable.</li>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 */
class ModifyVodDomainAccelerateConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Domains requiring acceleration configuration.</p>
     */
    public $Domain;

    /**
     * @var string <p>Region. Available values:</p><li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li><li>Outside Chinese Mainland: outside the Chinese mainland.</li><li>Global: around the world.</li>
     */
    public $Area;

    /**
     * @var string <p>Enable or disable domain name acceleration for the selected region. Available values:</p><li>Enabled: Enable.</li><li>Disabled: Disable.</li>
     */
    public $Status;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @param string $Domain <p>Domains requiring acceleration configuration.</p>
     * @param string $Area <p>Region. Available values:</p><li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li><li>Outside Chinese Mainland: outside the Chinese mainland.</li><li>Global: around the world.</li>
     * @param string $Status <p>Enable or disable domain name acceleration for the selected region. Available values:</p><li>Enabled: Enable.</li><li>Disabled: Disable.</li>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
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
