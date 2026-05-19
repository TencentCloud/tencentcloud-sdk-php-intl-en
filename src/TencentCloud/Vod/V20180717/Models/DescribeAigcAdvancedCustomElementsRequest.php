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
 * DescribeAigcAdvancedCustomElements request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method integer getOffset() Obtain <p>Starting offset amount for pagination return. Returns entries from Offset to Offset+Limit-1.</p><p>Default value: 0</p><p>Offset must be a multiple of Limit.</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount for pagination return. Returns entries from Offset to Offset+Limit-1.</p><p>Default value: 0</p><p>Offset must be a multiple of Limit.</p>
 * @method integer getLimit() Obtain <p>Number of records returned in pages.</p><p>Value ranges from 1 to 300.</p><p>Default value: 10.</p><p>Offset must be a multiple of Limit.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of records returned in pages.</p><p>Value ranges from 1 to 300.</p><p>Default value: 10.</p><p>Offset must be a multiple of Limit.</p>
 */
class DescribeAigcAdvancedCustomElementsRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var integer <p>Starting offset amount for pagination return. Returns entries from Offset to Offset+Limit-1.</p><p>Default value: 0</p><p>Offset must be a multiple of Limit.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of records returned in pages.</p><p>Value ranges from 1 to 300.</p><p>Default value: 10.</p><p>Offset must be a multiple of Limit.</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param integer $Offset <p>Starting offset amount for pagination return. Returns entries from Offset to Offset+Limit-1.</p><p>Default value: 0</p><p>Offset must be a multiple of Limit.</p>
     * @param integer $Limit <p>Number of records returned in pages.</p><p>Value ranges from 1 to 300.</p><p>Default value: 10.</p><p>Offset must be a multiple of Limit.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
