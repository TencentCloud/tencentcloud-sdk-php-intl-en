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
 * ModifySubAppIdStatus request structure.
 *
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method string getStatus() Obtain App status. Valid values:
<li>On: enabled.</li>
<li>Off: disabled</li>
<li>Destroyed: Terminated.</li>
If the current status is `Destoying`, the enable operation is not allowed. You have to wait until the destruction is completed before you can re-enable it.
 * @method void setStatus(string $Status) Set App status. Valid values:
<li>On: enabled.</li>
<li>Off: disabled</li>
<li>Destroyed: Terminated.</li>
If the current status is `Destoying`, the enable operation is not allowed. You have to wait until the destruction is completed before you can re-enable it.
 */
class ModifySubAppIdStatusRequest extends AbstractModel
{
    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string App status. Valid values:
<li>On: enabled.</li>
<li>Off: disabled</li>
<li>Destroyed: Terminated.</li>
If the current status is `Destoying`, the enable operation is not allowed. You have to wait until the destruction is completed before you can re-enable it.
     */
    public $Status;

    /**
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     * @param string $Status App status. Valid values:
<li>On: enabled.</li>
<li>Off: disabled</li>
<li>Destroyed: Terminated.</li>
If the current status is `Destoying`, the enable operation is not allowed. You have to wait until the destruction is completed before you can re-enable it.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
