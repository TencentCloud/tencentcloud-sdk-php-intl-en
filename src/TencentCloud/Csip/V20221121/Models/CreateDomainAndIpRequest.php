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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomainAndIp request structure.
 *
 * @method array getContent() Obtain Public IP/domain name
 * @method void setContent(array $Content) Set Public IP/domain name
 * @method array getTags() Obtain Asset tags
 * @method void setTags(array $Tags) Set Asset tags
 */
class CreateDomainAndIpRequest extends AbstractModel
{
    /**
     * @var array Public IP/domain name
     */
    public $Content;

    /**
     * @var array Asset tags
     */
    public $Tags;

    /**
     * @param array $Content Public IP/domain name
     * @param array $Tags Asset tags
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
