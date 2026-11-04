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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMsgRecordCategory request structure.
 *
 * @method string getName() Obtain <p>Category name</p>
 * @method void setName(string $Name) Set <p>Category name</p>
 * @method string getAppId() Obtain <p>App ID</p>
 * @method void setAppId(string $AppId) Set <p>App ID</p>
 * @method string getParentId() Obtain <p>Parent category business ID. 0 represents a first-level category (unclassified)</p>
 * @method void setParentId(string $ParentId) Set <p>Parent category business ID. 0 represents a first-level category (unclassified)</p>
 */
class CreateMsgRecordCategoryRequest extends AbstractModel
{
    /**
     * @var string <p>Category name</p>
     */
    public $Name;

    /**
     * @var string <p>App ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Parent category business ID. 0 represents a first-level category (unclassified)</p>
     */
    public $ParentId;

    /**
     * @param string $Name <p>Category name</p>
     * @param string $AppId <p>App ID</p>
     * @param string $ParentId <p>Parent category business ID. 0 represents a first-level category (unclassified)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
