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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getResourceType() Obtain 
 * @method void setResourceType(string $ResourceType) Set 
 * @method string getActionType() Obtain 
 * @method void setActionType(string $ActionType) Set 
 * @method array getEventNames() Obtain 
 * @method void setEventNames(array $EventNames) Set 
 */
class ResourceField extends AbstractModel
{
    /**
     * @var string 
     */
    public $ResourceType;

    /**
     * @var string 
     */
    public $ActionType;

    /**
     * @var array 
     */
    public $EventNames;

    /**
     * @param string $ResourceType 
     * @param string $ActionType 
     * @param array $EventNames 
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }
    }
}
