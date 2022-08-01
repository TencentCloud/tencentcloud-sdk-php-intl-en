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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specific configuration for domain names inside and outside mainland China by regions.
 *
 * @method MainlandConfig getMainland() Obtain Specific configuration for domain name inside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMainland(MainlandConfig $Mainland) Set Specific configuration for domain name inside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OverseaConfig getOverseas() Obtain Specific configuration for domain name outside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOverseas(OverseaConfig $Overseas) Set Specific configuration for domain name outside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class SpecificConfig extends AbstractModel
{
    /**
     * @var MainlandConfig Specific configuration for domain name inside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mainland;

    /**
     * @var OverseaConfig Specific configuration for domain name outside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Overseas;

    /**
     * @param MainlandConfig $Mainland Specific configuration for domain name inside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OverseaConfig $Overseas Specific configuration for domain name outside mainland China.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Mainland",$param) and $param["Mainland"] !== null) {
            $this->Mainland = new MainlandConfig();
            $this->Mainland->deserialize($param["Mainland"]);
        }

        if (array_key_exists("Overseas",$param) and $param["Overseas"] !== null) {
            $this->Overseas = new OverseaConfig();
            $this->Overseas->deserialize($param["Overseas"]);
        }
    }
}
