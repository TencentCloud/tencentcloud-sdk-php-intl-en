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
 * Health check status of a forwarding rule
 *
 * @method string getLocationId() Obtain Forwarding rule ID
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID
 * @method string getDomain() Obtain Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Forwarding rule Url
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Forwarding rule Url
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTargets() Obtain Health status of the real server bound to this rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set Health status of the real server bound to this rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class RuleHealth extends AbstractModel
{
    /**
     * @var string Forwarding rule ID
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Forwarding rule Url
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var array Health status of the real server bound to this rule
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @param string $LocationId Forwarding rule ID
     * @param string $Domain Domain name of the forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Forwarding rule Url
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Targets Health status of the real server bound to this rule
Note: this field may return `null`, indicating that no valid values can be obtained.
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
                $obj = new TargetHealth();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
