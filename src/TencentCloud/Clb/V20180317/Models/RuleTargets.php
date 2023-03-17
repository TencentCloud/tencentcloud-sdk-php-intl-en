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
 * Information of the real server bound to a forwarding rule under an HTTP/HTTPS listener
 *
 * @method string getLocationId() Obtain Forwarding rule ID
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID
 * @method string getDomain() Obtain Domain name of the forwarding rule
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule
 * @method string getUrl() Obtain Forwarding rule path.
 * @method void setUrl(string $Url) Set Forwarding rule path.
 * @method array getTargets() Obtain Real server information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set Real server information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFunctionTargets() Obtain Information about backend SCF functions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunctionTargets(array $FunctionTargets) Set Information about backend SCF functions.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var array Information about backend SCF functions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FunctionTargets;

    /**
     * @param string $LocationId Forwarding rule ID
     * @param string $Domain Domain name of the forwarding rule
     * @param string $Url Forwarding rule path.
     * @param array $Targets Real server information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FunctionTargets Information about backend SCF functions.
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

        if (array_key_exists("FunctionTargets",$param) and $param["FunctionTargets"] !== null) {
            $this->FunctionTargets = [];
            foreach ($param["FunctionTargets"] as $key => $value){
                $obj = new FunctionTarget();
                $obj->deserialize($value);
                array_push($this->FunctionTargets, $obj);
            }
        }
    }
}
