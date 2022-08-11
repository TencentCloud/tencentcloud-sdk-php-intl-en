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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEventBus request structure.
 *
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getDescription() Obtain Event bus description, which can contain up to 200 characters of any type.
 * @method void setDescription(string $Description) Set Event bus description, which can contain up to 200 characters of any type.
 * @method string getEventBusName() Obtain Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
 * @method void setEventBusName(string $EventBusName) Set Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
 */
class UpdateEventBusRequest extends AbstractModel
{
    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Event bus description, which can contain up to 200 characters of any type.
     */
    public $Description;

    /**
     * @var string Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
     */
    public $EventBusName;

    /**
     * @param string $EventBusId Event bus ID
     * @param string $Description Event bus description, which can contain up to 200 characters of any type.
     * @param string $EventBusName Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }
    }
}
