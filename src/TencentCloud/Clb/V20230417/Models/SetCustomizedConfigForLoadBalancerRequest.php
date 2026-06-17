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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetCustomizedConfigForLoadBalancer request structure.
 *
 * @method string getOperationType() Obtain Operation type.
-ADD
- DELETE: delete.
-UPDATE: Modify
-BIND: bind
-UNBIND: unbound
 * @method void setOperationType(string $OperationType) Set Operation type.
-ADD
- DELETE: delete.
-UPDATE: Modify
-BIND: bind
-UNBIND: unbound
 * @method string getConfigId() Obtain This field is required except for creating custom configurations. Example: pz-1234abcd
 * @method void setConfigId(string $ConfigId) Set This field is required except for creating custom configurations. Example: pz-1234abcd
 * @method string getConfigContent() Obtain Personalized configuration content. This field is required when creating custom configuration or modifying the content of custom configuration.
 * @method void setConfigContent(string $ConfigContent) Set Personalized configuration content. This field is required when creating custom configuration or modifying the content of custom configuration.
 * @method string getConfigName() Obtain This field is required when you create or modify the name of a custom configuration.
 * @method void setConfigName(string $ConfigName) Set This field is required when you create or modify the name of a custom configuration.
 * @method array getLoadBalancerIds() Obtain Load balancing instance ID. This field is required for bind/unbind.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Load balancing instance ID. This field is required for bind/unbind.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class SetCustomizedConfigForLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Operation type.
-ADD
- DELETE: delete.
-UPDATE: Modify
-BIND: bind
-UNBIND: unbound
     */
    public $OperationType;

    /**
     * @var string This field is required except for creating custom configurations. Example: pz-1234abcd
     */
    public $ConfigId;

    /**
     * @var string Personalized configuration content. This field is required when creating custom configuration or modifying the content of custom configuration.
     */
    public $ConfigContent;

    /**
     * @var string This field is required when you create or modify the name of a custom configuration.
     */
    public $ConfigName;

    /**
     * @var array Load balancing instance ID. This field is required for bind/unbind.
     */
    public $LoadBalancerIds;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $OperationType Operation type.
-ADD
- DELETE: delete.
-UPDATE: Modify
-BIND: bind
-UNBIND: unbound
     * @param string $ConfigId This field is required except for creating custom configurations. Example: pz-1234abcd
     * @param string $ConfigContent Personalized configuration content. This field is required when creating custom configuration or modifying the content of custom configuration.
     * @param string $ConfigName This field is required when you create or modify the name of a custom configuration.
     * @param array $LoadBalancerIds Load balancing instance ID. This field is required for bind/unbind.
     * @param array $Tags Tag.
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
