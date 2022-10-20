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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Block page configuration
 *
 * @method string getSwitch() Obtain Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method DropPageDetail getWafDropPageDetail() Obtain The settings of the block page that applies managed rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWafDropPageDetail(DropPageDetail $WafDropPageDetail) Set The settings of the block page that applies managed rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DropPageDetail getAclDropPageDetail() Obtain The settings of the block page that applies custom rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAclDropPageDetail(DropPageDetail $AclDropPageDetail) Set The settings of the block page that applies custom rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DropPageConfig extends AbstractModel
{
    /**
     * @var string Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var DropPageDetail The settings of the block page that applies managed rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WafDropPageDetail;

    /**
     * @var DropPageDetail The settings of the block page that applies custom rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AclDropPageDetail;

    /**
     * @param string $Switch Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param DropPageDetail $WafDropPageDetail The settings of the block page that applies managed rules. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DropPageDetail $AclDropPageDetail The settings of the block page that applies custom rules. If it is null, the settings that were last configured will be used.
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
