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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyContentIdentifier request structure.
 *
 * @method string getContentId() Obtain Content identifier id.
 * @method void setContentId(string $ContentId) Set Content identifier id.
 * @method string getDescription() Obtain Content identifier description. length limit: 20 characters.
 * @method void setDescription(string $Description) Set Content identifier description. length limit: 20 characters.
 */
class ModifyContentIdentifierRequest extends AbstractModel
{
    /**
     * @var string Content identifier id.
     */
    public $ContentId;

    /**
     * @var string Content identifier description. length limit: 20 characters.
     */
    public $Description;

    /**
     * @param string $ContentId Content identifier id.
     * @param string $Description Content identifier description. length limit: 20 characters.
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
        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
