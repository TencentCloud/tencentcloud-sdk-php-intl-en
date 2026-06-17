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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data type of the modified node tag.
 *
 * @method string getListenerId() Obtain <p>CLB listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>CLB listener ID.</p>
 * @method array getTargets() Obtain <p>List of real servers with tags to be modified.</p>
 * @method void setTargets(array $Targets) Set <p>List of real servers with tags to be modified.</p>
 * @method string getLocationId() Obtain <p>Forwarding rule ID, required for layer-7 rules, not required for layer-4 rules.</p>
 * @method void setLocationId(string $LocationId) Set <p>Forwarding rule ID, required for layer-7 rules, not required for layer-4 rules.</p>
 * @method string getTag() Obtain <p>Modified tag of the backend service. This parameter has a lower priority than the Tag parameter in the aforementioned <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target">Target</a>. The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Tag parameter in the Target is empty.</p>
 * @method void setTag(string $Tag) Set <p>Modified tag of the backend service. This parameter has a lower priority than the Tag parameter in the aforementioned <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target">Target</a>. The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Tag parameter in the Target is empty.</p>
 */
class RsTagRule extends AbstractModel
{
    /**
     * @var string <p>CLB listener ID.</p>
     */
    public $ListenerId;

    /**
     * @var array <p>List of real servers with tags to be modified.</p>
     */
    public $Targets;

    /**
     * @var string <p>Forwarding rule ID, required for layer-7 rules, not required for layer-4 rules.</p>
     */
    public $LocationId;

    /**
     * @var string <p>Modified tag of the backend service. This parameter has a lower priority than the Tag parameter in the aforementioned <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target">Target</a>. The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Tag parameter in the Target is empty.</p>
     */
    public $Tag;

    /**
     * @param string $ListenerId <p>CLB listener ID.</p>
     * @param array $Targets <p>List of real servers with tags to be modified.</p>
     * @param string $LocationId <p>Forwarding rule ID, required for layer-7 rules, not required for layer-4 rules.</p>
     * @param string $Tag <p>Modified tag of the backend service. This parameter has a lower priority than the Tag parameter in the aforementioned <a href="https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target">Target</a>. The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Tag parameter in the Target is empty.</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
