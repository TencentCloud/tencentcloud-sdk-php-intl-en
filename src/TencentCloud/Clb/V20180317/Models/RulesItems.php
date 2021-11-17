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
 * Object bound to the layer-7 listener rule
 *
 * @method string getLocationId() Obtain Rule ID.
 * @method void setLocationId(string $LocationId) Set Rule ID.
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method string getUrl() Obtain Uri
 * @method void setUrl(string $Url) Set Uri
 * @method array getTargets() Obtain Object bound to the real server.
 * @method void setTargets(array $Targets) Set Object bound to the real server.
 */
class RulesItems extends AbstractModel
{
    /**
     * @var string Rule ID.
     */
    public $LocationId;

    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var string Uri
     */
    public $Url;

    /**
     * @var array Object bound to the real server.
     */
    public $Targets;

    /**
     * @param string $LocationId Rule ID.
     * @param string $Domain Domain name.
     * @param string $Url Uri
     * @param array $Targets Object bound to the real server.
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
                $obj = new LbRsTargets();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
