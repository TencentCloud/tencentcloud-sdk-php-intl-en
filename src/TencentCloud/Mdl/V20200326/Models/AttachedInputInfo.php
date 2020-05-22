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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media input associated with media channel.
 *
 * @method string getId() Obtain Media input ID.
 * @method void setId(string $Id) Set Media input ID.
 * @method array getAudioSelectors() Obtain Audio selector for media input. Quantity limit: [0,20]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioSelectors(array $AudioSelectors) Set Audio selector for media input. Quantity limit: [0,20]
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AttachedInputInfo extends AbstractModel
{
    /**
     * @var string Media input ID.
     */
    public $Id;

    /**
     * @var array Audio selector for media input. Quantity limit: [0,20]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioSelectors;

    /**
     * @param string $Id Media input ID.
     * @param array $AudioSelectors Audio selector for media input. Quantity limit: [0,20]
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AudioSelectors",$param) and $param["AudioSelectors"] !== null) {
            $this->AudioSelectors = [];
            foreach ($param["AudioSelectors"] as $key => $value){
                $obj = new AudioSelectorInfo();
                $obj->deserialize($value);
                array_push($this->AudioSelectors, $obj);
            }
        }
    }
}
