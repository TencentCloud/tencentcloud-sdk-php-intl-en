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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information related to Tencent Cloud Observability Platform (TCOP, formerly Cloud Monitor).
 *
 * @method boolean getEnabled() Obtain Whether to enable [Tencent Cloud Observability Platform (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) (TCOP). Valid values:
<li>TRUE: enable TCOP.</li>
<li>FALSE: disable TCOP.</li>
Default value: TRUE.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable [Tencent Cloud Observability Platform (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) (TCOP). Valid values:
<li>TRUE: enable TCOP.</li>
<li>FALSE: disable TCOP.</li>
Default value: TRUE.
 */
class RunMonitorServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether to enable [Tencent Cloud Observability Platform (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) (TCOP). Valid values:
<li>TRUE: enable TCOP.</li>
<li>FALSE: disable TCOP.</li>
Default value: TRUE.
     */
    public $Enabled;

    /**
     * @param boolean $Enabled Whether to enable [Tencent Cloud Observability Platform (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) (TCOP). Valid values:
<li>TRUE: enable TCOP.</li>
<li>FALSE: disable TCOP.</li>
Default value: TRUE.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
