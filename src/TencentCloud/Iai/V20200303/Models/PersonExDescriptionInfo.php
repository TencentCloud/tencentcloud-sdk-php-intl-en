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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the person description field to be modified, key-value
 *
 * @method integer getPersonExDescriptionIndex() Obtain Person description field Index, starts from 0.
 * @method void setPersonExDescriptionIndex(integer $PersonExDescriptionIndex) Set Person description field Index, starts from 0.
 * @method string getPersonExDescription() Obtain Person description field content that needs to be updated.
 * @method void setPersonExDescription(string $PersonExDescription) Set Person description field content that needs to be updated.
 */
class PersonExDescriptionInfo extends AbstractModel
{
    /**
     * @var integer Person description field Index, starts from 0.
     */
    public $PersonExDescriptionIndex;

    /**
     * @var string Person description field content that needs to be updated.
     */
    public $PersonExDescription;

    /**
     * @param integer $PersonExDescriptionIndex Person description field Index, starts from 0.
     * @param string $PersonExDescription Person description field content that needs to be updated.
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
        if (array_key_exists("PersonExDescriptionIndex",$param) and $param["PersonExDescriptionIndex"] !== null) {
            $this->PersonExDescriptionIndex = $param["PersonExDescriptionIndex"];
        }

        if (array_key_exists("PersonExDescription",$param) and $param["PersonExDescription"] !== null) {
            $this->PersonExDescription = $param["PersonExDescription"];
        }
    }
}
