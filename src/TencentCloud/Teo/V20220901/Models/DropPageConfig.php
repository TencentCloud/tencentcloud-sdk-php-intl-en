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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Overall configuration of the interception page, used to configure the post-interception action for various modules.
 *
 * @method string getSwitch() Obtain Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method DropPageDetail getWafDropPageDetail() Obtain Interception page configuration of the Waf (managed rule) module. If null, the last set configuration is used by default.
 * @method void setWafDropPageDetail(DropPageDetail $WafDropPageDetail) Set Interception page configuration of the Waf (managed rule) module. If null, the last set configuration is used by default.
 * @method DropPageDetail getAclDropPageDetail() Obtain Interception page configuration for custom pages. If it is null, use the last set configuration by default.
 * @method void setAclDropPageDetail(DropPageDetail $AclDropPageDetail) Set Interception page configuration for custom pages. If it is null, use the last set configuration by default.
 */
class DropPageConfig extends AbstractModel
{
    /**
     * @var string Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var DropPageDetail Interception page configuration of the Waf (managed rule) module. If null, the last set configuration is used by default.
     */
    public $WafDropPageDetail;

    /**
     * @var DropPageDetail Interception page configuration for custom pages. If it is null, use the last set configuration by default.
     */
    public $AclDropPageDetail;

    /**
     * @param string $Switch Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param DropPageDetail $WafDropPageDetail Interception page configuration of the Waf (managed rule) module. If null, the last set configuration is used by default.
     * @param DropPageDetail $AclDropPageDetail Interception page configuration for custom pages. If it is null, use the last set configuration by default.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("WafDropPageDetail",$param) and $param["WafDropPageDetail"] !== null) {
            $this->WafDropPageDetail = new DropPageDetail();
            $this->WafDropPageDetail->deserialize($param["WafDropPageDetail"]);
        }

        if (array_key_exists("AclDropPageDetail",$param) and $param["AclDropPageDetail"] !== null) {
            $this->AclDropPageDetail = new DropPageDetail();
            $this->AclDropPageDetail->deserialize($param["AclDropPageDetail"]);
        }
    }
}
