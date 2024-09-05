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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data type of the modified node tag.
 *
 * @method string getListenerId() Obtain CLB listener ID.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
 * @method array getTargets() Obtain List of real servers with tags to be modified.
 * @method void setTargets(array $Targets) Set List of real servers with tags to be modified.
 * @method string getLocationId() Obtain Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
 * @method string getTag() Obtain Modified tag of the real server. This parameter has a lower priority than the Tag parameter in the aforementioned [Target](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target). The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Weight parameter in the Target is empty.
 * @method void setTag(string $Tag) Set Modified tag of the real server. This parameter has a lower priority than the Tag parameter in the aforementioned [Target](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target). The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Weight parameter in the Target is empty.
 */
class RsTagRule extends AbstractModel
{
    /**
     * @var string CLB listener ID.
     */
    public $ListenerId;

    /**
     * @var array List of real servers with tags to be modified.
     */
    public $Targets;

    /**
     * @var string Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
     */
    public $LocationId;

    /**
     * @var string Modified tag of the real server. This parameter has a lower priority than the Tag parameter in the aforementioned [Target](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target). The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Weight parameter in the Target is empty.
     */
    public $Tag;

    /**
     * @param string $ListenerId CLB listener ID.
     * @param array $Targets List of real servers with tags to be modified.
     * @param string $LocationId Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
     * @param string $Tag Modified tag of the real server. This parameter has a lower priority than the Tag parameter in the aforementioned [Target](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target). The final tag value is based on the Tag parameter in the Target. The Tag parameter in RsTagRule will be used only when the Weight parameter in the Target is empty.
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
