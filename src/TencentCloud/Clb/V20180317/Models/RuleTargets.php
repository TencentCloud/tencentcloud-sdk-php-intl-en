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
 * @method string getLocationId() 获取Forwarding rule ID
 * @method void setLocationId(string $LocationId) 设置Forwarding rule ID
 * @method string getDomain() 获取Domain name of the forwarding rule
 * @method void setDomain(string $Domain) 设置Domain name of the forwarding rule
 * @method string getUrl() 获取Forwarding rule path.
 * @method void setUrl(string $Url) 设置Forwarding rule path.
 * @method array getTargets() 获取Real server information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) 设置Real server information
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Information of the real server bound to a forwarding rule under an HTTP/HTTPS listener
 */
class RuleTargets extends AbstractModel
{
    /**
     * @var string Forwarding rule ID
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule
     */
    public $Domain;

    /**
     * @var string Forwarding rule path.
     */
    public $Url;

    /**
     * @var array Real server information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;
    /**
     * @param string $LocationId Forwarding rule ID
     * @param string $Domain Domain name of the forwarding rule
     * @param string $Url Forwarding rule path.
     * @param array $Targets Real server information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Backend();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
