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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information related to Tencent Cloud Observability Platform (TCOP, formerly Cloud Monitor).
 *
 * @method boolean getEnabled() Obtain Whether [TCOP (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) is enabled. Valid values:
<li>TRUE: enabled</li>
<li>FALSE: disabled</li>
Default value: TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether [TCOP (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) is enabled. Valid values:
<li>TRUE: enabled</li>
<li>FALSE: disabled</li>
Default value: TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RunMonitorServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether [TCOP (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) is enabled. Valid values:
<li>TRUE: enabled</li>
<li>FALSE: disabled</li>
Default value: TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @param boolean $Enabled Whether [TCOP (formerly Cloud Monitor)](https://intl.cloud.tencent.com/document/product/248?from_cn_redirect=1) is enabled. Valid values:
<li>TRUE: enabled</li>
<li>FALSE: disabled</li>
Default value: TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
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
